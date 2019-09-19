<?php
        //Capture data from form
        $email =$_POST['email'];
        $password = $_POST['password'];
        
        
       //create variable
        $correct_email = 'test@test.com';
        $correct_password = '!P@55word';
        
        
         //check if data is good against credentials
        if ($email == $correct_email && $password == $correct_password){
          echo '<h1> You logged in successfully!</h1>';
          echo "<p>email Address $email</p>";
          echo "<p>Password: $password</P>";
          echo '<a href = "login.php">Back To Home Page</a>';
            
        }Else {
         echo '<h1>Sorry... try again</h1>';
         echo '<a href = "login.php">Go back</a>';
        }
       
        //Output a message for fun

?>




