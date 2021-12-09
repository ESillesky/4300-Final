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

?>

<!DOCTYPE html>
<html>

<body>

<div class="header">
  <h1>Login</h1>
</div>


<form action="checkDelete.php" method="POST">

  <p>Delete Ticket</p>
 
  <input type="text" id="ticketID" name="ticketID" placeholder="Type ticketID">

  <button type="submit" name="submit" class="button">Delete</button>
</form>



</body>
</html>