<?php
	session_start();
	$tmp = explode('.'.$_SESSION['fext'], $_SESSION['fname'], -1);
	$tmpname=current($tmp);
	$outfile=$tmpname.'_Mprewitt.'.$_SESSION['fext'];
	$outimg='../../images/'.$tmpname.'_Mprewitt.'.$_SESSION['fext'];

	$cmd='python34 ../img_grad_py/M_prewitt.py "../../images/'.$_SESSION['fname'].'" "'.$outimg.'"';
	$cout=shell_exec($cmd);

	if(!(strcasecmp($cout,'failed')==0))
	{
		//set session variables for use in display.php
		$_SESSION['title']='M Prewitt';
		$_SESSION['filter']='M Prewitt';
		$_SESSION['outimg']='images/'.$outfile;
		
		//call display.php
		header('Location: ../../display.php');
	}
?>