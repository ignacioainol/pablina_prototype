<div class="new_posts_container ui form" id="new_posts_container">
	<h1>Categorias</h1>	
	<p><b>Nombre de la Categoria</b></p>

	<div class="ui input">
		<input type="text" class="txtNameCategory" name="txtNameCategory" placeholder="Nombre de Categoria">
	</div>

	<button class="ui blue basic button btnSaveCategory">Guardar Categoria</button>
	<p class="clearfix"></p>

	<h3>Categorias Existentes</h3>

	<table class="ui single line table tblCategories">
	  <thead>
	    <tr>
	      <th>Nombre De Categoria</th>
	      <th>Accion</th>
	    </tr>
	  </thead>
	  <tbody>
	  	<? foreach($categories as $category): ?> 
	    <tr>
	      <td><?= $category['category'] ?></td>
	      <td><i class="fa fa-remove btnRemoveCategory" data-categoryId="<?= $category['category_id'] ?>" style="color: #ff2a00; cursor: pointer;" title="Eliminar Categoria"></i></td>
	    </tr>
		<? endforeach ?>
	  </tbody>
	</table>
</div>