<?php
	shell_exec("python blur.py");
	
	$images = glob("images/*.*");
   foreach($images as $image) {
    echo '<img src="'.$image.'" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
}
?>
