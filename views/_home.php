<div class="background_main">
	<div class="overlay"></div>
	<h1 class="main_title">Pablina Propiedades</h1>
</div>
<div class="ui grid stackable container" style="margin-top: 25px">
	<div class="sixteen wide column">
		<h2 style="text-align: center">Publicaciones Recientes</h2>
	</div>

	<? foreach($posts as $post): ?>
	<a href="post/<?= $post['post_id'] ?>" class="four wide column">
		<div class="post_container">
			<div style="background: url('<?= $path_img . $post['img_post']?>.png');background-size: cover;width: 100%; height: 140px;background-position: center center"></div>
			<!-- <img src="<?= $path_img . $post['img_post'] ?>.png" alt="<?= $post['name'] ?>" class="post_img"> -->
			<h2 class="post_title"><?= $post['name']; ?></h2>
			<p class="post_date"><?= date("d-m-Y", $post['create_at']) ?></p>
		</div>
	</a>
	<? endforeach ?>
</div>