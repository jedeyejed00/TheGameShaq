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
 
echo "Cost of Tuition:<h3>$ $calcnonres </h3/>";
echo "Student Health Fee:<h3>$ $mandatoryfees</h3/><br>";
echo "College Services card:<h3>$ $collegeservices</h3/><br>";
echo "Parking Permit:<h3>$ $parking</h3/><br>";
echo "Total Registration Costs:<h3>$ $registrationcostnonres</h3/><br>";
echo "Scholarship Award:<h3>$ $randomscholarship</h3/><br>";
echo "<b>Total College Balance Due:<h3>$ $totcostnonres  </h3/><br></b>";
echo"<br>";     
echo '<a href = "StudentForm.html">Back To Home Page</a>'; 
echo "<center>";


}
elseif ($resident = 1) {
    echo ($costperunit * $units + $mandatoryfees) - (rand(0,500));
}

?> 