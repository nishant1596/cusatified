<?php
include'connect.php';
 $notes_id=$_GET['notes_id'];
$query="select * from me_branch where notes_id='$notes_id'";
$result=mysqli_query($conn,$query);
while($ros=mysqli_fetch_assoc($result)){
    $fullPath=$ros['path'];
	function download_file(string $fullPath)
	{
	  if( headers_sent() )
		die('Headers Sent');


	  if(ini_get('zlib.output_compression'))
		ini_set('zlib.output_compression', 'Off');
        
    


	  if( file_exists($fullPath) )
	  {

		$fsize = filesize($fullPath);
		$path_parts = pathinfo($fullPath);
		$ext = strtolower($path_parts["extension"]);

		switch ($ext) 
		{
		  case "pdf": $ctype="application/pdf"; break;
        //case "exe": $ctype="application/octet-stream"; break;
		  case "zip": $ctype="application/zip"; break;
		  case "doc": $ctype="application/msword"; break;
		  case "xls": $ctype="application/vnd.ms-excel"; break;
		  case "ppt": $ctype="application/vnd.ms-powerpoint"; break;
		  case "gif": $ctype="image/gif"; break;
		  case "png": $ctype="image/png"; break;
		  case "jpeg":$ctype="image/jpeg"; break;
		  case "jpg": $ctype="image/jpg"; break;
		  default: $ctype="application/force-download";
		}

		header("Pragma: public"); 
		header("Expires: 0");
		header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
		header("Cache-Control: private",false); 
		header("Content-Type: $ctype");
		header("Content-Disposition: attachment; filename=\"".basename($fullPath)."\";" );
		header("Content-Transfer-Encoding: binary");
		header("Content-Length: ".$fsize);
		ob_clean();
		flush();
		readfile( $fullPath );

	  } 
	 }

	
    
	download_file($ros['path']);
}

?>
