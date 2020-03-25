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

            $sql = 'SELECT * from user';
            $query = $conn->prepare($sql);
            $query->execute();

            $result = $query->fetchAll();
            //var_dump($result)

            //foreach ($result as $row) {
                //echo $row['name'] . " - " . $row['age']. " - " .$row['city'] . "<br>";
            //}
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
    <div>
    <table>
         <tr>
             <th>ID</th>
             <th>Name</th>
             <th>Age</th>
             <th>City</th>
             <th>Transport</th>
             <th>bewerken</th>
             <th>verwijderen</th>
         </tr>
     <?php 
     foreach ($result as $row) {
     ?>
         <tr>
             <td><?php echo $row['user_id'] ?></td>
             <td><?php echo $row['name'] ?></td>
             <td><?php echo $row['age'] ?></td>
             <td><?php echo $row['city'] ?></td>
             <td><?php echo $row['transport'] ?></td>
             <td><a href="edit.php?id=<?php echo $row["user_id"];?>">edit</a></td>
             <td><a href="delete.php?id=<?php echo $row["user_id"];?>">delete</a></td>
         </tr>
     </div>
         <?php
     }
     ?>

     </table>
 </body>
 </html>

 