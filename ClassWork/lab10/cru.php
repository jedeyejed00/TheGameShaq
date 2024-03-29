<?php
// Add the database connection
/*
*   CHECK IF THE FORM HAS BEEN SUBMITTED AND INSERT
*   NEW USER INTO THE DATABASE
*/

if($_SERVER['REQUEST_METHOD'] == 'POST') {
}

$first_name = $POST['first_name'];
$last_name = $POST['last_name'];
$password = $POST['password'];
$email = $POST['email'];


$insert_query = "INSERT INTO user_lopez(first_name, last_name, password, email)
		VALUES ($first_name, $last_name, $password, $email)";
		$result = mysqli_query($connection, $insert_query);
		if($result){
		    echo 'New user added to DB';
		}
		else {'Error entering new user';
		}
		

?>

<!doctype html>
<html>
<head>
    <title>My First CRUD</title>
</head>
<body>
    <h1>Create a New User</h1>
    <form action="cru.php" method="POST">
        <label for="first_name">First Name</label>
        <input type="text" id="first_name" name="first_name"><br>

        <label for="last_name">Last Name</label>
        <input type="text" id="last_name" name="last_name"><br>

        <label for="email">Email</label>
        <input type="email" id="email" name="email"><br>

        <label for="password">Password</label>
        <input type="password" id="password" name="password"><br>

        <!--Add a second password input so the user has to retype their password -->

        <button>Register</button>
    </form>

    <h2>Output a List of Users</h2>
    <table>
        <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Password</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($rows as $row){
          echo  '<tr>
                <td>'.$row['first_name'].'</td>
                <td>'.$row['last_name'].'</td>
                <td>'.$row['password'].'</td>
                <td>'.$row['email'].'</td>
            </tr>';
            
            }
            ?>
        </tbody>
    </table>
</body>
</html>