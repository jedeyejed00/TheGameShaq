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
    //($nonresident * $units) - (rand(0,500));

    echo"<br>";
 echo "<h1> Thank  you for Registering!</h1>";
 
echo "<h3>Cost of Tuition:$ $calcnonres </h3/><br>";
echo "<h3>Student Health Fee:$ $mandatoryfees</h3/><br>";
echo "<h3>College Services card:$ $collegeservices</h3/><br>";
echo "<h3>Parking Permit:$ $parking</h3/><br>";
echo "<h3>Total Registration Costs:$ $registrationcostnonres</h3/><br>";
echo "<h3>Scholarship Award:$ $randomscholarship</h3/><br>";
echo "<b><h3>Total College Balance Due:$ $totcostnonres  </h3/><br></b>";
echo"<br>";     
echo '<a href = "StudentForm.html">Back To Home Page</a>'; 
echo "<center>";


}
elseif ($resident = 1) {
    echo ($costperunit * $units + $mandatoryfees) - (rand(0,500));
}

?> 