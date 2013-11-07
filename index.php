<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />

	<link rel="stylesheet" href="stylesheets/dark.css" type="text/css" title="sky-blue" media="screen" />
	<!--
	<link rel="stylesheet" href="stylesheets/raspberry.css" type="text/css" title="raspberry" media="screen" />
	<link rel="stylesheet" href="stylesheets/dark-violet.css" type="text/css" title="dark-violet" media="screen" />
	<link rel="stylesheet" href="stylesheets/emerald.css" type="text/css" title="emerald" media="screen" />
	<link rel="stylesheet" href="stylesheets/pink.css" type="text/css" title="pink" media="screen" />
	<link rel="stylesheet" href="stylesheets/golden.css" type="text/css" title="golden" media="screen" />
	<link rel="stylesheet" href="stylesheets/lime.css" type="text/css" title="lime" media="screen" />
	<link rel="stylesheet" href="stylesheets/metallic-blue.css" type="text/css" title="metallic-blue" media="screen" />
	<link rel="stylesheet" href="stylesheets/light-brown.css" type="text/css" title="light-brown" media="screen" />
	<link rel="stylesheet" href="stylesheets/orange.css" type="text/css" title="orange" media="screen" />
	<link rel="stylesheet" href="stylesheets/blue.css" type="text/css" title="blue" media="screen" />
	<link rel="stylesheet" href="stylesheets/ocean.css" type="text/css" title="ocean" media="screen" />
	<link rel="stylesheet" href="stylesheets/grapefruit.css" type="text/css" title="grapefruit" media="screen" />
	<link rel="stylesheet" href="stylesheets/olive.css" type="text/css" title="olive" media="screen" />
	<link rel="stylesheet" href="stylesheets/violet.css" type="text/css" title="violet" media="screen" />
	-->
	
	<style type="text/css">
		@import url(stylesheets/styles.css);			/*link to the main CSS file */
		@import url(stylesheets/ddsmoothmenu.css);		/*link to the CSS file for dropdown menu */
		@import url(stylesheets/tipsy.css);				/*link to the CSS file for tips */
	</style>
	
	<!-- Initialise jQuery Library -->
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
	
	<!-- Cufon Font Generator Plugin -->
	<script type="text/javascript" src="js/cufon/cufon-yui.js"></script>
	<script type="text/javascript" src="js/cufon/MgOpen_Modata_400-MgOpen_Modata_700.font.js"></script>
	<script type="text/javascript" src="js/cufon/cufon-load.js"></script>

	<!-- jQuery Watermark Plugin -->
	<script type="text/javascript" src="js/jquery.watermarkinput.js"></script>
	
	<!-- DropDown Menu Plugin -->
	<script type="text/javascript" src="js/ddsmoothmenu.js"></script> 
	
	<!-- jQuery Image Fading plugin -->
	<script type="text/javascript" src="js/jquery.color.js"></script>
	
	<!-- jQuery Tabs -->
	<script type="text/javascript" src="js/ui.core.js"></script>
	<script type="text/javascript" src="js/ui.tabs.js"></script>
	
	<!-- jQuery TinyCarousel -->
	<script type="text/javascript" src="js/jquery.tinycarousel.min.js"></script>

	<!-- jQuery Tipsy -->
	<script type="text/javascript" src="js/jquery.tipsy.js"></script>
	
	<!-- jQuery autoAlign -->
	<script type="text/javascript" src="js/jquery.autoAlign.js"></script>
	
	<script type="text/javascript" src="js/custom.js"></script>

	<title>Paradise | Full Width &amp; Columns page</title>
</head>
<body id="sp">
<!-- Begin Container -->
<div class="container">
	<!-- Begin Header -->
	<div id="header">
		<!-- Site Logo -->
		<a href="index.html" class="logo"><img src="images/logo.png" width="180" height="50" alt="" /></a>
		<!-- SearchBox -->
		<form action="" id="searchform">
			<div>
				<label for="s" class="screen-reader-text">Search for:</label>
				<input type="text" id="s" name="s" value=""/>
				<input type="submit" value="Search" id="searchsubmit"/>
			</div>
		</form>
		<div class="clear"></div>
	</div>
	<!-- End Header -->
	<!-- Start Main Nav -->
	<?php
	include 'templates/header.html';
	?>
	<!-- End Main Nav -->
	<!-- Start Breadcrumbs -->
	<div id="breadcrumbs">
		<a href="#">Home</a> &raquo; 
		<span class="current">Index Page</span>
		<div class="clear"></div>
	</div>
	<!-- End Breadcrumbs -->
	<!-- Start Page Title -->
	<div class="PageTitle">
		<h1>Index Page</h1>
	</div>
	<!-- End Page Title -->
	<!-- Start Content Wrapper -->
	<div id="content_wrapper">
		<!-- Content Box -->
		<div class="box">
			<!-- Error 404 Page -->
			Content Goes Here...
		</div>
	</div>
	<!-- End Content Wrapper -->
	
	<!-- Start Footer Sidebar -->
	<?php include 'templates/footer.html';	?>	
	<!-- End Footer Sidebar -->
	
</div>
<!-- End Container -->
</body>
</html>