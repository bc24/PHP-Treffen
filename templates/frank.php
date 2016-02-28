<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>Mein Erste CMS</title>
		<!-- jQuery -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
		<!-- Bootstrap -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
	<body>
		<div id="main-container" class="container">
			<header id="main-header">

			</header>
			
			<section id="main-content">
				<?= $content ?>
			</section>
			
			<footer id="main-footer">

			</footer>
		</div>
	</body>
</html>