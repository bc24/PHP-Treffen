<!DOCTYPE html>
<html lang="de">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
	<title>Mein Erste CMS</title>

	<!-- CSS  -->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
	<link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
<nav class="light-blue lighten-1" role="navigation">
	<div class="nav-wrapper container">

			<?php include __DIR__."/../ziele.php"; ?>


	</div>
</nav>
<div class="section no-pad-bot" id="index-banner">
	<div class="container">
		<br><br>
		<h1 class="header center orange-text">Erstes CMS</h1>
		<div class="row center">
			<h5 class="header col s12 light">Wir endwickeln ein eigengenes CMS in PHP</h5>
		</div>
		<div class="row center">

		</div>
		<br><br>

	</div>
</div>


<div class="container">

	<div class="section">

		<?= @$content ?>

	</div>
	<br><br>

	<div class="section">

	</div>
</div>

<footer class="page-footer orange">

	<div class="footer-copyright">
		<div class="container">
			&copy; 2016 PHP-Kurs <a href="http://frank-panzer.de">Frank Panzer</a>
		</div>
	</div>
</footer>


<!--  Scripts-->
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="js/materialize.js"></script>
<script src="js/init.js"></script>

</body>
</html>
