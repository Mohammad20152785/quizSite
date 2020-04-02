<?php
session_start();
 header('location:LoginPage.php');
$con = mysqli_connect('localhost', 'root');
if($con){

    echo "Registration has been created successfully!";
}else{

    echo "Error: please try again!";
}
mysqli_select_db($con,'practical');

$name = $_POST['user'];
$pass = $_POST['password'];


$q = "select * from signup where name ='$name' && password ='$pass' ";
$result =  mysqli_query($con, $q);
$num = mysqli_num_rows($result);
if($num == 1){
$_SESSION['username'] = $name;
header('location:Loginpage.php');



}
else{
    header('location:home.php');
}

?>  
