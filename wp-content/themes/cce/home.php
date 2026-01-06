<?php
    get_header();
?>

    <main class="seccion contenedor">
        <div class="banner-nosotros"> 
			<?php 
				$image = get_field('banner_blog','option');
				if( !empty( $image ) ): ?>
					<img  class="cce-banner"src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
				<?php endif; ?>
		  <?php 
			$image = get_field('banner_blog_movil','option');
			if( !empty( $image ) ): ?>
				<img class="cce-banner-movil" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
			<?php endif; ?>   
			<!--<img src="/wp-conten-->
			
			
			
			<div class="container">
			<div class="texto-nosotros"> 
				<h1><?php the_field('titulo_banner','option')?>
				<!--Realiza transferencias interbancarias desde tu banca móvil o desde tu banca por internet.-->
				</h1>
			</div> 
			</div>
		</div> 
		<div class="container">
			
<ul id="category-filter">
    <li><a id="category-filter-all" href="#">Todos</a></li>
    <?php
    $categories = get_categories();
    foreach ($categories as $category) {
        echo "<li><a href='#' data-category='{$category->slug}'>{$category->name}</a></li>";
    }
    ?>
</ul>
			
	<div id="posts-container">
    <!-- Aquí se mostrarán los posts filtrados-->
  </div>
 <button id="load-more-posts">Cargar más posts</button>

</div> 
		
		
		
		
		
		<div class="seccion-banner-general"> 
	<div class="banner">
		<img src="/wp-content/uploads/2023/10/banner0001-2-1.png">
	</div> 
	<div class="container">
		 <div class="textos-banner">
			 <h4>
				 ahora transfiere desde tu celular
			 </h4> 
			 <a href="#">Conoce mas aqui</a>
		</div>
	</div> 
		</div>	
			<!---->
    </main>

<?php
    get_footer();
?>