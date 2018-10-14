<?php
session_start();
require_once('connect.php');
include 'navbar.php';

if(isset($_POST['search'])){
    $semester=$_POST['semester'];
    $subject=$_POST['subject'];
    $query="select * from it_branch where semester='$semester' && subject='$subject'";
    $result=mysqli_query($conn,$query);
    $path='localhost/cusatified/upload_it/';    ///////////////////////////////////////////////////////////
} /*
if(isset($_POST['ques'])){
    echo 'hh';
            
    $query2="select * from it_branch where semester='$semester' && subject='$subject'";   ////////////////////////////
    
    $result2=mysqli_query($conn,$query2);
    $path='localhost/cusatified/upload_it/';    
} */
?>


<!DOCTYPE html>
<html>
<head>
<title>Notes</title>

</head><br />
<body>
<div class="row">
<div class="col s12 center">
<nav>
    <div class="nav-wrapper">
      <div class="col s12">
        <a href="homepage.html" class="breadcrumb">Information-Technology</a>       <!--------------------------------------------------  -->     
      </div>
    </div>
</nav>

</div></div>
<form action="it_branch.php" method="POST">     <!--------------------------------------------------  -->   
<div class="row">
  <div class="col s12 l6 m6" >
  
 
     <div class="input-field col s12">
         <select class="icons" id="semester" name="semester" onchange="populateSubject();"></select>
               <label>Choose Semester </label>                     
       </div>
    
    
  </div>

<div class="col s12 l6 m6" >
<div class="input-field">
    <select class="icons" id="subject" name="subject"></select>
         <label>Choose Subject</label>
</div>

</div>

</div>
<div class="row">
<div class="center">
<button class="btn waves-effect hoverable z-depth-4" style="background: linear-gradient(to right,#8a3ab9,#4c68d7,#cd486b,#fbad50,#bc2a8d,#e95950); center " type="submit" name="search">Notes
    <i class="material-icons right">search</i></button>&nbsp;&nbsp;&nbsp;
   <!-- <button class="btn waves-effect hoverable z-depth-4" style="background: linear-gradient(to right,#8a3ab9,#4c68d7,#cd486b,#fbad50,#bc2a8d,#e95950); center " type="submit" name="ques">Question Paper
    <i class="material-icons right">search</i> -->
</div>
</div>
</form>


Want to upload Notes ?? <a href="upload_it.php">Click here to upload</a> <!--------------------------------------------------  -->   













<!------------------------------------------------------ Scripting Functions------------------------------------------------- -->
<script>
$('.dropdown-button').dropdown({
      inDuration: 300,
      outDuration: 225,
      constrainWidth: false, // Does not change width of dropdown to that of the activator
      hover: false, // Activate on hover
      gutter: 0, // Spacing from edge
      belowOrigin: true, // Displays dropdown below the button
      alignment: 'left', // Displays dropdown with edge aligned to the left of button
      stopPropagation: false // Stops event propagation
    }
  );
  // FOr Select Button
  $(document).ready(function() {
    $('select').material_select();
  });        
</script>
<!-- -------------------------------------------------------------- -->
<hr style="background:linear-gradient(to right,#8a3ab9,#4c68d7,#cd486b,#fbad50,#bc2a8d,#e95950) ; height: 2px;"/>
<!-- --------------------------------------------------------------Table Work Starts from here (to be done at the time of backend------------------------------------------------------------------------ -->
<script type="text/javascript" src="it_branch.js"></script>     <!--------------------------------------------------  -->   
</body>
<table class="centered responsive-table bordered">
<tr>

<td>Semester</td>
<td>Subject</td>
<td>Uploaded by</td>
<td>File</td>
<td>Caption</td>
<td>Date of Upload</td>

</tr>
<?php
if(mysqli_num_rows($result)>0){
        while($row=mysqli_fetch_assoc($result)){ 
            ?>
    <tr>
					
                    <td><?php echo $row['semester']; ?></td>
                    <td><?php echo $row['subject'];  ?></td>
                    <td><?php echo $row['email'];?></td>
                    <td><?php echo $file=$row['file'];?></td>
                    <td><?php echo $row['caption'];?></td>
                    <td><?php echo $row['time'];?></td> 
                    <td><a href="download.php?notes_id=<?php echo $row['notes_id']; ?>"><button type="button">Download</button></a></td>
                    
   
    </tr>
    <tr><td>
    <hr style="background:linear-gradient(to right,#8a3ab9,#4c68d7,#cd486b,#fbad50,#bc2a8d,#e95950) ; height: 2px;"/></td>
    <td>
    <hr style="background:linear-gradient(to right,#8a3ab9,#4c68d7,#cd486b,#fbad50,#bc2a8d,#e95950) ; height: 2px;"/></td>
    <td>
    <hr style="background:linear-gradient(to right,#8a3ab9,#4c68d7,#cd486b,#fbad50,#bc2a8d,#e95950) ; height: 2px;"/></td>
    <td>
    <hr style="background:linear-gradient(to right,#8a3ab9,#4c68d7,#cd486b,#fbad50,#bc2a8d,#e95950) ; height: 2px;"/></td>
    <td>
    <hr style="background:linear-gradient(to right,#8a3ab9,#4c68d7,#cd486b,#fbad50,#bc2a8d,#e95950) ; height: 2px;"/></td>
    <td>
    <hr style="background:linear-gradient(to right,#8a3ab9,#4c68d7,#cd486b,#fbad50,#bc2a8d,#e95950) ; height: 2px;"/></td>
    <td>
    <hr style="background:linear-gradient(to right,#8a3ab9,#4c68d7,#cd486b,#fbad50,#bc2a8d,#e95950) ; height: 2px;"/></td></tr>
    <?php
}}
else{
    echo '<span style="border:2px dotted red">No one Uploaded Notes here, We hope you will upload :)</span>';
}
?>
<?php /*
if(mysqli_num_rows($result2)>0){
        while($row=mysqli_fetch_assoc($result2)){ 
            ?>
    <tr>
					
                    <td><?php echo $row['semester']; ?></td>
                    <td><?php echo $row['subject'];  ?></td>
                    <td><?php echo $row['email'];?></td>
                    <td><?php echo $file=$row['file'];?></td>
                    <td><?php echo $row['caption'];?></td>
                    <td><?php echo $row['time'];?></td> 
                    <td><a href="download.php?notes_id=<?php echo $row['notes_id']; ?>"><button type="button">Download</button></a></td>
                    
   
    </tr>
    <tr><td>
    <hr style="background:linear-gradient(to right,#8a3ab9,#4c68d7,#cd486b,#fbad50,#bc2a8d,#e95950) ; height: 2px;"/></td>
    <td>
    <hr style="background:linear-gradient(to right,#8a3ab9,#4c68d7,#cd486b,#fbad50,#bc2a8d,#e95950) ; height: 2px;"/></td>
    <td>
    <hr style="background:linear-gradient(to right,#8a3ab9,#4c68d7,#cd486b,#fbad50,#bc2a8d,#e95950) ; height: 2px;"/></td>
    <td>
    <hr style="background:linear-gradient(to right,#8a3ab9,#4c68d7,#cd486b,#fbad50,#bc2a8d,#e95950) ; height: 2px;"/></td>
    <td>
    <hr style="background:linear-gradient(to right,#8a3ab9,#4c68d7,#cd486b,#fbad50,#bc2a8d,#e95950) ; height: 2px;"/></td>
    <td>
    <hr style="background:linear-gradient(to right,#8a3ab9,#4c68d7,#cd486b,#fbad50,#bc2a8d,#e95950) ; height: 2px;"/></td>
    <td>
    <hr style="background:linear-gradient(to right,#8a3ab9,#4c68d7,#cd486b,#fbad50,#bc2a8d,#e95950) ; height: 2px;"/></td></tr>
    <?php
}}
else{
    echo 'No one Uploaded <b>Question Paper</b> here, We hope you will upload :)';
}*/
?>
</table>
<?php
include 'footer.php'
?>
</html>