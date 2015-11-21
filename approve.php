<?php 

    
 
    if (isset($_GET["id"]) && $_GET["id"] != ""){
 
         
        #Setup variables
 
        $ID = $_GET["id"];
	$con = mysqli_connect("localhost","root","", "openlearning");
 
         
        #Check connection
 
        if (mysqli_connect_errno()) {
 
            echo 'Database connection error: ' . mysqli_connect_error();
 
            exit();
 
        }       
        
 
        $userdetails = mysqli_query($con, "SELECT * FROM instructorbuffer WHERE id = '$ID'");
					while($Result = mysqli_fetch_row($userdetails))
					{
						$id = $Result[0];
						$firstname = $Result[1];
						$middlename = $Result[2];
						$lastname = $Result[3];
						$gender = $Result[4];
						$dob = $Result[5];
					}
    	$sql1 = "INSERT INTO instructorinfo (id, firstname, middlename, lastname, gender, dob) VALUES ('$id', '$firstname', '$middlename', '$lastname', '$gender', '$dob')";
	 				$sql2 = "DELETE FROM instructorbuffer WHERE id = '$id'";
		if (mysqli_query($con, $sql1)&&mysqli_query($con,$sql2)){
					echo 
  		"<script type=\"text/javascript\">".
  		"window.alert('Successfully approved.');".
  		"top.location = 'http://localhost/OpenLearning/admindashboard.html';".
  		"</script>";
					 } 
					
}        
        
else{
 
        echo "Could not complete query. Missing parameter";
  
    } 
?>