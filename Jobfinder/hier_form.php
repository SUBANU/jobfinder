
<!DOCTYPE html>
<html>

<head>
	<title>hier</title>
</head>

<body>
	<center>
		<?php

		$conn = mysqli_connect("localhost", "root", "", "jobfinder");
		
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
	
		$name=$_POST['hname'];
$user_Name=$_POST['username'];
$email=$_POST['hemail'];
$phone_No=$_POST['hphone'];
$password=$_POST['hpassword1'];
$Cname=$_POST['cname'];
$location=$_POST['hlocation'];
		
		
		$sql = "INSERT INTO hier_form VALUES ('$name','$user_Name','$email','$phone_No','$password','$Cname','$location')";
	
		if(mysqli_query($conn, $sql)){
			echo "<h3>data stored in a database successfully."
				. " Please browse your localhost php my admin"
				. " to view the updated data</h3>";

	
			header('location: login.html');
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		mysqli_close($conn);
		?>
		
	</center>
</body>

</html>
