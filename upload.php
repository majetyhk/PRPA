<html>
<head></head>
<body style="background-color:#666"></body>
<?php
		  
for ($i=0; $i<=7; $i++)
  {
	if($_FILES["file"]["name"][$i]!='')
	{
	
			$allowedExts = array("pdf", "png","jpg","jpeg");
		$extension = end(explode(".", $_FILES["file"]["name"][$i]));
		if ((($_FILES["file"]["type"][$i] == "application/pdf")	|| ($_FILES["file"]["type"][$i] == "image/png")	|| ($_FILES["file"]["type"][$i] == "image/jpeg")) || ($_FILES["file"]["type"][$i] == "image/jpg") && ($_FILES["file"]["size"][$i] < 1048576) && in_array($extension, $allowedExts))
		{
			if ($_FILES["file"]["error"][$i] > 0)
			{
				echo "Return Code: " . $_FILES["file"]["error"][$i] . "<br>";
			}
		    else
			{
				   
			/*echo "Upload: " . $_FILES["file"]["name"][$i] . "<br>";
			echo "Type: " . $_FILES["file"]["type"][$i] . "<br>";
			echo "Size: " . ($_FILES["file"]["size"][$i] / 1024) . " kB<br>";
			echo "Temp file: " . $_FILES["file"]["tmp_name"][$i] . "<br>";*/

			/*if (file_exists("upload/" . $_FILES["file"]["name"][$i]))
			  {
			  echo $_FILES["file"]["name"][$i] . " already exists. ";
			  }
			else
			  {*/
			  	if($i)
			  if(file_exists("upload/" . $_FILES["file"]["name"][$i]))
			  {
				unlink("upload/" . $_FILES["file"]["name"][$i]);
			  }
			  
			  move_uploaded_file($_FILES["file"]["tmp_name"][$i],
			  "upload/" . $_FILES["file"]["name"][$i]);
			   //echo "Stored in: " . "upload/" . $_FILES["file"]["name"][$i];
			   echo "<script>
			   alert('File/(s) Uploaded Succesfully');
			   window.location.href='forms.php';
			   </script>";
			  //}
			
			}
		  }
		else
		  {
			echo "<script>
			alert('File/(s) not uploaded.Please follow instructions');
			window.location.href='forms.php';
			</script>";
		  }
	
	
	}
	
  }
?>
</html>