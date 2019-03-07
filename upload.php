<?php
session_start();
#displaying alert boxes
function alert($msg) {
    echo "<script type='text/javascript'>alert('$msg');</script>";
  }

#uploading the image
if(isset($_POST['upload'])){
	if(!empty($_FILES['file']['name'])){
	#getting details of file
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
				$fileNameNew = 'abc'.'.'.$fileActualExt;
				$fileDestination = "images/".$fileNameNew;
				if(move_uploaded_file($fileTmpName, $fileDestination)){
					header('Location: filters.php');
				}
				else { alert("Failed!"); }
			}
			else { alert("File size limit exceeded"); }
		}
		else { alert("File error"); }
	}
	else { alert("Invalid file type"); }
}else { $_SESSION['err']=5; header('location:index.php');}
}

?>