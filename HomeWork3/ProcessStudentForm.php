<?php 

        //Capture data from form 

        $units =$_POST['units']; 
        $resident =$_POST['resident'];
        $costperunit = 46;
        $nonresident = 265;
        $mandatoryfees = 20;
        $collegeservices = 20;
        $parking = 30;
        $randomscholarship = (rand(0,500));
        $calcnonres = $nonresident * $units;
        $registrationcostnonres = $calcnonres + $mandatoryfees + $collegeservices + $parking;
        $totcostnonres =$calcnonres + $mandatoryfees + $collegeservices + $parking - $randomscholarship;
       
       
       // $totcostres = $resident * $units + $collegeservices + $mandatoryfees -$randomscholarship;
        //$randomscholarship = (rand(0,500));
      

echo "<center>";
if ($resident < 1)  {
    echo"<br>";
 echo "<h1> Thank  you for Registering!</h1>";
 
echo "<h3>Cost of Tuition:$ $calcnonres </h3/>";
echo "<h3>Student Health Fee:$ $mandatoryfees</h3/>";
echo "College Services card:<h3>$ $collegeservices</h3/>";
echo "Parking Permit:<h3>$ $parking</h3/>";
echo "Total Registration Costs:<h3>$  $registrationcostnonres </h3/>";
echo "Scholarship Award:<h3>$ $randomscholarship</h3/>";
echo "<h1>Total College Balance Due:$ $totcostnonres  </h1/>";
echo"<br>";     
echo '<a href = "StudentForm.html">Back To Home Page</a>'; 
echo "<center>";


}
elseif ($resident = 1) {
    echo ($costperunit * $units + $mandatoryfees) - (rand(0,500));
}

?> 