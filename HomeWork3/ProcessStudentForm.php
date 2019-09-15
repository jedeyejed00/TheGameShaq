<?php 

        //Capture data from form 

        $units =$_POST['units']; 
        $resident =$_POST['resident'];
        $costperunit = 46;
        $nonresident = 265;


if ($resident=yes) { echo $units * $costperunit; 
} elseif ($resident=no){ echo $units * $nonresident; 
}
 else {
echo "Your tuition is FREE";

  
} 
      
echo"<br>";
 echo "<h1> Thank  you for Registering!</h1>";
         
 echo"<br>";     



          echo '<a href = "StudentForm.html">Back To Home Page</a>'; 

            //Output a message for fun 

?> 