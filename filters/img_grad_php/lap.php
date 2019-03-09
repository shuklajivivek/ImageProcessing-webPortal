<?php
	session_start();
	$result=shell_exec('python ../img_grad_py/lap.py');
	if(strcasecmp($result,'success')==0)
	{
		//set session variables for use in display.php
		$_SESSION['title']='Image Gradient';
		$_SESSION['filter']='After Laplacian Derivatives';
		$_SESSION['outimg']='images/abc_lap.jpg';
		
		//call display.php
		header('Location: ../../display.php');
	}
?>