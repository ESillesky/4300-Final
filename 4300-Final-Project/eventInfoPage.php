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

    $id = $_GET['link'];

    $stmt = "SELECT * FROM Ticket WHERE ticketID = ". $id .";";
    
    $statement2 = $db -> prepare($stmt);
    $statement2 -> execute();
    $event = $statement2 -> fetch();
    
    $eventName = $event['eventName'];
    $eventDate = $event['dateInfo'];
    $eventPrice = $event['price'];

?>

<!DOCTYPE html>
<html>
  
<head>
    <link rel="stylesheet" href="style.css">
</head>


<body>

<div class ="container">
  <div class="image">
        <?php
            echo '<img src="localImages/' . $event['myImage'] . '" width="300" height="450">';
        ?>
         <div class="infoByImage">
            <p> 
              <?php
                echo $eventName;
              ?>

            <p>   

            <p class="date">
                <?php
                    echo 'Date: ' . $eventDate;
                ?>
                </p>

                <p class="date">
                <?php
                    echo 'Price: $' . $eventPrice;
                ?>
                </p>

        </div>
    
        <label for="Quantity_ticket">Number of Tickets:</label>   
            <select name="quantity" id="quantity-field">
            <option value=1 selected>1</option>
            <option value=2>2</option>
            <option value=3>3</option>
            <option value=4>4</option>
    </select>   
    <input id="addToCart" type="button" value="Add To Cart" onclick= "addToCart();" />
  </div>
</div>
 
<script>

function addToCart(){
    var quantityField = document.getElementById('quantity-field');
    var quantity = quantityField.value;
    spge = '<?php echo $id ;?>';

// then

    window.location.href = "http://192.168.64.5/4300-Final-Project/shoppingCart.php?quantity="+quantity+"&link=" + spge;
}

    </script>
  

</body>
</html>

