<!DOCTYPE>
<html>
	<head>
	<title>Flames</title>
		<!-- stylesheets -->
			<link rel="stylesheet" type="text/css" href="css/style.css"/>
			
			<link rel="stylesheet" type="text/css" href="css/foundation.css"/>
			<link rel="stylesheet" type="text/css" href="css/foundation.min.css"/>
			<link rel="stylesheet" type="text/css" href="css/normalize.css"/>

		<!-- Favicon -->
			<link rel="shortcut icon" href="flames.ico" />
	</head>

	<body>
		<div class="bg_image"></div>
		<?php require_once('header.php'); ?>

		<div class="row" >
			<?php
				require("main.php");
			?>
		</div>
	</body>
</html>
