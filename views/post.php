<style>
	.pgwSlideshow ul {
	padding-left: 0 !important;
	}
</style>
<? /*"<pre>"; ?>
	<?= print_r($post); ?>
<?= "</pre>";*/ ?>
<div class="container infoAllPost">
	<h2 class="detailProperty"><span class="logocasa"><i class="fas fa-home"></i></span>  Informacíon de la Propiedad</h2>

	<div class="row">
		<div class="col-sm-12 col-md-5 infoCorredor">
			<p><b>Corredora: </b></p>
			<p class="nameExecutive"><?= $post[0]['firstname'] ." ". $post[0]['lastname'] ?>- <?= $post[0]['email'] ." - ". $post[0]['phone'] ?></p>
			
			<table class="table">
			  <tbody>
			    <tr>
			      <td><b>Dirección: </b></td>
			      <td><?= $post[0]['name'] ?></td>
			    </tr>
			    <tr>
			      <td><b>Comuna</b></td>
			      <td><?= $post[0]['commune'] ?></td>
			    </tr>
			    <tr>
			      <td><b>Región</b></td>
			      <td><?= $post[0]['city'] ?></td>
			    </tr>
			    <tr>
			      <td><b>Tipo</b></td>
			      <td><?= $post[0]['type'] ?></td>
			    </tr>
			    <? if ($post[0]['type'] == "Oficina" || $post[0]['type'] == "Casa" || $post[0]['type'] == "Departamento"): ?>
					<tr>
				      <td><b>Dormitorios</b></td>
				      <td><?= $post[0]['bedroom'] ?></td>
				    </tr>
				    <tr>
				      <td><b>Baños</b></td>
				      <td><?= $post[0]['bathroom'] ?></td>
				    </tr>
			    <? endif ?>
			    <tr>
			      <td><b>Estacionamientos</b></td>
			      <td><?= $post[0]['parking'] ?></td>
			    </tr>
			    <tr>
			      <td><b>Operación</b></td>
			      <td><?= $post[0]['category'] ?></td>
			    </tr>
			    <tr>
			      <td><b>Valor</b></td>
			      <td>$<?= $post[0]['price'] ?>.-</td>
			    </tr>
			  </tbody>
			</table>
		</div>

		<div class="col-md-1"></div>

		<div class="col-sm-12 col-md-6 infoOther">
			 <ul class="pgwSlideshow">
			 	<li><img src="http://localhost/pablina_propiedades/res/img/post_images/<?= $post[0]['image_name'] ?>.png" alt=""></li>
			 	<?foreach($post as $index => $imagen): ?>
			 		<? if ($index > 0): ?>
			 			<li><img src="http://localhost/pablina_propiedades/res/img/post_images/<?= $imagen['name_img'] ?>" alt=""></li>
			 		<? endif ?>
				<? endforeach ?>
			</ul>
		</div>
	</div>
</div>
