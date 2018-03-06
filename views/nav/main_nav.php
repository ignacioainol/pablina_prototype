<!--[Navigation]-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img src="http://placehold.it/300x60?text=Logo" width="150" height="30" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="http://localhost/pablina_propiedades/">Inicio
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" style="cursor:pointer;" data-toggle="modal" data-target="#myModal">Contacto</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  <!--[/Navigation]-->

  <!--[Buscador]-->
  <nav class="navbar navbar-light bg-faded justify-content-between buscadorCu">
    <a class="navbar-brand"></a>
    <form class="form-inline">
      <div class="form-group">
        <select name="" id="categorySearch" class="form-control mr-sm-2">
          <? foreach ($categories as $category): ?>
          <option value="<?= $category['category_id'] ?>"><?= $category['category'] ?></option>
          <? endforeach ?>
        </select>
      </div>
      <div class="form-group">
        <select name="typeOfProperty" id="typeOfPropertySearch" class="form-control mr-sm-2 typeOfProperty">
          <? foreach ($types as $type): ?>
          <option value="<?= $type['type_id'] ?>"><?= $type['type'] ?></option>
          <? endforeach ?>
        </select>
      </div>
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar <i class="fa fa-search"></i>
</button>
    </form>
  </nav>
  <!--[/Buscador]-->


<!-- [Modal] -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Contáctanos</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
        <div class="form-group">
          <label for="txtNameContact">Tu nombre</label>
          <input type="text" class="form-control" id="txtNameContact" name="txtNameContact" aria-describedby="nombre" placeholder="Ingresa tu nombre">
          <!--<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
        </div>
        <div class="form-group">
          <label for="txtPhoneContact">Tu número telefonico</label>
          <input type="number" class="form-control" id="txtPhoneContact" name="txtPhoneContact" aria-describedby="nombre" placeholder="Ingresa tu número telefonico">
        </div>
        <div class="form-group">
          <label for="txtPhoneContact">Tu email</label>
          <input type="email" class="form-control" id="txtEmailContact" name="txtEmailContact" aria-describedby="email" placeholder="Ingresa tu email">
        </div>
        <div class="form-group">
          <label for="txtPhoneContact">Asunto</label>
          <textarea  placeholder="Escribenos el asunto del contacto" name="" class="form-control" id="" cols="20" rows="5"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
      </div>
    </div>
  </div>
</div>
<!-- [/Modal] -->