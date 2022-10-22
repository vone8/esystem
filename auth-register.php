<?php
session_start();
include_once( 'includes/config.php' );
// Code for login
if ( isset( $_POST[ 'user-register' ] ) ) {
    print_r( $_POST );
    if ( $_POST[ 'user-password' ] != $_POST[ 'user-confirm-password' ] ) {
        echo "<script> alert(' Please enter same password')</script>";

    } else {
        $fname = $_POST[ 'user-firstname' ];
        $lname = $_POST[ 'user-lastname' ];
        $email = $_POST[ 'user-email' ];
        $password = md5( $_POST[ 'user-password' ] );
        $contact = $_POST[ 'user-contactno' ];
        $sql = mysqli_query( $con, "select id from eff_users where email='$email'" );
        $row = mysqli_num_rows( $sql );
        if ( $row>0 ) {
            echo "<script>alert('Email id already exist with another account. Please try with other email id');</script>";
        } else {
            $msg = mysqli_query( $con, "insert into eff_users(first_name,last_name,contact_no,email,password,user_type,user_status) values('$fname','$lname','$contact','$email','$password','null',0)" );

            if ( $msg ) {
                echo "<script>alert('Registered successfully');</script>";
                echo "<script type='text/javascript'> document.location = 'index.php'; </script>";
            }
        }
    }

}
//Code for Registration
if ( isset( $_POST[ 'user-register' ] ) ) {
    $fname = $_POST[ 'fname' ];
    $lname = $_POST[ 'lname' ];
    $email = $_POST[ 'email' ];
    $password = $_POST[ 'password' ];
    $contact = $_POST[ 'contact' ];
    $sql = mysqli_query( $con, "select id from users where email='$email'" );
    $row = mysqli_num_rows( $sql );
    if ( $row>0 ) {
        echo "<script>alert('Email id already exist with another account. Please try with other email id');</script>";
    } else {
        $msg = mysqli_query( $con, "insert into users(fname,lname,email,password,contactno) values('$fname','$lname','$email','$password','$contact')" );

        if ( $msg ) {
            echo "<script>alert('Registered successfully');</script>";
            echo "<script type='text/javascript'> document.location = 'login.php'; </script>";
        }
    }
}

?>

<!DOCTYPE html>
<html lang = 'en'>

<head>
<meta charset = 'UTF-8'>
<meta name = 'viewport' content = 'width=device-width, initial-scale=1.0'>
<title>Register</title>
<link href = 'https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap' rel = 'stylesheet'>
<link rel = 'stylesheet' href = 'assets/css/bootstrap.css'>
<link rel = 'stylesheet' href = 'assets/vendors/bootstrap-icons/bootstrap-icons.css'>
<link rel = 'stylesheet' href = 'assets/css/app.css'>
<link rel = 'stylesheet' href = 'assets/css/pages/auth.css'>
<script src = 'https://kit.fontawesome.com/0b122afe5f.js' crossorigin = 'anonymous'></script>
</head>

<body>
<div id = 'auth'>

<div class = 'row h-100'>
<div class = 'col-lg-5 col-12'>
<div id = 'auth-left'>
<div class = 'auth-logo'>
<a href = 'index.php'></a>
</div>
<h1 class = 'auth-title'>Sign Up</h1>
<p class = 'auth-subtitle mb-5'>Input your data to register to our website.</p>

<form method = 'post'>
<div class = 'form-group position-relative has-icon-left mb-4'>
<input type = 'text' class = 'form-control form-control-xl' placeholder = 'First Name' name = 'user-firstname'>
<div class = 'form-control-icon'>
<i class = 'far fa-user'></i>
</div>
</div>
<div class = 'form-group position-relative has-icon-left mb-4'>
<input type = 'text' class = 'form-control form-control-xl' placeholder = 'Last Name' name = 'user-lastname'>
<div class = 'form-control-icon'>
<i class = 'far fa-user'></i>
</div>
</div>
<div class = 'form-group position-relative has-icon-left mb-4'>
<input type = 'number' class = 'form-control form-control-xl' placeholder = 'Contact Number' name = 'user-contactno'>
<div class = 'form-control-icon'>
<i class = 'fas fa-phone-alt'></i>
</div>
</div>
<div class = 'form-group position-relative has-icon-left mb-4'>
<input type = 'text' class = 'form-control form-control-xl' placeholder = 'Email' name = 'user-email'>
<div class = 'form-control-icon'>
<i class = 'bi bi-envelope'></i>
</div>
</div>
<!--  <div class = 'form-group position-relative has-icon-left mb-4'>
<input type = 'text' class = 'form-control form-control-xl' placeholder = 'Username'>
<div class = 'form-control-icon'>
<i class = 'bi bi-person'></i>
</div>
</div> -->
<div class = 'form-group position-relative has-icon-left mb-4'>
<input type = 'password' class = 'form-control form-control-xl' placeholder = 'Password' name = 'user-password'>
<div class = 'form-control-icon'>
<i class = 'bi bi-shield-lock'></i>
</div>
</div>
<div class = 'form-group position-relative has-icon-left mb-4'>
<input type = 'password' class = 'form-control form-control-xl' placeholder = 'Confirm Password' name = 'user-confirm-password'>
<div class = 'form-control-icon'>
<i class = 'bi bi-shield-lock'></i>
</div>
</div>
<button class = 'btn btn-primary btn-block btn-lg shadow-lg mt-5' name = 'user-register'>Sign Up</button>
</form>
<div class = 'text-center mt-5 text-lg fs-4'>
<p class = 'text-gray-600'>Already have an account? <a href = 'index.php'

class = 'font-bold'>Log
in</a>.</p>
</div>
</div>
</div>
<div class = 'col-lg-7 d-none d-lg-block'>
<div id = 'auth-right'>

</div>
</div>
</div>

</div>
</body>

</html>