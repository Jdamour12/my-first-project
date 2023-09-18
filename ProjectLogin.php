<?php

$con= new mysqli("localhost","root","","fearnobirds");

if(isset($_POST['login'])){

$email= $_POST['email'];
$password= $_POST['password'];
 
$select="SELECT * FROM signup WHERE email='$email' limit 1";
$result= mysqli_query($con,$select);
$row = mysqli_fetch_assoc($result);
if(mysqli_num_rows($result)>0){
    if($password == $row['password']){
        header("location:MyHome.php");
    }
    else{
        echo "<script> alert(' Incorect password ');</script>";
    }
}
else{
    echo "<script> alert('User not Registered ');</script>";
}
}


?>

<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
    <title>Homepage</title>
    <meta name="viewport" content ="width='device-width', initial-scale=1.0">
    <link rel="stylesheet" href="MyHome.css">
    </head>
    <body class="container">
        <div class="header">
        <div class="pic-logo">
            <div class="img">
            <img src="MyIcon.jpg" id="my-icon">
        </div>
        <div id="my-logo">
            <h3> Fear No Birds</h3>

        </div>
    </div>

        <div class="link">
            <a href="MyHome.php">Home</a>
            <a href="ProjectProduct.php">Product</a>
            <a href="ProjectSignup.php">Sign up</a>
            <a href="ProjectLogin.php">Login</a>
            <a href="ProjectContact.php">Contact us</a>
        </div>
        </div>
        <hr>
       
<div class="login">
    
    <form method="POST" autocomplete="off">
        <p>
            welcome back to our platform! please fill the required information 
        </p>
        <div class="login-container">
            <div>
               <div>Enter your Email:</div>
               <div>Enter your password:</div>
            </div>
            <div>
            <div><input type="email" name="email" placeholder="Email or phone number" required></div>
            <div><input type="password" name="password" placeholder="enter a password" required></div>
            </div>
        </div>
        <button id="login-btn" type="submit" name="login">LOGIN</button>
         <button id="forget-password">forget password</button>
        <br>
    
        <p>Is it your first time here? <a href="ProjectSignup.php">create account</a>
        </p>
    </form>
  </div> 
   <div class="last-division-contact">
            <div class="div-part1">
                <h3 style="color: blue;">About us</h3>
                Are you asking yourself,who are we?
                We are the farmers supporters,as our logo  <span id="logoo">"Fear No Birds"</span> says, we made this 
                  platform by targeting farmers as our first customers so that they will never be afraid to any bird.
                  For more information please click   <a href="ProjectMore.php">more</a>.
            </div>
            <div class="div-part1">
                <h3 style="color: blue;">chat with us</h3>
                If you have any idea or you need any support you can contact us through our social media:
                <ol>
                    <li>Tweeter:@*********</li>
                    <li>Whatsapp:078*******</li>
                  <li>Facebook:************</li>
                  <li>Instagram:@*********</li>
                </ol>
            </div>
            <div class="div-part1">
                <h3 style="color: blue;">
                    special thanks
                </h3>
              We are very happy to have you as our visitor if you want to become our member just tap on  <a href="ProjectSignup.php">Creat account</a>   or if you are one of us just   <a href="ProjectLOgin.php">Login</a>.Thank you!
            </div>
        </div>
 </body>
 </html>