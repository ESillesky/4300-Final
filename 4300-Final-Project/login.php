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

<div class="box">
<form name = "login" class="container" action="checkLogin2.php" onsubmit="return validateForm()" method="POST" required>

<p class="signup"> Sign In</p>

<input type="text" id="username" name="username" placeholder="Type username" class="input">

<input type="text" id="password" name="password" placeholder="Type password" class="input">

<p class="forgotPass"><a href="default.asp">Forgot Password</a></p>


<button type="submit" name="submit" class="button">Login</button>

<p class="notMember"><a href="register.php">Create an account</a></p>

</form>

</div> 

</body>

<head>
<style>

body {
  background-color: #f0f0f0; 
}
.signup {

text-align: center;
font-size: 40px;
font-family: 'Helvetica', 'Arial', sans-serif;
color: black;
font-weight: bold;

}


.notMember {
  text-align: center;
  font-family: 'Helvetica', 'Arial', sans-serif;
  font-size: 14px;
}

.container {


margin: 0 auto;
max-width: 600px;
height: 400px;
padding: 16px;
background-color: white;
box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);

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
box-shadow:0 0 4px rgba(0,0,0,0.3);
transition: .3s box-shadow;

}

.input:hover {
  box-shadow:0 0 4px rgba(0,0,0,0.5);
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
height: 50px;
text-align: center;
font-family: 'Helvetica', 'Arial', sans-serif;
font-size: 18px;

}

.forgotPass {

  margin-left: 44%;
  margin-bottom: 20px;
  font-size: 11px;
}


</style>
</head>


</html> 
