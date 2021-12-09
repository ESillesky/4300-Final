<?php
session_start();
$dsn='mysql:host=localhost;dbname=concert_tickets_db';
$username='eliza';

$password='password';

    try {
        echo 'Attempting Connection';
        $db=new PDO($dsn, $username,$password);
        echo 'Connected successfully';
        
         if(isset($_POST["submit"]))  
         {  
              if(empty($_POST["username"]) || empty($_POST["password"]))  
              {  
                   $message = '<label>All fields are required</label>';  
                   echo($message);
              }  
              else  
              {  
                    
                    $inputed_username = $_POST["username"];
                    $inputed_password = $_POST["password"];
                    $query = "SELECT * FROM customers WHERE firstname = :username AND password = :password ";  
                   
                   $statement = $db->prepare($query);  
                   $statement -> bindValue(':username', $inputed_username);

                   $statement -> bindValue(':password', $inputed_password);
                   $statement->execute(  
                        array(  
                             'username' => $_POST["username"],  
                             'password' => $_POST["password"]  
                        )  
                   );  
                   $count = $statement->rowCount();  

                   $sql = "SELECT isAdmin FROM customers WHERE firstname = :username AND password = :password";
                   $statement2 = $db->prepare($sql);
                   $statement2 -> bindValue(':username', $inputed_username);
                   $statement -> bindValue(':password', $inputed_password);
                   $statement2->execute(['username' => $_POST["username"],
                   'password' => $_POST["password"]]);

                   $admin = $statement2->fetchAll(PDO::FETCH_ASSOC);
                   $isAdmin;

                   if ($admin) {

                    foreach ($admin as $publisher) {
                         $isAdmin = $publisher['isAdmin'];
                    }
                   }
                   function function_alert($message) {
      
                    // Display the alert box 
                    echo "<script>alert('$message');</script>";
                }

                   echo($isAdmin);

                   if($isAdmin) {
                    $_SESSION["username"] = $_POST["username"];
                    $_SESSION["password"] = $_POST["password"];
                    header("location:admin.php");
                   } else {

                        if($count > 0)  
                   {     
                        $_SESSION["username"] = $_POST["username"];
                        $_SESSION["password"] = $_POST["password"];
                        header("location:home.php");  
                   }  
                   else  
                   {  
                    function_alert("Invalid username or password.");
                    header("location:login.php"); 
                   }  
              }  
          }
         }
         
     } catch (Exception  $e) {
          $error=$e->getMessage();
          echo  '<p> Error: '.$error;
          exit();
       }
?>   

