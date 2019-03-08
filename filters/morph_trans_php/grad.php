<?php
	shell_exec('python ../morph_trans_py/grad.py');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Morphological Transformation</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<link href="../../css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h3 class="text-center">Before</h3>
				<?php echo '<img src=\'../../images/abc.jpg\' class=\'img-thumbnail img-fluid\'>'; ?>
			</div>
			<div class="col-md-6">
				<h3 class="text-center">After Morphological Gradient</h3>
				<?php echo '<img src=\'../../images/abc_morph_grad.jpg\' class=\'img-thumbnail img-fluid\'>'; ?>
			</div>
		</div>
	</div>
</body>
</html>