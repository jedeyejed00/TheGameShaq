<?php 

        //Capture data from form 

        $units =$_POST['units']; 
        
        
        $CostPerUnit = 24;

        $ln = $_POST['ln']; 

        $ea = $_POST['ea']; 

        $g = $_POST['g']; 

        $age = $_POST['age']; 

        $ca = $_POST['ca']; 

      


          echo "<p>Your total fees are : $CostPerUnit * $units</P>"; 



          echo '<a href = "StudentForm.html">Back To Home Page</a>'; 

            //Output a message for fun 

?> 