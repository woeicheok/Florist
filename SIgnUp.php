<?php
if(isset($_POST["signup"])){
    include("../php/dbconnect.php");
    $username = $_POST["username"];
    $password = $_POST["password"];
    $password2 = $_POST["password2"];
    $name = $_POST["name"];
    $ic = $_POST["ic"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];
    $sqlsignup = "INSERT INTO `table_newsignup`(`ic`, `username`, `name`, `email`, `passowrd`, `confirm password`, `phone`, `address`) 
    VALUES ('$ic','$username','$name','$email','$password','$password2','$phone','$address')";
    try{
        $conn->exec($sqlsignup);
        echo "<script>alert('Sign Up Successful')</script>";
        echo "<script>window.location.replace('login.php')</script>";
    } catch (PDOException $e) {
        echo "<script>alert('Sign Up Failed')</script>";
        echo "<script>window.location.replace('signup.php')</script>";
    }
}    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <script src="../script.js"></script>
    <title>Sign Up </title>
</head>

<body> 
    <div class="w3-header w3-display-container w3-black w3-padding-32 w3-center">
        <h1 style="font-size:calc(8px + 4vw);">F&L Florist</h1>
        <p style="font-size:calc(4px + 2vw);"></p>
    </div>

    <div class="w3-bar-item w3-pale-yellow">
         <a href="login.php" class="w3-bar-item w3-button">BACK</a>
    </div>

    <div class="w3-container w3-padding-64 form-container2">
        <div class="w3-card-4 w3-round">

            <div class="w3-container w3-pale-yellow">
                <h2>Sign Up Form</h2>
                <p>Enter your information to sign up</p>
            </div>
            <form class="w3-container w3-padding formo" name="SignUpForm" class="w3-container" 
            action="SignUp.php" method="post" onsumbit="return confirmDialog()" enctype="multipart/form-data">
                <p>
                    <label class="w3-text-black"><b>Username</b></label>
                    <input class="w3-input w3-border w3-round" name="username" id="idusername" type="text" required>
                </p>
                <p>
                    <label class="w3-text-black"><b>Password</b></label>
                    <input class="w3-input w3-border w3-round" name="password" id="idpassword" type="password" required>
                </p>
                <p>
                    <label class="w3-text-black"><b>Confirm your password</b></label>
                    <input class="w3-input w3-border w3-round" name="password2" id="idpassword2" type="password" required>
                </p>
                <p><b><br>Please Enter you personal Detial</b><br></p>
                <p>
                    <label class="w3-text-black"><b>Name</b></label>
                    <input class="w3-input w3-border w3-round" name="name" id="idname" type="text" required>
                </p>
                <p>
                    <label class="w3-text-black"><b>IC/Passport Number</b></label>
                    <input class="w3-input w3-border w3-round" name="ic" id="idic" type="text" required>
                </p>
                <p>
                    <label class="w3-text-black"><b>Email</b></label>
                    <input class="w3-input w3-border w3-round" name="email" id="idemail" type="email" required>
                </p>
                <p>
                    <label class="w3-text-black"><b>Phone</b></label>
                    <input class="w3-input w3-border w3-round" name="phone" id="idphone" type="phone" required>
                </p>
                <p>
                    <label class="w3-text-black"><b>Address</b></label>
                    <textarea class="w3-input w3-border w3-round" name="address" id="idaddress" rows="4" cols="50" 
                    width="100%" type="text" required></textarea>
                </p>
                <p>
                    <button class="w3-btn w3-round w3-pale-yellow w3-block w3-center" type="signup" onclick="return confirmDialog()" name="signup">Sign Up</button>
                </p>
            </form>
        </div>
    </div>
</body>
    

<footer class="w3-container w3-pale-yellow w3-center">
    <p> © Copyright:Florist</p>
    <p>TERMS AND CONDITIONS <br> PRIVACY POLICY</p>
    <p><a href="mailto:Florist@example.com">F&Lflorist@gmail.com</a></p>
</footer>

</html>