<?php
	session_start();
	$result=shell_exec('python ../blur_py/blur_gauss.py');
	if(strcasecmp($result,'success')==0)
	{
		//set session variables for use in display.php
		$_SESSION['title']='Image Smoothing';
		$_SESSION['filter']='After Gaussian Blurring';
		$_SESSION['outimg']='images/abc_blur_gauss.jpg';
		
		//call display.php
		header('Location: ../../display.php');
	}
?>