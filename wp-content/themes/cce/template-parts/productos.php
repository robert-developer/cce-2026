<div class="banner-detalle-recetas">
<?php  
   $image = get_field('banner_producto');?>
   <img src="<?php echo $image['url']; ?>" />
   
</div>
<div class="contenido-detalle-recetas">
<?php
    while( have_posts() ): the_post();  ?>
    <div class="container">
        <div class="left-img">
              <div class="img"> 
				  <div class="product-image-gallery">  
            <div id="slider" class="flexslider">
            <ul class="slides"> 
             <?php if( have_rows('galeria_productos') ): ?>

              <?php while( have_rows('galeria_productos') ): the_row(); 

                  // vars
                  $image = get_sub_field('imagen_galeria');
                  ?>
            <li>
              <a href="">
                <img src="<?php echo $image['url']; ?>" />
              </a>
            </li>
                   <?php endwhile; ?>

              <?php endif; ?>
                
            </ul>
          </div>
            <div id="thumbnail-slider" class="flexslider vertical-carousel">
                <ul class="slides"> 
                <?php if( have_rows('galeria_productos') ): ?>

                  <?php while( have_rows('galeria_productos') ): the_row(); 

                      // vars
                      $image = get_sub_field('imagen_galeria');
                      ?>
                <li>
                  <a href="">
                    <img src="<?php echo $image['url']; ?>" />
                  </a>
                </li>
                      <?php endwhile; ?>

                  <?php endif; ?>
                    
                </ul>
          </div>

				  
				  
			
            </div>

        </div> 
        </div> 
        <div class="right-descripcion"> 
            <div class="inner">
            <span><?php $terms = get_the_terms( $post->ID , 'product_cat' );
                                foreach ( $terms as $term ) {
                                echo $term->name;
                                }?> </span>
      
                <?php  the_title('<h1 class="text-center text-primary">','</h1>');?>
                <div class="contenido">
                  
                    <div class="textos">
                          <?php the_content();  ?>
                    </div>
           

                </div>
            </div>
             
        </div>
    </div> 
      <?php   
endwhile; ?>
<div class="relacionados">  
    <h4 class="titulos">
         <span class="titulos-home">
         Productos populares
     </span>
    </h4>
     
    <div class="container">
<?php 

    
//Get array of terms
$terms = get_the_terms( $post->ID , 'product_cat', 'string');
//Pluck out the IDs to get an array of IDS
$term_ids = wp_list_pluck($terms,'term_id');

//Query posts with tax_query. Choose in 'IN' if want to query posts with any of the terms
//Chose 'AND' if you want to query for posts with all terms
  $second_query = new WP_Query( array(
      'post_type' => 'productos',
      'tax_query' => array(
                    array(
                        'taxonomy' => 'product_cat',
                        'field' => 'id',
                        'terms' => $term_ids,
                        'operator'=> 'IN' //Or 'AND' or 'NOT IN'
                     )),
      'posts_per_page' => 4,
      'post__not_in'=>array($post->ID)
   ) );

//Loop through posts and display...
    if($second_query->have_posts()) {
     while ($second_query->have_posts() ) : $second_query->the_post(); ?>
        <div class="single_related cards">
                <div class="container-item">
    
                <?php if (has_post_thumbnail()) { ?>
                    <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"> <?php the_post_thumbnail( 'related_sm', array('alt' => get_the_title()) ); ?> </a>
                    <?php } else { ?>
                        <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
                    <?php } ?> 
                    <div class="card-content">
                              <span> <?php $terms = get_the_terms( $post->ID , 'product_cat' );
                                foreach ( $terms as $term ) {
                                echo $term->name;
                                }?></span>
                    <strong><?php the_title()?></strong>
                    </div>
              
        </div>
        </div>   <?php endwhile; wp_reset_query();    }?> 
        </div>
</div>       


</div>
<script type="text/javascript">
    $(function(){
      SyntaxHighlighter.all();
    });
    
  </script>



   
  
    
