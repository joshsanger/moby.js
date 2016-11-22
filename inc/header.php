<?php require_once('./inc/config.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no">
	<title><?php echo $title; ?>Moby.js - Helping Create Mobile Menus</title>
	<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Source+Code+Pro:400,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="./css/prism.css">
	<link rel="stylesheet" type="text/css" href="./font-awesome/css/font-awesome.min.css">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo BASE_URL; ?>/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="<?php echo BASE_URL; ?>/favicons/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="<?php echo BASE_URL; ?>/favicons/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="<?php echo BASE_URL; ?>/favicons/manifest.json">
    <link rel="mask-icon" href="<?php echo BASE_URL; ?>/favicons/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="<?php echo BASE_URL; ?>/favicons/favicon.ico">
    <meta name="msapplication-config" content="<?php echo BASE_URL; ?>/favicons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
	<script src="./js/modernizr.js"></script>
	<link rel="stylesheet" href="./css/style.css">
</head>
<body>
	<header id="main-header">
		<div class="container">
			
			<a href="<?php echo BASE_URL;?>" class="text">
				<img src="./images/moby-logo.svg">
				<h1>Moby.js</h1>
			</a>
			<nav id="main-nav">
				<ul>
					<li>
						<a href="<?php echo BASE_URL;?>" class="<?php if($active == 'overview'){ echo 'active'; }?>">Overview</a>
						<ul>
							<li><a href="<?php echo BASE_URL;?>/index.php#how-it-works">How It Works</a></li>
							<li><a href="<?php echo BASE_URL;?>/index.php#getting-started">Getting Started</a></li>
						</ul>
					</li>
					<li><a href="<?php echo BASE_URL;?>/examples.php" class="<?php if($active == 'examples'){ echo 'active'; }?>">Examples</a></li>
					<li><a href="<?php echo BASE_URL;?>/documentation.php" class="<?php if($active == 'documentation'){ echo 'active'; }?>">Documentation</a></li>
					<li><a href="<?php echo BASE_URL;?>/dist/moby1.7.3.zip">Download</a></li>
				</ul>
			</nav>
			<span id="trigger-main-menu" class="trigger-menu main-trigger" data-target="right-side">
				<i class="fa fa-bars"></i>
			</span>
		</div> <!-- /container -->
	</header> <!-- /main-header -->