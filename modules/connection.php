<?php
$servername = "localhost"; 
$username="root";
$password = ""; 
$dbname = 'databases'; 
 $conn = new mysqli($servername, $username, $password, $dbname);
 if($conn-> connect_error){
 	die("lỗi". $conn-> connect_error);
 }
 