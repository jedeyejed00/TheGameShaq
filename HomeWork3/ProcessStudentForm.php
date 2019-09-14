<?php 

        //Capture data from form 

        $units =$_POST['units']; 
        $resident =$_POST['resident'];
        $costperunit = 46;
        $costperunitnonresident = 265;


if ($_POST['resident']=no) { 

   echo $units * $costperunit; 

} else { 
  
 echo $units * $costperunitnonresident; 

  echo '<h1> Thank  you for Registering!</h1>'; 

          echo "<p>Thanks you $firstName $lastName for registering</p>"; 

          echo "<p>Your email Address is $email</p>"; 

          echo "<p>Your Password is $password</P>"; 

} 
      


         
      



          echo '<a href = "StudentForm.html">Back To Home Page</a>'; 

            //Output a message for fun 

?> 