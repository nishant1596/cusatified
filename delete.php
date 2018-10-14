<?php
session_start();
require_once('connect.php');
$user=$_SESSION["user"];
    $sql="select first_name from student where email='$user'";
    $result=mysqli_query($conn,$sql);

$id=$_GET['id'];

$sql="select * from student where email='$user'";
        $result=mysqli_query($conn,$sql);
        
            while($row=mysqli_fetch_assoc($result)){
              $table_name=$row['branch'];
              
        }
        $sql1="delete from $table_name where notes_id='$id'";
        $result2=mysqli_query($conn,$sql1);
        if($result2){
            echo '<center>Successfully deleted</center>';
            header('refresh:1;url=student_profile.php');
        }
        else{
            echo 'Could not deleted, may be due to network problem<br />Please try again later';
                
        }
        

?>