<?php

        $servername = "localhost";
        $username = "root";
        $password = "mysql"
        $myDB = "users";

        try {
            $conn = new PDO("mysql:host=$servername;dbname=$myDB", $username, $password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //echo "Connected successfully"; 
            }
        catch(PDOException $e)
            {
            echo "Connection failed: " . $e->getMessage();
            }

$user_id = $_GET['id'];

?>

<!DOCTYPE html>
 <html>
 <head>
    <link rel="stylesheet" href="CSS/style_user.css">
     <title>
         formulier
     </title>
 </head>

 <body>
 
 </body>
 </html>