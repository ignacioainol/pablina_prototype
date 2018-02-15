<? require 'res/php/app_top.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Pablina Propiedades</title>
	<meta name="google-site-verification" content="1sRekMQdYA3zIxiflMFpK9GEP9TbdERBoaq_aTRfKas" />
	<link rel="stylesheet" href="http://localhost/cms_avanzado/res/css/framework/semantic/semantic.css">
	<link rel="stylesheet" href="http://localhost/cms_avanzado/res/css/main.css">
</head>
<body>
	<? require 'views/nav/main_nav.php'; ?>

	<?
		if(!isset($_GET['section'])){
			require 'views/home.php';
		}else if(isset($_GET['section']) && $_GET['section'] == "post"){
			require 'views/post.php';
		}
	 ?>


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="http://localhost/cms_avanzado/res//css/framework/semantic/semantic.js"></script>
</body>
</html>