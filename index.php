<?php
  function alert($msg) {
    echo "<script type='text/javascript'>alert('$msg');</script>";
  }

  if (isset($_POST['upload']))
  {
    $image = $_FILES['image']['name'];
  	$target = "input/".basename($image);
   	if (move_uploaded_file($_FILES['image']['tmp_name'],$target)) {
   		alert("upload Success!");
   		$cmd='python3.6 scripts/blur.py '.'"'.$_FILES['image']['name'].'"';
      echo $cmd;
      $cmd_out=shell_exec($cmd);
      echo '<br>'.$cmd_out;
  	}else{
  		alert("Failed!");
  		print_r($_FILES);
  	}
  }
?>

<!DOCTYPE html>
<html>
<head>
<title>Image Upload</title>
</head>
<body>
<div id="content" style="margin-top: 300px;" align="center">
  <form method="POST" action="index.php" enctype="multipart/form-data">
  	<input type="file" name="image"/>
  	<button type="submit" name="upload">Upload</button>
  </form>
</div>
</body>
</html>