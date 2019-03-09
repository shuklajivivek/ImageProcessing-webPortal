<?php
	session_start();
	$result=shell_exec('python ../morph_trans_py/grad.py');
	if(strcasecmp($result,'success')==0)
	{
		//set session variables for use in display.php
		$_SESSION['title']='Morphological Transformation';
		$_SESSION['filter']='After Morphological Gradient';
		$_SESSION['outimg']='images/abc_morph_grad.jpg';
		
		//call display.php
		header('Location: ../../display.php');
	}
?>