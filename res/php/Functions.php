<?php

require 'init.php';

class User_Actions{
	public function getRecentPosts(){
		global $database;

		$posts = $database->select("posts",[
			"post_id",
			"name",
			"img_post",
			"create_at"
		],[
			"ORDER" => ["posts.post_id" => "DESC"],
			"LIMIT" => 8
		]);

		return $posts;
	}

	public function getPostInfo($post_id){
		global $database;

		$posts = $database->select("posts",[
			"[>]categories" => ["category_id" => "category_id"],
			"[>]admins" => ["admin_id" => "admin_id"]
		], [
			"posts.name",
			"posts.img_post",
			"posts.body",
			"posts.create_at",
			"categories.category",
			"admins.username"
		],[
			"posts.post_id" => $post_id
		]);

		return $posts;
	}
}

class Admin_Actions{
	public function logIn($username_email, $pass){
		global $database;

		$data = $database->select('admins',[
			'password'
		],[
			"OR" => [
				"username" => $username_email,
				"email"	   => $username_email
			]
		]);

		$password = $data[0]['password'];

		if($password){
			return true;
		}else{
			return false;
		}
	}

	public function getCategories(){
		global $database;

		$categories = $database->select("categories",[
			"category_id",
			"category"
		]);

		return $categories;
	}

	public function getCities(){
		global $database;

		$cities = $database->select("cities",[
			"city_id",
			"city"
		]);

		return  $cities;
	}

	public function getProfile($email){
		global $database;

		$admin = $database->select("admins",[
			"admin_id",
			"username"
		],[
			"email" => $email
		]);

		return $admin;
	}

	// public function getCity($city){
	// 	global $database;

	// 	$city = $database->select("cities",[
	// 		"city_id",
	// 		"city"
	// 	],[
	// 		"city" => $city
	// 	]);

	// 	return $city;
	// }

	public function saveCategory($category){
		global $database;

		$database->insert("categories", [
			"category" => htmlentities($category)
		]);

		return $database->id();
	}

	public function deleteCategory($category_id){
		global $database;

		$delete = $database->delete("categories", [
			"category_id" => $category_id
		]);

		return $delete->rowCount();
	}

	public function savePost($name,$category_id, $city_id, $description,$name_img,$admin_id){
		global $database;

		$database->insert("posts",[
			"name" => htmlentities($name),
			"body" => $description,
			"img_post" => $name_img,
			"category_id" => htmlentities($category_id),
			"city_id" => $city_id,
			"admin_id" => $admin_id,
			"create_at" => time()
		]);
	}

}