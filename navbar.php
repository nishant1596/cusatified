<?php
require_once('connect.php');
   if(!$_SESSION["user"]){
 echo " <h2>Login Frist </h2>";
 header("refresh:2 ; login_student.php");

}else{
    $user=$_SESSION["user"];
    $sql="select first_name from student where email='$user'";
    $result=mysqli_query($conn,$sql);
    }
?>
<!DOCTYPE html>
<html>
 <head>
 <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
   <script type="text/javascript" src="js/materialize.min.js"></script>
   <!--Import Google Icon Font-->
   <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
   <!--Import materialize.css-->
   <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

   <!--Let browser know website is optimized for mobile-->
   <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

<!-- Compiled and minified CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">

<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>

 </head>
   
   <!----------------------------------------------------------------------------------------------------------  -->
   <!----------------------------------------------------------------------------------------------------------- -->

 
 
 <body>
 
 <nav class="hide-on-med-and-down">

    <div class="nav-wrapper z-depth-5 hoverable " style="background: linear-gradient(to right,#8a3ab9,#4c68d7,#cd486b,#fbad50,#bc2a8d,#e95950);" >
     
      <a href="Homepage.php" class="brand-logo hoverable z-depth-5" style="padding-left: 10px;float: left; padding-right: 10px;font-family: 'Pacifico', cursive;">Cusatified</a>
        
      <ul id="nav-mobile" class="right ">
      <li><a class="dropdown-button center hoverable z-depth-5 hide-on-med-and-down" href="#!" style="margin-right: 500px;font-family: Oswald;padding-right: 50px; padding-left:50px;" data-activates="dropdown1" data-beloworigin="true">Select Branch<i class="material-icons right">arrow_drop_down</i></a></li>
        <li><li><a class="dropdown-button right hoverable z-depth-5" href="#!" style="" data-activates="dropdown3" ><i class="material-icons">account_circle</i></a></li></li>
        
      </ul>
    </div>
    </nav>

<nav class="hide-on-large-only">
    <a href="#" data-activates="slide-out1" class="button-collapse"><i class="material-icons">menu</i></a>
    <div class="nav-wrapper z-depth-5 hoverable " style="background: linear-gradient(to right,#8a3ab9,#4c68d7,#cd486b,#fbad50,#bc2a8d,#e95950);" >
    <a href="Homepage.php" class="brand-logo hoverable z-depth-5" style="padding-left: 10px;float: left; padding-right: 10px;font-family: 'Pacifico', cursive;">Cusatified</a>
        <ul id="nav-mobile" class="right ">
        <li><a href="#" data-activates="slide-out2" class="button-collapse"><i class="material-icons">account_circle</i></a></li>
        </ul>
    </div>
</nav>
<ul id='dropdown1' class='dropdown-content'>
    <li><a href="it_branch.php">Information Tech.</a></li>
    <li><a href="cs_branch.php">Computer Science</a></li>
    <li><a href="me_branch.php">Mechanical Eng.</a></li>
    <li><a href="civil_branch.php">Civil Engineering</a></li>
    <li><a href="ece_branch.php">Electronics and Communication</a></li>
    <li><a href="eee_branch.php">Electrical Eng.</a></li>
    <li><a href="safety_branch.php">Safety and Fire</a></li>
  </ul>
  <!------------------------------------------- -->
    <!--------------------------------------------------------Dropdown content for Profile Option---------------------- -->
    
    
    <ul id="dropdown3" class="dropdown-content"> 
    <li style="background-color: purple; text-align: center;"><h6 style="color: white;padding-top:10px; ">Hello  <?php if(mysqli_num_rows($result)>0){
        while($row=mysqli_fetch_assoc($result)){
          $username=$row['first_name'];
          echo $username;
        }
    } ?></h6></li>
    <li class="divider"></li>
    <li style="background-color: purple; text-align: center;"><a style="color: white; " href="student_profile.php">My Uploads</a></li>
    <li class="divider"></li>
    <li style="background-color: purple; text-align: center;"><a href="logout_student.php">Sign-Out</a></li>
    </ul>
    <!----------------------------------------------------------------------------------------------------------------- -->
<ul id="slide-out1" class="side-nav">
    <ul class="collapsible collapsible-accordion">
          <li>
            <a class="collapsible-header">Select Branch<i class="material-icons">arrow_drop_down</i></a>
            <div class="collapsible-body">
              <ul>
                <li><a href="it_branch.php">Information Technology</a></li>
                <li><a href="cs_branch.php">Computer Science</a></li>
                <li><a href="me_branch.php">Mechanical Engineering</a></li>
                <li><a href="eee_branch.php">Electrical Engineering</a></li>
                <li><a href="ece_branch.php">Electronics and Communication </a></li>
                <li><a href="civil_branch.php">Civil Engineering</a></li>
                <li><a href="safety_branch.php">safety and Fire Engineering</a></li>
              </ul>
            </div>
          </li>
        </ul>
       <ul class="collapsible collapsible-accordion">
          <li>
            <a class="collapsible-header">Upload Notes<i class="material-icons">arrow_drop_down</i></a>
            <div class="collapsible-body">
              <ul>
                <li><a href="upload_it.php">Information Technology</a></li>
                <li><a href="upload_civil.php">Computer Science</a></li>
                <li><a href="upload_me.php">Mechanical Engineering</a></li>
                <li><a href="upload_eee.php">Electrical Engineering</a></li>
                <li><a href="upload_ece.php">Electronics and Communication </a></li>
                <li><a href="upload_civil.php">Civil Engineering</a></li>
                <li><a href="upload_safety.php">safety and Fire Engineering</a></li>
              </ul>
            </div>
          </li>
        </ul>
        <li><a href="logout_student.php">Log-out</a></li>
        
    </ul>
    <!--------------------------------------------------------------------------------------------------------  -->
    
    <ul id="slide-out2" class="side-nav">
    <ul class="collapsible collapsible-accordion">
          <li><a><h4>Hello <?php 
        echo $username;
        
     ?></h4></a></li>
          <li><a class="collapsible-header" href="student_profile.php">My Uploaded Notes</a></li>
          <li><a class="collapsible-header" href="logout_student.php">SignOut</a></li>
    </ul>
    </ul>
    <!--------------------------------------------------------------------------------------------------------  -->
  <script>
  // Initialize collapse button
  $(".button-collapse").sideNav();
  // Initialize collapsible (uncomment the line below if you use the dropdown variation)
  $('.collapsible').collapsible();
  
  // List appears automatically on hovering button
  $('.dropdown-button').dropdown({
      inDuration: 300,
      outDuration: 225,
      constrain_width: false, // Does not change width of dropdown to that of the activator
      hover: false, // Activate on hover
      gutter: 0, // Spacing from edge
      belowOrigin: true, // Displays dropdown below the button
      alignment: 'left' // Displays dropdown with edge aligned to the left of button
    }
  );
  
  </script>
</body>
</html>