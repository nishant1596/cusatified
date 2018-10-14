<?php
session_start();
require_once('connect.php');
if(isset($_POST['submit'])){
    $email=$_POST['email'];
    $password=$_POST['password'];
    
    //checking user if exist with input email and password
    $sql="select email,password from student where email='$email' && password='$password'";
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0){
        $_SESSION['user']=$email;
        header('location:Homepage.php');
    }
    else{
        echo 'Email or Password incorrect';
        header('refresh:2;login_student.php');
    }
}
?>