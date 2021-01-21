<?php

$name = $_POST['name'];
$password = $_POST['pass'];
 if(($name=="Gangadhar Immadi")and($password=="gangadhar"))     {
             header("Refresh:2; url=downloads.php");
            echo '<h4><center> Login successful </center></h4>';
         }

        else{
            header('Refresh:2;url=faculty_login.html');
             echo '<h4><center> Login unsuccessful </center></h4>';
        }
?>
