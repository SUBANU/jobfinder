<?php

		$conn = mysqli_connect("localhost", "root", "", "jobfinder");
		
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
	
		$id=$_POST['id'];
$uname=$_POST['uname'];
		$sql = "INSERT INTO applyjob VALUES ('$id','$uname')";
	
		if(mysqli_query($conn, $sql)){
			echo "<h3>data stored in a database successfully."
				. " Please browse your localhost php my admin"
				. " to view the updated data</h3>";

	
			header('location: apply.html');
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		mysqli_close($conn);
		?>