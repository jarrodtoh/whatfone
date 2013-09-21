<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>WhatFone - A Mobile Phone Sentiment Analyzer</title>

	<link rel="stylesheet" type="text/css" href="<?php echo(CSS.'reset.css')?>" media="screen" />
	<link rel="stylesheet" type="text/css" href="<?php echo(CSS.'bootstrap.min.css')?>" media="screen" />
	<link rel="stylesheet" type="text/css" href="<?php echo(CSS.'style.css')?>" media="screen" />
	<script type="text/javascript" src="<?php echo(JS.'jquery.js')?>"></script>
	<script type="text/javascript" src="<?php echo(JS.'bootstrap.min.js')?>"></script>
	<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
	<script>
	$(function() {
		$( "#sortable" ).sortable();
		$( "#sortable" ).disableSelection();
	});
	</script>

</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="<?php echo base_url();?>">What<span>Fone</span></a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse navbar-ex1-collapse">
			<ul class="nav navbar-nav">
				<li><a href="#">Phones</a></li>
				<li><a href="<?php echo base_url();?>demo/">Demo</a></li>
			</ul>
		</div><!-- /.navbar-collapse -->
	</nav>