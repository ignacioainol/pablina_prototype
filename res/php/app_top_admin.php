<?php

require 'Functions.php';
$admin = new Admin_actions();

if(isset($_SESSION['admin']) && isset($_GET['section']) && $_GET['section'] == "posts"){
	//Obtener Categorias
	$categories = $admin->getCategories();
}

if(isset($_SESSION['admin']) && isset($_GET['section']) && $_GET['section'] == "posts"){
	//Obtener Categorias
	$cities = $admin->getCities();
}

if(isset($_SESSION['admin']) && isset($_GET['section']) && $_GET['section'] == "categories"){
	//Obtener Categorias
	$categories = $admin->getCategories();
}