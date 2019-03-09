<?php
	session_start();
	$result=shell_exec('python ../canny_py/canny.py');
	if(strcasecmp($result,'success')==0)
	{
		//set session variables for use in display.php
		$_SESSION['title']='Canny Edge Detection';
		$_SESSION['filter']='Canny Edge Detection';
		$_SESSION['outimg']='images/abc_canny.jpg';
		
		//call display.php
		header('Location: ../../display.php');
	}
?>