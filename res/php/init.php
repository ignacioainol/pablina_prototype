<?php
session_start();
require 'medoo.php';
use Medoo\Medoo;

try {
	$database = new Medoo([
		// required
		'database_type' => 'mysql',
		'database_name' => 'pablina_database',
		'server' => 'localhost',
		'username' => 'root',
		'password' => 'root',
	]);
	 
	// $database->insert("account", [
	// 	"user_name" => "foo",
	// 	"email" => "foo@bar.com"
	// ]);	
} catch (Exception $e) {
	echo "No se pudo conectar a la base de datos ";
}