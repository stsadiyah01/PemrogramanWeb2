<?php
    $host = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'db_sekolah';

   $conn =  mysqli_connect($host,$username,$password,$database);
   if($conn){
   }

   mysqli_select_db($conn, $database);
?>