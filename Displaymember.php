<?php
session_start();
 if (!isset($_SESSION['sessionid'])){
    echo  "<script>alert('Session not available. Please Login');</script>";
    echo  "<script> window.location.replace('login.php')</script>";
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
    <title>Member Detials</title>

</head>

<body>
    <div class="w3-header w3-display-container w3-black w3-padding-32 w3-center">
        <h1 style="font-size:calc(8px + 4vw);">F&L Florist</h1>
        <p style="font-size:calc(4px + 2vw);">Welcome to the F&L FLorist</p>
    </div>
    <div class="w3-bar-item w3-pale-yellow">
         <a href="mainpage.php" class="w3-bar-item w3-button w3-hide-small w3-left">Home</a>
        <a href="login.php" class="w3-bar-item w3-button w3-right">Logout</a>
    </div>

</body>


<footer class="w3-container w3-pale-yellow w3-center">
    <p> © Copyright:Florist</p>
    <p>TERMS AND CONDITIONS <br> PRIVACY POLICY</p>
    <p><a href="mailto:Florist@example.com">F&Lflorist@gmail.com</a></p>
</footer>

</html>