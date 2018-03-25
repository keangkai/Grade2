<?php 
  session_start();
  ob_start();

  $secretUsername = 'tangtangd';
  $secretPassword = '1234';


 
   if (!empty($_POST)) {
       $username = empty($_POST['username']) ? null : $_POST['username'];
       $password = empty($_POST['password']) ? null : $_POST['password'];

       if ($username == $secretUsername && $password == $secretPassword) {
           $_SESSION['authenticated'] = true;
           // Redirect to your secure location
          
           header('Location: GradeTable.php');
           return;
       } else {
           
           header('Location: LoginFalse.php');
       }
    }
   
   // Create a login form or something
   



 ?>