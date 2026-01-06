<?php
    get_header();
?>

    <main class="seccion contenedor"> 
		<div class="container">
			
		
        <?php 
            $categoria = get_queried_object();
        ?>
        <h2 class="text-primary text-center"><span>Categoría:</span> <?php echo $categoria->name; ?></h2>
        <ul class="listado-grid row">
            <?php
                while( have_posts() ) { 
                    the_post();
                    get_template_part('template-parts/blog');
                }
            ?>
        </ul> 
		<?php echo paginate_links(); ?></div>
    </main>

<?php
    get_footer();
?>