<?php
require_once "vendor/autoload.php";

use App\classe\Register;

if (isset($_POST['btn'])){
    \App\classes\Register::register($_POST);
}




?>
<html>
<head>
    <title>Registration Form</title>
</head>
<body>
<link rel="stylesheet" href="css/stylesheet.css">
<a href="index.php">Add Data</a>
<a href="view.php">View Data</a>
<form action="" method="POST">
    <div class="container">
        <h1>Register</h1>
        <p>Please fill in this form to create an account.</p>
        <hr>
        <label for="firstname"><b>Firstname</b></label>
        <input type="text" placeholder="Enter Firstname" name="firstname" >


        <label for="lastname"><b>Lastname</b></label>
        <input type="text" placeholder="Enter LastName" name="lastname" >

        <label for="phone"><b>Phone</b></label>
        <input type="text" placeholder="Enter Phone" name="phone" >


        <label for="email"><b>Email</b></label>
        <input type="text" placeholder="Enter Email" name="email" >

        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="password" >

        <label for="psw-repeat"><b>Repeat Password</b></label>
        <input type="password" placeholder="Repeat Password" name="passwords" >
        <hr>

        <p>By creating an account you agree to our </p>
        <button type="submit"  name="btn">Register</button>
    </div>

    <div class="container signin">
        <p>Already have an account? </p>
    </div>
</form>


</body>
</html>
