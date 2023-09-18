<?php
if(isset($_POST['signup'])){
$host="localhost";
$username="root";
$password="";
$dbname="fearnobirds";

$conn= new mysqli($host,$username,$password,$dbname);

if(!$conn){
    echo "connection error...!";
}

$fname=$_POST['Fname'];
$mname=$_POST['Mname'];
$lname=$_POST['Lname'];
$email=$_POST['email'];
$telephone=$_POST['telephone'];
$password=$_POST['password'];
$cpassword=$_POST['cpassword'];

if($password == $cpassword){

$qry="INSERT INTO `signup`( `firstname`, `midname`, `lastname`, `email`, `telephone`, `password`) 
       VALUES ('$fname','$mname','$lname','$email','$telephone','$password')";

$insert= mysqli_query($conn,$qry);

if($insert){
    echo "<script> alert('data inserted successfully...!');</script>";
}
else{
    echo "data not inserted inserted ";
}
}
else{
    echo "<script> alert('password not the same')</script>";
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
        <div class="sign-up-body">
        <p>You are Welcome here! </p>
        <p>It seems that you want to be our member and we appreciate it very much. Please fill the form below.</p>
        <form method="POST" autocomplete="off">
       <div class="form-container">
        <div class="label">
       <div> Enter your first name:</div>    
        <div> Enter your middle name:</div>
        <div>Enter your last name:</div>
        <div> Enter Email if you have it:</div>
        <div> Enter your phone number:</div>
        <div>Enter your password:</div>
       <div> Confirm your password:</div>
       </div>
        <div class="input">
         <div class="input-leble"><input type="text" name="Fname" placeholder="First Name" required><br></div>
         <div class="input-leble"><input type="text" name="Mname" placeholder="Middle Name"><br></div>
         <div class="input-leble"><input type="text" name="Lname" placeholder="Last Name" required><br></div>
         <div class="input-leble"><input type="email" name="email" placeholder="Enter Email" required><br></div>
         <div class="input-leble"><input type="tel" name="telephone" placeholder="phone number" required><br></div>
         <div class="input-leble"><input type="password" name="password" placeholder="Enter Password" required><br></div>
        <div class="input-leble"></div><input type="password" name="cpassword" placeholder="confirm password" required></div>
        </div>
      </div>
        <button type="submit" name="signup" onclick="document.location='Signup.php'"id="signup-btn">Create account</button>
        </form>
        <p>If you want any  help, support, assistant or other idea you have you can chat with us buy using email</p>
        <p>Click to  <a href="mailto: jeandamourkubwimana0@gmail.com">Mail us</a>!</p>
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
