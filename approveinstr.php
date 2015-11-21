<?php
$con = mysqli_connect("localhost","root","", "openlearning");
 
         
        
 
        if (mysqli_connect_errno()) {
 
            echo 'Database connection error: ' . mysqli_connect_error();
 
            exit();
 
        }
?>
		<html>
		<head>
			<script type="text/javascript">
			function approve(id){
				var r = confirm("Approve "+id+" as Instructor?");
				if (r == true) {
					window.location = 'approve.php?id='+id;
				}  
			}
			</script>
		</head>
		<body>

		<?php
			$userdetails = mysqli_query($con, "SELECT * FROM instructorbuffer");
 
        		$numrows =  mysqli_num_rows($userdetails);
			if($numrows==0){?>
				<h3>There are no instructors to be approved.</h3>
			<?php
			}
			else{
				?><h3>Instructors to be approved</h3> <?php
				while($Result = mysqli_fetch_row($userdetails))
				{
					$id = $Result[0];
					$firstname = $Result[1];
					$middlename = $Result[2];
					$lastname = $Result[3];
					$gender = $Result[4];
					$dob = $Result[5]; ?>
					<p><a href="#" onclick="approve('<?php echo $id; ?>')"><?php echo $firstname;?></a></p> <?php
				}

			}
			?>

			
 
        	
			
		</body>
</html>
<?php
?>