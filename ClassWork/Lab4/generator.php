<?php
$numparagraphs = $_POST['paragraphs'];
$text = "This is a test to see how thisgs works";

for ($i =0; $i <$numparagraphs; $i++) {
   echo "<p>$text , </p>";
   echo '<p>' . $text . '</p>';
    
}



?>
