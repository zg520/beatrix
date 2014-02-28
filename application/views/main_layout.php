<!DOCTYPE html>
<html>
	<head>
		<head>
			<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet">
			<link href="/css/style.css" rel="stylesheet">
			<title></title>
		</head>
	</head>
	<body>
		<header class="container">
			<?php $this->load->view('header')?>
		</header>
		<main class="container">
			<?php $this->load->view($view)?>
		</main>
		<footer class="navbar">
			<?php $this->load->view('footer')?>
		</footer>
		<script src="/bootstrap/js/jquery-2.1.0.min.js"></script>
		<script src="/bootstrap/js/bootstrap.min.js"></script>
	</body>
</html>