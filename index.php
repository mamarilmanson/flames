<!DOCTYPE>
<html>
<head>
<title>F.L.A.M.E.S. | <?php
			$page = $_GET['page'];
	if ($page)
			echo "About F.L.A.M.E.S.";
		else
			echo "Test your compatibility";
?></title>
<!-- stylesheets -->
<link rel="stylesheet" type="text/css" href="css/style.css"/>
<link rel="stylesheet" type="text/css" href="css/foundation.css"/>
<link rel="stylesheet" type="text/css" href="css/foundation.min.css"/>
<link rel="stylesheet" type="text/css" href="css/normalize.css"/>

<!-- Favicon -->
<link rel="shortcut icon" href="flames.ico" />
</head>

<body>

<div class="row">
	<div class="small-12 medium-12 large-12 column">Header and menu here...</div>
</div>

<div class="row" >
<?php
		if ($page)
		  require($page.".php");
		else
			require("main.php");
?></div>


 </body>
</html>
