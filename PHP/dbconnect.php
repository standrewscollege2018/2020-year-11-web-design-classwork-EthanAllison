<?php
// The dbconnect.php file contains all the information
// that we need to connect to the database
// we use the mysqli_connect() fuction
//this has 4 parameters (Location, username, password, db name)
// we put this into a varible so we can use it anytime

$dbconnect = mysqli_connect("localhost", "root", "", "studentdb");




 ?>
