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

<body style="background-color: #232325;">

	<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="js/popper.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/mdb.js"></script>
	
	<div class='container-fluid'>
		<div class='row'>
			<div class='col-md-11'>
				<div class="animated fadeInLeft" id="heading">
					<h1>CHOOSE &nbsp;&nbsp;FILTERS <img src="img/filter.png"></h1>
				</div>
			</div>
			<div class='col-md-1'>
				<a href="index.php" class="btn btn-outline-info waves-effect"><i class="fas fa-chevron-circle-left fa-lg"></i></a>
			</div>
		</div>

		<div class='row'> <!-- ROW 1 BEGINS -->
			<div class='col-md-4'>
				<div id="filter-box" class="zoomdiv" style='height: 340px; width: 400px; margin-left: 40px;'>
					<h2>Image Blurring</h2>
					<ul>
						<li><a href="filters/blur_php/blur_avg.php">Averaging</a></li>
						<li><a href="filters/blur_php/blur_gauss.php">Gaussian Blurring</a></li>
						<li><a href="filters/blur_php/blur_med.php">Median Blurring</a>
						<li><a href="filters/blur_php/blur_bilat.php">Bilateral Filtering</a></li>
					</ul>
				</div>
			</div>
			<div class='col-md-4'>
				<div id="filter-box" class="zoomdiv" style='width: 450px; height: 360px'>
					<h2>Morphological Transformation</h2>
					<div class="row">
						<div class="col-sm-6">
							<ul>
								<li><a href="filters/morph_trans_php/erosion.php">Erosion</a></li>
								<li><a href="filters/morph_trans_php/dilation.php">Dilation</a></li>
								<li><a href="filters/morph_trans_php/open.php">Opening</a></li>
								<li><a href="filters/morph_trans_php/close.php">Closing</a></li>
							</ul>
						</div>
						<div class="col-sm-6">
							<ul>
								<li><a href="filters/morph_trans_php/grad.php">Morphological Gradient</a></li>
								<li><a href="filters/morph_trans_php/that.php">Top Hat</a></li>
								<li><a href="filters/morph_trans_php/bhat.php">Black Hat</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class='col-md-4'>
				<div id="filter-box" class="zoomdiv" style='height: 340px; width: 400px;'>
					<h2>Image Gradients</h2>
					<ul>
						<li><a href="filters/img_grad_php/lap.php">Laplacian Derivatives</a></li>
						<li><a href="filters/img_grad_php/sobx.php">Sobel X</a></li>
						<li><a href="filters/img_grad_php/soby.php">Sobel Y</a></li>
						<li><a href="filters/canny_php/canny.php">Canny Edge Detection</a></li>
					</ul>
				</div>
			</div>
		</div> <!-- ROW 1 ENDS -->

		<div class="row"> <!-- ROW 2 BEGINS-->
			<div class='col-md-4'>
				<div id="filter-box" class="zoomdiv" style='height: 270px; width: 400px; margin-left: 40px;'>
					<h2>Histograms</h2>
					<ul>
						<li><a href="filters/histogram_php/hist_col.php">Plot Histogram For Color Image</a></li>
						<li><a href="filters/histogram_php/hist_gray.php">Plot Histogram For Grayscale Image</a></li>
						<li><a href="filters/histogram_php/hist_gray_eq.php">Equalization For Grayscale Image</a></li>
					</ul>
				</div>
			</div>
			<div class='col-md-4'>
				<div id="filter-box" class="zoomdiv" style='height: 420px; width: 400px;'>
					<h2>Image Thresholding</h2>
					<ul>
						<li><a href="#">Simple Thresholding</a></li>
						<ul>
							<li><a href="filters/img_thres_php/simple/bin.php">&gt; Threshold Binary</a></li>
							<li><a href="filters/img_thres_php/simple/bin_inv.php">&gt; Threshold Binary Inverted</a></li>
							<li><a href="filters/img_thres_php/simple/trunc.php">&gt; Truncate</a></li>
							<li><a href="filters/img_thres_php/simple/tozero.php">&gt; Threshold to Zero</a></li>
							<li><a href="filters/img_thres_php/simple/tz_inv.php">&gt; Threshold to Zero Inverted</a></li>
						</ul>
					</ul>
				</div>
			</div>
			<div class="col-md-4">
				<div id="filter-box" class="zoomdiv" style='height: 420px; width: 400px; margin-left: 40px;'>
					<h2>Image Thresholding</h2>
					<ul>
						<li><a href="#">Adaptive Thresholding</a></li>
						<ul>
							<li><a href="filters/img_thres_php/adaptive/mean.php">&gt; Mean</a></li>
							<li><a href="filters/img_thres_php/adaptive/gauss.php">&gt; Gaussian</a></li>
						</ul>
						<li><a href="#">Otsu&rsquo;s Binarization</a></li>
						<ul>
							<li><a href="filters/img_thres_php/otsu/otsu.php">&gt; Otsu&rsquo;s Thresholding</a></li>
							<li><a href="filters/img_thres_php/otsu/otsu_gaus.php">&gt; After Gaussian Filtering</a></li>
						</ul>
					</ul>
				</div>
			</div>
		</div> <!-- ROW 2 ENDS -->
		
		<div class="row"> <!-- ROW 3 BEGINS-->
			<div class='col-md-4'>
				<div id="filter-box" class="zoomdiv" style='height: 280px; width: 400px; margin-left: 40px;'>
					<h2>Gaussian Noise Reduction</h2>
					<ul>
						<li><a href="filters/noise_reduc_php/noise_reduc.php">Noise Reduction</a></li>
						<li><a href="filters/noise_reduc_php/noise_reduc_bw.php">Noise Reduction For Grayscale Image</a></li>
					</ul>
				</div>
			</div>
			<div class='col-md-4'>
				<div id="filter-box" class="zoomdiv" style='height: 250px; width: 400px;'>
					<h2>Simple intensity transformation</h2>
					<ul>
						<li><a href="filters/img_negative_php/negative.php">Image Negatives</a></li>
					</ul>
				</div>
			</div>
		</div> <!-- ROW 3 ENDS -->

	</div> <!-- CONATINER DIV ENDS -->
	
</body>
</html>