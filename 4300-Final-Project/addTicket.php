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


<form action="checkAdd.php" method="POST">

  <p>Add Ticket</p>
 
  
  <input type="text" id="price" name="price" placeholder="Type price">

  <input type="text" id="quantity" name="quantity" placeholder="Type quantity">

  <input type="text" id="eventName" name="eventName" placeholder="Type event name">

  <input type="text" id="myImage" name="myImage" placeholder="Enter png file link">

  <input type="text" id="dateInfo" name="dateInfo" placeholder="Type date">

  <input type="text" id="description" name="description" placeholder="Description">


  <button type="submit" name="submit" class="button">Add</button>
</form>



</body>
</html>