<?php
    while( have_posts() ): the_post(); 
           
      //  the_title('<h1 class="text-center text-primary">','</h1>');
        //if(has_post_thumbnail()) {
            //the_post_thumbnail('full', array('class' => 'imagen-destacada'));
       // }
        ?>  
        
        <div class="content-blog">
            <?php the_content();  ?>
            <div class="images-blog">
            <?php if( have_rows('imagenes_blog') ): ?>
                <?php while( have_rows('imagenes_blog') ): the_row();       
                // vars
                $image = get_sub_field('imagen_blog');
                ?>
       
                <img src="<?php echo $image['url']; ?>" />
            
       
                <?php endwhile; ?>

            <?php endif; ?>
            </div>

        </div>
      
       <!-- <div class="meta-info">
            <p class="meta">
                <span>Por: </span>
                <a href="<?php //echo get_author_posts_url( get_the_author_meta('ID')); ?>">
                    <?php //echo get_the_author_meta('display_name'); ?>
                </a>
            </p>

           

            <div class="categoria">
                <p class="meta">
                    <span>Categoría: </span>
                </p>
                <?php// the_category(); ?>
                
            </div>
            <p class="meta">
                <span>Fecha: </span>
                <?php the_time( get_option('date_format') ); ?>
            </p>
        </div>-->
        <?php 
     
    endwhile;
    