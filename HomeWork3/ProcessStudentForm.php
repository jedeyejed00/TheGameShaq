<?php 

        //Capture data from form 

        $units =$_POST['units']; 
        $resident =$_POST['resident'];
        $collegeservices= $_POST['collegeservice'];
        $parking =$_POST['parking'];
        $costperunit = 46;
        $nonresident = 265;
        $mandatoryfees = 20;
        $randomscholarship = (rand(0,500));
        $calcnonres = $nonresident * $units;
        $evalme = $resident + $collegeservices +$parking;
        $registrationcostnonres = $calcnonres + $mandatoryfees + $collegeservices + $parking;
        $totcostnonres =$calcnonres + $mandatoryfees + $collegeservices + $parking - $randomscholarship;
       
       
       // $totcostres = $resident * $units + $collegeservices + $mandatoryfees -$randomscholarship;
        //$randomscholarship = (rand(0,500));
      
//non Rez, No Parking, Yes College Service
echo "<center>";

//non Rez, No Parking, NO College Service
switch ($favcolor) {
    case "0":
echo "<h1> Thank  you for Registering!</h1>";
echo "<h3>Cost of Tuition:$ $calcnonres </h3/>";
echo "<h3>Student Health Fee:$ $mandatoryfees</h3/>";
echo "<h3>College Services card:$ $collegeservices</h3/>";
echo "<h3>Parking Permit:$ $parking</h3/>";
echo "<h3>Total Registration Costs:$  $registrationcostnonres </h3/>";
echo "<h3>Scholarship Award:$ $randomscholarship</h3/>";
echo "<h1>Total College Balance Due:$ $totcostnonres  </h1/>";
echo"<br>";     
echo '<a href = "StudentForm.html">Back To Home Page</a>'; 
echo "<center>";
        break;
    case "blue":
        echo "Your favorite color is blue!";
        break;
    case "green":
        echo "Your favorite color is green!";
        break;
    default:
        echo "Your favorite color is neither red, blue, nor green!";
}

?> 