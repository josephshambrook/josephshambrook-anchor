<!doctype html>
<html class="no-js" lang="en">
	<head>
		<meta charset="utf-8">

		<?php
			$title = site_name();
			$prefix = (is_homepage() ? '' : page_title('Page can’t be found') . ' - ');
		?>
		<title><?php echo $prefix . $title; ?></title>

		<meta name="description" content="<?php echo site_description(); ?>">
		<link rel="stylesheet" href="<?php echo theme_url('/css/styles.css'); ?>">

		<!-- Special CSS for individual articles -->
		<?php if(customised()): ?>
    		<style><?php echo article_css(); ?></style>
		<?php endif; ?>

		<link rel="alternate" type="application/rss+xml" title="RSS" href="<?php echo rss_url(); ?>">
		<link rel="shortcut icon" href="<?php echo theme_url('img/favicon.png'); ?>">

		<!--[if lt IE 9]>
			<!-- <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script> -->
		<![endif]-->

	    <meta name="viewport" content="width=device-width">

	    <meta property="og:title" content="<?php echo site_name(); ?>">
	    <meta property="og:type" content="website">
	    <meta property="og:url" content="<?php echo e(current_url()); ?>">
	    <meta property="og:image" content="<?php echo theme_url('img/og_image.gif'); ?>">
	    <meta property="og:site_name" content="<?php echo site_name(); ?>">
	    <meta property="og:description" content="<?php echo site_description(); ?>">

		<!-- page-blocking on purpose - don't crucify me -->
		<script type="text/javascript">var r = document.documentElement||document.getElementsByTagName('html')[0];r.setAttribute('class', 'js');</script>
	</head>
	<body class="<?php echo body_class(); ?>">
		<div class="intro three-d">
			<div class="intro_text">
				<h3>Joseph Shambrook</h3>
				<h5>Front End Developer</h5>
				<div class="intro__links">
					<a href="<?php echo base_url() ?>">about</a>
					<a href="<?php echo base_url() ?>posts">blog</a>
				</div>
			</div>
		</div>
		<div class="container">