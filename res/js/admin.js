$(document).ready(function(){
	var root = "http://localhost/pablina_propiedades/";

	try{
		 CKEDITOR.replace('txtDescription');
	}catch(e){}

	//Login
	$('.btnAdminLogin').on('click',function(){
		var email = $('.txtEmailLogin').val().trim(),
			pass  = $('.txtPassLogin').val().trim();

		$.ajax({
			type: "POST",
			url: root + "res/php/admin_actions/login.php",
			data: {
				email: email,
				password: pass
			},
			success: function(data){
				if(data == "true"){
					window.location.href = "http://localhost/pablina_propiedades";
				}else if(data == "false"){
					alert("Sus credenciales no son validas");
				}
			}
		});
	});

	$(".btnSaveCategory").on('click',function(){
		var category = $(".txtNameCategory").val().trim(),
			self = this;

			$.ajax({
				type: "POST",
				url: root + "res/php/admin_actions/save_category.php",
				data: {
					category: category
				},
				beforeSend: function(){
					$(self).addClass('loading');
				},
				success: function(data){
					$(self).removeClass('loading');
					if(data > 0 ){
						alert("Se guardó correctamente");
						$(".txtNameCategory").val("");
						$(".tblCategories tr:last").after('<tr><td>'+category+'</td><td><i class="fa fa-remove btnRemoveCategory" data-categoryId="'+data+'" style="color: #ff2a00; cursor: pointer;" title="Eliminar Categoria"></i></td></tr>');
					}else{
						alert("Hubo un error");
					}
				},
				error: function(){
					alert("Hay un error");
				}
			});
	});

	$(".tblCategories").on("click", ".btnRemoveCategory", function(){
		var category_id = $(this).attr("data-categoryId"),
		self = this;

		$.ajax({
			type: "POST",
			url: root + "res/php/admin_actions/delete_category.php",
			data: {
				category_id: category_id
			},
			beforeSend: function(){
				$(self).addClass('loading');
			},
			success: function(data){
				console.log(data);
				if(data > 0){
					$(self).parent().parent().remove();
				}else{
					alert("error");
				}
			},
			error: function(){
				alert("error");
			}
		});
	});

	$(".txtCityPost").on("change",function(){
		var region = $(".txtCityPost").val().trim();
		if(region == 8){
			console.log("Biobio Region");
			$("#containerCommune").show();

		}else{
			console.log("No Biobio");
		}
	})

	$(".btnSavePost").on("click",function(e){
		e.preventDefault();
		
		var description = CKEDITOR.instances.txtDescription.getData(),
			name = $(".txtNamePost").val().trim(),
			price = $(".txtPricePost").val().trim(),
			ufs = $(".txtPricePost").val().trim(),
			category_id = $(".txtCategoryPost").val().trim(),
			type_id = $(".txtPropertyPost").val().trim(),
			city_id = $(".txtCityPost").val().trim(),
			bathroom = $("#txtBathroomPost").val().trim(),
			bedroom = $("#txtBedroomPost").val().trim(),
			commune_id = $(".txtCommunePost").val().trim();

			if(description !== "" && name !== "" && price !== "" 
				&& ufs !== "" && category_id > 0 && type_id > 0
				 && city_id > 0 && commune_id > 0 && bathroom > 0 && bedroom > 0){
				var formData = new FormData($("#new_posts_container")[0]);
				formData.append("description", description);

				$.ajax({
					xhr: function(){
						var xhr = new window.XMLHttpRequest();
						xhr.upload.addEventListener("progress", function(evt){
							if(evt.lengthComputable){
								var percentComplete = evt.loaded / evt.total;
								percentComplete = parseInt(percentComplete * 100);
								console.log(percentComplete);
							}
						}, false);
						return xhr;
					},
					type: "POST",
					url: root + "res/php/admin_actions/new_post.php",
					data: formData,
					processData: false,
					contentType: false,
					beforeSend: function(){
						//nada aun
					},
					success: function(data){
						console.log(data);
						$(".txtNamePost, .image_file").val("");
						CKEDITOR.instances['txtDescription'].setData("");
						alert("Publicacion creada");
					},
					error: function(ts) { console.log(ts.responseText) }
				});
			}else{
				alert("Complete todos los campos");
			}
	});
});

function format(input){
    var num = input.value.replace(/\./g,'');
    if(!isNaN(num)){
    num = num.toString().split('').reverse().join('').replace(/(?=\d*\.?)(\d{3})/g,'$1.');
    num = num.split('').reverse().join('').replace(/^[\.]/,'');
    input.value = num;
    }
     
    else{ alert('Solo se permiten numeros');
    input.value = input.value.replace(/[^\d\.]*/g,'');
    }
}
