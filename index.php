<!DOCTYPE html>
<html>
<head>
	<title>quản lí cán bộ</title>
	<meta charset="utf-8">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>


	<?php
	include "config.php"; 
	include "controller/controller.php";
	include "model/model.php";
	?>

	<?php
	$controller = isset($_GET["controller"])
	include "controller/controller_congnhan.php"; 
 	include "controller/controller_kysu.php";
 	include "controller/controller_employees.php";
	?>
</body>
</html>