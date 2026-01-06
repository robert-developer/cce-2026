jQuery(function($) {
    var currentPage = 1;
    var postsPerPage = 9; // Número de posts por página
    var category = 'todos'; // Categoría predeterminada

    // Llamar a la función para cargar los primeros 9 posts al cargar la página
    filterPosts(category, currentPage, postsPerPage);

    // Manejar el filtro al hacer clic en "Mostrar todos"
    $('#category-filter-all').click(function(e) {
        e.preventDefault();
        category = 'todos';
        currentPage = 1;
        filterPosts(category, currentPage, postsPerPage);
        $('#load-more-posts').show(); // Mostrar el botón "Cargar más"
    });

    // Manejar el filtro al hacer clic en una categoría
    $('#category-filter a').click(function(e) {
        e.preventDefault();
        category = $(this).data('category');
        currentPage = 1;
        filterPosts(category, currentPage, postsPerPage);
        $('#load-more-posts').show(); // Mostrar el botón "Cargar más"
    });

    // Manejar el clic en el botón "Cargar más"
    $('#load-more-posts').click(function(e) {
        e.preventDefault();
        currentPage++; // Incrementar el número de página
        filterPosts(category, currentPage, postsPerPage);
    });

    function filterPosts(category, page, perPage) {
        var ajaxurl = ajax_params.ajax_url;

        $.ajax({
            type: 'POST',
            url: ajaxurl,
            data: {
                action: 'filter_posts',
                category: category,
                page: page,
                per_page: perPage
            },
            success: function(response) {
                if (response.trim() === 'No hay más posts para cargar.') {
                    $('#load-more-posts').hide(); // Ocultar el botón "Cargar más"
                } else {
                    if (page === 1) {
                        $('#posts-container').html(response); // Reemplazar los posts existentes al cargar la primera página
                    } else {
                        $('#posts-container').append(response); // Agregar nuevos posts al cargar más
                    }
                }
            }
        });
    }
});