<?php
require_once "vendor/autoload.php";

use App\classe\Register;

$result=\App\classes\Register::getregister();

if(isset($_GET['delete'])){
   $id= $_GET['id'];
  \App\classes\Register::delete($id);

}
?>
<html>
<head>
    <title>View Data</title>
</head>
<body>
<link rel="stylesheet" href="css/stylesheet.css">
<a href="index.php">Add Data</a>
<a href="view.php">View Data</a>
<table border="2px">
    <tr>
        <th>ID</th>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Phone</th>
        <th>Email</th>
        <th>Password</th>
        <th>Passwords</th>
        <th>Update</th>
        <th>Delete</th>
    </tr>
    <?php while
    ($data = mysqli_fetch_assoc($result)){?>
    <tr>
        <td>
            <?php echo $data['id']?>
        </td >
        <td contenteditable="true">   <?php echo $data['firstname']?></td>
        <td contenteditable="true">   <?php echo $data['lastname']?></td>
        <td contenteditable="true">   <?php echo $data['phone']?></td>
        <td contenteditable="true">   <?php echo $data['email']?></td>
        <td contenteditable="true">   <?php echo $data['password']?></td>
        <td contenteditable="true">   <?php echo $data['passwords']?></td>
        <td><a href="edit.php?id= <?php echo $data['id']?>       </td >
">Edit</a></td>
        <td><a href="?delete=true&id=<?php echo $data['id']?>"onclick="return confirm('are you sure delete this data!!')">Delete</a></td>
    </tr>
<?php }?>
</table>


</body>
</html>
