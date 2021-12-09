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
        echo  '<p> Unable to connec to the database: '.$error;
        exit();
     }



?>

<!DOCTYPE html>
<html>
<head>


</head>
<body>

<form action="insertCustomer.php" class="container" method="POST">
 
    <p class="signup"> Sign Up</p>

  <input type="text" name="firstName" placeholder="Enter First name" class="input">
  
  <input type="text" id="lastName" name="lastName" placeholder="Enter last name" class="input"> 
  
  <input type="text" id="email" name="email" placeholder="Enter email" class="input">
  
 <input type="text" id="password" name="password" placeholder="Enter password" class="input">

 <input type="text" id="phoneNumber" name="phoneNumber" placeholder="Enter phone number" class="input">

 <p class="links"><span style="color:black; font-weight: lighter"> Already a Member?</span> <a href="login.html">Login Here</a></p> 
 
  <input type="Submit" name="Submit1" value="Sign Up" class="login">
</form>



</body>
</html>


<head>
<style>

body {
  background-color: #f0f0f0; 
}

.header {

  text-align: center;
  color: white;
  font-family: Marker Felt, fantasy;
  font-size: 40px;
  margin-bottom: 60px;
}

.input {
width: 50%;
padding: 16px 20px;
display: block;
margin: 0 auto;
margin-top: 30px;
margin-bottom: 2px;
background-color: #fafafa;
border:0;
box-shadow:0 2px 4px rgba(0,0,0,0.3);
transition: .3s box-shadow;
border-radius:10px;
}

.input:hover {
  box-shadow:0 0 4px rgba(0,0,0,0.5);
}

.container {
  
  margin: 0 auto;
  max-width: 600px;
  height: 600px;
  padding: 16px;
  background-color: #ece9f0;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);

}

.signup {

text-align: center;
font-size: 40px;
font-family: 'Helvetica', 'Arial', sans-serif;
color: black;
font-weight: bold;

}

.login {

border-radius: 25px;
background-color: #00b25c ;
color: white;
padding: 16px 20px;
border: none;
display: block;
margin: 0 auto;
margin-top: 20px;
cursor: pointer;
width: 50%;
height: 50px;
text-align: center;
font-family: 'Helvetica', 'Arial', sans-serif;
font-size: 18px;

 
}
.login:hover {
  box-shadow:0 0 5px rgba(0,0,0,0.5);
}

.links{

text-align: center;
font-size: 12px;
margin-top: 20px;
font-family: 'Helvetica', 'Arial', sans-serif;

}
    
a.one:link {margin-left: 44%;margin-bottom: 20px;font-size: 11px;color: black;font-weight: bold;
text-decoration: none;}
a.one:visited {color:black;}  
    
    



</style>
</head>

