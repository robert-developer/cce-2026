jQuery(document).ready(function($) {
    $('.custom-post-select').on('change', function() {
        var postId = $(this).val();
        var termSlug = $(this).data('term');

        if (postId) {
            $.ajax({
                url: customAjax.ajax_url,
                type: 'POST',
                data: {
                    action: 'get_acf_fields',
                    post_id: postId
                },
                success: function(response) {
                    $('#custom-fields-' + termSlug).html(response);
                }
            });
        } else {
            $('#custom-fields-' + termSlug).html('');
        }
    });
}); 

jQuery(document).ready(function($) {
    $('#alphabetical-post-select').on('change', function() {
        var postId = $(this).val();

        if (postId) {
            $.ajax({
                url: customAjax.ajax_url,
                type: 'POST',
                data: {
                    action: 'get_post_image',
                    post_id: postId
                },
                success: function(response) {
                    $('#post-image-container').html(response);
                }
            });
        } else {
            $('#post-image-container').html('');
        }
    });

    // Cargar la imagen del primer post por defecto al cargar la página
    var defaultPostId = $('#alphabetical-post-select').val();
    if (defaultPostId) {
        $.ajax({
            url: customAjax.ajax_url,
            type: 'POST',
            data: {
                action: 'get_post_image',
                post_id: defaultPostId
            },
            success: function(response) {
                $('#post-image-container').html(response);
            }
        });
    }
}); 
jQuery(document).ready(function($) {
    $('#alphabetical-post-select-url').on('change', function() {
        // Esto es opcional, dependiendo de si quieres hacer algo al cambiar el select
    });

    $('#go-to-url-button').on('click', function() {
        var postId = $('#alphabetical-post-select-url').val();

        if (postId) {
            $.ajax({
                url: customAjax.ajax_url,
                type: 'POST',
                data: {
                    action: 'get_post_url',
                    post_id: postId
                },
                success: function(response) {
                    if (response) {
                        window.open(response, '_blank'); // Abrir en una nueva pestaña
                    }
                }
            });
        }
    });
});
