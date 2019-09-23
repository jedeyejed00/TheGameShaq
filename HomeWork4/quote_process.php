<?php
//$numparagraphs = $_POST['paragraphs'];
//$text =$POST['text'];
$text = $POST[text];
//this function is looking for a space in the letters in the text variable

//$textexplode = explode(' ',$text);
//$shuffledtext = shuffle($textexplode);

//print_r($textexplode);

echo "Your original text is :";
echo $text;

//print_r($textexplode);

//use implode to turn back into a string
//$textimplode = implode(' ',$textexplode);
//echo "<p>$textimplode</p>";


//print_r($textexplode);
//print_r($shuffledtext);

//$text = "This is a test to see how thisgs works";

for ($i = 0; $i <= 10; $i++) {
   echo "<p>$text,</p>";
  // echo '<p>' . $text . '</p>';
    
}



?>