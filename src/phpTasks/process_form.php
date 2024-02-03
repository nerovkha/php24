<?php 
include 'header.php'; 

$firstname = htmlspecialchars($_POST["firstname"]);
$lastname = htmlspecialchars($_POST["lastname"]);

        // Display the greeting
        echo "<h3>Hello $firstname $lastname, You are welcome to my site.</h3>";

include 'footer.php'


?>