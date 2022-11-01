

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Code to Retrieve Data from MySQL Database and Display in html Table</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

/* Button used to open the contact form - fixed at the bottom of the page */
.open-button {
  background-color: #555;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 28px;
  width: 280px;
}

/* The popup form - hidden by default */
.form-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}

/* Full-width input fields */
.form-container input[type=text], .form-container input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

/* When the inputs get focus, do something */
.form-container input[type=text]:focus, .form-container input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/login button */
.form-container .btn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
th, td {
  padding: 8px;
  text-align: left;
  border-bottom: 1px solid #DDD;
}
.tb{
  background: #D6EEEE;
}

tr:hover {background-color: #D6EEEE;}


</style>
  </head>

<body style="background-image: url('images/search.jpg');" >

<div class="container mt-2">
    <div class="row">
        <div class="col-md-12">
            <div class="page-header">
                <h2 style="text-align: center;">Jobs for you</h2>
            </div>
            <table class="table">
              <thead>
                <tr class="tb">
                  <th scope="col">Company Name</th>
                  <th scope="col">Job Id</th>
                  <th scope="col">Job Name</th>
                  <th scope="col">Job Desciption</th>
                 
          
                </tr>
              </thead>
              <tbody>
            
  <?php
    include 'connection.php';
    $Salary=$_POST['salary'];
$District=$_POST['district'];
    $result=mysqli_query($dbCon,"select * from jobdata where Loc='".$District."' and Salary>='".$Salary."'"); 

?> 
             
                <?php if ($result->num_rows > 0): ?>
                <?php while($array=mysqli_fetch_row($result)): ?>
                <tr>
                    <th scope="row"><?php echo $array[0];?></th>
                    <td><?php echo $array[1];?></td>
                              <td><?php echo $array[2];?></td>
                    <td>Description:<?php echo $array[3];?><br>
                        Location:<?php echo $array[4];?><br>
                         Salary:<?php echo $array[5];?><br>
                        Working Hours:<?php echo $array[6];?></td>
                        <td><button class="open-button" onclick="openForm()">Apply</button>

<div class="form-popup" id="myForm">
  <form action="applyjob.php" post="post" class="form-container">
    

    <label for="txt"><b>Company id</b></label>
    <input type="text" placeholder="enter id" name="id" required>

    <label for="psw"><b>Job Name</b></label>
    <input type="text" placeholder="Enter username" name="uname" required>

    <button type="submit" class="btn">Apply</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form>
</div></td>
                </tr>
                <?php endwhile; ?>
                <?php else: ?>
                <tr>
                   <td colspan="3" rowspan="1" headers="">No Data Found</td>
                </tr>
                <?php endif; ?>
                <?php mysqli_free_result($result); ?>
              </tbody>
            </table>
        </div>
    </div>        
</div>
<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>
</body>
</html>