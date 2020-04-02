<?php
session_start();
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
echo " Duplicate data";


}else{

    $qy ="insert into signup (name,password) values ('$name', '$pass')";
    mysqli_query($con,$qy); 
}

?> 
