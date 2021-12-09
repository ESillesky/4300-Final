<?php
session_start();
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
<script>
function validateForm() {
  var a = document.forms["login"]["username"].value;
  var b = document.forms["login"]["password"].value;
  if (a == "" || a == null || b == "" || b == null) {
    alert("All fields must be filled out");
    return false;
  }
 
}
</script>
</head>

<body>

<div class="header">
<h1>Login</h1>
</div>


<form name = "login" class="container" action="checkLogin2.php" onsubmit="return validateForm()" method="POST" required>

<p class="signup"> Login</p>

<input type="text" id="username" name="username" placeholder="Type username">

<input type="text" id="password" name="password" placeholder="Type password">

<p class="forgotPass"><a href="default.asp">Forgot Password</a></p>


<button type="submit" name="submit" class="button">Login</button>
</form>



</body>

<head>
<style>

.signup {

text-align: center;
font-size: 30px;


}

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
height: 300px;
padding: 16px;
background-color: #ece9f0;
box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);

}



input[type = text] {
border-radius: 15px;
width: 50%;
padding: 16px 20px;
display: block;
margin: 0 auto;
margin-top: 30px;
margin-bottom: 2px;
box-sizing: border-box;
box-shadow: .5px .5px;

}

.button {

border-radius: 25px;
background-color: #c98434 ;
color: white;
padding: 16px 20px;
border: none;
display: block;
margin: 0 auto;
margin-top: 50px;
cursor: pointer;
width: 30%;

}

.forgotPass {

  margin-left: 44%;
  margin-bottom: 20px;
  font-size: 11px;
}


</style>
</head>


</html> 
