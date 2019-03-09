<?php
	session_start();
	$result=shell_exec('python ../blur_py/blur_med.py');
	if(strcasecmp($result,'success')==0)
	{
		//set session variables for use in display.php
		$_SESSION['title']='Image Smoothing';
		$_SESSION['filter']='After Median Blurring';
		$_SESSION['outimg']='images/abc_blur_med.jpg';
		
		//call display.php
		header('Location: ../../display.php');
	}
?>