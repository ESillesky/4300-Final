<?php

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



?>

<!DOCTYPE html>
<html>
<head>


</head>
<body>


<div class="header">
  <h1>Login</h1>
</div>


<form action="insertCustomer.php" class="container" method="POST">
 
    <p class="signup"> Sign Up</p>

  <input type="text" name="firstName" placeholder="Enter First name">
  
  
  
  <input type="text" id="lastName" name="lastName" placeholder="Enter last name"> 
  
  <input type="text" id="email" name="email" placeholder="Enter email">
  
 <input type="text" id="password" name="password" placeholder="Enter password">
 <input type="text" id="phoneNumber" name="phoneNumber" placeholder="Enter phone number">

 <p class="links"><span style="color:black; font-weight: lighter"> Already a Member?</span> <a href="login.html">Login Here</a></p> 


  <input type="Submit" name="Submit1" value="Login" class="login">
</form>



</body>
</html>


<head>
<style>


.header {

  text-align: center;
  color: white;
  font-family: Marker Felt, fantasy;
  font-size: 40px;
  margin-bottom: 60px;
}


.container {
  
  
  margin: 0 auto;
  max-width: 600px;
  height: 480px;
  padding: 16px;
  background-color: #ece9f0;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);

}

.signup {

    text-align: center;
    font-size: 30px;
    

}

input[type = text] {
  border-radius: 15px;
  height: 9%;
  width: 50%;
  padding: 16px 20px;
  display: block;
  margin: 0 auto;
  margin-top: 30px;
  margin-bottom: 2px;
  box-sizing: border-box;
  box-shadow: .5px .5px;

}

.login {

  border-radius: 25px;
  background-color: #c98434 ;
  color: white;
  padding: 16px 20px;
  border: none;
  display: block;
  margin: 0 auto;
  margin-top: 50px 0px 40px 0px;
 
  cursor: pointer;
  width: 30%;
 
}

.links{

text-align: center;
font-size: 14px;
margin-top: 3px;

}
    
a.one:link {margin-left: 44%;margin-bottom: 20px;font-size: 11px;color: black;font-weight: bold;
text-decoration: none;}
a.one:visited {color:black;}  
    
    



</style>
</head>



