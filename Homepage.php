<?php
session_start();
include 'navbar.php';
require_once('connect.php');
   if(!$_SESSION["user"]){
 echo " <h2>Login Frist </h2>";
 header("refresh:1 ; login_student.php");

}else{
    $user=$_SESSION["user"];
    $sql="select first_name from student where email='$user'";
    $result=mysqli_query($conn,$sql);
    
   
    }
?>

<!DOCTYPE html>
<html>
<head>
<title>homepage</title>
</head><br />
<body>
<div class="row">
<div class="col s12 center">
<nav>
    <div class="nav-wrapper">
      <div class="col s12">
        Welcome <?php if(mysqli_num_rows($result)>0){
        while($row=mysqli_fetch_assoc($result)){
            echo $row['first_name'];
        }
    } ?> to Cusatified.net, we are glad to have you here. :)    
      </div>
    </div>
</nav>

</div></div>

<h4>Select your Branch from Navigation Bar  </h4>
<h4>If using Mobile or tablet, select branch from top left menu bar </h4>
<hr style="background:linear-gradient(to right,#8a3ab9,#4c68d7,#cd486b,#fbad50,#bc2a8d,#e95950) ; height: 2px;"/>
<!-- --------------------------------------------------------------Table Work Starts from here (to be done at the time of backend------------------------------------------------------------------------ -->
</body>

<?php
include 'footer.php'
?>
</html>