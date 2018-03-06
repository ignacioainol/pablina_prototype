<form class="new_posts_container ui form" enctype="multipart/form-data" id="new_posts_container">
	<h1>Nueva Publicacion</h1>	
	<p><b>Direccion de la Publicacion</b></p>
	<div class="ui input">
		<input type="text" class="txtNamePost" name="txtNamePost" placeholder="Direccion de publicacion">
	</div>
	<p><b>Valor en CLP</b></p>
	<div class="ui input">
		<input type="text" onkeyup="format(this)" onchange="format(this)" class="txtPricePost" name="txtPricePost" placeholder="Valor de la vivienda">
	</div>
	<p><b>Valor en UFs</b></p>
	<div class="ui input">
		<input type="text" class="txtUFPost" name="txtUFPost" placeholder="Valor de la vivienda en UFs">
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

	<p><b>Propiedad</b></p>
	<div class="field">
		<select class="txtPropertyPost" name="txtPropertyPost">
			<option value="0">Seleccionar Propiedad</option>
			<? foreach($types as $type): ?>
				<option value="<?= $type['type_id'] ?>"><?= $type['type'] ?></option>
			<? endforeach; ?>
		</select>
	</div>
	
	<p><b>Region</b></p>
	<div class="field">
		<select class="txtCityPost" name="txtCityPost">
			<option value="8">Región del BioBio</option>
		</select>
	</div>

	<p><b>Comuna</b></p>
	<div class="field">
		<select class="txtCommunePost" name="txtCommunePost">
			<option value="0">Seleccione Comuna</option>
			<? foreach($communes as $commune): ?>
   			 <option value="<?= $commune['commune_id'] ?>"><?= $commune['commune'] ?></option>
			<? endforeach; ?>
		</select>
	</div>
	
	<p><b>Baños</b></p>
	<div class="field">
	<select name="txtBathroomPost" id="txtBathroomPost">
		<? for($i = 1; $i < 10 ; $i++): ?>
			<option value="<?= $i ?>"><?= $i ?></option>
		<? endfor ?>
	</select>
	</div>
	
	<p><b>Dormitorios</b></p>
	<div class="field">
	<select name="txtBedroomPost" id="txtBedroomPost">
		<? for($i = 1; $i < 10 ; $i++): ?>
			<option value="<?= $i ?>"><?= $i ?></option>
		<? endfor ?>
	</select>
	</div>

	<p><b>Estacionamientos</b></p>
	<div class="field">
	<select name="txtParkingPost" id="txtParkingPost">
		<? for($i = 0; $i < 10 ; $i++): ?>
			<option value="<?= $i ?>"><?= $i ?></option>
		<? endfor ?>
	</select>
	</div>

	<p><b>Selecciona Una Imagen</b></p>
	<div class="ui input">
		<input type="file" class="image_file" name="image_file[]" multiple>
	</div>

	<p><b>Publicacion</b></p>
	<textarea name="txtDescription" id="txtDescription"></textarea>

	<button class="ui blue basic button btnSavePost">Subir Publicacion</button>
	<p class="clearfix"></p>
</form>