<?php
include_once('connect.php');
if(isset($_POST['submit'])){
    $branch=$_POST['branch'];
    $password=$_POST['password'];
    $conf_password=$_POST['conf_password'];
    $first_name=$_POST['first_name'];
    $last_name=$_POST['last_name'];
    $tel_no=$_POST['tel_no'];
    $adm_no=$_POST['adm_no'];
    $email=$_POST['email'];
    
    if($password!=$conf_password){
        echo '<h4>Passwords do not match</h4><br/>';
        echo ' <h2>click back button</h2>'; 
?>
        <center><a href="signup_student.php"><button style="padding: 20px 60px; background-color: white; border:3px solid green;" type="submit" name="back"><span style="color: green; font-size: 18px;">Back</span></button></a></center>
    
<?php       header('refresh:5; url=signup_student.php');
    }
    if(!isset($branch)){ 
        ?>
    <h4>Please Select department</h4>
        <center><a href="signup_student.php"><button style="padding: 20px 60px; background-color: white; border:3px solid green;" type="submit" name="back"><span style="color: green; font-size: 18px;">Back</span></button></a></center>
    
<?php 
   }
?>
    
<?php
    $chk_user="select adm_no,email from student where adm_no='$adm_no' || email='$email'";

    $result=mysqli_query($conn,$chk_user);
    if(mysqli_num_rows($result)==1){
        echo "User with the admission number '$adm_no' or email id '$email' Already exist";
?><center><a href="signup_student.php"><button style="padding: 20px 60px; background-color: white; border:3px solid green;" type="submit" name="back"><span style="color: green; font-size: 18px;">Back</span></button></a></center>
<?php
        header('refresh:3;url=signup_student.php');
    }
    else{
        $insert_query="Insert Into student (adm_no,email,password,first_name,last_name,branch,mobile_no) values('$adm_no','$email','$password','$first_name','$last_name','$branch','$tel_no')";       
        $result=mysqli_query($conn,$insert_query);
        if($result){
            echo 'Registered Successfully, Please wait a moment'; 
            header('location:login_student.php');          
            }
            else{
                echo 'could not register';
                header('refresh:3;url=signup_student.php');
            } 
    
    }
 
}    

?>