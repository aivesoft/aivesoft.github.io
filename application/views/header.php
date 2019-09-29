<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Aivesoft Games.</title>
		<!-- Description, Keywords and Author -->
		<meta name="description" content="Your description">
		<meta name="keywords" content="Your,Keywords">
		<meta name="author" content="ResponsiveWebInc">
		
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<!-- Styles -->
		<!-- Bootstrap CSS -->
		<link href="/assets/css/bootstrap.min.css" rel="stylesheet">
		<!-- Font awesome CSS -->
		<link href="/assets/css/font-awesome.min.css" rel="stylesheet">
		
		<!-- CSS for this page -->
		<link href="/assets/css/styles/index-slim.css" rel="stylesheet">
		
		<!-- Base style -->
		<link href="/assets/css/styles/style.css" rel="stylesheet">
		<!-- Skin CSS -->
		<link href="/assets/css/styles/skin-lblue.css" rel="stylesheet" id="color_theme">
		
		<!-- Custom CSS. Type your CSS code in custom.css file -->
		<link href="/assets/css/custom.css" rel="stylesheet">		
		
		<!-- Favicon -->
		<link rel="shortcut icon" href="#">
	</head>
	
	<body class="no-box">
		<?php if($this->session->flashdata('msg')) { ?>
			<div id="msgbox" class="alert alert-info" style="border-radius:0px;position:fixed; top:50px; left:0; width:100%; z-index:9999; display:none;">
				<?php echo $this->session->flashdata('msg'); ?>
			</div>
		<?php } ?>
	
		<div class="index-slim">
		
			<!-- Top Starts -->
			<div class="slim-top">
				<!-- Container -->
				<div class="container">
					<div class="row">
						<div class="col-md-7 col-sm-6 col-xs-6">
							<a href="mailto:contact@aivesoft.com"><i class="fa fa-envelope bg-color white circle-2"></i>&nbsp; contact@aivesoft.com</a>
						</div>
						<div class="col-md-5 col-sm-6 col-xs-6">
							<!-- Social -->
							<div class="brand-bg pull-right">
								<!-- Brand Icons -->
								<a href="http://facebook.com/aivesoft" class="facebook" target="_blank"><i class="fa fa-facebook circle-2"></i></a>
								<a href="http://twitter.com/aivesoft" class="twitter" target="_blank"><i class="fa fa-twitter circle-2"></i></a>
								<a href="https://plus.google.com/103449851283023704322" class="google-plus" target="_blank"><i class="fa fa-google-plus circle-2"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<!-- Top ends -->
			
			<!-- Header Starts -->
			<div class="slim-header">
				<!-- Container -->
				<div class="container">
					<!-- Logo Starts -->
					<div class="logo">
						<h1><a href="/"><img src="/assets/img/my_images/logo_transparent.png" height="100"></a></h1>
					</div>
					<!-- Navigation -->
					<div class="navigation" id="nav">
						<ul class="list-inline">
							<li><a href="/">Home</a></li>
							<li><a href="/games/listing">Games</a></li>
							<li><a href="/news/listing">News</a></li>
							<!-- <li><a href="#.slim-gallery">Gallery</a></li> -->
							<li><a href="/#.slim-about">About</a></li>
							<li><a href="/#.slim-contact">Contact</a></li>
						</ul>
					</div>
				</div>
			</div>
			
			<!-- Header Ends -->
			
			