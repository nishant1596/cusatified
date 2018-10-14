<html>
<head>

</head>
<body>
<?php
session_start();
require_once('connect.php');
include 'navbar.php';

?><br />

      <div class="col s12">
       <center><span class="flow-text blue-text text-lighten-2 ">Hello <?php echo $user ?> Now you are editing your uploaded Notes</span></center>    
     </div>
     <table class="centered responsive-table bordered">
<tr>
<td>Notes Id</td>
<td>Filename</td>
<td>Caption</td>
<td>Date of Uploading</td>
<td>Delete Operation</td>

</tr>
<tr><td>
    <hr style="background:linear-gradient(to right,#8a3ab9,#4c68d7,#cd486b,#fbad50,#bc2a8d,#e95950) ; height: 2px;"/></td>
    <td><td>
    <hr style="background:linear-gradient(to right,#8a3ab9,#4c68d7,#cd486b,#fbad50,#bc2a8d,#e95950) ; height: 2px;"/></td>
    <td><td>
    <hr style="background:linear-gradient(to right,#8a3ab9,#4c68d7,#cd486b,#fbad50,#bc2a8d,#e95950) ; height: 2px;"/></td>
    <td><td>
    <hr style="background:linear-gradient(to right,#8a3ab9,#4c68d7,#cd486b,#fbad50,#bc2a8d,#e95950) ; height: 2px;"/></td>
    <td></tr>
    <?php
        $sql="select * from student where email='$user'";
        $result=mysqli_query($conn,$sql);
        
            while($row=mysqli_fetch_assoc($result)){
              $table_name=$row['branch'];
        }
        $sql1="select * from $table_name where email='$user' ";
        $result1=mysqli_query($conn,$sql1); ?> <?php
        if(mysqli_num_rows($result1)>0){
        while($row=mysqli_fetch_assoc($result1)){ ?>
        

    <tr>
					
                    <td><?php echo $ni=$row['notes_id']; ?></td>
                    <td><?php echo $file=$row['file'];?></td>
                    <td><?php echo $row['caption'];?></td>
                    <td><?php echo $row['time'];?></td> 
                    
                   <td >
                   
<a class="btn-floating btn-small blue" href="delete.php?id=<?php echo $ni ?>" >
      <i class="large material-icons">mode_edit</i>
    </a>
    
</td>
                    
   
    </tr>
  
    <?php
}}
else{
    echo 'No one Uploaded Notes here, We hope you will upload :)';
}
?></table>
  
</body>
</html>

