<?php
	shell_exec("python gauss.py");
	$images = glob("images/*.*");
   foreach($images as $image) {
    echo '<img src="'.$image.'" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
  }
?>
