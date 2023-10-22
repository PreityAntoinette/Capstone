<?php
session_start();

include("db.php");

if(isset($_POST['Register']))
{
    $fname = $_POST['firstname'];
    $mname = $_POST['middlename'];
    $lname = $_POST['lastname'];
    $mail = $_POST['email'];
    $pass = $_POST['password'];
    $repeatpass = $_POST['confirm_password'];

    if(!empty($mail) && !empty($pass) && !is_numeric($mail))
{
    $query = "insert into users (firstname, middlename, lastname, email, password,confirm_password) values ('$fname','$mname','$lname','$mail','$pass','$repeatpass')";

    mysqli_query($conn,$query);

    echo "<script type='text/javascript'> alert('Successfully Register')</script>";
}
else{
    echo "<script type='text/javascript'> alert('Please enter some Valid Information')</script>";
}
}



?>

<?php


if(isset($_POST['Login']))
{
   
    $mail = $_POST['email'];
    $pass = $_POST['password'];

    if(!empty($mail) && !empty($pass) && !is_numeric($mail)){
        $query = "select * from users where email = '$mail' limit 1";
        $result = mysqli_query($conn, $query);

        if($result){
            if($result && mysqli_num_rows ($result) > 0){
                $user_data = mysqli_fetch_assoc($result);

                if($user_data['password'] == $pass){
                    header("location: dashboard.php");
                    die;
                }
            }
        }
    }
    
    
}




?>

<!DOCTYPE html>
<!-- Coding By CodingNepal - codingnepalweb.com -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--font awesome cdn link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <!-- ===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <!-- ===== CSS ===== -->
    <link rel="stylesheet" href="css/Stylelogin.css">
         
    <title>Login & Registration Form</title> 
</head>
<body>

    <header>
        <input type="checkbox" name="" id="toggler">
        <label for="toggler" class="fas fa-bars"></label>
    
        <a href="#" class="logo">Lagring<span>Studio</span></a>
    
        <nav class="navbar">
            <a href="index.php">Home</a>
            <a href="#home">About us</a>
            <a href="#home">Services</a>
            <a href="#home">Gallery</a>
            <a href="Login.php">Log in</a>
        </nav>
    
        <div class="icons">
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-shopping-cart"></a>
            <a href="#" class="fas fa-user"></a>
        </div>
    
    
    
    
    
    
    
    </header>


    <div class="container">

        
        <div class="forms">
            <div class="form login">
                <span class="title">Login</span>

                <form method="POST">
                    <div class="input-field">
                        <input type="text" name="email" placeholder="Enter your email" required>
                        <i class="uil uil-envelope icon"></i>
                    </div>
                    <div class="input-field">
                        <input type="password" name="password" class="password" placeholder="Enter your password" required>
                        <i class="uil uil-lock icon"></i>
                        <i class="uil uil-eye-slash showHidePw"></i>
                    </div>

                    <div class="checkbox-text">
                        <div class="checkbox-content">
                            <input type="checkbox" id="logCheck">
                            <label for="logCheck" class="text">Remember me</label>
                        </div>
                        
                        <a href="#" class="text">Forgot password?</a>
                    </div>

                    <div class="input-field button">
                        <input type="submit" value="Login" name="Login">
                    </div>
                    
                </form>

                <div class="login-signup">
                    <span class="text">Not a member?
                        <a href="#" class="text signup-link">Signup Now</a>
                    </span>
                </div>
            </div>

            <!-- Registration Form -->
            <div class="form signup">
                <span class="title">Registration</span>

                <form method="POST">
                    <div class="input-field">
                        <input type="text" name="firstname" placeholder="Enter your firstname" required>
                        <i class="uil uil-user"></i>
                    </div>

                    <div class="input-field">
                        <input type="text" name="middlename" placeholder="Enter your middlename" required>
                        <i class="uil uil-user"></i>
                    </div>

                    <div class="input-field">
                        <input type="text" name="lastname" placeholder="Enter your lastname" required>
                        <i class="uil uil-user"></i>
                    </div>

                    <div class="input-field">
                        <input type="text" name="email" placeholder="Enter your email" required>
                        <i class="uil uil-envelope icon"></i>
                    </div>
                    <div class="input-field">
                        <input type="password" name="password" class="password" placeholder="Create a password" required>
                        <i class="uil uil-lock icon"></i>
                    </div>
                    <div class="input-field">
                        <input type="password" name="confirm_password" class="password" placeholder="Confirm a password" required>
                        <i class="uil uil-lock icon"></i>
                        <i class="uil uil-eye-slash showHidePw"></i>
                    </div>
                    

                    <div class="checkbox-text">
                        <div class="checkbox-content">
                            <input type="checkbox" id="termCon">
                            <label for="termCon" class="text">I accepted all terms and conditions</label>
                        </div>
                    </div>

                    <div class="input-field button">
                        <input type="submit" value="Signup" name="Register">
                    </div>
                </form>

                <div class="login-signup">
                    <span class="text">Already a member?
                        <a href="#" class="text login-link">Login Now</a>
                    </span>
                </div>
            </div>
        </div>
    </div>

     <script src="js/script.js"></script> 
</body>
</html>