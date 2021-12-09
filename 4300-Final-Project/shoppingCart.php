<?php

$dsn='mysql:host=localhost;dbname=concert_tickets_db';
$username='eliza';

$password='password';

try {
    $db=new PDO($dsn, $username,$password);

    $quantity = $_GET['quantity'];
   
    $quantity_div = "<p style='display: none' id='quantity-div'>".$quantity."</p>";
 
    $cartItem = $_GET['link'];
   
    $stmt = "SELECT * FROM Ticket WHERE ticketID = ". $cartItem .";";
    $statement2 = $db -> prepare($stmt);
    $statement2 -> execute();
    $event = $statement2 -> fetch();
    
    $eventName = $event['eventName'];
    $eventDate = $event['dateInfo'];
    $eventPrice = $event['price'];
    $eventDescrip = $event['description'];

    $url = "<a href='checkout.php?link=" . $cartItem . "&quantity=" . $quantity . "' class='button'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<div class='checkoutButttext'>Checkout</div></a>";

       
}
catch (PDOException  $e){
    $error=$e->getMessage();
    echo $error;
    exit();
}

?>

<!DOCTYPE html>
<html>
<head>

</head>
<body>
  
<div class="box">
<div class="image">
    <?php
            echo '<img src="localImages/' . $event['myImage'] . '" width="190" height="250">';
        ?>
</div>
<div class="text">
    <?php
        echo $eventName;
    ?>
    <div class="description">
    <?php
        echo $eventDescrip;
    ?>
    </div>
    <div class="date">
    
    <?php
        echo "Date of Event: " . $eventDate;
    ?>
    </div>

    <div class="quantity">
    <?php
        echo "Quantity: " . $quantity;
    ?>
    </div>
</div>

<div class="subtotalContain">
    <div class="total">

        <p>Total <p class="X"> <a href="emptyCart.php">X</a></p></p>
       
    </div>  

    <div class="subText">
        
    <?php
        echo "Sub-total &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;$ " . ($quantity * $eventPrice) . ".00"; 
    ?>

    <p> Services &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &#9432; </p>
    <p> Sales Tax &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &#9432;</p>
       
    </div>
    
    <div class="totalPrice">
    <?php
        echo "Total &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;$ " . (($quantity * $eventPrice) + 4.99);
    ?>

    </div>
    <?php
        echo $url;
    ?>
    </div> 


    </div>

    
</div>

</body>
</html>

<style>
body{
 background-color: #f0f0f0;        
}

.box {
display:flex;
min-height: 300px;
max-height: 600px;
width: 75%;
margin:auto;
background-color: #ffffff;
box-shadow: 5px 5px 5px rgb(155, 155, 155);
}

.subtotalContain {
border-left: 1px solid #919191;
min-height: 300px;
max-height: 600px;
width: 45%;
margin:auto;
background-color: #ffffff;

}
.X {
    margin-left: 75%;
    font-weight: normal;
    font-size: 17px;
    font-family: 'Helvetica', 'Arial', sans-serif;
    
}


.total {
    font-weight: bold;
    font-family: 'Helvetica', 'Arial', sans-serif;
    font-size: 24px;
    margin-left:20px;
    display:flex;

}
.subText {
    font-weight: bold;
    font-family: 'Helvetica', 'Arial', sans-serif;
    font-size: 18px;
    margin-left:20px;
    color: #4d4c4c;

}

.price {
    font-weight: bold;
    font-family: 'Helvetica', 'Arial', sans-serif;
    font-size: 18px;
    margin-left:60px;
    color: #4d4c4c;
}

.totalPrice {
    font-weight: bold;
    font-family: 'Helvetica', 'Arial', sans-serif;
    font-size: 18px;
    margin-left:20px;
    color: #4d4c4c;
}

img {
    width: 190px;
    height: 250px;
    
}

.image {
width: 190px;
height: 250px;
margin-left:30px;
margin-top:28px;
box-shadow: 5px 5px 5px rgb(155, 155, 155);
}

.text {
    
    padding-left: 35px;
    padding-top:28px;
    padding-bottom:0px;
    font-weight: bold;
    font-family: "Playfair";
    font-size: 30px;
    
   
}

.date {
    color: #212121;
    padding-left: 2px;
    padding-top: 20px;
    font-family: 'Helvetica', 'Arial', sans-serif;
    font-size: 18px;
    font-weight: normal;
}
.description {
    font-weight: lighter;
    font-family: 'Helvetica', 'Arial', sans-serif;
    font-size: 18px;
    color: #919191;
    padding-top: 25px;
}

.quantity {
    color: #212121;
    padding-left: 2px;
    padding-top: 25px;
    font-size: 18px;
    font-family: 'Helvetica', 'Arial', sans-serif;
    font-weight: normal;
}

.checkoutButttext {
    width: 100%;
    margin-left: 15px
}
.button {
  background-color: #02994b;
  font-size: 20px;
  color: white;
  
  padding-top: 15px;
  font-family: 'Helvetica', 'Arial', sans-serif;
  text-decoration:none;
  margin-left: 30%;
  margin-top: 20px;
  margin-right: 10px;
  margin-bottom: 10px;
  width: 68%;
  height: 40px;
  display:inline-flex;
  cursor: pointer;
  
}

</style>