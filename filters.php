<!DOCTYPE html>
<html>
<head>
	<title>Select Filter</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	  
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/mdb.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link href="css/all.css" rel="stylesheet">
	<link href="css/filters.css" rel="stylesheet">
</head>

<body style="background-color: #232323;">

	<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="js/popper.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/mdb.js"></script>

	<div class="animated fadeInLeft" id="heading">
		<h1>CHOOSE &nbsp;&nbsp;FILTERS <img src="img/filter.png"></h1>
	</div>
	
	<div id="filter-box" class="zoomdiv" style='height: 340px; width: 400px;'>
		<h2>Image Blurring</h2>
		<ul>
		      <li><a href="filters/blur_php/blur_avg.php">Averaging</a></li>
		      <li><a href="filters/blur_php/blur_gauss.php">Gaussian Blurring</a></li>
		      <li><a href="filters/blur_php/blur_med.php">Median Blurring</a>
		      <li><a href="filters/blur_php/blur_bilat.php">Bilateral Filtering</a></li>
		</ul>
	</div>
	
	<div id="filter-box" class="zoomdiv" style='width: 500px; height: 465px'>
		<h2>Morphological Transformation</h2>
		<ul>
		      <li><a href="filters/morph_trans_php/erosion.php">Erosion</a></li>
		      <li><a href="filters/morph_trans_php/dilation.php">Dilation</a></li>
			  <li><a href="filters/morph_trans_php/open.php">Opening</a></li>
			  <li><a href="filters/morph_trans_php/close.php">Closing</a></li>
			  <li><a href="filters/morph_trans_php/grad.php">Morphological Gradient</a></li>
			  <li><a href="filters/morph_trans_php/that.php">Top Hat</a></li>
			  <li><a href="filters/morph_trans_php/bhat.php">Black Hat</a></li>
		</ul>
	</div>
	
	<div id="filter-box" class="zoomdiv" style='height: 340px; width: 400px;'>
		<h2>Image Gradients</h2>
		<ul>
			<li><a href="filters/img_grad_php/lap.php">Laplacian Derivatives</a></li>
			<li><a href="filters/img_grad_php/sobx.php">Sobel X</a></li>
			<li><a href="filters/img_grad_php/soby.php">Sobel Y</a></li>
		</ul>
	</div>
</body>
</html>