<?php
?>
		<html>
		<head>
		</head>
		<body>
			<form  action="register.php" method="POST" autocomplete="on"> 
                                			<h1> Create Course </h1> 
		         			<p> <label for="name" class="name" data-icon="u">Title</label>
             <input id="title" name="title" required="required" type="text" /></p>
                                			<p> <label for="name" class="name" data-icon="u">Description</label><br/>
	<textarea name="description" required="required" cols="50" rows="3">
				</textarea>
                                			<p> <label for="name" class="name" data-icon="u">Subject</label>
             <input id="subject" name="subject" required="required" type="text" /></p>
                                			<p> <label for="name" class="name" data-icon="u">Class Size</label>
             <input id="size" name="size" required="required" type="text" /></p>
                                			<p> <label for="name" class="name" data-icon="u">Start Date</label>
             <input id="startdate" name="startdate" required="required" type="text" /></p>
                                			<p> <label for="name" class="name" data-icon="u">End Date</label>
             <input id="enddate" name="enddate" required="required" type="text" /></p>
                                			<p> <label for="name" class="name" data-icon="u">Days in the week</label>
             <input id="daysinweek" name="daysinweek" type="text" /></p>
                                			<p> <label for="name" class="name" data-icon="u">Timings</label>
             <input id="time" name="time" type="text" /></p>
							
		<input type="submit" value="Create"/>
                            		</form>
		</body>
</html>
<?php
?>