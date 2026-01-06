jQuery(document).ready(function ($) {
    var ajaxurl = my_ajax_object.ajaxurl;
    var offset = 0;
    var loadedPosts = [];
    var categoriaSeleccionada = 'todos'; // Default category

    function loadMorePosts() {
        $.ajax({
            type: 'POST',
            url: ajaxurl,
            data: {
                action: 'load_more_promociones',
                offset: offset,
                posts_per_page: 6,
                categoria: categoriaSeleccionada,
                loaded_posts: JSON.stringify(loadedPosts),
            },
            success: function (response) {
                try {
                    var result = $.parseJSON(response);
                    if (result.success) {
                        $('#resultado .row').append(result.content);
                        offset += 6; // Increment the offset for the next batch of posts

                        if (result.no_more_posts) {
                            $('#btn-promociones').hide();
                        } else {
                            $('#btn-promociones').show();
                        }
                    } else {
                        console.error('Error al cargar más posts:', result.message);
                    }
                } catch (e) {
                    console.log('Mensaje de texto:', response);
                    $('#btn-promociones').hide();
                }
            },
        });
    }

    // Reset offset and load more posts when switching categories
    $('ul#categoria-list li a').click(function (e) {
        e.preventDefault();
        categoriaSeleccionada = $(this).data('categoria');
        offset = 0; // Reset offset to load the first set of posts for the new category
        loadedPosts = []; // Reset the loaded posts array
        $('#resultado .row').empty(); // Clear existing posts
        loadMorePosts();
    });

    $('#btn-promociones').on('click', function (e) {
        e.preventDefault();
        loadMorePosts();
    });

    loadMorePosts();
});