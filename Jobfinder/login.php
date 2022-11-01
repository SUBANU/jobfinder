
<html>
<head>
<title>Login</title>
</head>
<body>

<?php

session_start();
$con =mysqli_connect('localhost','root','');
mysqli_select_db($con,'jobfinder');
$name=$_POST['Lusername']; 
$pass=$_POST['Lpassword'];
$s =" select * from emp where User_Name='".$name."' and Password= '".$pass."' ";

$result = mysqli_query($con,$s);
$num =mysqli_num_rows($result);
if($num==1){
    header('location:result.html');
}
else{
    header('location:login.html');

}



?>

</body>
</html>
