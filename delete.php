<?php 

include 'connectdb.php';

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

$name_id = $_GET['id'];
try{
	$stmt = $conn->prepare('DELETE FROM user WHERE name_id = :id');
	$stmt->bindParam(':id', $name_id);
	$stmt->execute();
	header('Location: http://localhost/school/jaar%202/to-do-list/to-do-list/');
}catch(PDOException $e) {
	echo $e->getMessage();
}



 ?>