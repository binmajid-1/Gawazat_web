<?php

require "ln/config.php";
ob_start();
error_reporting(0);
?>
<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <title>Log in</title>
    <link rel="stylesheet" href="css/join.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <div class="container">
        <input type="checkbox" id="flip">
        <div class="cover">
            <div class="front">
                <img src="sin.jpg" alt="">
                <div class="text">
                    <span class="text-1">Enter your information <br>Enter your details under our security</span>
                    <span class="text-2">Let's get connected</span>
                </div>
            </div>
            <div class="back">

                <div class="text">
                    <span class="text-1">Complete miles of journey <br> with one step</span>
                    <span class="text-2">Let's get started</span>
                </div>
            </div>
        </div>
        <div class="forms">
            <div class="form-content">
                <div class="signup-form">
                    <div class="title">Log In</div>
                    <form name="f1" action = "join.php" onsubmit = "return validation()" method = "POST">
                        <div class="input-boxes">
                            <div class="input-box">
                                <i class="fas fa-envelope"></i>
                                <input type="email" placeholder="Enter your Email" required name="email">
                                 
                            </div>
                           

                            <div class="input-box">
                                <i class="fas fa-lock"></i>
                                <input type="password" placeholder="Enter your password" required name="pass">
                            </div>
                            <div class="text"><a href="#">Forgot password?</a></div>
                            <div class="button input-box">
                                <input type="submit" value="Sumbit" name="sub">
                            </div>
                            
                            </div>
                        </div>
                    </form>
                </div>




                
</body>

</html>



<?php   
if(isset($_POST['sub'])){ 
   // include('./ln/config.php');  
   $username = $_POST['email'];  
   $password = $_POST['pass'];  
     
       //to prevent from mysqli injection  
       $username = stripcslashes($username);  
       $password = stripcslashes($password);  
       $username = mysqli_real_escape_string($conn, $username);  
       $password = mysqli_real_escape_string($conn, $password);  
     
       $sql = "select *from account where email = '$username' and pass = '$password'";  
       $sql1 = "select *from staff where admin_email = '$username' and password = '$password'";  
       $result = mysqli_query($conn, $sql);  
       $result1 = mysqli_query($conn, $sql1);  
       $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
       $row1 = mysqli_fetch_array($result1, MYSQLI_ASSOC);  
       $count = mysqli_num_rows($result);    
       $count1 = mysqli_num_rows($result1);    
         
       if($row1['admin_email'] == 'admin@admin.com' && $row1['password'] == 'admin123'){  
        header("Location:../admin/dashbord.php");

    } else if($count == 1){  
           header("Location:index2.html");
 
       }  
       else{  
           echo "<h1> Login failed. Invalid username or password.</h1>";  
       }    
}
?>  