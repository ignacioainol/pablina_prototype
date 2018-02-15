<form class="new_posts_container ui form" enctype="multipart/form-data" id="new_posts_container">
	<h1>Nueva Publicacion</h1>	
	<p><b>Nombre de la Publicacion</b></p>
	<div class="ui input">
		<input type="text" class="txtNamePost" name="txtNamePost" placeholder="Nombre de publicacion">
	</div>
	<p><b>Categoria</b></p>
	<div class="field">
		<select class="txtCategoryPost" name="txtCategoryPost">
			<option value="0">Seleccionar Categoria</option>
			<? foreach($categories as $category): ?>
				<option value="<?= $category['category_id'] ?>"><?= $category['category'] ?></option>
			<? endforeach; ?>
		</select>
	</div>

	<p><b>Selecciona Una Imagen</b></p>
	<div class="ui input">
		<input type="file" class="image_file" name="image_file">
	</div>

	<p><b>Publicacion</b></p>
	<textarea name="txtDescription" id="txtDescription"></textarea>

	<button class="ui blue basic button btnSavePost">Subir Publicacion</button>
	<p class="clearfix"></p>
</form>