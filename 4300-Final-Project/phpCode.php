<?php

$dsn='mysql:host=localhost;dbname=myConnection';
$username='eliza';
$password='password';

try {
    echo 'Attempting Connection';
    $db=new PDO($dsn, $username,$password);
    echo 'Connected successfully';
    }
    catch (PDOException  $e)
    {
        $error=$e->getMessage();
        echo  '<p> Unable to connec to the database: '.$error;
        exit();
     }
?>

