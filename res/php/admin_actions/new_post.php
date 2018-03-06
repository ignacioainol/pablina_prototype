<?php

require '../Functions.php';
$obj = new Admin_Actions();

$gallery_id = uniqid();
$image_one = uniqid();
define("GALLERY_ID", $gallery_id);
define("IMAGE_ONE",$image_one);

// Obtener el perfil del admin que esta creando el post
$profile = $obj->getProfile($_SESSION['admin']);


$save = $obj->savePost($_POST['txtNamePost'],$_POST['txtPricePost'],$_POST['txtUFPost'],$_POST['txtCategoryPost'], $_POST['txtPropertyPost'], $_POST['txtCityPost'], $_POST['description'], $gallery_id,date("Ymd-His", time()).IMAGE_ONE.'-'. str_replace([" ", "(", ")"], $_FILES['image_file']['name'][0]), $profile[0]['admin_id'],$_POST['txtBathroomPost'], $_POST['txtBedroomPost'], $_POST['txtParkingPost'],$_POST['txtCommunePost']);

	foreach ($_FILES['image_file']['name'] as $key => $name) {
		if($key == 0){
			$filename = date("Ymd-His", time()).IMAGE_ONE.'-'. ".png";
			move_uploaded_file($_FILES['image_file']['tmp_name'][$key], '../../img/post_images/' . $filename);
		}
		$filename = date("Ymd-His", time()).mt_rand().'-'. ".png";

		move_uploaded_file($_FILES['image_file']['tmp_name'][$key], '../../img/post_images/' . $filename);
		$obj->saveImage(GALLERY_ID,$filename);
	}

	$value =  print_r($save);

if($value > 0 ){
	foreach ($_FILES['image_file']['name'] as $key => $value) {
		if($key == 0){
			$filename = date("Ymd-His", time()).IMAGE_ONE.'-'. ".png";
			move_uploaded_file($_FILES['image_file']['tmp_name'][$key], '../../img/post_images/' . $filename);
		}
		$filename = date("Ymd-His", time()).mt_rand().'-'. ".png";
		move_uploaded_file($_FILES['image_file']['tmp_name'][$key], '../../img/post_images/' . $filename);

	}

	echo "true";
}else{
	echo "false";
}