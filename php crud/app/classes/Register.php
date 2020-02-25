<?php
namespace App\classes;

class Register
{
    protected $link;
    private function dbConnector()
    {
        $hostName='localhost';
        $userName='root';
        $password='';
        $dbName='php';
       $link= mysqli_connect($hostName,$userName,$password,$dbName);
       return $link;
    }

    public function register($data)
{


$sql="INSERT INTO cruds(firstname,lastname,phone,email,password,passwords) VALUES('$data[firstname]','$data[lastname]','$data[phone]','$data[email]','$data[password]','$data[passwords]'   )";
if(mysqli_query(Register::dbConnector(),$sql)){
    echo 'successfully saved';
}else{
   echo 'data note saved'.mysqli_connect_error(Register::dbConnector());
}

}
public function getregister(){

    $sql= "SELECT * FROM cruds";
    if(mysqli_query(Register::dbConnector(),$sql)){
       $result=mysqli_query(Register::dbConnector(),$sql);
      return $result;
    }else{
        echo 'moira jah';
    }

}
public function registerupdate($id){
$sql="SELECT * FROM cruds WHERE id ='$id' ";
    if(mysqli_query(Register::dbConnector(),$sql)){
        $result=mysqli_query(Register::dbConnector(),$sql);
        return $result;
    }else{
        echo 'moira jah';
    }

}
public function registerupdates($data){
        $sql="UPDATE cruds SET firstname='$data[firstname]',lastname='$data[lastname]',phone='$data[phone]',email='$data[email]',password='$data[password]',passwords='$data[passwords]' WHERE id='$data[id]'";
    if(mysqli_query(Register::dbConnector(),$sql)){
       header('Location:view.php');
    }else{
        echo 'moira jah';
    }
    }
    public function delete($id){

$sql="DELETE FROM cruds WHERE id='$id' ";
if(mysqli_query(Register::dbConnector(),$sql)){
    echo 'deleted';
}else{
    echo "not deleted";
}
    }
}