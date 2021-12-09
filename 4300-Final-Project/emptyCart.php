<?php

$dsn='mysql:host=localhost;dbname=concert_tickets_db';
$username='eliza';

$password='password';

try {
    $db=new PDO($dsn, $username,$password);

       
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
        <img src="emptycart.png" width="35px" height="35">
    </div>

    <div class="empty">
        <p> Cart is empty... See more events <a href="home.php">here</a></p>
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

min-height: 250px;
max-height: 550px;
width: 75%;
margin:auto;
background-color: #ffffff;
box-shadow: 5px 5px 5px rgb(155, 155, 155);
}

.image {
    margin-top:75px;
    margin-left: 50%;
    
}

.empty {
    margin-top: 120px;
    margin-left: -18%;
    font-weight: bold;
    font-family: 'Helvetica', 'Arial', sans-serif;
    font-size: 18px;
    color: #4d4c4c;
    
}

a:link {
 
  text-decoration: underline;
  color: #4d4c4c;
}

a:visited {
  color: #4d4c4c;
  background-color: transparent;
  text-decoration: none;
}

</style>

