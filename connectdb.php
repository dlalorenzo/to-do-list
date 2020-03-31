<?php 
$servername = "localhost";
$username = "root";
$password = "mysql";

header('content-type: text/html charset=iso-8859-1');

try {
    $conn = new PDO("mysql:host=$servername;dbname=Planningstool", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Connected successfully"; 
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }

 ?>