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
	<div id="black_box" width="100%" align="center">
		<span id="title">F.L.A.M.E.S.</span><br/>
		<span id="subtitle"><span style="font-size: 9px">Friends * Lovers * Anger * Married * Engaged * Sweethearts</span> <br/> Do you really think you're compatible?</span>
	</div>

<div align="center">
<?php

		if ($page)
		  require($page.".php");
		else
			require("main.php");
?></div>
		<hr style="color: gray" width="1000"/>
	<div align="center">
		<table width="1000" height="50" border="0">
			<tr>
				<td rowspan="2" width="500">
					<div align="left">
							<a href="http://www.facebook.com/"><img src="facebook.jpg" title="Facebook"/></a>&nbsp;
							<a href="http://www.youtube.com/"><img src="youtube.jpg" title="Youtube"/></a>&nbsp;
							<a href="http://www.tumblr.com/"><img src="tumblr.jpg" title="Tumblr"/></a>&nbsp;
							<a href="http://www.twitter.com/"><img src="twitter.jpg" title="Twitter"/></a>&nbsp;
					</div>
				</td>
				<td width="500">
				<div align="right">
					<a href="index.php" id="links">Main</a>&nbsp;
					<a href="index.php?page=disclaimer" id="links">Disclaimer</a>&nbsp;
					<a href="index.php?page=about" id="links">About</a>&nbsp;
				</div>
				</td>
			</tr>
			<tr>
				<td>&nbsp;</td>
			</tr>
		</table>
	</div>


    <div class="row">
        <div class="small-12 large-6 columns">This is a test row 1...</div>
        <div class="small-12 large-6 columns">This is a test row 2...</div>
    </div>

 </body>
</html>
