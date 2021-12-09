<?php
session_start();
$dsn='mysql:host=localhost;dbname=concert_tickets_db';
$username='eliza';
$password='password';
    try {
        echo 'Attempting Connection';
        $db=new PDO($dsn, $username,$password);
        echo 'Connected successfully';
        } catch (PDOException  $e) {
            $error=$e->getMessage();
            echo  '<p> Unable to connec to the database: '.$error;
            exit();
        }

        if(isset($_POST['submit'])) {
            $ticketID = $_POST['ticketID'];
        }

        $query2= "DELETE FROM Ticket WHERE ticketID = :ticketID";

        $statement = $db -> prepare($query2);
        $statement -> execute([
            ':ticketID' => $ticketID,
        ]);
        header("location:admin.php");
?>