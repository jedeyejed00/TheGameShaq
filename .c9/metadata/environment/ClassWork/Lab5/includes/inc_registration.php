{"filter":false,"title":"inc_registration.php","tooltip":"/ClassWork/Lab5/includes/inc_registration.php","undoManager":{"mark":0,"position":0,"stack":[[{"start":{"row":0,"column":0},"end":{"row":79,"column":11},"action":"insert","lines":["<?php","","","$first_name = \"\";","$last_name = \"\";","$email = \"\";","$password = \"\";","$confirm_password = \"\";","","","","if($_SERVER['REQUEST_METHOD'] == 'POST') {","    // Procees our form and validate it","    $first_name = $_POST['first_name'];","    $last_name = $_POST['last_name'];","    $email = $_POST['email'];","    $password = $_POST['password'];","    $confirm_password = $_POST['confirm_password'];","    // validate","    if(empty($first_name)) {","      echo  \"Enter your first name please\";","      echo '<br>';","    }","    if(empty($last_name)) {","      echo  \"Enter your last name please\";","      echo '<br>';","    }","    if(empty($email)) {","      echo  \"Enter your email please\";","      echo '<br>';","    }","    if(empty($password)) {","      echo  \"Enter your password please\";","      echo '<br>';","    }","    if(empty($confirm_password)) {","      echo  \"Confirm your password please\";","      echo '<br>';","    }","}","","    if(!empty($_POST['first_name']) && !empty($_POST['last_name']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['confirm_password']))","    {",""," // validate the password with the confirm password","    if ($password == $confirm_password){","        echo '<h2>Congratulation you have registered correctly.</h2>';","    }","    else {","        echo '<h2>Password do not match. Please try again.</h2>';","    }","","    }","    else {","        echo \"<h2>Please Enter Your Information</h2>\";","    }","","?>","","    <main>","        <h1>Sticky Form</h1>","","        <form action=\"register.php\" method=\"POST\">","            <label for=\"first_name\">First Name</label>","            <input type=\"first_name\" id=\"first_name\" name=\"first_name\" placeholder=\"\" value=\"<?php echo $first_name ?>\">","            <br><br>","            <label for=\"last_name\">Last Name</label>","            <input type=\"last_name\" id=\"last_name\" name=\"last_name\" placeholder=\"\" value=\"<?php echo $last_name ?>\">","            <br><br>","            <label for=\"email\">Email</label>","            <input type=\"email\" id=\"email\" name=\"email\" placeholder=\"email\" value=\"<?php echo $email ?>\">","            <br><br>","            <label for=\"password\">Password</label>","            <input type=\"password\" id=\"password\" name=\"password\" placeholder=\"\" value=\"<?php echo $password ?>\">","            <br><br>","            <label for=\"confirm_password\">Confirm Password</label>","            <input type=\"password\" id=\"confirm_password\" name=\"confirm_password\" placeholder=\"\" value=\"<?php echo $confirm_password ?>\">","            <br><br>","            <input type=\"submit\" name=\"submit\" value=\"Submit\"/>","    </main>"],"id":1}]]},"ace":{"folds":[],"scrolltop":414,"scrollleft":0,"selection":{"start":{"row":79,"column":11},"end":{"row":79,"column":11},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":7,"state":"php-start","mode":"ace/mode/php"}},"timestamp":1569470211545,"hash":"829fd9ee5b777991653890e4c83abd559d4c3f7b"}