<?php 

        //Capture data from form 

        $units =$_POST['units']; 
        $resident =$_POST['resident'];
        $costperunit = 46;
        $nonresident = 265;


if ($resident=yes) {
   echo $nonresident * $units;
}
?> 