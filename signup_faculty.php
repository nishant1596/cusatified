<!DOCTYPE html>

<html>
 <head>
 <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
   <script type="text/javascript" src="js/materialize.min.js"></script>
  
   <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
   
   <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

   
   <meta name="viewport" content="width=device-width, initial-scale=1.0"/>


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">


<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
        <link rel="icon" href="http://example.com/favicon.png"/>
 </head>


   <!--Import jQuery before materialize.js-->
   
   <!----------------------------------------------------------------------------------------------------------  -->
   <!----------------------------------------------------------------------------------------------------------- -->

 <!--
 <body>
<div class="container-fluid"  >
<nav>
<a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>
    <div class="nav-wrapper z-depth-5 hoverable " style="background: linear-gradient(to right,#8a3ab9,#4c68d7,#cd486b,#fbad50,#bc2a8d,#e95950);" >
     
      <a href="index.html" class="brand-logo hoverable z-depth-5" style="padding-left: 10px; padding-right: 10px;font-family: 'Pacifico', cursive;">Cusatified</a>
        
      <ul id="nav-mobile" class="right ">
        <li class="active"><a href="#" class="hoverable z-depth-5 dropdown-button" data-beloworigin="true" data-activates="login_dropdown" style="font-family: Oswald;">Log-In</a></li>
        <li ><a href="#" class="hoverable z-depth-5 dropdown-button hide-on-med-and-down" data-beloworigin="true" data-activates="signup_dropdown" style="font-family: Oswald;">Sign-Up</a></li>
      </ul>
    </div> 
</nav> -->
<!-- Side menu item -

<ul id="slide-out" class="side-nav">
    <ul class="collapsible collapsible-accordion">
    
      <li><a href="#" class="collapsible-header " >Log-In<i class="material-icons">arrow_drop_down</i></a>
      <div class="collapsible-body">
      <ul>
        <li><a href="login_student.php">Login as Student</a></li>
        <li><a href="login_faculty.php">Login as Faculty</a></li>
      </ul>
      </div></li>
      <li><a class="collapsible-header">Sign-Up<i class="material-icons">arrow_drop_down</i></a>
      <div class="collapsible-body">
      <ul>
        <li><a href="signup_student.php">Sign-Up as Student</a></li>
        <li><a href="signup_faculty.php">Sign-Up as Faculty</a></li>
      </ul>
      </div></li>
     
    </ul>
    
    </ul> -->
            <!-- Navigation bAr Login dropdown--> <!--
  <ul style="background-color:#e95950; " id="login_dropdown" class="dropdown-content ">
  <li><a href="login_student.php" style="color:white;" class="log_style">Student Login</a></li>
  <li class="divider"></li>
  <li><a href="login_faculty.php" style="color:white;" class="log_style">Faculty Login</a></li>
  </ul>
  <ul id="signup_dropdown" class="dropdown-content" style="background-color:#e95950; ">
  <li><a href="signup_student.php" style="color:white;" class="log_style">Student SignUp</a></li>
  <li class="divider"></li>
  <li><a href="signup_faculty.php" style="color:white;" class="log_style">Faculty SignUp</a></li>
  </ul>
  <script>
  // Initialize collapse button
  $(".button-collapse").sideNav();
  // Initialize collapsible (uncomment the line below if you use the dropdown variation)
  $('.collapsible').collapsible();
  </script><br /><br /><br />
  
  <script>
  $(document).ready(function() {
    $('select').material_select();
  });
            $('.dropdown-button').dropdown({
      inDuration: 300,
      outDuration: 225,
      constrain_width: false, // Does not change width of dropdown to that of the activator
      hover: false, // Activate on hover
      gutter: 0, // Spacing from edge
      belowOrigin: false, // Displays dropdown below the button
      alignment: 'left' // Displays dropdown with edge aligned to the left of button
    }
  );
  </script> -->
  <!------------------------------------------------------BreadCrumbs---------------------------------------------------------------- -->
  <!------------------------------------------------------           ---------------------------------------------------------------- -->
  
            
  <!------------------------------------------------------Forms Starts from here---------------------------------------------------------------- -->
  <!--
  <div class="row">
<div class="col l3 ">
<nav>
    <div class="nav-wrapper">
      <div class="col s12">
        <a href="index.html" class="breadcrumb">Cusatified.net</a>
        <a href="signup_faculty.php" class="breadcrumb">Faculty-SignUp</a>
        
      </div>
    </div>
  </nav>
</div>
<div class="col s12 l6 m12">

    <form class="col s12">
      <div class="row">
        <div class="input-field col s6">
          <input id="first_name" type="text" class="validate"/>
          <label for="first_name">First Name</label>
        </div>
        <div class="input-field col s6">
          <input id="last_name" type="text" class="validate"/>
          <label for="last_name">Last Name</label>
        </div>
      </div>
      
       <div class="input-field col s12">
          <i class="material-icons prefix">phone</i>
          <input id="icon_telephone" maxlength="10" type="tel" class="validate"/>
          <label for="icon_telephone">Telephone</label>
        </div>
        <div class="row">
       <div class="input-field col s12" >
    <select  >
      <option value="it_dep_fac_signup" selected="it_dep_fac_signup">Information Technology</option>
      <option value="cs_dep_fac_signup">Computer Science</option>
      <option value="eee_dep_fac_signup">Electrical Engineering</option>
      <option value="ec_dep_fac_signup">Electronics and Communication</option>
      <option value="me_dep_fac_signup">Mechanical Engineering</option>
      <option value="civil_dep_fac_signup">Civil Engineering</option>
      <option value="safety_dep_fac_signup">Safety and Fire </option>
    </select>
    <label>Select Department</label>
  </div></div>
       <div class="row">
        <div class="input-field col s12">
          <input id="email" type="email" class="validate"/>
          <label for="email" data-error="Please Enter a valid Email" data-success="Valid Email">Email</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="password" type="password" class="validate"/>
          <label for="password">Password</label>
        </div>
        <div class="row">
        <div class="input-field col s12">
          <input id="password" type="password" class="validate"/>
          <label for="password">Confirm Password</label>
        </div></div>
      </div>
      <div class="row"><div class="col s12 center">
     <button class="btn waves-effect hoverable z-depth-4" style="background: linear-gradient(to right,#8a3ab9,#4c68d7,#cd486b,#fbad50,#bc2a8d,#e95950); " type="submit" name="action">Create Account
    <i class="material-icons right">send</i>
  </button></div></div>
    </form>
  </div></div>
  <div class="col l3"></div></div></body></html> -->
  <h4>Faculty Section is Currently in Development Phase</h4>
  