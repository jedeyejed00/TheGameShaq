<?php

$names = ['111', '222', '333', '4444', '55555'];


function greeting($nametest){
    echo '<p> hello my name is '.$nametest.'</p>';
}

foreach($names as $name){
    greeting($name);
}


?>