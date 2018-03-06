<? require 'res/php/app_top.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="author" content="Ignacio Ainol">
	<title>Pablina Propiedades</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">-->
	<link rel="stylesheet" href="http://localhost/pablina_propiedades/res/css/main.css">
	<link rel="stylesheet" href="http://localhost/pablina_propiedades/node_modules/owl.carousel/dist/assets/owl.carousel.min.css" />
	<link rel="stylesheet" href="http://localhost/pablina_propiedades/node_modules/pgwslideshow/pgwslideshow.css">
</head>
<body>
	<? require 'views/nav/main_nav.php'; ?>

	<?
		if(!isset($_GET['section'])){
			require 'views/home.php';
		}else if(isset($_GET['section']) && $_GET['section'] == "post"){
			require 'views/post.php';
		}
		else if(isset($_GET['section']) && $_GET['section'] == "posts"){
			require 'views/posts.php';
		}
	 ?>
	

	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script src="http://localhost/pablina_propiedades/node_modules/owl.carousel/dist/owl.carousel.min.js"></script>
	<script src="http://localhost/pablina_propiedades/node_modules/pgwslideshow/pgwslideshow.js"></script>
	<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
	<script src="http://localhost/pablina_propiedades/res/js/app.js"></script>
	<script>
		$(document).ready(function() {
		    $('.pgwSlideshow').pgwSlideshow();
		});
	</script>
</body>
</html>