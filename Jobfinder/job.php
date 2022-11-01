
<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
</head>

<body>
	<center>
		<?php

		$conn = mysqli_connect("localhost", "root", "", "jobfinder");
		
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
	
$Name=$_POST['name'];
$Qualification=$_POST['qualification'];
$Salary=$_POST['salary'];
$State=$_POST['state'];
$District=$_POST['district'];
$Dob=$_POST['dob'];
		
		
		$sql = "INSERT INTO jobs VALUES ('$Name','$Qualification','$Salary','$State','$District','$Dob')";

		if(mysqli_query($conn, $sql)){
			echo "<h3>data stored in a database successfully."
				. " Please browse your localhost php my admin"
				. " to view the updated data</h3>";
			header('location: search.php');
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		mysqli_close($conn);
		?>
		
	</center>
</body>

</html>
