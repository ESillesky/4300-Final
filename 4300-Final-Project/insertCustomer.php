<?php
session_start();
$dsn='mysql:host=localhost;dbname=concert_tickets_db';
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

     
  if(isset($_POST['Submit1'])) {
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phoneNumber = $_POST['phoneNumber'];
    
    
  
    
    #$query2="INSERT INTO customers (firstName) VALUES ('$firstName');";
    $query2= "INSERT INTO customers (password, firstName, lastName, email, phoneNumber) VALUES (:password, :firstName, :lastName, :email, :phoneNumber)";
    
    $statement = $db -> prepare($query2);
    $statement -> execute([
      ':password' => $password,
      ':firstName' => $firstName,
      ':lastName' => $lastName,
      ':email' => $email,
      ':phoneNumber' => $phoneNumber, 
      
    ]);



$statement -> closeCursor();
     
  header("location:home.php");
  
    
  

  }



?>
