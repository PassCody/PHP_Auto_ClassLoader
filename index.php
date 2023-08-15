<!DOCTYPE html>
<html lang="de">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta name="robots" content="noindex,nofollow" />
		<title>
			Dev-System
		</title>
		<link rel="shortcut icon" href="./src/imgs/favicon-icon.png">
		<link rel="stylesheet" type="text/css" href="./src/css/main.css" />
		<?php /* LIBARY LOADER */
			require_once("./init.php");
			$init = new Initialisation();
			
			/* RUN LIBARY LOADER */
			$init->loadBS();
			
			/* LOAD CSS FILES */
			$init->loadCSSFiles();
			
			/* LOAD JS FILES */
			$init->loadJSFiles();
		?></head>
	<body>
		<?php
			include_once($init->getMainDir()."src/tools/php/ClassLoader.php");
			$cl = new ClassLoader();
			$cl->printPath($init->getMainDir());
			print_r(array_keys($cl->getObjects()));
			$cl->getObjects()["sl"]->sessionStart();
			echo("<br>");
			foreach (getallheaders() as $key => $val) {
				echo($key . " => " . $val . "<br>");
			}
		?>
	</body>
</html>
