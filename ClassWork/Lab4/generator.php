<?php
$numparagraphs = $_POST['paragraphs'];
$text =$POST['text'];

//this function is looking for a space in the letters in the text variable
$textexplode = explode(' ',$text);
$shuffledtext = shuffle($textexplode);


print_r($textexplode);
print_r($shuffledtext);

//$text = "This is a test to see how thisgs works";

for ($i =0; $i <$numparagraphs; $i++) {
   echo "<p>$text , </p>";
   echo '<p>' . $text . '</p>';
    
}



?>