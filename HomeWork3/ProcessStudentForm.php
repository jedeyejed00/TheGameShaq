<?php 

        //Capture data from form 

        $units =$_POST['units']; 
        $resident =$_POST['resident'];
        $costperunit = 46;
        $nonresident = 265;
        $mandatoryfees = 20;


if ($resident < 1) {
   echo $nonresident * $units + $mandatoryfees;
}
elseif ($resident = 1) {
    echo $costperunit * $units + $mandatoryfees;
}
echo"<br>";
 echo "<h1> Thank  you for Registering!</h1>";
         
 echo"<br>";     
echo '<a href = "StudentForm.html">Back To Home Page</a>'; 
?> 