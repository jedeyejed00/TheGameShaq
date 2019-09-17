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
        $calcres = $costperunit * $units;
        $evalme = $resident + $collegeservices +$parking;
        $registrationcostnonres = $calcnonres + $mandatoryfees + $collegeservices + $parking;
        $totcostnonres =$calcnonres + $mandatoryfees + $collegeservices + $parking - $randomscholarship;
        $registrationcostres = $calcnonres + $mandatoryfees + $collegeservices + $parking;
        $totcostres =$calcnonres + $mandatoryfees + $collegeservices + $parking - $randomscholarship;
       // $totcostres = $resident * $units + $collegeservices + $mandatoryfees -$randomscholarship;
        //$randomscholarship = (rand(0,500));
      
//non Rez, No Parking, Yes College Service
echo "<center>";

//non Rez, No Parking, NO College Service
switch ($evalme) {
    case "0":
echo "<h1> Thank  you for Registering!</h1>";
echo "<h3>Cost of Tuition $units x $nonresident:$ $calcnonres </h3/>";
echo "<h3>Student Health Fee:$ $mandatoryfees</h3/>";
echo "<h3>College Services card:$ $collegeservices</h3/>";
echo "<h3>Parking Permit:$ $parking</h3/>";
echo "<h3>Total Registration Costs:$  $registrationcostnonres </h3/>";
echo "<h3>Scholarship Award:$ $randomscholarship</h3/>";
echo "<h1>Total College Balance Due:$ $totcostnonres  </h1/>";
echo"<br>";     
echo '<a href = "StudentForm.html">Back To Home Page</a>'; 
        break;
//non Rez, YES Parking, NO College Service
    case "30":
echo "<h1> Thank  you for Registering!</h1>";
echo "<h3>Cost of Tuition  $units x $nonresident:$ $calcnonres </h3/>";
echo "<h3>Student Health Fee:$ $mandatoryfees</h3/>";
echo "<h3>College Services card:$ $collegeservices</h3/>";
echo "<h3>Parking Permit:$ $parking</h3/>";
echo "<h3>Total Registration Costs:$  $registrationcostnonres </h3/>";
echo "<h3>Scholarship Award:$ $randomscholarship</h3/>";
echo "<h1>Total College Balance Due:$ $totcostnonres  </h1/>";
echo"<br>";     
echo '<a href = "StudentForm.html">Back To Home Page</a>'; 
        break;

//non Rez, NO Parking, YES College Service
    case "20":
echo "<h1> Thank  you for Registering!</h1>";
echo "<h3>Cost of Tuition  $units x $nonresident:$ $calcnonres </h3/>";
echo "<h3>Student Health Fee:$ $mandatoryfees</h3/>";
echo "<h3>College Services card:$ $collegeservices</h3/>";
echo "<h3>Parking Permit:$ $parking</h3/>";
echo "<h3>Total Registration Costs:$  $registrationcostnonres </h3/>";
echo "<h3>Scholarship Award:$ $randomscholarship</h3/>";
echo "<h1>Total College Balance Due:$ $totcostnonres  </h1/>";
echo"<br>";     
echo '<a href = "StudentForm.html">Back To Home Page</a>';
        break;
        
//non Rez, YES Parking, YES College Service
    case "50":
echo "<h1> Thank  you for Registering!</h1>";
echo "<h3>Cost of Tuition  $units x $nonresident:$ $calcnonres </h3/>";
echo "<h3>Student Health Fee:$ $mandatoryfees</h3/>";
echo "<h3>College Services card:$ $collegeservices</h3/>";
echo "<h3>Parking Permit:$ $parking</h3/>";
echo "<h3>Total Registration Costs:$  $registrationcostnonres </h3/>";
echo "<h3>Scholarship Award:$ $randomscholarship</h3/>";
echo "<h1>Total College Balance Due:$ $totcostnonres  </h1/>";
echo"<br>";     
echo '<a href = "StudentForm.html">Back To Home Page</a>';
        break;
        
        
//Rez, NO Parking, NO College Service
    case "1":
echo "<h1> Thank  you for Registering!</h1>";
echo "<h3>Cost of Tuition  $units x $costperunit:$ $calcres </h3/>";
echo "<h3>Student Health Fee:$ $mandatoryfees</h3/>";
echo "<h3>College Services card:$ $collegeservices</h3/>";
echo "<h3>Parking Permit:$ $parking</h3/>";
echo "<h3>Total Registration Costs:$  $registrationcostres </h3/>";
echo "<h3>Scholarship Award:$ $randomscholarship</h3/>";
echo "<h1>Total College Balance Due:$ $totcostres  </h1/>";
echo"<br>";     
echo '<a href = "StudentForm.html">Back To Home Page</a>'; 
        break;
        
//non Rez, YES Parking, NO College Service
 case "31":
echo "<h1> Thank  you for Registering!</h1>";
echo "<h3>Cost of Tuition  $units x $costperunit:$ $calcres </h3/>";
echo "<h3>Student Health Fee:$ $mandatoryfees</h3/>";
echo "<h3>College Services card:$ $collegeservices</h3/>";
echo "<h3>Parking Permit:$ $parking</h3/>";
echo "<h3>Total Registration Costs:$  $registrationcostres </h3/>";
echo "<h3>Scholarship Award:$ $randomscholarship</h3/>";
echo "<h1>Total College Balance Due:$ $totcostres  </h1/>";
echo"<br>";     
echo '<a href = "StudentForm.html">Back To Home Page</a>'; 
        break;
        
//non Rez, YES Parking, NO College Service
 case "21":
echo "<h1> Thank  you for Registering!</h1>";
echo "<h3>Cost of Tuition  $units x $costperunit:$ $calcres </h3/>";
echo "<h3>Student Health Fee:$ $mandatoryfees</h3/>";
echo "<h3>College Services card:$ $collegeservices</h3/>";
echo "<h3>Parking Permit:$ $parking</h3/>";
echo "<h3>Total Registration Costs:$  $registrationcostres </h3/>";
echo "<h3>Scholarship Award:$ $randomscholarship</h3/>";
echo "<h1>Total College Balance Due:$ $totcostres  </h1/>";
echo"<br>";     
echo '<a href = "StudentForm.html">Back To Home Page</a>'; 
        break;
 case "51":
echo "<h1> Thank  you for Registering!</h1>";
echo "<h3>Cost of Tuition  $units x $costperunit:$ $calcres </h3/>";
echo "<h3>Student Health Fee:$ $mandatoryfees</h3/>";
echo "<h3>College Services card:$ $collegeservices</h3/>";
echo "<h3>Parking Permit:$ $parking</h3/>";
echo "<h3>Total Registration Costs:$  $registrationcostres </h3/>";
echo "<h3>Scholarship Award:$ $randomscholarship</h3/>";
echo "<h1>Total College Balance Due:$ $totcostres  </h1/>";
echo"<br>";     
echo '<a href = "StudentForm.html">Back To Home Page</a>'; 
        break;
    default:
        echo "Please fill out form completely";
}

?> 