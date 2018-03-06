<div class="background_main">
	<div class="overlay"></div>
	<h1 class="main_title">Pablina Propiedades</h1>
</div>
<div class="ui grid stackable container" style="margin-top: 25px">
	<div class="sixteen wide column">
		<h2 style="text-align: center;margin-bottom: 20px;">Publicaciones Recientes</h2>
	</div>

<!--[Ultimos posts]-->
<div class="owl-carousel owl-theme">
    <? foreach($posts as $index => $post): ?>
     <div class="item postReciente">
        <div style="background: url(<?= $path_img . $post['image_name'] . ".png" ?>);" class="imagePost"></div>
        <div class="lastPost" style="padding: 18px;">
            <p class="typeOfLast"><span class="typeOfTransaction"><?= $post['category'] ?></span>  <span class="type_type"><?= $post['type'] ?></span></p>
            <p class="allBarra"><span>$ <?= $post['price']  ?></span></p>
            <a href="post/<?= $post['post_id'] ?>" style="width: 100%;" class="btn btn-info text-center">Ver Propiedad</a>
            <p class="postComunne"><?= $post['commune'] ?></p>
        </div>
    </div>
    <? endforeach ?>
</div>
<!--[/Ultimos posts]-->


</div>