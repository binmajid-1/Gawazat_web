<?php
session_start();

require "ln/config.php";
?>

<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <title>Sign up</title>
    <link rel="stylesheet" href="css/signup.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script>
        function validate(){

            var a = document.getElementById("password").value;
            var b = document.getElementById("confirm_password").value;
            if (a!=b) {
               alert("Passwords do no match");
               return false;
            }
        }
     </script>
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
                    <div class="title">Signup</div>
                    <form action="signup.php"  name="f2"  onSubmit="return validate()" method = "POST">
                        <div class="input-boxes">
                            <div class="input-box">
                                <i class="fas fa-envelope"></i>
                                <input type="text" placeholder="Enter First name" required name="fname">
                                <input type="text" placeholder="Enter Last name" required name="lname">
                            </div>
                            <div class="input-box">
                                <i class="fas fa-envelope"></i>
                                <input type="text" placeholder="Enter your email" required name="email">
                            </div>

                            <div class="input-box">
                                <i class="fas fa-lock"></i>
                                <input type="password" placeholder="Enter your password" id="password" required name="password" minlength="5" maxlength="20">
                            </div>
                            <div class="input-box">
                                <i class="fas fa-lock"></i>
                                <input type="password" placeholder="Rewrite your password" id="confirm_password" required name="confirm_password" >
                            </div>
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
if (isset($_POST['sub'])){
// include './ln/config.php';
$firstName = $_POST['fname'];
$lastName = $_POST['lname'];
$email = $_POST['email'];
$pass = $_POST['password'];
// if (isset($_POST['sub'])) {
//echo $firstName. $lastName $email;
// print_r($_POST);


    // Prepare the query 
    $query = "SELECT * FROM account WHERE email = '$email'"; 
 
    // Execute the query 
    $result = $conn->query($query); 
 
    // Check if the email exists in the database 
    if ($result->num_rows > 0) { 
        echo "The email exists "; 
    }
    else { 
        
            $sql = "INSERT INTO account(fname,lname,email,pass)
            VALUES ('$firstName', '$lastName', '$email','$pass')";

            if (mysqli_query($conn, $sql)) {
                header("Location:join.php");
            }
                else{
                echo 'Error: '. mysqli_error($conn);
                }


          }
        
    




        }

?>