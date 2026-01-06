<?php

add_theme_support( 'post-thumbnails' );
add_theme_support( 'post-thumbnails', array( 'post' ) );          // Posts only
add_theme_support( 'post-thumbnails', array( 'page' ) );          // Pages only
add_theme_support( 'post-thumbnails', array( 'post', 'recetas' ) ); // Posts and Movies





the_post_thumbnail( 'thumbnail' );     // Thumbnail (150 x 150 hard cropped)
the_post_thumbnail( 'medium' );        // Medium resolution (300 x 300 max height 300px)
the_post_thumbnail( 'medium_large' );  // Medium Large (added in WP 4.4) resolution (768 x 0 infinite height)
the_post_thumbnail( 'large' );         // Large resolution (1024 x 1024 max height 1024px)
the_post_thumbnail( 'full' );          // Full resolution (original size uploaded)



function agregar_jquery() {
    wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js', array(), null, true);
	wp_localize_script('jquery','dcms_vars',['ajaxurl'=>admin_url('admin-ajax.php')]);
}

add_action('wp_enqueue_scripts', 'agregar_jquery');




function wpb_custom_new_menu_footer_column_1() {
    register_nav_menus(
      array(
              'menu-footer-1' => __( 'Menu Footer 1' )
      )
    );
  }
  add_action( 'init', 'wpb_custom_new_menu_footer_column_1' );
  
  function wpb_custom_new_menu_footer_column_2() {
    register_nav_menus(
      array(
        'menu-footer-2' => __( 'Menu Footer 2' )
      )
    );
  }
  add_action( 'init', 'wpb_custom_new_menu_footer_column_2' );
  
  function wpb_custom_new_menu_footer_column_3() {
    register_nav_menus(
      array(
        'menu-footer-3' => __( 'Menu Footer 3' )
      )
    );
  }
  add_action( 'init', 'wpb_custom_new_menu_footer_column_3' ); 
  
  function wpb_custom_menu_movil() {
    register_nav_menus(
      array(
        'menu-movil' => __( 'Menu movil' )
      )
    );
  }
  add_action( 'init', 'wpb_custom_menu_movil' ); 


  
  function wpb_custom_new_menu_principal() {
    register_nav_menus(
      array(
        'menu-principal-5' => __( 'Menu Principal' )
      )
    );
  }
  add_action( 'init', 'wpb_custom_new_menu_principal' ); 



wp_register_script( 'jQuery', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js', null, null, true );
wp_enqueue_script('jQuery');
wp_register_style( 'owl-carousel-min', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css' );
wp_enqueue_style('owl-carousel-min'); 
wp_register_style( 'owl-carousel-theme', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css' );
wp_enqueue_style('owl-carousel-theme');



/*Custom Post type start*/
/*
function cw_post_type_recetas() {
$supports = array(
'title', // post title
'editor', // post content
'author', // post author
'thumbnail', // featured images
'excerpt', // post excerpt
'custom-fields', // custom fields
'comments', // post comments
'revisions', // post revisions
'post-formats', // post formats
);
$labels = array(
'name' => _x('recetas', 'plural'),
'singular_name' => _x('recetas', 'singular'),
'menu_name' => _x('Recetas', 'admin menu'),
'name_admin_bar' => _x('recetas', 'admin bar'),
'add_new' => _x('Add receta', 'add receta'),
'add_new_item' => __('Add New recetas'),
'new_item' => __('New recetas'),
'edit_item' => __('Edit recetas'),
'view_item' => __('View recetas'),
'all_items' => __('All recetas'),
'search_items' => __('Search recetas'),
'not_found' => __('No news found.'),
);
$args = array(
'supports' => $supports,
'labels' => $labels, 
'menu_icon' => 'dashicons-list-view',
'public' => true,
'query_var' => true,
'rewrite' => array('slug' => 'recetas'),
'has_archive' => true,
'hierarchical' => false, 
'thumbnail' => true,
	 // This is where we add taxonomies to our CPT
   'taxonomies'          => array( 'categorias' ),
);
 register_taxonomy( 
    'categorias', array('categorias'), 
    array( 
        'hierarchical' => true, 
        'label' => 'Categorias', 
        'singular_label' => 'Categoria', 
        'rewrite' => array( 'slug' => 'Categorias' )
    )
);  
	
	
register_post_type('recetas', $args);
}
add_action('init', 'cw_post_type_recetas');
/*Custom Post type end*/


 




  

 
/*Custom Post type start*/
/*
function cw_post_type_productos() {
$supports = array(
'title', // post title
'editor', // post content
'author', // post author
'thumbnail', // featured images
'excerpt', // post excerpt
'custom-fields', // custom fields
'comments', // post comments
'revisions', // post revisions
'post-formats', // post formats
);
$labels = array(
'name' => _x('productos', 'plural'),
'singular_name' => _x('productos', 'singular'),
'menu_name' => _x('productos', 'admin menu'),
'name_admin_bar' => _x('productos', 'admin bar'),
'add_new' => _x('Add producto', 'add producto'),
'add_new_item' => __('Add New productos'),
'new_item' => __('New productos'),
'edit_item' => __('Edit productos'),
'view_item' => __('View productos'),
'all_items' => __('All productos'),
'search_items' => __('Search productos'),
'not_found' => __('No news found.'),
);
$args = array(
'supports' => $supports,
'labels' => $labels, 
'menu_icon' => 'dashicons-products',
'public' => true,
'publicly_queryable' => true, 
'query_var' => true,
'rewrite' => array('slug' => 'productos'),  

'has_archive' => true,
'hierarchical' => false, 
 // This is where we add taxonomies to our CPT
 /*  'taxonomies'          => array( 'product_cat' ),
);*/

/*	register_taxonomy( 
    'product_cat', array('product_cat'), 
    array( 
        'hierarchical' => true, 
        'label' => 'Categorias', 
        'singular_label' => 'categoria', 
		'has_archive' => true,
        'rewrite' => array( 'slug' => 'c' )
    )
);*//*
register_post_type('productos', $args);
}
add_action('init', 'cw_post_type_productos');
/*Custom Post type end*/






 
function my_post_queries( $query ) {
  // do not alter the query on wp-admin pages and only alter it if it's the main query
  if (!is_admin() && $query->is_main_query()){

    // alter the query for the home and category pages 

    if(is_home()){
      $query->set('posts_per_page', 1);
    }

    if(is_category()){
      $query->set('posts_per_page', 9);
    }
if ( is_archive() ) {
      $query->set('posts_per_page', 9);
    } 
	  
	
  }
	
	
}
add_action( 'pre_get_posts', 'my_post_queries' );


/*
function custom_flush_rewrite_rules() {
    flush_rewrite_rules();
}
add_action( 'after_switch_theme', 'custom_flush_rewrite_rules' ); 
*/
add_action('generate_rewrite_rules', 'dcms_posts_add_rewrite_rules');
function dcms_posts_add_rewrite_rules( $wp_rewrite ){
	$slug = "blog";
    $new_rules = [
        $slug.'/page/([0-9]{1,})/?$' => 'index.php?post_type=post&paged='. $wp_rewrite->preg_index(1),
        $slug.'/(.+?)/?$' => 'index.php?post_type=post&name='. $wp_rewrite->preg_index(1),
    ];
    $wp_rewrite->rules = $new_rules + $wp_rewrite->rules;
    return $wp_rewrite->rules;
}

add_filter('post_link', 'dcms_posts_change_blog_links', 1, 3);
function dcms_posts_change_blog_links($post_link, $id=0){
	$slug = "blog";
    $post = get_post($id);
    if( is_object($post) && $post->post_type == 'post'){
        return home_url('/'.$slug.'/'. $post->post_name.'/');
    }
    return $post_link;
}










/*
add_filter("pre_option_relevanssi_index_post_types", function () {
    $list = array();
    foreach (get_post_types(array("exclude_from_search"=>false)) as $post_type) {
        $list[] = $post_type;
    }
    return $list;
});
*/




// Register Custom Taxonomy
function custom_taxonomy() {
    $labels = array(
        'name'                       => 'categorias',
        'singular_name'              => 'categoria',
        'menu_name'                  => 'Nombre en el menú',
        'all_items'                  => 'Todos los elementos',
        'parent_item'                => 'Elemento padre',
        'parent_item_colon'          => 'Elemento padre:',
        'new_item_name'              => 'Nuevo nombre de elemento',
        'add_new_item'               => 'Agregar nuevo elemento',
        'edit_item'                  => 'Editar elemento',
        'update_item'                => 'Actualizar elemento',
        'separate_items_with_commas' => 'Separar elementos con comas',
        'search_items'               => 'Buscar elementos',
        'add_or_remove_items'        => 'Agregar o eliminar elementos',
        'choose_from_most_used'      => 'Elegir de los más usados',
        'not_found'                  => 'No se encontraron elementos',
    );
    $args = array(
        'labels'                     => $labels,
        'hierarchical'               => true,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => true,
        'show_tagcloud'              => true,
    );
    register_taxonomy( 'categorias', array( 'productos' ), $args );
}
add_action( 'init', 'custom_taxonomy', 0 );



// Función para contar visualizaciones de un post.
function set_post_views() {
    if ( is_home() ) {
        $post_ID = get_the_ID();
        $count = get_post_meta( $post_ID, 'post_views', true );

        if ( $count == '' ) {
            delete_post_meta( $post_ID, 'post_views' );
            add_post_meta( $post_ID, 'post_views', 1 );
        } else {
            update_post_meta( $post_ID, 'post_views', ++$count );
        }
    }
}
add_action( 'wp', 'set_post_views' );

// Función para obtener el número de visualizaciones de un post
function get_post_views( $post_ID ){
    $count = get_post_meta($post_ID, 'post_views', true);

    if ( $count == '' ){
        delete_post_meta($post_ID, 'post_views');
        add_post_meta($post_ID, 'post_views', 0);
        return 0;
    }

    return $count;
}
function custom_taxonomy_template() {
  if ( is_tax( 'product_cat' ) ) {
    // Aquí puedes personalizar la plantilla de taxonomía de categoría de productos
    // Puedes incluir código HTML, PHP y llamadas a funciones de WooCommerce
      //echo  the_title();
  }
}
add_action( 'woocommerce_before_main_content', 'custom_taxonomy_template' ); 



add_filter( 'body_class', 'product_cats_css_body_class' );

function product_cats_css_body_class( $classes ){
  if( is_archive( 'product-cat' ) )
  {
    $custom_terms = get_the_terms(0, 'product_cat');
    if ($custom_terms) {
      foreach ($custom_terms as $custom_term) {
        $classes[] = $custom_term->slug;
      }
    }
  }
  return $classes;
} 

function mytheme_add_woocommerce_support() {
  add_theme_support( 'woocommerce' );
}

add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' ); 

/*

remove_action( 'woocommerce_before_shop_loop_item', 'woocommerce_template_loop_product_link_open', 10 );
remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_product_link_close', 5 ); 

*/


/**
 * Change several of the breadcrumb defaults
 */
add_filter( 'woocommerce_breadcrumb_defaults', 'jk_woocommerce_breadcrumbs' );
function jk_woocommerce_breadcrumbs() {
    return array(
            'delimiter'   => ' &#47; ',
            'wrap_before' => '<nav class="woocommerce-breadcrumb" itemprop="breadcrumb"><div class="container">',
            'wrap_after'  => '</div></nav>',
            'before'      => '',
            'after'       => '',
            'home'        => _x( 'Home', 'breadcrumb', 'woocommerce' ),
        );
} 

/**
 * Change number or products per row to 3
 */
add_filter('loop_shop_columns', 'loop_columns', 999);
if (!function_exists('loop_columns')) {
	function loop_columns() {
		return 3; // 3 products per row
	}
} 

add_action( 'woocommerce_after_shop_loop_item_title', function() {
	the_content();
} );

add_action('woocommerce_shop_loop_item_title', 'display_shop_loop_product_attributes');
function display_shop_loop_product_attributes() {
    global $product;

    // Define you product attribute taxonomies in the array
    $product_attribute_taxonomies = array( 'pa_tipo', 'pa_class', 'pa_faction', 'pa_gender' );
    $attr_output = array(); // Initializing

    // Loop through your defined product attribute taxonomies
    foreach( $product_attribute_taxonomies as $taxonomy ){
        if( taxonomy_exists($taxonomy) ){
            $label_name = wc_attribute_label( $taxonomy, $product );

            $term_names = $product->get_attribute( $taxonomy );

            if( ! empty($term_names) ){
                $attr_output[] = '<span class="'.$taxonomy.'"> '.$term_names.'</span>';
            }
        }
    }

    // Output
    echo '<div class="product-attributes">'.implode( '<br>', $attr_output ).'</div>';
}  








// Guarda los campos adicionales en el carrito
/*add_filter( 'woocommerce_add_cart_item_data', 'save_custom_cart_item_data', 10, 2 );
function save_custom_cart_item_data( $cart_item_data, $product_id ) {
    if ( isset( $_POST['address_field'] ) ) {
        $cart_item_data['address_field'] = sanitize_text_field( $_POST['address_field'] );
    }
    
    if ( isset( $_POST['optional_text_field'] ) ) {
        $cart_item_data['optional_text_field'] = sanitize_text_field( $_POST['optional_text_field'] );
    }
    
    return $cart_item_data;
}

// Muestra los campos adicionales en el carrito
add_filter( 'woocommerce_get_item_data', 'display_custom_cart_item_data', 10, 2 );
function display_custom_cart_item_data( $cart_data, $cart_item ) {
    if ( isset( $cart_item['address_field'] ) ) {
        $cart_data[] = array(
            'key'   => __( 'Address', 'text-domain' ),
            'value' => sanitize_text_field( $cart_item['address_field'] ),
        );
    }
    
    if ( isset( $cart_item['optional_text_field'] ) ) {
        $cart_data[] = array(
            'key'   => __( 'Optional Text', 'text-domain' ),
            'value' => sanitize_text_field( $cart_item['optional_text_field'] ),
        );
    }
    
    return $cart_data;
}

// Agrega los campos adicionales en el checkout
add_action( 'woocommerce_after_order_notes', 'add_custom_checkout_fields' );
function add_custom_checkout_fields( $checkout ) {
    if ( WC()->cart && ! WC()->cart->is_empty() ) {
        foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
            if ( isset( $cart_item['address_field'] ) ) {
                $checkout->checkout_fields['order']['address_field']['default'] = sanitize_text_field( $cart_item['address_field'] );
            }

            if ( isset( $cart_item['optional_text_field'] ) ) {
                $checkout->checkout_fields['order']['optional_text_field']['default'] = sanitize_text_field( $cart_item['optional_text_field'] );
            }
        }
    }
}

// Guarda los campos adicionales en la orden
add_action( 'woocommerce_checkout_create_order', 'save_custom_checkout_fields', 10, 2 );
function save_custom_checkout_fields( $order, $data ) {
    if ( isset( $_POST['address_field'] ) ) {
        $order->update_meta_data( 'address_field', sanitize_text_field( $_POST['address_field'] ) );
    }
    
    if ( isset( $_POST['optional_text_field'] ) ) {
        $order->update_meta_data( 'optional_text_field', sanitize_text_field( $_POST['optional_text_field'] ) );
    }
}


// Agrega los campos personalizados a la sección "Facturación" del formulario de checkout
add_action( 'woocommerce_checkout_billing', 'display_custom_checkout_fields', 10 );
function display_custom_checkout_fields() {
    $address_field_value = WC()->session->get( 'address_field' );
    $optional_text_field_value = WC()->session->get( 'optional_text_field' );

    echo '<div class="custom-checkout-fields">';
    echo '<h3>' . esc_html__( 'Custom Fields', 'text-domain' ) . '</h3>';
    
    // Address Field
    echo '<p class="form-row form-row-wide">';
    echo '<label for="address_field">' . esc_html__( 'Address', 'text-domain' ) . ' <span class="required">*</span></label>';
    echo '<input type="text" name="address_field nombre" id="address_field" class="input-text" value="' . esc_attr( $address_field_value ) . '" />';
    echo '</p>';

    // Optional Text Field
    echo '<p class="form-row form-row-wide">';
    echo '<label for="optional_text_field">' . esc_html__( 'Optional Text', 'text-domain' ) . '</label>';
    echo '<input type="text" name="optional_text_field" id="optional_text_field" class="input-text" value="' . esc_attr( $optional_text_field_value ) . '" />';
    echo '</p>';
    
    echo '</div>';
}

// Valida y guarda los valores de los campos personalizados en la sesión
add_action( 'woocommerce_checkout_process', 'save_custom_checkout_fields_values' );
function save_custom_checkout_fields_values() {
    if ( ! empty( $_POST['address_field'] ) ) {
        WC()->session->set( 'address_field', sanitize_text_field( $_POST['address_field'] ) );
    }

    if ( ! empty( $_POST['optional_text_field'] ) ) {
        WC()->session->set( 'optional_text_field', sanitize_text_field( $_POST['optional_text_field'] ) );
    }
}

add_action( 'woocommerce_checkout_create_order', 'save_custom_checkout_fields_to_order', 20, 2 );
function save_custom_checkout_fields_to_order( $order, $data ) {
    $address_field_value = WC()->session->get( 'address_field' );
    $optional_text_field_value = WC()->session->get( 'optional_text_field' );

    if ( ! empty( $address_field_value ) ) {
        $order->update_meta_data( 'address_field', sanitize_text_field( $address_field_value ) );
    }

    if ( ! empty( $optional_text_field_value ) ) {
        $order->update_meta_data( 'optional_text_field', sanitize_text_field( $optional_text_field_value ) );
    }
}

add_action( 'woocommerce_order_details_after_order_table', 'display_custom_checkout_fields_in_order', 10, 1 );
function display_custom_checkout_fields_in_order( $order ) {
    $address_field_value = $order->get_meta( 'address_field' );
    $optional_text_field_value = $order->get_meta( 'optional_text_field' );

    if ( ! empty( $address_field_value ) ) {
        echo '<tr class="address-field">';
        echo '<th>' . esc_html__( 'Address', 'text-domain' ) . '</th>';
        echo '<td>' . esc_html( $address_field_value ) . '</td>';
        echo '</tr>';
    }

    if ( ! empty( $optional_text_field_value ) ) {
        echo '<tr class="optional-text-field">';
        echo '<th>' . esc_html__( 'Optional Text', 'text-domain' ) . '</th>';
        echo '<td>' . esc_html( $optional_text_field_value ) . '</td>';
        echo '</tr>';
    }
}
// Mostrar los campos personalizados en el email de confirmación de pedido
/*add_filter( 'woocommerce_email_order_meta', 'display_custom_fields_in_email', 10, 4 );
function display_custom_fields_in_email( $order_meta, $order, $sent_to_admin, $plain_text ) {
    $address_field = get_post_meta( $order->get_id(), 'address_field', true );
    $optional_text_field = get_post_meta( $order->get_id(), 'optional_text_field', true );

    if ( ! empty( $address_field ) ) {
        $order_meta .= '<br/>' . esc_html__( 'Address:', 'text-domain' ) . ' ' . sanitize_text_field( $address_field );
    }
    if ( ! empty( $optional_text_field ) ) {
        $order_meta .= '<br/>' . esc_html__( 'Optional Text:', 'text-domain' ) . ' ' . sanitize_text_field( $optional_text_field );
    }

    return $order_meta;
}
*/






function cargar_bootstrap_condicionalmente() {
    // Verificar si es una página específica donde deseas cargar Bootstrap
    if (is_page(array('home'))) {
        // Cargar la biblioteca de Bootstrap
        wp_enqueue_style('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css');
        wp_enqueue_script('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js', array('jquery'), '4.5.0', true);
    }
	 if (is_tax()) {
        // Cargar la biblioteca de Bootstrap
        wp_enqueue_style('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css');
        wp_enqueue_script('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js', array('jquery'), '4.5.0', true);
    }
}
add_action('wp_enqueue_scripts', 'cargar_bootstrap_condicionalmente');







function add_flamingo_capabilities_to_editor_role() {
    $editor = get_role('editor');
    $editor->add_cap('flamingo_edit');
    $editor->add_cap('flamingo_view');
}

add_action('admin_init', 'add_flamingo_capabilities_to_editor_role');

/*/////////////////////OPTION PAGE//////////////////////////*/

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Opciones Generales',
		'menu_title'	=> 'Opciones Generales',
		'menu_slug' 	=> 'Opciones Generales',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));

	 acf_add_options_sub_page(array(
		'page_title' 	=> 'Home Opciones',
		'menu_title'	=> 'Home Opciones',
		'parent_slug'	=> 'Opciones Generales',
	));
	
} 

add_filter('wpcf7_autop_or_not', '__return_false'); 

add_action('wp_ajax_nopriv_dcms_ajax_get_tarifa','dcms_consultar_api');
	add_action('wp_ajax_dcms_ajax_get_tarifa','dcms_consultar_api');
	add_action('wp_ajax_nopriv_dcms_ajax_get_tarifa_tar','dcms_consultar_api_tar');
	add_action('wp_ajax_dcms_ajax_get_tarifa_tar','dcms_consultar_api_tar');

function dcms_consultar_api()
	{

		$tipotransford = sanitize_text_field($_POST['tipotransford']);
		$plazaord = sanitize_text_field($_POST['plazaord']);
		$monedaord = sanitize_text_field($_POST['monedaord']);
		$entidadorigenord = sanitize_text_field($_POST['entidadorigenord']);
		$entidadfinord = sanitize_text_field($_POST['entidadfinord']);
		$medioord = sanitize_text_field($_POST['medioord']);
		$montoord = sanitize_text_field($_POST['montoord']);

		if( isset($tipotransford) and isset($plazaord) and isset($monedaord) && isset($entidadorigenord) and isset($entidadfinord) and isset($medioord) and isset($montoord)){

			//	$url = 'https://extranet.transferenciasinterbancarias.pe/api/gettarifa';
				$url = 'https://extranet.transferenciasinterbancarias.pe/api/gettarifa';
				$header = array("Content-Type: multipart/form-data");
				$accessKey = "lenin@althus.pe";
				$secretKey = "Administrador.CCE-123";
				$post = array("tipotransford" => $tipotransford, "plazaord" => $plazaord, "monedaord" => $monedaord, "entidadorigenord" => $entidadorigenord, "entidadfinord" => $entidadfinord, "medioord" => $medioord, "montoord" => $montoord);

				$ch = curl_init();
				curl_setopt($ch, CURLOPT_URL, $url);
				curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
				curl_setopt($ch, CURLOPT_USERPWD, "$accessKey:$secretKey");
				curl_setopt($ch, CURLOPT_HEADER, FALSE);
				curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
				curl_setopt($ch, CURLOPT_POST, TRUE);
				curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
				curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);

				$response = curl_exec($ch);

				//print_r(json_decode($response));

				if(is_null($response) || !$response){
					echo "6|No se pudo conectar al WS";
				}else{
					$rpta = json_decode($response);
					//echo $rpta->status;
					//print_r($rpta);
					if($rpta->status == 1){
						echo $rpta->status."|".$rpta->monto."|".$rpta->comisionint."|".$rpta->comision."|".$rpta->montofinal;
					}else{
						echo $rpta->status."|".$rpta->msg;
					}
				}
		} else {
			echo "5|Debe completar todos los campos";
		}

		wp_die();
	}

	function dcms_consultar_api_tar()
	{

		$tipotransftar = sanitize_text_field($_POST['tipotransftar']);
		$monedatar = sanitize_text_field($_POST['monedatar']);
		$entidadorigentar = sanitize_text_field($_POST['entidadorigentar']);
		$entidadfintar = sanitize_text_field($_POST['entidadfintar']);
		$mediotar = sanitize_text_field($_POST['mediotar']);
		$montotar = sanitize_text_field($_POST['montotar']);

		if( isset($tipotransftar) and isset($monedatar) && isset($entidadorigentar) and isset($entidadfintar) and isset($mediotar) and isset($montotar)){

				$url = 'https://extranet.transferenciasinterbancarias.pe/api/gettarifacredito';
				$header = array("Content-Type: multipart/form-data");
				$accessKey = "lenin@althus.pe";
				$secretKey = "Administrador.CCE-123";
				$post = array("tipotransftar" => $tipotransftar, "monedatar" => $monedatar, "entidadorigentar" => $entidadorigentar, "entidadfintar" => $entidadfintar, "mediotar" => $mediotar, "montotar" => $montotar);

				$ch = curl_init();
				curl_setopt($ch, CURLOPT_URL, $url);
				curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
				curl_setopt($ch, CURLOPT_USERPWD, "$accessKey:$secretKey");
				curl_setopt($ch, CURLOPT_HEADER, FALSE);
				curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
				curl_setopt($ch, CURLOPT_POST, TRUE);
				curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
				curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);

				$response = curl_exec($ch);

				//print_r(json_decode($response));

				if(is_null($response) || !$response){
					echo "6|No se pudo conectar al WS";
				}else{
					$rpta = json_decode($response);
					//echo $rpta->status;
					//print_r($rpta);
					if($rpta->status == 1){
						echo $rpta->status."|".$rpta->monto."|".$rpta->comisionori."|".$rpta->comisiondes."|".$rpta->montofinal;
					}else{
						echo $rpta->status."|".$rpta->msg;
					}
				}
		} else {
			echo "5|Debe completar todos los campos";
		}

		wp_die();
	}  


	function get_parameter_data()
	{

		$url = 'https://jrvqq9xew0.execute-api.us-east-1.amazonaws.com/pagina_web';

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_HEADER, 0);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, TRUE);

		$response = curl_exec($ch);
		curl_close($ch); 
		$data = json_decode($response);
		$html = '
			<div class="item">
						<div class="contador-numero">
							+<span class="contador" data-valor="+316">+316</span><span>M</span>
						</div>
						<p>
						Consultas de transferencias.
						</p>
					</div> 
					<div class="item">
						<div class="contador-numero">
							+<span class="contador" data-valor="+257">+257</span><span>M</span>
						</div> <p>
			 Total de transferencias inmediatas.

						</p>
					</div>
					<div class="item">
						<div class="contador-numero">
							+<span class="contador" data-valor="37">+37</span><span>M</span>
						</div>
						<p>Total de transferencias.
diferidas.

						</p>
					</div><div class="item">
							<div class="contador-numero">
							+<span class="contador" data-valor="473">+473</span><span>M</span>
						</div> <p>	
<!--de cuentas --> 
		Monto transferido solarizado.
<!--transaccionales-->
						</p>
					</div><div class="item">
					    <div class="contador-numero">
							+<span class="contador" data-valor="26">+26</span><span>M</span>
					 </div> 
					<p>Cuentas transaccionales.
					
					</p>
					</div>
		';
		return $html;
		
	}  


	add_shortcode('parametros', 'get_parameter_data');


	function convert_millon($num){
		$rpta = floor($num / 1000000);
		return $rpta;
	}

	function convert_billon($num){
		$rpta = floor($num / 1000000000);
		return $rpta;
	}


 function enqueue_custom_scripts() {
    wp_enqueue_script('custom-filter', get_template_directory_uri() . '/js/scripts.js', array('jquery'), '1.0', true);

    // Localize the script with new data
    $data = array(
        'ajax_url' => admin_url('admin-ajax.php')
    );
    wp_localize_script('custom-filter', 'ajax_params', $data);
}
add_action('wp_enqueue_scripts', 'enqueue_custom_scripts'); 





// Agregar columna personalizada para el motivo
add_filter('manage_flamingo_inbound_posts_columns', 'agregar_columna_motivo_en_flamingo', 10, 1);
function agregar_columna_motivo_en_flamingo($columns) {
    $columns['motivo'] = 'Motivo';
    return $columns;
}

// Mostrar el valor del campo motivo en la columna personalizada
add_action('manage_flamingo_inbound_posts_custom_column', 'mostrar_valor_motivo_en_flamingo', 10, 2);
function mostrar_valor_motivo_en_flamingo($column, $entry_id) {
    if ($column == 'motivo') {
        echo esc_html(get_post_meta($entry_id, '_motivo', true));
    }
}
/*
add_action( 'wpcf7_mail_sent', 'my_custom_function' );
function my_custom_function($contact_form)
{
    
	global $wpdb;
	$wpcf7 = WPCF7_ContactForm::get_current();

	if($wpcf7->title =="Contact form 1")
	{
		$subject = trim($wpcf7->mail["subject"]);
		
		$info["apenom"] = trim($_POST["Nombre"]);
		$info["email"] = trim($_POST["Correo"]);
		$info["subject"] = trim($_POST["Asunto"]);
		$info["message"] = trim($_POST["Consulta"]);
		
		$subject = str_replace("[Asunto]",$info["subject"],$subject);
		$wpdb -> insert("wpnk_contact", $info);
		
		$headers = "From: info@cce.com.pe \r\n";
		$headers .= "MIME-Version: 1.0\r\n";
		$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n"; 
		
	
		
		if($info["subject"] == "Obtener CCI")
		{
			$GetHTML = get_post(1409);
			$Content = $GetHTML -> post_content;
			$to = $info["email"];

		}
		else if($info["subject"] == "Horarios")
		{
			$GetHTML = get_post(1418);
			$Content = $GetHTML -> post_content;
			$to = $info["email"];
		}
		else if($info["subject"] == "Tarifas")
		{
			$GetHTML = get_post(1422);
			$Content = $GetHTML -> post_content; 
			$to = $info["email"];
		}
		else if($info["subject"] == "Cómo hacer una transferencia")
		{
			$GetHTML = get_post(1423);
			$Content = $GetHTML -> post_content;
			$to = $info["email"];
		}
		else if($info["subject"] == "Consultas AFP")
		{
			$GetHTML = get_post(1424);
			$Content = $GetHTML -> post_content;
			$to = $info["email"];
		}
		$message = str_replace(
			array("[APENOM]","[CORREO]","[MOTIVO]","[CONSULTA]"),
			array($info["apenom"],$info["email"],$info["subject"],$info["message"]),
			($Content)
		);
		
		//Cliente
		mail($to, utf8_decode($subject), utf8_decode($message), $headers);
		
		//Administrador
		$to = trim($wpcf7->mail["recipient"]);
		$additional_headers = trim(str_replace(array("Cc:","CC:","\n"),"",trim($wpcf7->mail["additional_headers"])));
		
		$headers = "From: info@cce.com.pe \r\n";
		$headers .= "CC: ". strip_tags($additional_headers) ."\r\n";
		$headers .= "MIME-Version: 1.0\r\n";
		$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
		
       $message = '
    <table width="500" style="margin: 0 auto;">
        <tr>
            <td colspan="2" style="padding-left: 20px; font-size: 10.0pt;font-family: Arial,sans-serif;padding-bottom: 10px;padding-top: 5px;">        
            Informacion de Formulario de Contacto:
            </td>
        </tr>
        <tr>
            <td style="padding-left: 20px;font-size: 10.0pt;font-family: Arial,sans-serif;"><strong>Nombre y Apellidos:</strong></td>
            <td style="padding-left: 20px;font-size: 10.0pt;font-family: Arial,sans-serif;">'.trim($_POST["Nombre"]).'</td>
        </tr>   
        <tr>
            <td style="padding-left: 20px;font-size: 10.0pt;font-family: Arial,sans-serif;"><strong>DNI:</strong></td>
            <td style="padding-left: 20px;font-size: 10.0pt;font-family: Arial,sans-serif;">'.trim($_POST["DNI"]).'</td>
        </tr>   
        <tr>
            <td style="padding-left: 20px;font-size: 10.0pt;font-family: Arial,sans-serif;"><strong>Correo:</strong></td>
            <td style="padding-left: 20px;font-size: 10.0pt;font-family: Arial,sans-serif;">'.trim($_POST["Correo"]).'</td>
        </tr>   
        <tr>
            <td style="padding-left: 20px;font-size: 10.0pt;font-family: Arial,sans-serif;"><strong>Motivo:</strong></td>
            <td style="padding-left: 20px;font-size: 10.0pt;font-family: Arial,sans-serif;">'.trim($_POST["Asunto"]).'</td>
        </tr>   
        <tr>
            <td style="padding-left: 20px;font-size: 10.0pt;font-family: Arial,sans-serif;"><strong>Consulta:</strong></td>
            <td style="padding-left: 20px;font-size: 10.0pt;font-family: Arial,sans-serif;">'.trim($_POST["Consulta"]).'</td>
        </tr>   
        <tr>
            <td colspan="2" style="font-size: 8.0pt;font-family: Arial,sans-serif;background:#F0F0F0; padding: 10.5pt 7.5pt 10.5pt 7.5pt;    border-top: 5px;border-top-style: solid;border-color: #fff;">&copy; TransferenciasInterbancarias. Todos los derechos reservados</td>
        </tr>   
    </table>
    ';
		mail($to, utf8_decode($subject), utf8_decode($message), $headers);
	}
	
} 

*/






/*
add_action( 'wpcf7_mail_sent', 'contact_form_autoresponders' );

function contact_form_autoresponders( $contact_form ) {
    // The contact form ID.
    if ( 1443 === $contact_form->id ) {
        $submission  = WPCF7_Submission::get_instance();
        $posted_data = $submission->get_posted_data();
        // Dropdowns are stored as arrays.
        if ( isset( $posted_data['location'] ) ) {
            switch ( $posted_data['location'][0] ) {
                case 'California':
                    $msg = 'California email body goes here';
					
                    break;
                case 'Texas':
                    $msg = 'Texas email body goes here';
                    break;
                default:
                    $msg = 'Unfortunately, that location is not available';
            }
            // mail it to them using wp_mail.
            wp_mail( $posted_data['email'], 'Thanks for your enquiry', $msg );
        }
    }
}*/
/*
add_action( 'wpcf7_mail_sent', 'contact_form_autoresponders' );

function contact_form_autoresponders( $contact_form ) {
    // The contact form ID.
    if ( 1443 === $contact_form->id ) {
        $submission  = WPCF7_Submission::get_instance();
        $posted_data = $submission->get_posted_data();
        
        // Assuming 'subject' is the field name in the form.
        if ( isset( $posted_data['location'] ) ) {
            switch ( $posted_data['location'] ) {
                case 'California':
                    $GetHTML = get_post(1409);
                    $Content = $GetHTML->post_content;
                    break;
                case 'Texas':
                    $GetHTML = get_post(1418);
                    $Content = $GetHTML->post_content;
                    break;
                case 'Tarifas':
                    $GetHTML = get_post(1422);
                    $Content = $GetHTML->post_content;
                    break;
                case 'Cómo hacer una transferencia':
                    $GetHTML = get_post(1423);
                    $Content = $GetHTML->post_content;
                    break;
                case 'Consultas AFP':
                    $GetHTML = get_post(1424);
                    $Content = $GetHTML->post_content;
                    break;
                default:
                    $Content = 'Unfortunately, that subject is not available';
            }
            
            // If content is available, send it.
            if (!empty($Content)) {
                wp_mail($posted_data['email'], 'Requested Content', $Content);
            }
        }
    }
}*/
/*
add_action( 'wpcf7_mail_sent', 'contact_form_autoresponders' );

function contact_form_autoresponders( $contact_form ) {
    // The contact form ID.
    if ( 1443 === $contact_form->id ) {
        $submission  = WPCF7_Submission::get_instance();
        $posted_data = $submission->get_posted_data();
        
        // Assuming 'subject' is the field name in the form.
        if ( isset( $posted_data['location'] ) ) {
            switch ( $posted_data['location'] ) {
                case 'California':
                    $GetHTML = get_post(1409);
                    $Content = $GetHTML->post_content;
                    break;
                case 'Texas':
                    $GetHTML = get_post(1418);
                    $Content = $GetHTML->post_content;
                    break;
                case 'Tarifas':
                    $GetHTML = get_post(1422);
                    $Content = $GetHTML->post_content;
                    break;
                case 'Cómo hacer una transferencia':
                    $GetHTML = get_post(1423);
                    $Content = $GetHTML->post_content;
                    break;
                case 'Consultas AFP':
                    $GetHTML = get_post(1424);
                    $Content = $GetHTML->post_content;
                    break;
                default:
                    $Content = 'Unfortunately, that subject is not available';
            }
            
            // If content is available, send it.
            if (!empty($Content)) {
                // Get the email address from the form submission.
                $to = $posted_data['email'];
                wp_mail($to, 'Requested Content', $Content);
            }
        }
    }
}
*//*
add_action( 'wpcf7_mail_sent', 'contact_form_autoresponders' );

function contact_form_autoresponders( $contact_form ) {
    // The contact form ID.
    if ( 1443 === $contact_form->id ) {
        $submission  = WPCF7_Submission::get_instance();
        $posted_data = $submission->get_posted_data();
        
        // Dropdowns are stored as arrays.
        if ( isset( $posted_data['location'] ) ) {
            switch ( $posted_data['location'][0] ) {
                case 'California':
                    $california_post_id = 1418; // Replace 123 with the actual ID of the California post.
                    $california_post = get_post( $california_post_id );
                    if ( $california_post ) {
                        // Get the HTML content.
                        $msg = $california_post->post_content;
                    } else {
                        $msg = 'No content found for California.';
                    }
                    break;
                case 'Texas':
                    $texas_post_id = 456; // Replace 456 with the actual ID of the Texas post.
                    $texas_post = get_post( $texas_post_id );
                    if ( $texas_post ) {
                        // Get the HTML content.
                        $msg = $texas_post->post_content;
                    } else {
                        $msg = 'No content found for Texas.';
                    }
                    break;
                default:
                    $msg = 'Unfortunately, that location is not available';
            }

            // Email headers to send HTML content.
            $headers[] = 'Content-Type: text/html; charset=UTF-8';
            
            // Mail it to them using wp_mail.
            wp_mail( $posted_data['email'], 'Thanks for your enquiry', $msg, $headers );
        }
    }
}*/ 

/*
add_action( 'wpcf7_mail_sent', 'contact_form_autoresponders' );

function contact_form_autoresponders( $contact_form ) {
    // The contact form ID.
    if ( 1443 === $contact_form->id ) {
        $submission  = WPCF7_Submission::get_instance();
        $POST = $submission->get_posted_data();
        
        // Dropdowns are stored as arrays.
        if ( isset( $POST['Asunto'] )) {
            switch ( $POST['Asunto'][0] ) {
                case 'Obtener CCI':
                    $california_post_id = 1409; // Replace 123 with the actual ID of the California post.
                    $california_post = get_post( $california_post_id );
                    if ( $california_post ) {
                        // Get the HTML content.
                        $msg = $california_post->post_content;
                    } else {
                        $msg = 'No content found for California.';
                    }
                    break;
                case 'Horarios':
                    $texas_post_id = 1418; // Replace 456 with the actual ID of the Texas post.
                    $texas_post = get_post( $texas_post_id );
                    if ( $texas_post ) {
                        // Get the HTML content.
                        $msg = $texas_post->post_content;
                    } else {
                        $msg = 'No content found for Texas.';
                    }
                    break; 
					 case 'Tarifas':
                    $texas_post_id = 1422; // Replace 456 with the actual ID of the Texas post.
                    $texas_post = get_post( $texas_post_id );
                    if ( $texas_post ) {
                        // Get the HTML content.
                        $msg = $texas_post->post_content;
                    } else {
                        $msg = 'No content found for Texas.';
                    }
                    break;
					 case 'Cómo hacer una transferencia':
                    $texas_post_id = 1423; // Replace 456 with the actual ID of the Texas post.
                    $texas_post = get_post( $texas_post_id );
                    if ( $texas_post ) {
                        // Get the HTML content.
                        $msg = $texas_post->post_content;
                    } else {
                        $msg = 'No content found for Texas.';
                    }
                    break; 
						 case 'Reclamos':
                    	 // Correo específico para las consultas AFP
									$headers = array(
					'Content-Type: text/html; charset=UTF-8',
					'From: soluciones.desarrollo@gmail.com'
				);
                    $consultas_afp_email = 'rcarranza@cce.com.pe';

                    // Mensaje para enviar a ese correo
                    $message_to_afp = '
                        <p>Reclamos:</p>
                        <p><strong>Nombre y Apellidos:</strong> '. trim($POST["Nombre"]) .'</p>
                        <p><strong>Correo:</strong> '. trim($POST["Correo"]) .'</p>
                        <p><strong>Consulta:</strong> '. trim($POST["Consulta"]) .'</p>
                    ';

                    // Envío del correo específico
                    wp_mail( $consultas_afp_email, 'Consulta Reclamo recibida', $message_to_afp, $headers );
                    
                    break; 
					
                default:
                    $msg = 'Unfortunately, that location is not available';
            }
			

            // Insert data into custom table.
            global $wpdb;
            $table_name = $wpdb->prefix . 'wpnk_contact';

            $info = array(

                'apenom'  => isset( $_POST['Nombre'] ) ? $_POST['Nombre'] : '',
                'email'   => isset( $_POST['Correo'] ) ? $_POST['Correo'] : '',
                'subject' => isset( $_POST['Asunto'] ) ? $_POST['Asunto'] : '',
                'message' => isset( $_POST['Consulta'] ) ? $_POST['Consulta'] : '',
            );
			$message = str_replace(
				array("[APENOM]","[CORREO]","[MOTIVO]","[CONSULTA]"),
				array($info["apenom"],$info["email"],$info["subject"],$info["message"]),
				$msg
			);
           $wpdb->insert("wpnk_contact", $info);
            
            // Email headers to send HTML content.
            $headers = array(
                'Content-Type: text/html; charset=UTF-8',
                'From: soluciones.desarrollo@gmail.com'
            );
			
            
            // Mail it to them using wp_mail.
            wp_mail( $POST['Correo'], 'Gracias por contactarnos', $message, $headers );

           // Email to the administrator
$admin_email = 'info@cce.com.pe'; // Reemplaza 'correo@admin.com' con la dirección de correo electrónico del administrador que desees utilizar

$message_to_admin = '
<table width="500" style="margin: 0 auto;">
    <tr>
        <td colspan="2" style="padding-left: 20px; font-size: 10.0pt;font-family: Arial,sans-serif;padding-bottom: 10px;padding-top: 5px;">        
        Información de Formulario de Contacto:
        </td>
    </tr>
    <tr>
        <td style="padding-left: 20px;font-size: 10.0pt;font-family: Arial,sans-serif;"><strong>Nombre y Apellidos:</strong></td>
        <td style="padding-left: 20px;font-size: 10.0pt;font-family: Arial,sans-serif;">'.trim($_POST["Nombre"]).'</td>
    </tr>   
    <tr>
        <td style="padding-left: 20px;font-size: 10.0pt;font-family: Arial,sans-serif;"><strong>DNI:</strong></td>
        <td style="padding-left: 20px;font-size: 10.0pt;font-family: Arial,sans-serif;">'.trim($_POST["DNI"]).'</td>
    </tr>   
    <tr>
        <td style="padding-left: 20px;font-size: 10.0pt;font-family: Arial,sans-serif;"><strong>Correo:</strong></td>
        <td style="padding-left: 20px;font-size: 10.0pt;font-family: Arial,sans-serif;">'.trim($_POST["Correo"]).'</td>
    </tr>   
    <tr>
        <td style="padding-left: 20px;font-size: 10.0pt;font-family: Arial,sans-serif;"><strong>Motivo:</strong></td>
        <td style="padding-left: 20px;font-size: 10.0pt;font-family: Arial,sans-serif;">'.trim($_POST["Asunto"]).'</td>
    </tr>   
    <tr>
        <td style="padding-left: 20px;font-size: 10.0pt;font-family: Arial,sans-serif;"><strong>Consulta:</strong></td>
        <td style="padding-left: 20px;font-size: 10.0pt;font-family: Arial,sans-serif;">'.trim($_POST["Consulta"]).'</td>
    </tr>   
    <tr>
        <td colspan="2" style="font-size: 8.0pt;font-family: Arial,sans-serif;background:#F0F0F0; padding: 10.5pt 7.5pt 10.5pt 7.5pt;    border-top: 5px;border-top-style: solid;border-color: #fff;">&copy; TransferenciasInterbancarias. Todos los derechos reservados</td>
    </tr>   
</table>
';

wp_mail( $admin_email, 'Nuevo formulario de contacto recibido', $message_to_admin, $headers );
        }
    }
} */ 
add_action( 'wpcf7_mail_sent', 'contact_form_autoresponders' );

function contact_form_autoresponders( $contact_form ) {
    // The contact form ID.
    if ( 1443 === $contact_form->id ) {
        $submission  = WPCF7_Submission::get_instance();
        $POST = $submission->get_posted_data();
        
        // Dropdowns are stored as arrays.
        if ( isset( $POST['Asunto'] )) {
            switch ( $POST['Asunto'][0] ) {
                case 'Obtener CCI':
                    $california_post_id = 1409;
                    $california_post = get_post( $california_post_id );
                    if ( $california_post ) {
                        $msg = $california_post->post_content;
                    } else {
                        $msg = 'No content found for California.';
                    }
                    break;
                case 'Horarios':
                    $texas_post_id = 1418;
                    $texas_post = get_post( $texas_post_id );
                    if ( $texas_post ) {
                        $msg = $texas_post->post_content;
                    } else {
                        $msg = 'No content found for Texas.';
                    }
                    break; 
                case 'Tarifas':
                    $texas_post_id = 1422;
                    $texas_post = get_post( $texas_post_id );
                    if ( $texas_post ) {
                        $msg = $texas_post->post_content;
                    } else {
                        $msg = 'No content found for Texas.';
                    }
                    break;
                case 'Cómo hacer una transferencia':
                    $texas_post_id = 1423;
                    $texas_post = get_post( $texas_post_id );
                    if ( $texas_post ) {
                        $msg = $texas_post->post_content;
                    } else {
                        $msg = 'No content found for Texas.';
                    }
                    break; 
                case 'Reclamos':
                    $reclamos_post_id = 1834; // Reemplaza 1424 con el ID del post correspondiente.
                    $reclamos_post = get_post( $reclamos_post_id );
                    if ( $reclamos_post ) {
                        $msg = $reclamos_post->post_content;
                    } else {
                        $msg = 'No content found for Reclamos.';
                    }

                    // Correo específico para las consultas AFP
                    $headers = array(
                        'Content-Type: text/html; charset=UTF-8',
                        'From: rcarranza@cce.com.pe'
                    ); 
                    $consultas_afp_email = 'rcarranza@cce.com.pe; cmiranda@cce.com.pe';

                    // Mensaje para enviar a ese correo
                    $message_to_afp = '
                        <p>Reclamos:</p>
                        <p><strong>Nombre y Apellidos:</strong> '. trim($POST["Nombre"]) .'</p>
                        <p><strong>Correo:</strong> '. trim($POST["Correo"]) .'</p>
                        <p><strong>Consulta:</strong> '. trim($POST["Consulta"]) .'</p>
                        <p>' . $msg . '</p>
                    ';

                    // Envío del correo específico
                    wp_mail( $consultas_afp_email, 'Consulta Reclamo recibida', $message_to_afp, $headers );

                    break;
                default:
                    $msg = 'Unfortunately, that location is not available';
            }

            // Insert data into custom table.
            global $wpdb;
            $table_name = $wpdb->prefix . 'wpnk_contact';

            $info = array(
                'apenom'  => isset( $_POST['Nombre'] ) ? $_POST['Nombre'] : '',
                'email'   => isset( $_POST['Correo'] ) ? $_POST['Correo'] : '',
                'subject' => isset( $_POST['Asunto'] ) ? $_POST['Asunto'] : '',
                'message' => isset( $_POST['Consulta'] ) ? $_POST['Consulta'] : '',
            );
            $message = str_replace(
                array("[APENOM]", "[CORREO]", "[MOTIVO]", "[CONSULTA]"),
                array($info["apenom"], $info["email"], $info["subject"], $info["message"]),
                $msg
            );
            $wpdb->insert("wpnk_contact", $info);

            // Email headers to send HTML content.
            $headers = array(
                'Content-Type: text/html; charset=UTF-8',
                'From: info@cce.com.pe'
            );

            // Mail it to them using wp_mail.
            wp_mail( $POST['Correo'], 'Gracias por contactarnos', $message, $headers );

            // Email to the administrator
            $admin_email = 'info@cce.com.pe'; 

            $message_to_admin = '
                <table width="500" style="margin: 0 auto;">
                    <tr>
                        <td colspan="2" style="padding-left: 20px; font-size: 10.0pt;font-family: Arial,sans-serif;padding-bottom: 10px;padding-top: 5px;">        
                        Información de Formulario de Contacto:
                        </td>
                    </tr>
                    <tr>
                        <td style="padding-left: 20px;font-size: 10.0pt;font-family: Arial,sans-serif;"><strong>Nombre y Apellidos:</strong></td>
                        <td style="padding-left: 20px;font-size: 10.0pt;font-family: Arial,sans-serif;">'.trim($_POST["Nombre"]).'</td>
                    </tr>   
                    <tr>
                        <td style="padding-left: 20px;font-size: 10.0pt;font-family: Arial,sans-serif;"><strong>DNI:</strong></td>
                        <td style="padding-left: 20px;font-size: 10.0pt;font-family: Arial,sans-serif;">'.trim($_POST["DNI"]).'</td>
                    </tr>   
                    <tr>
                        <td style="padding-left: 20px;font-size: 10.0pt;font-family: Arial,sans-serif;"><strong>Correo:</strong></td>
                        <td style="padding-left: 20px;font-size: 10.0pt;font-family: Arial,sans-serif;">'.trim($_POST["Correo"]).'</td>
                    </tr>   
                    <tr>
                        <td style="padding-left: 20px;font-size: 10.0pt;font-family: Arial,sans-serif;"><strong>Motivo:</strong></td>
                        <td style="padding-left: 20px;font-size: 10.0pt;font-family: Arial,sans-serif;">'.trim($_POST["Asunto"]).'</td>
                    </tr>   
                    <tr>
                        <td style="padding-left: 20px;font-size: 10.0pt;font-family: Arial,sans-serif;"><strong>Consulta:</strong></td>
                        <td style="padding-left: 20px;font-size: 10.0pt;font-family: Arial,sans-serif;">'.trim($_POST["Consulta"]).'</td>
                    </tr>   
                    <tr>
                        <td colspan="2" style="font-size: 8.0pt;font-family: Arial,sans-serif;background:#F0F0F0; padding: 10.5pt 7.5pt 10.5pt 7.5pt;    border-top: 5px;border-top-style: solid;border-color: #fff;">&copy; TransferenciasInterbancarias. Todos los derechos reservados</td>
                    </tr>   
                </table>
            ';

            wp_mail( $admin_email, 'Nuevo formulario de contacto recibido', $message_to_admin, $headers );
        }
    }
}

include __DIR__ . "/lib/inicializacion/WPTiposPublicaciones.php";








/*

add_action( 'wpcf7_mail_sent', 'contact_form_autoresponders1' );

function contact_form_autoresponders1( $contact_form ) {
    // Verifica si el formulario es el ID 1443.
    if ( 1443 === $contact_form->id ) {
        $submission  = WPCF7_Submission::get_instance();
        $POST = $submission->get_posted_data();
        
        // Obtiene los datos del formulario.
        $info = array(
            'apenom'  => isset( $_POST['Nombre'] ) ? $_POST['Nombre'] : '',
            'email'   => isset( $_POST['Correo'] ) ? $_POST['Correo'] : '',
            'subject' => isset( $_POST['Asunto'] ) ? $_POST['Asunto'] : '',
            'message' => isset( $_POST['Consulta'] ) ? $_POST['Consulta'] : '',
        );
        
        // Inserta datos en la tabla personalizada.
        global $wpdb;
        $table_name = $wpdb->prefix . 'wpnk_contact';
        $wpdb->insert( $table_name, $info );
        
        // Verifica si se ha seleccionado "Consultas AFP".
        if ( isset( $POST['Asunto'] ) && $POST['Asunto'][0] === 'Reclamos' ) {
            // Email headers para enviar contenido HTML.
            $headers = array(
                'Content-Type: text/html; charset=UTF-8',
                'From: soluciones.desarrollo@gmail.com'
            );
            
            // Correo electrónico al administrador.
            $admin_email = 'soluciones.desarrollo@gmail.com'; // Cambia por el correo específico.
            $message_to_admin = '
                <table width="500" style="margin: 0 auto;">
                    <tr>
                        <td colspan="2" style="padding-left: 20px; font-size: 10.0pt;font-family: Arial,sans-serif;padding-bottom: 10px;padding-top: 5px;">        
                        Información del Formulario de Contacto:
                        </td>
                    </tr>
                    <tr>
                        <td style="padding-left: 20px;font-size: 10.0pt;font-family: Arial,sans-serif;"><strong>Nombre y Apellidos:</strong></td>
                        <td style="padding-left: 20px;font-size: 10.0pt;font-family: Arial,sans-serif;">'.trim($_POST["Nombre"]).'</td>
                    </tr>   
                    <tr>
                        <td style="padding-left: 20px;font-size: 10.0pt;font-family: Arial,sans-serif;"><strong>Correo:</strong></td>
                        <td style="padding-left: 20px;font-size: 10.0pt;font-family: Arial,sans-serif;">'.trim($_POST["Correo"]).'</td>
                    </tr>   
                    <tr>
                        <td style="padding-left: 20px;font-size: 10.0pt;font-family: Arial,sans-serif;"><strong>Motivo:</strong></td>
                        <td style="padding-left: 20px;font-size: 10.0pt;font-family: Arial,sans-serif;">'.trim($_POST["Asunto"]).'</td>
                    </tr>   
                    <tr>
                        <td style="padding-left: 20px;font-size: 10.0pt;font-family: Arial,sans-serif;"><strong>Consulta:</strong></td>
                        <td style="padding-left: 20px;font-size: 10.0pt;font-family: Arial,sans-serif;">'.trim($_POST["Consulta"]).'</td>
                    </tr>   
                    <tr>
                        <td colspan="2" style="font-size: 8.0pt;font-family: Arial,sans-serif;background:#F0F0F0; padding: 10.5pt 7.5pt 10.5pt 7.5pt;    border-top: 5px;border-top-style: solid;border-color: #fff;">&copy; TransferenciasInterbancarias. Todos los derechos reservados</td>
                    </tr>   
                </table>
            ';
            wp_mail( $admin_email, 'Nuevo formulario de contacto recibido', $message_to_admin, $headers );
        }
    }
} 

*/

/*
// Desactivar el envío por defecto del formulario de contacto del Contact Form 7
add_filter( 'wpcf7_skip_mail', '__return_true' );

// Asegurarse de que el formulario de contacto es procesado, aunque no se envíen correos electrónicos
add_filter( 'wpcf7_skip_mail', 'custom_wpcf7_skip_mail', 10, 3 );
function custom_wpcf7_skip_mail( $skip_mail, $contact_form, $abort ) {
    // Si necesitas agregar alguna condición para determinar si el formulario debe ser procesado o no, hazlo aquí
    return $abort ? $skip_mail : false;
}
*/
// Desactivar por completo el envío de correos electrónicos por parte de Contact Form 7
add_filter( 'wpcf7_skip_mail', '__return_true' ); 
function crear_post_type_financieras() {
    $labels = array(
        'name'                => _x('Financieras', 'Post Type General Name', 'text_domain'),
        'singular_name'       => _x('Financiera', 'Post Type Singular Name', 'text_domain'),
        'menu_name'           => __('Financieras', 'text_domain'),
        'parent_item_colon'   => __('Financiera Principal', 'text_domain'),
        'all_items'           => __('Todas las Financieras', 'text_domain'),
        'view_item'           => __('Ver Financiera', 'text_domain'),
        'add_new_item'        => __('Agregar Nueva Financiera', 'text_domain'),
        'add_new'             => __('Agregar Nueva', 'text_domain'),
        'edit_item'           => __('Editar Financiera', 'text_domain'),
        'update_item'         => __('Actualizar Financiera', 'text_domain'),
        'search_items'        => __('Buscar Financiera', 'text_domain'),
        'not_found'           => __('No Encontrada', 'text_domain'),
        'not_found_in_trash'  => __('No Encontrada en la Papelera', 'text_domain'),
    );

    $args = array(
        'label'               => __('financieras', 'text_domain'),
        'description'         => __('Instituciones financieras y sus detalles', 'text_domain'),
        'labels'              => $labels,
        'supports'            => array('title', 'editor', 'thumbnail', 'revisions'),
        'taxonomies'          => array('category'),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'show_in_rest'        => true,
    );

    register_post_type('financieras', $args);
}

add_action('init', 'crear_post_type_financieras', 0); 
 

function crear_taxonomia_financieras() {
    $labels = array(
        'name'              => _x('Tipos de Financieras', 'taxonomy general name', 'text_domain'),
        'singular_name'     => _x('Tipo de Financiera', 'taxonomy singular name', 'text_domain'),
        'search_items'      => __('Buscar Tipos de Financieras', 'text_domain'),
        'all_items'         => __('Todos los Tipos de Financieras', 'text_domain'),
        'parent_item'       => __('Tipo de Financiera Principal', 'text_domain'),
        'parent_item_colon' => __('Tipo de Financiera Principal:', 'text_domain'),
        'edit_item'         => __('Editar Tipo de Financiera', 'text_domain'),
        'update_item'       => __('Actualizar Tipo de Financiera', 'text_domain'),
        'add_new_item'      => __('Agregar Nuevo Tipo de Financiera', 'text_domain'),
        'new_item_name'     => __('Nombre del Nuevo Tipo de Financiera', 'text_domain'),
        'menu_name'         => __('Tipos de Financieras', 'text_domain'),
    );

    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array('slug' => 'tipo-financiera'),
        'show_in_rest'      => true,
    );

    register_taxonomy('tipo-financiera', array('financieras'), $args);
}

add_action('init', 'crear_taxonomia_financieras', 0); 
/*
function enqueue_custom_scripts1() {
    wp_enqueue_script('custom-script', get_template_directory_uri() . '/js/custom-script.js', array('jquery'), null, true);

    // Obtener posts de la categoría 'banco'
    $bancos = get_posts(array(
        'post_type' => 'financieras',
        'tax_query' => array(
            array(
                'taxonomy' => 'tipo-financiera',
                'field'    => 'slug',
                'terms'    => 'banco',
            ),
        ),
        'posts_per_page' => -1
    ));

    // Obtener posts de la categoría 'caja-o-financiera'
    $cajas_y_financieras = get_posts(array(
        'post_type' => 'financieras',
        'tax_query' => array(
            array(
                'taxonomy' => 'tipo-financiera',
                'field'    => 'slug',
                'terms'    => 'caja-o-financiera',
            ),
        ),
        'posts_per_page' => -1
    ));

    $bancos_data = array();
    foreach ($bancos as $banco) {
        $banco_id = $banco->ID;
        $bancos_data[$banco_id] = array(
            'imagenSrc' => get_field('imagen', $banco_id)['url'],
            'mensajeText' => get_field('mensaje', $banco_id),
            'horarios1Texto' => get_field('horarios_de_lunes_a_viernes', $banco_id),
            'horariosText' => get_field('horarios_de_fines_de_semana_y_feriados', $banco_id),
            // Agregar otros campos ACF necesarios para mostrar en el frontend
        );
    }

    $cajas_y_financieras_data = array();
    foreach ($cajas_y_financieras as $caja_financiera) {
        $caja_financiera_id = $caja_financiera->ID;
        $cajas_y_financieras_data[$caja_financiera_id] = array(
            'imagenSrc' => get_field('imagen', $caja_financiera_id)['url'],
            'mensajeText' => get_field('mensaje', $caja_financiera_id),
            'horarios1Texto' => get_field('horarios_de_lunes_a_viernes', $caja_financiera_id),
            'horariosText' => get_field('horarios_de_fines_de_semana_y_feriados', $caja_financiera_id),
            // Agregar otros campos ACF necesarios para mostrar en el frontend
        );
    }

    // Localizar los datos en el script JavaScript
    wp_localize_script('custom-script', 'bancosData', $bancos_data);
    wp_localize_script('custom-script', 'cajasFinancierasData', $cajas_y_financieras_data);
}
add_action('wp_enqueue_scripts', 'enqueue_custom_scripts1'); 

*/
 
function custom_post_type_selects() {
    // Obtener los términos de la taxonomía personalizada
    $terms = get_terms(array(
        'taxonomy' => 'tipo-financiera',
        'hide_empty' => false,
    ));

    $output = '';

    if (!empty($terms) && !is_wp_error($terms)) {
        foreach ($terms as $term) {
            // Obtener los posts del término actual
            $posts = get_posts(array(
                'post_type' => 'financieras',
                'tax_query' => array(
                    array(
                        'taxonomy' => 'tipo-financiera',
                        'field'    => 'slug',
                        'terms'    => $term->slug,
                    ),
                ),
                'meta_query' => array(
                    'relation' => 'AND',
                    array(
                        'key' => 'imagen',
                        'compare' => 'EXISTS',
                    ),
                    array(
                        'key' => 'imagen',
                        'value' => '',
                        'compare' => '!=',
                    ),
                    array(
                        'key' => 'mensaje',
                        'compare' => 'EXISTS',
                    ),
                    array(
                        'key' => 'mensaje',
                        'value' => '',
                        'compare' => '!=',
                    ),
                    array(
                        'key' => 'horario_lunes_a_viernes',
                        'compare' => 'EXISTS',
                    ),
                    array(
                        'key' => 'horario_lunes_a_viernes',
                        'value' => '',
                        'compare' => '!=',
                    ),
                    array(
                        'key' => 'horarios_fines_de_semana',
                        'compare' => 'EXISTS',
                    ),
                    array(
                        'key' => 'horarios_fines_de_semana',
                        'value' => '',
                        'compare' => '!=',
                    ),
                ),
                'numberposts' => -1,
            ));

            if (!empty($posts)) {
                // Crear un contenedor para el término actual
                $output .= '<div class="custom-container"><div class="content-select"><div class="input-select">';
                $output .= '<span>' . $term->name . '</span>';
                $output .= '<select class="custom-post-select" data-term="' . $term->slug . '">';
                $output .= '<option value="">Seleccione una opción</option>';
                foreach ($posts as $post) {
                    $output .= '<option value="' . $post->ID . '">' . $post->post_title . '</option>';
                }
                $output .= '</select><i class="fa fa-angle-right"></i></div>';
                $output .= '<div id="custom-fields-' . $term->slug . '" class="custom-fields"></div><br>';
                $output .= '</div></div>'; // Cerrar contenedor
            }
        }
    } else {
        $output .= '<p>No se encontraron términos en la taxonomía "tipo-financiera".</p>';
    }

    return $output;
}
add_shortcode('custom_post_type_selects', 'custom_post_type_selects');



function enqueue_custom_scripts2() {
    wp_enqueue_script('jquery');
    wp_enqueue_script('custom-ajax-script', get_template_directory_uri() . '/js/financieras.js', array('jquery'), null, true);
    wp_localize_script('custom-ajax-script', 'customAjax', array(
        'ajax_url' => admin_url('admin-ajax.php')
    ));
}
add_action('wp_enqueue_scripts', 'enqueue_custom_scripts2'); 
function get_acf_fields() {
    if (isset($_POST['post_id'])) {
        $post_id = intval($_POST['post_id']);
        $fields = get_fields($post_id); // Obtener todos los campos ACF del post

        if ($fields) {
            // Suponiendo que tienes los campos ACF correspondientes
            $imagen = $fields['imagen'] ?? '';
            $mensaje = $fields['mensaje'] ?? '';
            $horarios1 = $fields['horario_lunes_a_viernes'] ?? '';
            $horarios = $fields['horarios_fines_de_semana'] ?? '';

            $output = '<div id="contenedorInfo" style="display: block;">';
            $output .= '<div class="row">';
            $output .= '<div class="col-md-8">';
            $output .= '<div class="imagen">';
            $output .= '<img id="imagen" src="' . esc_url($imagen) . '" alt="Imagen">';
            $output .= '</div>';
            $output .= '<div class="textos">';
            $output .= '<div id="mensaje">' .$mensaje. '</div>';
            $output .= '</div>';
            $output .= '</div>';
            $output .= '<div class="col-md-4">';
            $output .= '<div id="horarios1">' .$horarios1. '</div>';
            $output .= '<div id="horarios">' .$horarios. '</p>';
            $output .= '</div>';
            $output .= '</div>';
            $output .= '</div>';

            echo $output;
        } else {
            echo '<p>No se encontraron campos personalizados.</p>';
        }
    }

    wp_die();
}
add_action('wp_ajax_get_acf_fields', 'get_acf_fields');
add_action('wp_ajax_nopriv_get_acf_fields', 'get_acf_fields');
function alphabetical_post_select() {
    // Obtener todos los posts de tipo 'financieras' ordenados alfabéticamente por título
    $posts = get_posts(array(
        'post_type' => 'financieras',
        'orderby' => 'title',
        'order' => 'ASC',
        'numberposts' => -1,
    ));

    // Inicializar variables
    $output = '';
    $default_post_id = '';
    $posts_with_image = array();

    // Filtrar los posts para obtener solo aquellos que tienen imagen
    foreach ($posts as $post) {
        $image_url = get_field('imagen_tutorial', $post->ID);
        if ($image_url) {
            $posts_with_image[] = $post;
        }
    }

    // Si hay posts con imagen, generar el select y mostrar la imagen del primer post
    if (!empty($posts_with_image)) {
        $output .= '<div class="alphabetical-container row">';
        $output .= '<div class="col-md-6"><h2>
¿Cómo hacer transferencias interbancarias con CCI según mi entidad financiera  ?
			 </h2> 
			 <p>
				 Selecciona una opción e infórmate a detalle sobre los procesos de tu entidad financiera de preferencia.
			 </p> <div class="select-lista"><div class="lista-select"><select id="alphabetical-post-select">';
        $output .= '';
        
        foreach ($posts_with_image as $post) {
            $output .= '<option value="' . $post->ID . '">' . $post->post_title . '</option>';
        }
        
        $output .= '</select><i class="fa fa-angle-down"></i></div></div></div>';
        
        // Obtener la imagen del primer post por defecto
        $default_post_id = $posts_with_image[0]->ID;
        $default_image_url = get_field('imagen_tutorial', $default_post_id);
        
        if ($default_image_url) {
            $output .= '<div class="col-md-6"><div id="post-image-container">';
            $output .= '<img src="' . esc_url($default_image_url) . '" alt="Imagen del post seleccionado">';
            $output .= '</div></div>';
            
            // Script para seleccionar y mostrar la imagen por defecto
            $output .= '<script>';
            $output .= 'jQuery(document).ready(function($) {';
            $output .= '$("#alphabetical-post-select").val(' . $default_post_id . ').change();';
            $output .= '});';
            $output .= '</script>';
        }
        
        $output .= '</div>'; // Cerrar alphabetical-container
    } else {
        $output .= '<p>No se encontraron posts con imagen.</p>';
    }

    return $output;
}
add_shortcode('alphabetical_post_select', 'alphabetical_post_select');

function enqueue_custom_scripts3() {
    wp_enqueue_script('jquery');
    wp_enqueue_script('custom-ajax-script', get_template_directory_uri() . '/js/financieras.js', array('jquery'), null, true);
    wp_localize_script('custom-ajax-script', 'customAjax', array(
        'ajax_url' => admin_url('admin-ajax.php')
    ));
}
add_action('wp_enqueue_scripts', 'enqueue_custom_scripts3');


function get_post_image() {
    if (isset($_POST['post_id'])) {
        $post_id = intval($_POST['post_id']);
        $image_url = get_field('imagen_tutorial', $post_id); // Obtener el campo ACF 'imagen'

        if ($image_url) {
            $output = '<img src="' . esc_url($image_url) . '" alt="Post Image">';
            echo $output;
        } else {
            echo '<p>No se encontró la imagen.</p>';
        }
    }

    wp_die();
}
add_action('wp_ajax_get_post_image', 'get_post_image');
add_action('wp_ajax_nopriv_get_post_image', 'get_post_image'); 



function alphabetical_post_select_with_url() {
    // Obtener todos los posts de tipo 'financieras' ordenados alfabéticamente por título
    $posts = get_posts(array(
        'post_type' => 'financieras',
        'orderby' => 'title',
        'order' => 'ASC',
        'numberposts' => -1,
    ));

    // Inicializar variables
    $output = '';
    $posts_with_url = array();

    // Filtrar los posts para obtener solo aquellos que tienen URL
    foreach ($posts as $post) {
        $url = get_field('link_banco_o_financiera', $post->ID);
        if ($url) {
            $posts_with_url[] = $post;
        }
    }

    // Si hay posts con URL, generar el select y el botón
    if (!empty($posts_with_url)) {
        $output .= '<div class="alphabetical-container">';
        $output .= '<div class="select"><span>Selecciona tu banco o financiera</span><div class="select-input"><div class="select-input-item"><select id="alphabetical-post-select-url">';
        $output .= '<option value="">Seleccione una opción</option>';
        
        foreach ($posts_with_url as $post) {
            $output .= '<option value="' . $post->ID . '">' . $post->post_title . '</option>';
        }
       
        $output .= '</select></div><br>';
        $output .= '<button id="go-to-url-button">Buscar</button>';
        $output .= '</div></div></div>'; // Cerrar alphabetical-container
 // Script para manejar el botón
        $output .= '<script>';
        $output .= 'jQuery(document).ready(function($) {';
        $output .= '$("#go-to-url-button").on("click", function() {';
        $output .= 'var postId = $("#alphabetical-post-select-url").val();';
        $output .= 'if (postId) {';
        $output .= '$.ajax({';
        $output .= 'url: customAjax.ajax_url,';
        $output .= 'type: "POST",';
        $output .= 'data: {';
        $output .= 'action: "get_post_url",';
        $output .= 'post_id: postId';
        $output .= '},';
        $output .= 'success: function(response) {';
        $output .= 'if (response) {';
        $output .= 'window.open(response, "_blank");'; // Abrir en una nueva pestaña
        $output .= '}';
        $output .= '}';
        $output .= '});';
        $output .= '}';
        $output .= '});';
        $output .= '});';
        $output .= '</script>';
    } else {
        $output .= '<p>No se encontraron posts con URL.</p>';
    }

    return $output;
} 
add_shortcode('alphabetical_post_select_with_url', 'alphabetical_post_select_with_url');

function get_post_url() {
    if (isset($_POST['post_id'])) {
        $post_id = intval($_POST['post_id']);
        $url = get_field('link_banco_o_financiera', $post_id); // Obtener el campo ACF 'url'

        if ($url) {
            echo esc_url($url);
        } else {
            echo '';
        }
    }

    wp_die();
}
add_action('wp_ajax_get_post_url', 'get_post_url');
add_action('wp_ajax_nopriv_get_post_url', 'get_post_url');






