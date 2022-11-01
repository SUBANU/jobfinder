
<html>
<head>
<title>Login</title>
</head>
<body>



<?php

session_start();
$con =mysqli_connect('localhost','root','');
mysqli_select_db($con,'jobfinder');
$name=$_POST['Husername']; 
$pass=$_POST['Hpassword'];
$s =" select * from hier_form where User_Name='".$name."' && Password= '".$pass."' ";
$result = mysqli_query($con,$s);
$num =mysqli_num_rows($result);
if($num==1){
    header('location:index.html');
}
else{
    header('location:Hierer/index.html');

}



?>

</body>
</html>
