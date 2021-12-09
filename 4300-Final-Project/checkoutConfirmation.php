<?php

$dsn='mysql:host=localhost;dbname=concert_tickets_db';
$username='eliza';

$password='password';

try {
    $db=new PDO($dsn, $username,$password);
    $customerID = $_GET['custID'];

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
<script>
    let x = Math.floor((Math.random() * 1000000) + 1);
</script>

</head>
<body>
  
<div class="box">
    <div class = "thanks">
        <p>Thank you!</p>
        <p class="confirmation"> A confirmation email has been sent with event information.<br></p>
         
        <p class="orderNum">
        <?php

            echo "Order Number #";
            echo $orderNum = "<script>document.write(x)</script>";

    ?>
        </p>
        <img src="QRcode .png" width="150px" height="150">
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
height: 600px;
width: 75%;
margin:auto;
background-color: #ffffff;
box-shadow: 5px 5px 5px rgb(155, 155, 155);
}

.thanks{
    margin:auto;
    text-align: center;
    font-weight: bold;
    font-family: 'Helvetica', 'Arial', sans-serif;
    font-size: 50px;
    color: #4d4c4c;
    margin-bottom: 10%;
}

.confirmation {
    font-weight: normal;
    font-family: 'Helvetica', 'Arial', sans-serif;
    font-size: 20px;
    color: #4d4c4c;
    margin-bottom:0px;
}

.orderNum {
    font-weight: normal;
    font-family: 'Helvetica', 'Arial', sans-serif;
    font-size: 20px;
    color: #4d4c4c;
}

</style>