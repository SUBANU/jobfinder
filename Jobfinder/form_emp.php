
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
		
	
		$Name=$_POST['Name'];
$User_Name=$_POST['User_Name'];
$Password=$_POST['Password'];
$Confirm_Password=$_POST['Confirm_Password'];
$Gender=$_POST['Gender'];
$Email=$_POST['Email'];
$Phone_No=$_POST['Phone_No'];
$Education=$_POST['Education'];
$Location=$_POST['Location'];
$DOB=$_POST['DOB'];
		
		
		$sql = "INSERT INTO emp VALUES ('$Name','$User_Name','$Password','$Gender','$Email','$Phone_No','$Education','$Location','$DOB')";
	
		if(mysqli_query($conn, $sql)){
			echo "<h3>data stored in a database successfully."
				. " Please browse your localhost php my admin"
				. " to view the updated data</h3>";

			echo nl2br("\n$Name\n$User_Name\n$Password\n$Confirm_Password\n$Gender\n$Email\n$Phone_No\n$Education\n$Location\n$DOB");
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
