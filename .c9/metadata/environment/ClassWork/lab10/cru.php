{"changed":true,"filter":false,"title":"cru.php","tooltip":"/ClassWork/lab10/cru.php","value":"","undoManager":{"mark":8,"position":9,"stack":[[{"start":{"row":0,"column":0},"end":{"row":95,"column":7},"action":"insert","lines":["<?php","// Add the database connection","/*","*   CHECK IF THE FORM HAS BEEN SUBMITTED AND INSERT","*   NEW USER INTO THE DATABASE","*/","","if($_SERVER['REQUEST_METHOD'] == 'POST') {","}","","$first_name = $POST['first_name'];","$first_name = $POST['last_name'];","$first_name = $POST['email'];","$first_name = $POST['password'];","","$insert_query = \"INSERT INTO user_lopez(first_name, last_name, email, password)","\t\tVALUES ($first_name, $last_name, $email, $password)\";","\t\t$result = mysqli_query($connection, $insert_query);","\t\tif($result){","\t\t    echo 'New user added to DB';","\t\t}","\t\telse {'Error entering new user';","\t\t}","\t\t","/*","*   QUERY THE DATABASE AND STORE ALL USERS INTO A VARIABLE","*/","// Create your query","","$query = 'SELECT * FROM User_Lopez';","","// Run your query","$result = mysqli_query($connection, $query);","","// Check if the database returned anything","if($result) {","    $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);","    print_r($rows);","   } else {","        // Output the results","        echo 'not working';","    }","","?>","","<!doctype html>","<html>","<head>","    <title>My First CRUD</title>","</head>","<body>","    <h1>Create a New User</h1>","    <form action=\"crud.php\" method=\"POST\">","        <label for=\"first_name\">First Name</label>","        <input type=\"text\" id=\"first_name\" name=\"first_name\"><br>","","        <label for=\"last_name\">Last Name</label>","        <input type=\"text\" id=\"last_name\" name=\"last_name\"><br>","","        <label for=\"email\">Email</label>","        <input type=\"email\" id=\"email\" name=\"email\"><br>","","        <label for=\"password\">Password</label>","        <input type=\"password\" id=\"password\" name=\"password\"><br>","","        <!--Add a second password input so the user has to retype their password -->","","        <button>Register</button>","    </form>","","    <h2>Output a List of Users</h2>","    <table>","        <thead>","            <tr>","                <th>First Name</th>","                <th>Last Name</th>","                <th>Email</th>","                <th>Password</th>","            </tr>","        </thead>","        <tbody>","            <?php","            foreach ($rows as $row){","          echo  '<tr>","                <td>'.$row['first_name'].'</td>","                <td>'.$row['lasr_name'].'</td>","                <td>'.$row['email'].'</td>","                <td>'.$row['password'].'</td>","            </tr>';","            ","            }","            ?>","        </tbody>","    </table>","</body>","</html>"],"id":1}],[{"start":{"row":13,"column":0},"end":{"row":13,"column":32},"action":"remove","lines":["$first_name = $POST['password'];"],"id":2}],[{"start":{"row":11,"column":33},"end":{"row":12,"column":0},"action":"insert","lines":["",""],"id":3}],[{"start":{"row":12,"column":0},"end":{"row":12,"column":32},"action":"insert","lines":["$first_name = $POST['password'];"],"id":4}],[{"start":{"row":17,"column":41},"end":{"row":17,"column":42},"action":"insert","lines":["\\"],"id":5},{"start":{"row":17,"column":42},"end":{"row":17,"column":43},"action":"insert","lines":["\\"]},{"start":{"row":17,"column":43},"end":{"row":17,"column":44},"action":"insert","lines":["\\"]}],[{"start":{"row":17,"column":43},"end":{"row":17,"column":44},"action":"remove","lines":["\\"],"id":6},{"start":{"row":17,"column":42},"end":{"row":17,"column":43},"action":"remove","lines":["\\"]},{"start":{"row":17,"column":41},"end":{"row":17,"column":42},"action":"remove","lines":["\\"]},{"start":{"row":17,"column":40},"end":{"row":17,"column":41},"action":"remove","lines":["l"]},{"start":{"row":17,"column":39},"end":{"row":17,"column":40},"action":"remove","lines":["i"]},{"start":{"row":17,"column":38},"end":{"row":17,"column":39},"action":"remove","lines":["a"]},{"start":{"row":17,"column":37},"end":{"row":17,"column":38},"action":"remove","lines":["m"]},{"start":{"row":17,"column":36},"end":{"row":17,"column":37},"action":"remove","lines":["e"]}],[{"start":{"row":17,"column":36},"end":{"row":17,"column":37},"action":"insert","lines":["p"],"id":7},{"start":{"row":17,"column":37},"end":{"row":17,"column":38},"action":"insert","lines":["a"]},{"start":{"row":17,"column":38},"end":{"row":17,"column":39},"action":"insert","lines":["s"]},{"start":{"row":17,"column":39},"end":{"row":17,"column":40},"action":"insert","lines":["s"]},{"start":{"row":17,"column":40},"end":{"row":17,"column":41},"action":"insert","lines":["w"]},{"start":{"row":17,"column":41},"end":{"row":17,"column":42},"action":"insert","lines":["o"]},{"start":{"row":17,"column":42},"end":{"row":17,"column":43},"action":"insert","lines":["r"]},{"start":{"row":17,"column":43},"end":{"row":17,"column":44},"action":"insert","lines":["d"]}],[{"start":{"row":17,"column":54},"end":{"row":17,"column":55},"action":"remove","lines":["d"],"id":8},{"start":{"row":17,"column":53},"end":{"row":17,"column":54},"action":"remove","lines":["r"]},{"start":{"row":17,"column":52},"end":{"row":17,"column":53},"action":"remove","lines":["o"]},{"start":{"row":17,"column":51},"end":{"row":17,"column":52},"action":"remove","lines":["w"]},{"start":{"row":17,"column":50},"end":{"row":17,"column":51},"action":"remove","lines":["s"]},{"start":{"row":17,"column":49},"end":{"row":17,"column":50},"action":"remove","lines":["s"]},{"start":{"row":17,"column":48},"end":{"row":17,"column":49},"action":"remove","lines":["a"]},{"start":{"row":17,"column":47},"end":{"row":17,"column":48},"action":"remove","lines":["p"]}],[{"start":{"row":17,"column":47},"end":{"row":17,"column":48},"action":"insert","lines":["e"],"id":9},{"start":{"row":17,"column":48},"end":{"row":17,"column":49},"action":"insert","lines":["m"]},{"start":{"row":17,"column":49},"end":{"row":17,"column":50},"action":"insert","lines":["a"]},{"start":{"row":17,"column":50},"end":{"row":17,"column":51},"action":"insert","lines":["i"]},{"start":{"row":17,"column":51},"end":{"row":17,"column":52},"action":"insert","lines":["l"]}],[{"start":{"row":25,"column":0},"end":{"row":43,"column":0},"action":"remove","lines":["/*","*   QUERY THE DATABASE AND STORE ALL USERS INTO A VARIABLE","*/","// Create your query","","$query = 'SELECT * FROM User_Lopez';","","// Run your query","$result = mysqli_query($connection, $query);","","// Check if the database returned anything","if($result) {","    $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);","    print_r($rows);","   } else {","        // Output the results","        echo 'not working';","    }",""],"id":10}]]},"ace":{"folds":[],"scrolltop":126.40625,"scrollleft":0,"selection":{"start":{"row":25,"column":0},"end":{"row":25,"column":0},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":7,"state":"php-start","mode":"ace/mode/php"}},"timestamp":1572921298251}