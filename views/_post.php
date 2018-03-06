<div class="container">
	<div class="post_main_img">
	<img class="" src="<?= $path_img . $post[0]['img_post'] ?>.png" alt="<?= $post[0]['name'] ?>">	
	</div>

	<div class="post_main_body">
		<h1><?= $post[0]['name'] ?></h1>
		<p> <?= date("d-m-Y", $post[0]['create_at']) ?> </p>
		<p class="postBy">Publicado por <span class="namePostBy"><?= $post[0]['username'] ?></span></p>
		<p><?= $post[0]['body'] ?></p>
	</div>
	<?= "<pre>",print_r($post[0]), "</pre>" ?>
</div>