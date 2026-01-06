jQuery(document).ready(function($) {
    var categoriaSeleccionada = 'todos'; // Valor por defecto para la categoría
    var mesSeleccionado = 'todos'; // Valor por defecto para el mes

    // Función para cargar promociones
    function cargarPromociones() {
        $.ajax({
            type: 'POST',
            url: customAjax.ajaxurl,
            data: {
                action: 'filtrar_por_categoria',
                categoria: categoriaSeleccionada,
                mes: mesSeleccionado,
            },
            success: function(response) {
                $('#resultado').html(response);
            }
        });
    }

    // Cargar promociones por defecto
    cargarPromociones();

    // Manejar cambios en el select de meses
    $('#temporada-select').change(function() {
        mesSeleccionado = $(this).val();
        cargarPromociones();
    });

    // Habilitar eventos click en los enlaces de categoría
    $('ul#categoria-list li a').click(function(e) {
        e.preventDefault();
        // Obtener la nueva categoría seleccionada
        var nuevaCategoria = $(this).data('categoria');

        // Solo cargar si la categoría ha cambiado
        if (nuevaCategoria !== categoriaSeleccionada) {
            categoriaSeleccionada = nuevaCategoria;
            // Restablecer el mes seleccionado a "todos"
            mesSeleccionado = 'todos';
            cargarPromociones();
        }
    });
}); 
/*
jQuery(function($){

	$('#misha_loadmore').click(function(){
 
		$.ajax({
			url : misha_loadmore_params.ajaxurl, // AJAX handler
			data : {
				'action': 'loadmorebutton', // the parameter for admin-ajax.php
				'query': misha_loadmore_params.posts, // loop parameters passed by wp_localize_script()
				'page' : misha_loadmore_params.current_page // current page
			},
			type : 'POST',
			beforeSend : function ( xhr ) {
				$('#misha_loadmore').text('Loading...'); // some type of preloader
			},
			success : function( posts ){
				if( posts ) {
 
					$('#misha_loadmore').text( 'More posts' );
					$('#misha_posts_wrap').append( posts ); // insert new posts
					misha_loadmore_params.current_page++;
 
					if ( misha_loadmore_params.current_page == misha_loadmore_params.max_page ) 
						$('#misha_loadmore').hide(); // if last page, HIDE the button
 
				} else {
					$('#misha_loadmore').hide(); // if no data, HIDE the button as well
				}
			}
		});
		return false;
	});
 
	/*
	 * Filter
	 
	$('#misha_filters').submit(function(){
 
		$.ajax({
			url : misha_loadmore_params.ajaxurl,
			data : $('#misha_filters').serialize(), // form data
			dataType : 'json', // this data type allows us to receive objects from the server
			type : 'POST',
			beforeSend : function(xhr){
				$('#misha_filters').find('button').text('Filtering...');
			},
			success : function( data ){
 
				// when filter applied:
				// set the current page to 1
				misha_loadmore_params.current_page = 1;
 
				// set the new query parameters
				misha_loadmore_params.posts = data.posts;
 
				// set the new max page parameter
				misha_loadmore_params.max_page = data.max_page;
 
				// change the button label back
				$('#misha_filters').find('button').text('Apply filter');
 
				// insert the posts to the container
				$('#misha_posts_wrap').html(data.content);
 
				// hide load more button, if there are not enough posts for the second page
				if ( data.max_page < 2 ) {
					$('#misha_loadmore').hide();
				} else {
					$('#misha_loadmore').show();
				}
			}
		});
 
		// do not submit the form
		return false;
 
	});
 
*/