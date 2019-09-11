<?php
        //Capture data from form
        $email =$_POST['email'];
        $password = $_POST['password'];
        
        
 
        
     
          echo '<h1> You logged in successfully!</h1>';
          echo "<p>email Address $email</p>";
          echo "<p>Password: $password</P>";
          echo '<a href = "login.php">Back To Home Page</a>';
            
     
        //Output a message for fun
?>