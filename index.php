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
	$_SESSION['fileName'] = $_FILES['file']['name'];
	$fileTmpName = $_FILES['file']['tmp_name'];
	$fileSize = $_FILES['file']['size'];
	$fileError = $_FILES['file']['error'];
	$fileType = $_FILES['file']['type'];

	#convert filename string to array
	$fileExt = explode('.',$_SESSION['fileName']);
	
	#convert file extension to lowercase
	$_SESSION['fileActualExt'] = strtolower(end($fileExt));
	$allowed = array('jpg', 'jpeg', 'png');
	
	#check for allowed extensions
	if(in_array($_SESSION['fileActualExt'], $allowed)){
		if($fileError === 0){
			if($fileSize<5000000){
				$fileDestination = "input/".$_SESSION['fileName'];
				if(move_uploaded_file($fileTmpName, $fileDestination)){
					unset($_SESSION['outfile']);
					alert("Success!");
				}
				else { alert("Failed!"); }
			}
			else { alert("Your file is too big"); }
		}
		else { alert("File error"); }
	}
	else { alert("Invalid file type"); }
}else { alert("NO file was selected"); }
}

	#Applying filter
	if(isset($_POST['apply_filter'])){
		if(!empty($_SESSION['fileName'])){
			if(isset($_POST['filter']))
				$filter=$_POST['filter'];
			else { $filter="null"; alert('Invalid filter'); }
			switch ($filter)
			{
				case "blur": $cmd='python scripts/blur.py '.'"'.$_SESSION['fileName'].'" '.$_SESSION['fileActualExt']; break;
				case "gblur": $cmd='python scripts/gblur.py '.'"'.$_SESSION['fileName'].'" '.$_SESSION['fileActualExt']; break;
				case "mblur": $cmd='python scripts/mblur.py '.'"'.$_SESSION['fileName'].'" '.$_SESSION['fileActualExt']; break;
				case "bilateral": $cmd='python scripts/bilateral.py '.'"'.$_SESSION['fileName'].'" '.$_SESSION['fileActualExt']; break;
			}
			if(!empty($cmd))
			{
				$cout=shell_exec($cmd);
				$_SESSION['outfile']=$cout;
			}
		}
		else { alert('Upload an image first.'); }
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Image Processing Portal</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!--<link href="css/mdb.min.css" rel="stylesheet">-->
	<link rel="stylesheet" href="css/home.css">
</head>
<body>
	<!-- SCRIPTS -->
	<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="js/popper.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/mdb.js"></script>
	<!-- MAIN CONTENT -->
	<div class="container-fluid">
		<div class="row"><div class="col-md-12"><hr><h2 class="text-center">Welcome to Image Processing Portal</h1><hr><h3 class="text-center">Upload an Image</h3></div></div>
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4">
			<!-- file upload -->
			<form action="index.php" method="POST" enctype="multipart/form-data">
			<div class="custom-file">
			<input type="file" class="custom-file-input" id="customFile" name="file">
			<label class="custom-file-label" for="customFile">Choose file (.jpg, .jpeg, .png)</label>
			</div>
			</div>
			<div class="col-md-4">
			<button type="submit" name="upload" class="btn btn-primary">UPLOAD</button>
			</div>
			</form>
		</div><br>
		<div class="row">
			<div class="col-md-2">
				<h3 class="text-center">Select Filter</h3>
				<!-- filter selection -->
				 <form action="index.php" method="POST">
					<div class="custom-control custom-checkbox">
						<input type="checkbox" class="custom-control-input filter-list" id="customCheck1" name="filter" value="blur">
						<label class="custom-control-label" for="customCheck1">Blur</label>
					</div>
					<div class="custom-control custom-checkbox">
						<input type="checkbox" class="custom-control-input filter-list" id="customCheck2" name="filter" value="gblur">
						<label class="custom-control-label" for="customCheck2">Gaussian Blur</label>
					</div>
					<div class="custom-control custom-checkbox">
						<input type="checkbox" class="custom-control-input filter-list" id="customCheck3" name="filter" value="mblur">
						<label class="custom-control-label" for="customCheck3">Median Blur</label>
					</div>
					<div class="custom-control custom-checkbox">
						<input type="checkbox" class="custom-control-input filter-list" id="customCheck4" name="filter" value="bilateral">
						<label class="custom-control-label" for="customCheck4">Bilateral Filter</label>
					</div><br>
					<!-- To select only one filter -->
					<script type="text/javascript">
						$('.filter-list').on('change', function() {
						$('.filter-list').not(this).prop('checked', false);  
						});
					</script>
					<button type="submit" name="apply_filter" class="btn btn-primary">Apply</button>
				</form>

			</div>
			<div class="col-md-5">
				<h3 class="text-center">Before</h3>
				<?php
					if(!empty($_SESSION['fileName'])){
						$source='input/'.$_SESSION['fileName'];
						if(file_exists($source)){
							echo '<img src=\''.$source.'\' class=\'img-thumbnail img-fluid\' height=\'480\' width=\'640\'>';
						}
					}
				?>
			</div>
			<div class="col-md-5">
				<h3 class="text-center">After</h3>
				<?php
					if(isset($_SESSION['outfile'])){
						echo '<img src=\''.$_SESSION['outfile'].'\' class=\'img-thumbnail img-fluid\' height=\'480\' width=\'640\'>';
					}
				?>
			</div>
		</div>
	</div> <!-- CONTAINER DIV ENDS-->
</body>
</html>