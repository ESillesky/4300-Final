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

    unset($_SESSION['username']);
    unset($_SESSION['password']);
    session_destroy();
    header("location: login.php");
?>