<?php
require_once "vendor/autoload.php";

use App\classe\Register;
$id=$_GET['id'];
$result=\App\classes\Register::registerupdate($id);
$data = mysqli_fetch_assoc($result);



if (isset($_POST['btn'])){
    \App\classes\Register::registerupdates($_POST);
}




?>
<html>
<head>
    <title>Registration Update</title>
</head>
<body>
<link rel="stylesheet" href="css/stylesheet.css">
<a href="index.php">Add Data</a>
<a href="view.php">View Data</a>
<form action="" method="POST">
    <div class="container">
        <h1>Updating data</h1>

        <label for="firstname"><b>Firstname</b></label>
        <input type="text"  name="firstname" value="<?php echo  $data['firstname'];?>" >
        <input type="hidden"  name="id" value="<?php echo  $data['id'];?>" >


        <label for="lastname"><b>Lastname</b></label>
        <input type="text"  name="lastname" value="<?php echo  $data['lastname'];?>">

        <label for="phone"><b>Phone</b></label>
        <input type="text" name="phone" value="<?php echo  $data['phone'];?> ">


        <label for="email"><b>Email</b></label>
        <input type="text"  name="email" value="<?php echo  $data['email'];?>">

        <label for="psw"><b>Password</b></label>
        <input type="password"  name="password" value="<?php echo  $data['password'];?>">

        <label for="psw-repeat"><b>Repeat Password</b></label>
        <input type="password"  name="passwords" value="<?php echo  $data['passwords'];?> ">


        <button type="submit"  name="btn">Update</button>
    </div>


</form>


</body>
</html>
