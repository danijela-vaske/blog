<html>
	<head>
		<title>CiBLOG</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.3.1/journal/bootstrap.min.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/style.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="http://cdn.ckeditor.com/4.11.3/standard/ckeditor.js"></script>
	</head>
	<body>
		<nav class="navbar navbar-inverse">
			<div class="container">
				<div class="navbar-header">
					<a class="navbar-brand" href="<?php echo base_url(); ?>">CiBlog</a>
				</div>
				<div id="navbar">
					<ul class="nav-justified">
						<li><a href="<?php echo base_url(); ?>">Home</a></li>
						<li><a href="<?php echo base_url(); ?>about">About</a></li>
						<li><a href="<?php echo base_url(); ?>posts">Blog</a></li>
					</ul>
					<ul class="navbar-btn navbar-right">
						<li><a href="<?php echo base_url(); ?>posts/create">Create Post</a></li>
					</ul>
				</div>
			</div>
		</nav>
		<div class="container">