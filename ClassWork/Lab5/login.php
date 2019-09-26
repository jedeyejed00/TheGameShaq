<!DOCTYPE html> 

<html><head> 

                 

        <title>Forms</title> 

    </head> 

    <body>
        <?php
        $email = "";
        $password = "";
        
        if($server['REQUEST_METHOD'] == 'POST')
        {
            $email = $_POST['email'];
            $password = $POST['password'];
            
        }
       
        ?>
        <Center> 

                <H1>Sticky Forms</H1> 

                <form action="login.php" method="get"> 

                    <label for ="Email">Email</label> 

                    <input type ="Text id="email" name = "email" value = ""> 
                    
                    <label for ="password">Password</label> 

                    <input type ="Text id="password" name = "password" value = ""> 

                    <button> Submit</button> 

      

                    </form> 

 

 </Center> 
</body> 

    </html> 