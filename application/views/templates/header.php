<html>
	<head>
		<title>CiBLOG</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.3.1/minty/bootstrap.min.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="http://cdn.ckeditor.com/4.11.3/standard/ckeditor.js"></script>
	</head>
	<body>
		<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
			<div class="container">
				<div class="navbar-header">
					<a class="navbar-brand" href="<?php echo base_url(); ?>">CiBlog</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    					<span class="navbar-toggler-icon"></span>
  					</button>
				</div>
				<div class="collapse navbar-collapse" id="navbarColor01">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item active"><a class="nav-link" href="<?php echo base_url(); ?>">Home</a></li>
						<li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>about">About</a></li>
						<li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>posts">Blog</a></li>
						<li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>categories">Categories</a></li>
					</ul>
					<ul class="navbar-nav navbar-right">
						<li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>posts/create">Create Post</a></li>
						<li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>categories/create">Create Category</a></li>
					</ul>

				</div>
			</div>
		</nav>
		<br>
		<div class="container">