<?php
function alert($msg) {
    echo "<script type='text/javascript'>alert('$msg');</script>";
  }
if(isset($_POST['submit'])){
	#getting details of file
	$file = $_FILES['file'];
	$fileName = $_FILES['file']['name'];
	$fileTmpName = $_FILES['file']['tmp_name'];
	$fileSize = $_FILES['file']['size'];
	$fileError = $_FILES['file']['error'];
	$fileType = $_FILES['file']['type'];
	#convert filename string to array
	$fileExt = explode('.',$fileName);
	#convert file extension to lowercase
	$fileActualExt = strtolower(end($fileExt));
	$allowed = array('jpg', 'jpeg', 'png');
	#check for allowed extensions
	if(in_array($fileActualExt, $allowed)){
		if($fileError === 0){
			if($fileSize<5000000){
				$fileDestination = "input/".$fileName;
				if(move_uploaded_file($fileTmpName, $fileDestination)){
					alert("upload Success!");
					$cmd='python scripts/blur.py '.'"'.$fileName.'" '.$fileActualExt;
					echo $cmd;
					$cout=shell_exec($cmd);
				}
				else { alert("Failed!"); }
			}
			else { alert("Your file is too big"); }
		}
		else { alert("There was an error"); }
	}
	else { alert("Invalid file type"); }
}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="index.php" method="POST" enctype="multipart/form-data">
		<input type="file" name="file">
		<button type="submit" name="submit">UPLOAD</button>
	</form>
</body>
</html>