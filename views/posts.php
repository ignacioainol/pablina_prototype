<div class="ui grid stackable container" style="margin-top: 25px">
	<div class="sixteen wide column">
		<h2 style="text-align: center;margin-bottom: 20px;"> Todas las Publicaciones</h2>
	</div>

    <div class="item allPosts">
        <div class="container">
          <div class="row">

            <? foreach ($posts as $index => $post): ?>
            <div class="col-sm-3 col-xs-1">
              <div style="background: url(<?= $path_img . $post['image_name'] . ".png" ?>);" class="imagePost"></div>
                  <div class="lastPost" style="padding: 18px;">
                    <p class="typeOfLast"><span class="typeOfTransaction"><?= $post['category'] ?></span>  <span class="type_type"><?= $post['type'] ?></span></p>
                    <p class="allBarra"><span>$ <?= $post['price']  ?></span></p>
                    <a href="post/<?= $post['post_id'] ?>" style="width: 100%;" class="btn btn-info text-center">Ver Propiedad</a>
                    <p class="postComunne"><?= $post['commune'] ?></p>
                </div>
            </div>
            <? endforeach ?>
            
            <div class="text-center">
              <nav aria-label="Page navigation example" style="text-align: center">
                <ul class="pagination">
                  <li class="page-item">
                    <a class="page-link" href="#" aria-label="Previous">
                      <span aria-hidden="true">&laquo;</span>
                      <span class="sr-only">Previous</span>
                    </a>
                  </li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                      <span aria-hidden="true">&raquo;</span>
                      <span class="sr-only">Next</span>
                    </a>
                  </li>
                </ul>
              </nav>
            </div>
            
          </div>
        </div>
    </div>


</div>