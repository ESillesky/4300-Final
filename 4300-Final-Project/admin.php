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

echo $_SESSION["username"];

?>

<!DOCTYPE html>
<html>

<body>
    <p>Admin page</p>
    <p><a href ="logout.php">Logout</a></p>
    <p><a href ="addTicket.php">Add Event</a></p>
    <p><a href ="deleteTicket.php">Delete Event</a></p>

</body>
</html>