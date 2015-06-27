<html>
 <head>
  <title>F.L.A.M.E.S. | <?php
			$page = $_GET['page'];
	if ($page)
			echo "About F.L.A.M.E.S.";
		else
			echo "Test your compatibility";
  ?></title>
		<link rel="stylesheet" type="text/css" href="style.css"/>
		<link rel="shortcut icon" href="flames.ico" />
 </head>
  <body>
	<div id="black_box" width="100%" align="center">
		<span id="title">F.L.A.M.E.S.</span><br/>
		<span id="subtitle"><span style="font-size: 9px">Friends * Lovers * Anger * Married * Engaged * Sweethearts</span> <br/>
Do you really think you're compatible?</span>
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
 </body>

</html> 
