<?php 

    
 
    if (isset($_POST["firstname"]) && $_POST["firstname"] != ""){
 
         
        #Setup variables
 
        $Firstname = $_POST["firstname"];
	 $Middlename = $_POST["middlename"];
	 $Lastname = $_POST["lastname"];
	 $Role = $_POST["role"];
	 $Gender = $_POST["gender"];
	 $Month = $_POST["month"];
	 $Date = $_POST["date"];
	 $Year = $_POST["year"];
	 $Password1 = $_POST["password1"];
	 $Password2 = $_POST["password2"];
	 
 
         
        
 
        $con = mysqli_connect("localhost","root","", "openlearning");
 
         
        
 
        if (mysqli_connect_errno()) {
 
            echo 'Database connection error: ' . mysqli_connect_error();
 
            exit();
 
        }
	 
	 if($Role=='student'){
	 	$idkey1 = "s";
		$tablename = "studentinfo";
	 }
	 elseif($Role=='instructor'){
		$idkey1 = "i";
		$tablename = "instructorbuffer";
	 }
	 else
	 {
		$idkey1 = "a";
		$tablename = "admininfo";
	 }
	
	 $idkey2 = strtolower($Firstname[0]);
 
	 if(strlen($Lastname)>10){
	 	$idkey3 = strtolower(substr($Lastname,0,10));
	 }
	 else{
	 	$idkey3 = strtolower($Lastname);
	 }

	 $idkey4 = rand(10,99);
	 $Id = $idkey1."-".$idkey2.$idkey3.$idkey4;
	 $Dob = $Year."-".$Month."-".$Date;

	 
	 $sql1 = "INSERT INTO ".$tablename." (id, firstname, middlename, lastname, gender, dob) VALUES ('$Id', '$Firstname', '$Middlename', '$Lastname', '$Gender', '$Dob')";
	 $sql2 = "INSERT INTO login (id, password) VALUES ('$Id', '$Password1')";
	 
	 if($Password1==$Password2){
		$number    = preg_match('#[0-9]#', $Password1); 
		$length    = strlen($Password1) >= 6;

		if(!$number || !$length) {
  			echo 
  			"<script type=\"text/javascript\">".
  			"window.alert('Password is not valid. Password should have at least 6 characters with at least 1 digit');".
  			"top.location = 'http://localhost/OpenLearning/login.html#toregister';".
  			"</script>";
		}
		else{
		 if (mysqli_query($con, $sql1)&&mysqli_query($con,$sql2)) {
   			
			if($Role=='instructor')
			{
				echo 
  			"<script type=\"text/javascript\">".
  			"window.alert('Successfully Registered... your generated username is $Id... you have to be approved by admin.');".
  			"top.location = 'http://localhost/OpenLearning/login.html';".
  			"</script>";
			}
			else{
				echo 
  			"<script type=\"text/javascript\">".
  			"window.alert('Successfully Registered.. your generated username is $Id');".
  			"top.location = 'http://localhost/OpenLearning/login.html';".
  			"</script>";
			}
	 	 }
		 else {
    			echo "Error: " . $sql . "<br>" . mysqli_error($con);
	 	 }}
	}
	else{
		echo 
  		"<script type=\"text/javascript\">".
  		"window.alert('Password is not matched.');".
  		"top.location = 'http://localhost/OpenLearning/login.html#toregister';".
  		"</script>";
	}
	mysqli_close($con);
  
    }else{ 

        echo "Could not complete query. Missing parameter";
  
    } 