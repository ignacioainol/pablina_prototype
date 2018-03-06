<?php

require 'Functions.php';
$user = new User_Actions();
$admin = new Admin_Actions();

if(!isset($_GET['section'])){
	$posts = $user->getRecentPosts();
	$path_img = "res/img/post_images/";
	$types = $user->getTypes();
	$categories = $admin->getCategories();

}elseif(isset($_GET['section']) && $_GET['section'] == "post"){
	//Obtener publicaciones info
	$post = $user->getPostInfo($_GET['post_id']);
	$path_img ="../res/img/post_images/";
}
elseif(isset($_GET['section']) && $_GET['section'] == "posts"){
	//Obtener posts
	$posts = $admin->getPosts();
	$path_img ="res/img/post_images/";
}