<?php

$dsn='mysql:host=localhost;dbname=concert_tickets_db';
$username='eliza';
$password='password';

try {
    $db=new PDO($dsn, $username,$password);
}
catch (PDOException  $e)
    {
        $error=$e->getMessage();
        echo  '<p> Whoops! Unable to connect to the database :( : '.$error;
        exit();
    }

    $query = $_GET['query'];
    

    $stmt = "SELECT * FROM Ticket WHERE eventName LIKE '%".$query."%'";
    $statement2 = $db -> prepare($stmt);
    $statement2 -> execute();
    $searches = $statement2 -> fetchAll();

    $table = '<tr>';

    
    foreach ($searches as $index=>$search) {

      if($index % 4 == 0 && $index != 0){
        $table = $table . "</tr>";
      }
      if($index % 4 == 0 && $index != 0 && $index != count($searches)-1){
        $table = $table . "<tr>";
      }

      $table = $table . '<td>';
      
      
      
      $table = $table . '<a href="searchedEvents.php?link='.$search['ticketID'].'"> <img src="localImages/' . $search['myImage'] . '" width="300" height="450">';
      $table = $table . '</a>';
      $table = $table . '<figcaption>' . $search['eventName'] . '</figcaption>';

      $table = $table . '<td>';
    }


?>

<!DOCTYPE html>
<html>
  
<head>
<link rel="stylesheet" href="imageTable.css">
    </head>

<body>



<table class = "center">
  <?php echo $table;?>
</table>
    
</body>
</html>





