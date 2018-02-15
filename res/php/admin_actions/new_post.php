<?php

require '../Functions.php';
$obj = new Admin_Actions();

$name_img = uniqid();

// Obtener el perfil del admin que esta creando el post
$profile = $obj->getProfile($_SESSION['admin']);

$save = $obj->savePost($_POST['txtNamePost'],$_POST['txtCategoryPost'], $_POST['description'], $name_img, $profile[0]['admin_id']);


	move_uploaded_file($_FILES['image_file']['tmp_name'], "../../img/post_images/" . $name_img . ".png");

	$value =  print_r($save);

if($value > 0 ){
	move_uploaded_file($_FILES['image_file']['tmp_name'], "../../img/img_posts/" . $name_img . ".png");

	echo "true";
}else{
	echo "false";
}