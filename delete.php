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
try{
	$stmt = $conn->prepare('DELETE FROM user WHERE user_id = :id');
	$stmt->bindParam(':id', $user_id);
	$stmt->execute();
	header('Location: http://localhost/blok3/reparatie_oefenen/database_users/users.php');
}catch(PDOException $e) {
	echo $e->getMessage();
}



 ?>