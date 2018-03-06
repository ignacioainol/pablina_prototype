<?php

require 'init.php';

class User_Actions{
	public function getRecentPosts(){
		global $database;

		$posts = $database->select("posts",[
			"[>]categories" => ["category_id" => "category_id"],
			"[>]types" => ["type_id" => "type_id"],
			"[>]communes" => ["commune_id" => "commune_id"]
		],[
			"posts.post_id",
			"posts.name",
			//"posts.img_post",
			"posts.image_name",
			"posts.create_at",
			"categories.category",
			"types.type",
			"posts.price",
			"communes.commune",
			"posts.image_name"
		],[
			"ORDER" => ["posts.post_id" => "DESC"],
			"LIMIT" => 15
		]);

		return $posts;
	}

	public function getTypes(){
		global $database;

		$types = $database->select("types",[
			"type_id",
			"type"
		]);

		return $types;
	}

	public function getPostInfo($post_id){
		global $database;

		$posts = $database->select("posts",[
			"[>]categories" => ["category_id" => "category_id"],
			"[>]communes" => ["commune_id" => "commune_id"],
			"[>]admins" => ["admin_id" => "admin_id"],
			"[>]cities" => ["city_id" => "city_id"],
			"[>]types" => ["type_id" => "type_id"],
			"[>]gallery" => ["gallery_id" => "gallery_id"]
		], [
			"posts.name",
			"posts.image_name",
			"categories.category",
			"communes.commune",
			"cities.city",
			"types.type",
			"posts.body",
			"posts.bedroom",
			"posts.bathroom",
			"posts.parking",
			"posts.price",
			"posts.create_at",
			"posts.image_name",
			"categories.category",
			"admins.username",
			"admins.email",
			"admins.phone",
			"gallery.name_img",
			"admins.firstname",
			"admins.lastname"
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

	public function getTypes(){
		global $database;

		$types = $database->select("types",[
			"type_id",
			"type"
		]);

		return  $types;
	}

	public function getCommunes(){
		global $database;

		$communes = $database->select("communes",[
			"commune_id",
			"commune"
		]);

		return  $communes;
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

	public function savePost($name,$price,$ufs,$category_id, $type_id, $city_id, $description,$gallery_id,$image_name,$admin_id,$bathroom, $bedroom,$parking,$commune_id){
		global $database;

		$database->insert("posts",[
			"name" => htmlentities($name),
			"body" => $description,
			"gallery_id" => $gallery_id,
			"image_name" =>$image_name,
			"category_id" => htmlentities($category_id),
			"type_id" => $type_id,
			"city_id" => $city_id,
			"admin_id" => $admin_id,
			"ufs"	=> $ufs,
			"price"	=> $price,
			"create_at" => time(),
			"bathroom" => $bathroom,
			"bedroom" => $bedroom,
			"parking" => $parking,
			"commune_id" => $commune_id
		]);

	}

	// 
	public function getPosts(){
		global $database;

		$posts = $database->select("posts",[
			"[>]categories" => ["category_id" => "category_id"],
			"[>]types" => ["type_id" => "type_id"],
			"[>]communes" => ["commune_id" => "commune_id"]
		],[
			"posts.post_id",
			"posts.name",
			//"posts.img_post",
			"posts.image_name",
			"posts.create_at",
			"categories.category",
			"types.type",
			"posts.price",
			"communes.commune",
			"posts.image_name"
		],[
			"ORDER" => ["posts.post_id" => "DESC"],
			"LIMIT" => 12
		]);

		return $posts;

	}

	public function saveImage($gallery_id,$name_img){
		global $database;

		$database->insert("gallery",[
	    	"gallery_id" => $gallery_id,
	    	"name_img" => $name_img
	    ]);
	}

}