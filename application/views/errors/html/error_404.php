<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en" oncontextmenu="return false;">
<head>
<meta charset="utf-8">
<title>Graphene - 404 Page Not Found</title>
<style type="text/css">

::selection { background-color: #E13300; color: white; }
::-moz-selection { background-color: #E13300; color: white; }

body {
	background-color: #fff;
	margin: 40px;
	font: 13px/20px normal Helvetica, Arial, sans-serif;
	color: #4F5155;
}

a {
	color: #003399;
	background-color: transparent;
	font-weight: normal;
}

h1 {
	color: #444;
	background-color: transparent;
	/* border-bottom: 1px solid #D0D0D0; */
	font-size: 29px;
	font-weight: normal;
	margin: 0 0 14px 0;
	padding: 14px 15px 10px 15px;
}

code {
	font-family: Consolas, Monaco, Courier New, Courier, monospace;
	font-size: 12px;
	background-color: #f9f9f9;
	border: 1px solid #D0D0D0;
	color: #002166;
	display: block;
	margin: 14px 0 14px 0;
	padding: 12px 10px 12px 10px;
}

#container {
	margin: 10px;
	/* border: 1px solid #D0D0D0; */
	/* box-shadow: 0 0 8px #D0D0D0; */
}

p {
	margin: 12px 15px 12px 15px;
	font-size: 15px;
}
h5 {
	font-size : 16px;
	margin: 50px 0 0 25px;
}
</style>
</head>
<body>
	<div id="container">
	<div class="auth-header">
        <div class="mb-2"><img src="uploads/logo/graphene_logov4.png" draggable="false" title=""></div>
    </div><br>
		<h1><?php echo $heading; ?></h1>
		<!-- <?php echo $message; ?> -->
		<p>This is not the web page you are looking for.</p>
	</div>
	<h5>2018 © Graphene</h5>
</body>
</html>