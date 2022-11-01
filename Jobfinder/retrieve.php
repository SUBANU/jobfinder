

 <?php
                include 'connection.php';
                include 'job.php';
                $query = "SELECT * FROM jobdata ;
                $result=mysqli_query($dbCon,$query);
                ?>  