<?php
        
    
        
        //Capture data from form
        $firstName = $_POST[firstName];
         $lastName = $_POST[lastName];
        $email =$_POST['email'];
        $password = $_POST['password'];
         $password = $_POST['confpassword'];
 


 //confirm that both password are matching
 
if ($_POST["password"] === $_POST["confpassword"]) {
   echo 'The passwords matched';
   echo "<br>";
   echo '<a href = process_register.php>Thanks for registering</a>';
}
else {
  echo 'The passwords did not match :(';
 echo "<br>";
   echo '<a href = process_register.php>I want to try again</a>';
}
?>
