<?php
	session_start();
	$tmp = explode('.'.$_SESSION['fext'], $_SESSION['fname'], -1);
	$tmpname=current($tmp);
	$outfile=$tmpname.'_Alphaprewitt.'.$_SESSION['fext'];
	$outimg='../../images/'.$tmpname.'_Alphaprewitt.'.$_SESSION['fext'];

	$cmd='python34 ../img_grad_py/Alpha_prewitt.py "../../images/'.$_SESSION['fname'].'" "'.$outimg.'"';
	$cout=shell_exec($cmd);

	if(!(strcasecmp($cout,'failed')==0))
	{
		//set session variables for use in display.php
		$_SESSION['title']='Alpha Prewitt';
		$_SESSION['filter']='Alpha Prewitt';
		$_SESSION['outimg']='images/'.$outfile;
		
		//call display.php
		header('Location: ../../display.php');
	}
?>