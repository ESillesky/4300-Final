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
        echo  '<p> Unable to connect to the database: '.$error;
        exit();
     }

echo $_SESSION["username"];

?>

<!DOCTYPE html>
<html>
<head>

</head>
<body>

<div class="admin-section">
  <h1>Admin Page</h1>
</div>

<h2 style="text-align:center">Welcome, Admin!</h2>
<div class="row" style="text-align:center">
  <div class="column">
    <div class="card">
      <img src="localImages/ad/logout.png" width="250" height="250">
      <div class="container">
        <h2><a href ="logout.php">Logout</a></h2>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="localImages/ad/ticket+.png" width="250" height="250">
      <div class="container">
        <h2><a href ="addTicket.php">Add Event</a></h2>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="localImages/ad/ticket-.png" width="250" height="250">
      <div class="container">
        <h2><a href ="deleteTicket.php">Delete Event</a></h2>
      </div>
    </div>
  </div>
</div>
</body>
</html>

<head>
<style>

body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.ticket {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.admin-section {
  padding: 50px;
  text-align: center;
  background-color: #474e5d;
  color: white;
}

/* unvisited link */
a:link {
  color: red;
}

/* visited link */
a:visited {
  color: red;
}

/* mouse over link */
a:hover {
  color: black;
}

/* selected link */
a:active {
  color: blue;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}

</style>
</head>
