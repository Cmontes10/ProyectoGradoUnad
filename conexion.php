<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "clem";

// Create a connection
try {
    $conn = new mysqli($servername, $username, $password, $dbname);
   // echo 'Conectado a '.$servername;
   
   
   } catch (PDOException $e) {
       print "¡Error!: " . $e->getMessage() . "<br/>";
       die();
   }