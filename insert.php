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

	$stmt = $conn->prepare("INSERT INTO user (name, age, city, transport) 
	VALUES (:name, :age, :city, :transport )");
	$stmt->bindparam(':name', $name);
	$stmt->bindparam(':age', $age);
	$stmt->bindparam(':city', $city);
	$stmt->bindparam(':transport', $transport);

	$name = $_POST['voornaam'];
	$age = $_POST['age'];
	$city = $_POST['stad'];
	$transport = $_POST['vervoer'];

    $stmt->execute();

	header('location: users.php');

	$conn = null;

?>