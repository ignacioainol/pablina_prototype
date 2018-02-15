<? require '../res/php/app_top_admin.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Administrar Publicaciones</title>
	<meta name="google-site-verification" content="1sRekMQdYA3zIxiflMFpK9GEP9TbdERBoaq_aTRfKas" />
	<link rel="stylesheet" href="../res/css/framework/semantic/semantic.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="../res/css/main.css">
</head>
<body>

	<? if(isset($_SESSION['admin'])){
		require '../views/nav/main_admin_nav.php';
	}
	?>

	<?
		if(!isset($_SESSION['admin'])){
			require '../views/admin/home.php';
		}else if(isset($_SESSION['admin']) && !isset($_GET['section'])){
			require '../views/admin/main.php';
		}else if(isset($_SESSION['admin']) && isset($_GET['section']) && $_GET['section'] == "posts"){
			require '../views/admin/posts.php';
		}else if(isset($_SESSION['admin']) && isset($_GET['section']) && $_GET['section'] == "categories"){
			require '../views/admin/categories.php';
		}
	 ?>


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="../res/css/framework/semantic/semantic.js"></script>
	<script src="//cdn.ckeditor.com/4.8.0/standard/ckeditor.js"></script>
	<script src="../res/js/admin.js"></script>
</body>
</html>