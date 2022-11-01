<?php

		$conn = mysqli_connect("localhost", "root", "", "jobfinder");
		
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
	
		$Company_Name=$_POST['cname'];
$id=$_POST['id'];
$Job_Name=$_POST['jname'];
$Loc=$_POST['location'];
$Salary=$_POST['salar'];
$Working_hrs=$_POST['working_hrs'];
$Description=$_POST['description'];
		$sql = "INSERT INTO jobdata VALUES ('$Company_Name','$id','$Job_Name','$Description','$Loc','$Salary','$Working_hrs')";
	
		if(mysqli_query($conn, $sql)){
			echo "<h3>data stored in a database successfully."
				. " Please browse your localhost php my admin"
				. " to view the updated data</h3>";

	
			header('location: post.html');
            echo "<h3>data stored in a database successfully."
				. " Please browse your localhost php my admin"
				. " to view the updated data</h3>";
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		mysqli_close($conn);
		?>