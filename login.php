<?php 

    
 
    if (isset($_POST["username"]) && $_POST["username"] != ""){
 
         
        #Setup variables
 
        $Username = $_POST["username"];
	 $Password = $_POST["password"];
 
         
        #Connect to Database
 
        $con = mysqli_connect("localhost","root","", "openlearning");
 
         
        #Check connection
 
        if (mysqli_connect_errno()) {
 
            echo 'Database connection error: ' . mysqli_connect_error();
 
            exit();
 
        }
 
         
         
        
 
        $userdetails = mysqli_query($con, "SELECT * FROM login WHERE id = '$Username'");
 

        #If no data was returned, check for any SQL errors
 
        if (!$userdetails) {
 
            echo 'Could not run query: ' . mysqli_error($con);
 
            exit;
 
        }
 

        #Get the first row of the results
 
        $row = mysqli_fetch_row($userdetails);
 

        if($Username==$row[0]&&$Password==$row[1]){
		$role = $Username[0];
		if($role=='s'){
			$pagename= 'studentdashboard.html';
		}
		else if($role=='i'){
			$pagename= 'instructordashboard.html';
		}
		else{
			$pagename= 'admindashboard.html';
		}
		echo 
  		"<script type=\"text/javascript\">".
  		"top.location = 'http://localhost/OpenLearning/$pagename';".
  		"</script>";
	 }
	 else{
		echo 
  		"<script type=\"text/javascript\">".
  		"window.alert('Invalid Credentials.');".
  		"top.location = 'http://localhost/OpenLearning/login.html';".
  		"</script>";
	}
  
    }
else{
 
        echo "Could not complete query. Missing parameter";
  
    } 