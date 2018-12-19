<!DOCTYPE html>
<html>
<head>
	<title>quản lí cán bộ</title>
	<meta charset="utf-8">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<style type="text/css">
.col-md-offset-8{
	padding: 0px;
	margin-bottom: 5px;
}
#custom-search-input{
	padding: 3px;
	border: solid 1px #E4E4E4;
	border-radius: 6px;
	background-color: #fff;
}

#custom-search-input input{
	border: 0;
	box-shadow: none;
}

#custom-search-input button{
	margin: 2px 0 0 0;
	background: none;
	box-shadow: none;
	border: 0;
	color: #666666;
	padding: 0 8px 0 10px;
	border-left: solid 1px #ccc;
}

#custom-search-input button:hover{
	border: 0;
	box-shadow: none;
	border-left: solid 1px #ccc;
}

#custom-search-input .glyphicon-search{
	font-size: 23px;
	}#custom-search-input{
		padding: 3px;
		border: solid 1px #E4E4E4;
		border-radius: 6px;
		background-color: #fff;
	}

	#custom-search-input input{
		border: 0;
		box-shadow: none;
	}

	#custom-search-input button{
		margin: 2px 0 0 0;
		background: none;
		box-shadow: none;
		border: 0;
		color: #666666;
		padding: 0 8px 0 10px;
		border-left: solid 1px #ccc;
	}

	#custom-search-input button:hover{
		border: 0;
		box-shadow: none;
		border-left: solid 1px #ccc;
	}

	#custom-search-input .glyphicon-search{
		font-size: 23px;
	}
</style>
<body>
	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="index.php">Quản lí cán bộ</a>
			</div>
			<ul class="nav navbar-nav">
				<li class="active"><a href="index.php">Home</a></li>
<!-- 				<li><a href="">Công nhân</a></li>
				<li><a href="#">Kỹ sư</a></li>
				<li><a href="#">Nhân viên</a></li>
 -->			</ul>
		</div>
	</nav>
	<?php
	include 'view/'.$view.'.php';
	?>

</body>
</html>