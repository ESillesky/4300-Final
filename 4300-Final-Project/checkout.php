<?php
session_start();
$dsn='mysql:host=localhost;dbname=concert_tickets_db';
$username='eliza';

$password='password';

try {
    $db=new PDO($dsn, $username,$password);

    $username = $_SESSION["username"];
    $password = $_SESSION["password"];
    
    
    
    $quantity = $_GET['quantity'];
    $cartItem = $_GET['link'];
    
    $stmt = "SELECT * FROM Ticket WHERE ticketID = ". $cartItem .";";
    $statement2 = $db -> prepare($stmt);
    $statement2 -> execute();
    $event = $statement2 -> fetch();
    
    $eventName = $event['eventName'];
    $eventDate = $event['dateInfo'];
    $eventPrice = $event['price'];
    $eventDescrip = $event['description'];
    $url = "<a href='shoppingCart.php?link=" . $cartItem . "&quantity=" . $quantity;
}
catch (PDOException  $e){
    $error=$e->getMessage();
    echo $error;
    exit();
}
?>

<!DOCTYPE html>
<html>

<body>
  <div class="mainCont">
    <div>
      <div class="headContainer">
        <div class="header">
          <h1>Checkout</h1>
        </div>
      </div>

      <form class="container" action="insertPayment.php" method="POST">
      
          <p class="billingInfo"> Payment Info</p>

        <input type="name" id="nameOnCard" name="nameOnCard" placeholder="Name">
        <input type="card" id="cardNumber" name="cardNumber" placeholder="Card Number">

        <table>
          <tr>
          <th><input type="month" id="expMonth" name="expMonth" placeholder="Expiration Month"></th>
          <th><input type="year" id="expYear" name="expYear" placeholder="Expiration Year"></th>
          <th><input type="text" id="cvv" name="cvv" placeholder="CVV"></th>
          
          </tr>
          
        </table>

        <button type="checkout" onclick= "location.href='checkoutConfirmation.php'" name="checkout" class="button">Place Order</button>
        
      </form>
    </div>
    <div class="imageCont">
      <div class="number">
      
        <?php
          if ($quantity == 1) {
            echo $quantity . " Item";
          } else {
            echo $quantity . " Items";
          }
          
        ?>
           
        <a href="shoppingCart.php?link=<?php echo $cartItem?>&quantity=<?php echo $quantity?>">Edit</a>
      
      </div>
      
      <div class="imageBox">
        <div class="image">
      
        <?php
          echo '<img src="localImages/' . $event['myImage'] . '" width="100" height="130">';
        ?>
        </div>

      </div>

      <div class="subTotal">
      <?php
        echo "Sub-total &nbsp; &nbsp; &nbsp; &nbsp;$ " . ($quantity * $eventPrice) . ".00"; 
    ?>
      </div>

      <div class="totalPay">
      <?php
        echo "Total Pay &nbsp; &nbsp;$ " . ($quantity * $eventPrice)+4.99; 
    ?>
      </div>

    </div>

</body>

<head>
<script>

function checkout(quantity){
  var quantityField = document.getElementById('quantity-div');
  var quantity = parseInt(quantityField.innerHTML);
  console.log(quantity);

}

</script>
<style>
  body {
    background-color: #f0f0f0;     
  }

table {
    border-collapse: collapse;
  }

.mainCont {

    margin-top:50px;
    display:flex;
    align-items: center;
    justify-content: center;
    
}

.subTotal {
    margin-top: 35px;
    margin-left: 30px;
    font-family: 'Helvetica', 'Arial', sans-serif;
    font-size: 16px;
    color: #4d4c4c; 
}

.totalPay {
    font-weight: bold;
    margin-top: 25px;
    margin-left: 20px;
    font-family: 'Helvetica', 'Arial', sans-serif;
    font-size: 20px;
    color: #4d4c4c;
    
}

.imageBox {
border-top: 1px solid #ededed;
border-bottom: 1px solid #d4d4d4;
margin-top: 20px;
height: 175px;
width: 230px;
background-color: #ffffff;

}
.image {
  margin-left: 65px;
  margin-top: 20px;
}

.imageCont {
margin-left: 30px;
height: 400px;
width: 230px;
background-color: #ffffff;
box-shadow: 5px 5px 5px rgb(155, 155, 155);
}

.headContainer {
display:flex;
height: 100px;
width: 900px;
margin:auto;
background-color: #ffffff;
box-shadow: 5px 5px 5px rgb(155, 155, 155);
margin-bottom: 10px;
}  

.header {
  font-family: 'Helvetica', 'Arial', sans-serif;
  text-align: center;
  color: black;
  font-size: 20px;
  margin-left: 39%;
  
}

.container {
  
  font-family: 'Helvetica', 'Arial', sans-serif;
  margin: 0 auto;
  max-width: 900px;
  height: 400px;
  padding: 16px;
  background-color: white;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);

}

.checkbox {
  margin-left: 100px;
}

.checkoutInfo {
  
  display: inline-flex;
  max-width: 200px;
  height: 200px;
  padding: 16px;
  background-color: white;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);

}

.billingInfo {
  font-family: 'Helvetica', 'Arial', sans-serif;
  text-align: center;
  font-size: 30px;
}

a:link {
  float:right;
  margin-left: 60%;
  font-size: 15px;
  font-family: 'Helvetica', 'Arial', sans-serif;
  font-weight: normal;
  text-decoration: none;
  color: #4d4c4c;
}

a:visited {
  color: #4d4c4c;
  background-color: transparent;
  text-decoration: none;
}

a:hover {
  color: #4d4c4c;
  background-color: transparent;
  text-decoration: underline;
}

input[type=card] {
  border: 1px solid #555;
  height: 40px;
  width: 600px;
  padding: 16px 20px;
  display: block;
  margin: 0 auto;
  margin-top: 20px;
  margin-bottom: 2px;
  box-sizing: border-box;
  box-shadow: .5px .5px;

}

input[type=name] {
  border: 1px solid #555;
  height: 40px;
  width: 600px;
  padding: 16px 20px;
  display: block;
  margin: 0 auto;
  margin-top: 20px;
  margin-bottom: 2px;
  box-sizing: border-box;
  box-shadow: .5px .5px;

}

input[type=month] {
  border: 1px solid #555;
  height: 40px;
  width: 135px;
  padding: 16px 20px;
  display: block;
  margin: 0 auto;
  margin-top: 20px;
  margin-bottom: 2px;
  margin-left: 190px;
  box-sizing: border-box;
  box-shadow: .5px .5px;

}

input[type=year] {
  border: 1px solid #555;
  height: 40px;
  width: 135px;
  padding: 16px 20px;
  display: block;
  margin: 0 auto;
  margin-top: 20px;
  margin-bottom: 2px;
  margin-left: 40px;
  box-sizing: border-box;
  box-shadow: .5px .5px;

}
input[type = text] {
  border: 1px solid #555;
  height: 40px;
  width: 135px;
  padding: 16px 20px;
  display: block;
  margin: 0 auto;
  margin-top: 20px;
  margin-bottom: 2px;
  margin-left: 40px;

  box-sizing: border-box;
  box-shadow: .5px .5px;

}

.button {
  
  border-radius: 5px;
  background-color: #02994b ;
  color: white;
  border: none;
  display: block;
  margin: 0 auto;
  margin-top: 40px;
  cursor: pointer;
  width: 40%;
  height: 50px;
  font-size: 18px;
 font-family: 'Helvetica', 'Arial', sans-serif;
}

.links{
font-family: 'Helvetica', 'Arial', sans-serif;
text-align: center;
font-size: 14px;
margin-top: 3px;

}
    
.number {
    font-weight: bold;
    font-family: 'Helvetica', 'Arial', sans-serif;
    font-size: 18px;
    margin-left:5px;
    margin-top:10px;
    color: #4d4c4c;
    display:flex;
}


</style>
</head>


</html> 