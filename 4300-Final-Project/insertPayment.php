<?php
session_start();
$dsn='mysql:host=localhost;dbname=concert_tickets_db';
$username='eliza';
$password='password';

try {
    
    $db=new PDO($dsn, $username,$password);
    

    $username = $_SESSION["username"];
    $password = $_SESSION["password"];
    
    
   
  if(isset($_POST['checkout'])) {

    $query1 = "SELECT customerID FROM customers WHERE firstname = :username AND password = :password ";


    $statement2 = $db -> prepare($query1);
    $statement2 -> bindValue(':username', $username);
    $statement2 -> bindValue(':password', $password);
    $statement2 -> execute();

    $customer = $statement2 -> fetch();
    
    
    

    $cardNumber = $_POST['cardNumber'];
    $expMonth = $_POST['expMonth'];
    $expYear = $_POST['expYear'];
    $cvv = $_POST['cvv'];
    $customerID = $customer['customerID'];
    $nameOnCard = $_POST['nameOnCard'];
    
    #$query2="INSERT INTO customers (firstName) VALUES ('$firstName');";
    $query4= "INSERT INTO payments (cardNumber, expMonth, expYear, cvv, customerID, nameOnCard) VALUES (:cardNumber, :expMonth, :expYear, :cvv, :customerID, :nameOnCard)";
    
    $statement = $db -> prepare($query4);
    $statement -> execute([
      ':cardNumber' => $cardNumber,
      ':expMonth' => $expMonth,
      ':expYear' => $expYear,
      ':cvv' => $cvv,
      ':customerID' => $customerID,
      ':nameOnCard' => $nameOnCard
    ]);



$statement -> closeCursor();
     
header("location:checkoutConfirmation.php?custID=" . $customerID);  

  }

    }
    catch (PDOException  $e)
    {
        $error=$e->getMessage();
        echo  '<p> Unable to connec to the database: '.$error;
        exit();
     }

  


?>