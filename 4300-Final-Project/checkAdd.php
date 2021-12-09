<?php
session_start();
$dsn='mysql:host=localhost;dbname=concert_tickets_db';
$username='eliza';

$password='password';
    try {
        
        $db=new PDO($dsn, $username,$password);
       
        if(isset($_POST['submit'])) {
            
            $price = $_POST['price'];
            $quantity = $_POST['quantity'];
            $eventName = $_POST['eventName'];
            $myImage = $_POST['myImage'];
            $dateInfo = $_POST['dateInfo'];
            $description = $_POST['description'];
        }

        $query2= "INSERT INTO Ticket (price, quantity, eventName, myImage, dateInfo, description) VALUES (:price, :quantity, :eventName, :myImage, :dateInfo, :description)";

        $statement = $db -> prepare($query2);
        $statement -> execute([
            
            ':price' => $price,
            ':quantity' => $quantity,
            ':eventName' => $eventName,
            ':myImage' => $myImage,
            ':dateInfo' => $dateInfo,
            ':description' => $description
    ]);
        } catch (PDOException  $e) {
            $error=$e->getMessage();
            echo  '<p> Unable to connec to the database: '.$error;
            exit();
        }

        header("location:admin.php");
?>