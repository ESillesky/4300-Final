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

<button type="submit" name="submit" class="button">Login</button>

<div class = "linksBox">

<p><a href="register.php">Create an account </a></p>

<div class= "vertical"></div>

<p><a href="default.asp"> Forgot Password?</a></p>



</div>

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
max-width: 500px;
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
box-shadow:0 2px 4px rgba(0,0,0,0.3);
transition: .3s box-shadow;
border-radius:10px;
}

.input:hover {
  box-shadow:0 0 4px rgba(0,0,0,0.5);
}

.button {

border-radius: 25px;
background-color: #00b25c ;
color: white;
padding: 16px 20px;
border: none;
display: block;
margin: 0 auto;
margin-top: 30px;
cursor: pointer;
width: 50%;
height: 50px;
text-align: center;
font-family: 'Helvetica', 'Arial', sans-serif;
font-size: 18px;

}

.button:hover {
  box-shadow:0 0 5px rgba(0,0,0,0.5);
}


.linksBox {
  text-align: center;
  margin-left: 29%;
  display: flex;
  font-size: 12px;
  font-family: 'Helvetica', 'Arial', sans-serif;
}

a:link {
  color: #6b6b6b;
  text-decoration: none;
}

/* visited link */
a:visited {
  color: #6b6b6b;
  text-decoration: none;
}

/* mouse over link */
a:hover {
  color: #6b6b6b;
  text-decoration: underline;
}

.vertical {
            border-left: 1px solid #b5b5b5;
            height: 20px;
            margin-top: 10px;
            margin-left: 10px;
            margin-right: 10px;
        }
</style>
</head>


</html> 
