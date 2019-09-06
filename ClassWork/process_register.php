<!DOCTYPE html> 

<html><head> 
<title>Process Registration</title> 

    </head> 

    <body bgcolor = lightblue><Center> 

                <H1>Process Registration</H1> 

                <form action ="register.php" method = "POST"> 

                    <label for ="firstname">First Name:</label> 
                    <input type ="firstname" name = "firstName" id="firstname" size="30"> <br><br>
                    
                     <label for ="lastname">Last Name:</label> 
                    <input type ="lastname" name = "lastName" id="lastname" size="30"> <br><br>
                    
                    <label for ="email">Email Address:</label> 
                    <input type ="email" name = "email" id="email" size="30"> <br><br>
                    
                    <label for ="password">Password:</label> 
                    <input type ="password"= name = "password" id ="password" size="30"> <br><br>
                    
                    <label for ="confpassword">Confirmed Password:</label> 
                    <input type ="password"= name = "confpassword" id ="confpassword" size="30" ><br> <br>

                    <button> Register!</button> <br><br><br>
                    
                    <a href = login.php>I am already a memberr</a>

      

                    </form> 

 

</Center></body> 

    </html> 