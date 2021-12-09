<?php
session_start();
$dsn='mysql:host=localhost;dbname=concert_tickets_db';
$username='eliza';
$password='password';

    try {
    echo 'Attempting Connection';
    $db=new PDO($dsn, $username,$password);
    echo 'Connected successfully';
    } catch (PDOException  $e)
    {
        $error=$e->getMessage();
        echo  '<p> Unable to connec to the database: '.$error;
        exit();
     }

     $currUserName = $_SESSION['username'];
     $currPassword = $_SESSION['password'];

     if(isset($_POST['update1'])) {
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $email = $_POST['email'];
        $phoneNumber = $_POST['phoneNumber'];

     try {
        $query = "UPDATE customers SET firstName = :firstName, lastName = :lastName, email = :email, phoneNumber = :phoneNumber WHERE firstName = '$currUserName' AND password = '$currPassword'";
        $statement = $db->prepare($query);
        $statement->execute([
            ':firstName' => $firstName,
            ':lastName' => $lastName,
            ':email' => $email,
            ':phoneNumber' => $phoneNumber
        ]);
        echo "Works";
     } catch (PDOException $error) {
        echo $query . "<br>" . $error->getMessage();
        echo $_SESSION['username'];
        echo $_SESSION['password'];
        echo $firstName;
        echo $lastName;
        echo $email;
        echo $phoneNumber;
        echo ':firstName';
     }
     $statement -> closeCursor();
    }
    ?>
