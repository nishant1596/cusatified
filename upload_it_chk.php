<?php
session_start();
require_once('connect.php');
include 'navbar.php';
$upload_dir='uploads/upload_it';
if(isset($_POST['btnsave'])){
    $name=$_POST['name'];
    $caption=$_POST['caption'];
    $filename=$_FILES['myfile']['name'];
    $filetmp=$_FILES['myfile']['tmp_name'];
    $filesize=$_FILES['myfile']['size'];
    
    if(empty($name)){
        $errormsg="Please input file name";
    }
    elseif(empty($caption)){
        $errormsg="Please Input Caption";
    }
    elseif(empty($filename)){
        $errormsg="Please Select File";
    }
    else{
        $fileext=strtolower(pathinfo($filename,PATHINFO_EXTENSION));
        $allowext=array('jpeg','png','jpg','gif','docx','pdf','ppt','xls','txt');
        
    // Random new variable for Photo
    $userfile=time().'_'.rand(1000,9999).'.'.$fileext;
    if(in_array($fileext,$allowext)){
        //check image size less than 16 MB
        if($filesize<1600000){
            move_uploaded_file($filetmp,$upload_dir.$userfile);
        }
        else{
            $errormsg="Image should be less than 16 MB";
        }
    }
    else{
        $errormsg="This file extension not allowed<br />Please select a valid file to upload";
    }
    }
    //check there is no error in uploaded file
    if(!isset($errormsg)){
        $sql="INSERT INTO it_branch (file,caption) values ('$filename','$caption')";
        $result=mysqli_query($conn,$sql);
        if($result){
            echo 'Succesfully uploaded the file';
            header('refresh:3;url=it_branch.php');
        }
        else{
            $errormsg='Error'.mysqli_error($conn);
}}}

?>