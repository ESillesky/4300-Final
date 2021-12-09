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

    # get list of band names, prices, and ticket quantities
    $stmt = 'SELECT * FROM Ticket order by myImage';
    $statement2 = $db -> prepare($stmt);
    $statement2 -> execute();
    $tickets = $statement2 -> fetchAll();

    $table = '<tr>';

    
    foreach ($tickets as $index=>$ticket) {

      if($index % 4 == 0 && $index != 0){
        $table = $table . "</tr>";
      }
      if($index % 4 == 0 && $index != 0 && $index != count($tickets)-1){
        $table = $table . "<tr>";
      }

      $table = $table . '<td>';
      
      
      
      $table = $table . '<a href="eventInfoPage.php?link='.$ticket['ticketID'].'"> <img src="localImages/' . $ticket['myImage'] . '" width="300" height="450">';
      $table = $table . '</a>';
      $table = $table . '<figcaption>' . $ticket['eventName'] . '</figcaption>';

      
      $table = $table . '<td>';
    }


?>

<!DOCTYPE html>
<html>
  
<head>
<link rel="stylesheet" href="imageTable.css">
    </head>

<body>

<!-- SEARCH BAR CODE -->
<form action="Search.php" method="GET">
	<input type="text" name="query" />
	<input type="submit" value="Search" />
</form>

<table class = "center">
  <?php echo $table;?>
</table>
    
</body>
</html>
