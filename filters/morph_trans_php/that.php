<?php
	session_start();
	$result=shell_exec('python ../morph_trans_py/that.py');
	if(strcasecmp($result,'success')==0)
	{
		//set session variables for use in display.php
		$_SESSION['title']='Morphological Transformation';
		$_SESSION['filter']='After Top Hat';
		$_SESSION['outimg']='images/abc_morph_that.jpg';
		
		//call display.php
		header('Location: ../../display.php');
	}
?>