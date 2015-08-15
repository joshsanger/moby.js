<?php require_once('./inc/config.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no">
	<title><?php echo $title; ?> | Moby.js - Helping Create Mobile Menus</title>
	<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Source+Code+Pro:400,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="./css/prism.css">
	<link rel="stylesheet" type="text/css" href="./font-awesome/css/font-awesome.min.css">
	<script src="./js/modernizr.js"></script>
	<link rel="stylesheet" href="./css/style.css">
</head>
<body>
	<header id="main-header">
		<div class="container">
			
			<a href="<?php echo BASE_URL;?>" class="text">
				<img src="./images/moby.svg">
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
					<li><a href="<?php echo BASE_URL;?>/dist/moby1.1.zip">Download</a></li>
				</ul>
			</nav>
			<span id="trigger-main-menu" class="trigger-menu main-trigger" data-target="right-side">
				<i class="fa fa-bars"></i>
			</span>			
			<div class="clear-float"></div>
		</div> <!-- /container -->
	</header> <!-- /main-header -->