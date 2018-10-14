<?php
session_start();
require_once('connect.php');
include 'navbar.php';
//Upload Section
if(isset($_POST['submit'])){
    $filename=$_FILES['file']['name'];
    $filesize=$_FILES['file']['size'];
    $tmploc=$_FILES['file']['tmp_name'];
    $destination="./uploads/upload_eee/".$filename; /////////////////////////////////////////////////////
    $caption=$_POST['caption'];
    $semester=$_POST['semester'];
    $subject=$_POST['subject'];
    if(empty($caption)){
        echo 'Please Select a file and Enter a Caption (Like Which module or topic does it belong to) before submitting query';
    }
    else{
        //check image size less than 25 MB
        if($filesize<2600000){
            
           // move_uploaded_file($tmploc,$destination);
           $fileext=strtolower(pathinfo($filename,PATHINFO_EXTENSION));
        $allowext=array('jpeg','png','jpg','txt','pdf','ppt','docx','xsl','pptx','zip','rar','rtf');
        if(in_array($fileext,$allowext)){
        
       
    
    

    $time=date('d/m/y');
    $query="insert into eee_branch (email,file,caption,time,semester,subject,path) values ('$user','$filename','$caption','$time','$semester','$subject','$destination')";
   /////////////////////////////////////////////////////////////////////////////
    
    $result=mysqli_query($conn,$query); 
    if($result){
        move_uploaded_file($tmploc,$destination);
        echo "Successfully Inserted into database";
    }
    else{
        "Sorry, Please Check your Internet Connection <i class='material-icons right'>network_check</i> ";
    }
    }
    else{
        echo "<center><span style='border:2px dotted red; background-color:#ff9999'>This extension is not allowed, please choose a valid extension from any (txt,pdf,gif,docx,ppt,jpeg,jpg,xsl,zip,rar or rtf)</span></center>";
    }
        } 
        else{
          echo "<center><span style='border:2px solid red; background-color:#ff9999'>Image should be less than 25 MB</span></center>";
        }
         
}}
//PHP form
//////////////////////////////////////////////////////////////////////////////////
?>

<h5 style="margin-left: 10px;">You are now uploading notes in <b><ul>EEE branch</ul></b><br />Please select semester in which you want to upload<br />If you want to change your branch, please go <br />to select-branch section and click upload<br /> button in respective branch</h5>
<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
<div class="row">
<!-- Dropdown Trigger -->
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
<div class="col s12 m6 l6">
<input type="file" name="file" style="float: left;"/>
<textarea class="materialize-textarea" name="caption" placeholder="Give it a caption (say Module, subject, topic etc) #Mandatory to fill"></textarea>
</div>
</div>
<center>
<button class="btn waves-effect hoverable z-depth-4" style="background: linear-gradient(to right,#8a3ab9,#4c68d7,#cd486b,#fbad50,#bc2a8d,#e95950); center " type="submit" name="submit">Upload Notes
    <i class="material-icons right">publish</i></button></center>
</form>
<script type="text/javascript" src="eee_branch.js"></script><!----------------------------------------- -->
<?php
include 'footer.php';
?>