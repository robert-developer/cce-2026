<?php
    /*
    * Template Name: videos
    */
    get_header();
?>
    <main class="contenedor-nosotros"> 
		<div class="banner-nosotros"> 
			<?php 
				$image = get_field('banner');
				if( !empty( $image ) ): ?>
					<img  class="cce-banner"src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
				<?php endif; ?>
		  <?php 
			$image = get_field('banner_tutoriales_movil');
			if( !empty( $image ) ): ?>
				<img class="cce-banner-movil" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
			<?php endif; ?>   
			<!--<img src="/wp-conten-->
			<div class="container">
			<div class="texto-nosotros"> 
				<h1> <?php the_field('titulo_banner')?>
				<!--	Descubre
					cómo ser más
					eficientes en
					la realización de
					tus pagos-->
				</h1>
			</div> 
			</div>
		</div> 
    <div class="seccion-videos">
		 <div class="container">
			  <h2> 
				  <?php the_field('titulos_video_1')?>
					<!-- Conoce tu CCI -->
				 </h2>
			 <div id="videos-cci"class="owl-carousel bloque-video-1"> 
				
				 <?php

// Check rows exists.
if( have_rows('video_cci') ):

    // Loop through rows.
    while( have_rows('video_cci') ) : the_row();

        // Load sub field value.
        $sub_value = get_sub_field('sub_field');
        // Do something... ?> 
				 <div class="video-tutorial"> 
					 <div class="video">
						
					 <?php  the_sub_field('video')?> </div>
					 <p>
					 
						 <?php the_sub_field('titulo')?>
					 </p>
				 </div>
<?php
    // End loop.
    endwhile;

// No value.
else :
    // Do something...
endif;
?>
			 </div>
		</div>
	</div> 
		 <div class="seccion-videos">
		 <div class="container">
			  <h2>
				  <?php the_field('titulos_video_2')?>
				 </h2>
			 <div id="videos-cci1"class="owl-carousel bloque-video-1"> 
				
				 <?php

// Check rows exists.
if( have_rows('video_cci1') ):

    // Loop through rows.
    while( have_rows('video_cci1') ) : the_row();

        // Load sub field value.
        $sub_value = get_sub_field('sub_field');
        // Do something... ?> 
				 <div class="video-tutorial"> 
					 <div class="video">
						
					 <?php  the_sub_field('video')?> </div>
					 <p>
					 
						 <?php the_sub_field('titulo')?>
					 </p>
				 </div>
<?php
    // End loop.
    endwhile;

// No value.
else :
    // Do something...
endif;
?>
			 </div>
		</div>
	</div>
		 <div class="seccion-videos">
		 <div class="container">
			  <h2>
				  <?php the_field('titulos_video_3')?>

				 </h2>
			 <div id="videos-cci2"class="owl-carousel bloque-video-1"> 
				
				 <?php

// Check rows exists.
if( have_rows('video_cci2') ):

    // Loop through rows.
    while( have_rows('video_cci2') ) : the_row();

        // Load sub field value.
        $sub_value = get_sub_field('sub_field');
        // Do something... ?> 
				 <div class="video-tutorial"> 
					 <div class="video">
						
					 <?php  the_sub_field('video')?> </div>
					 <p>
					 
						 <?php the_sub_field('titulo')?>
					 </p>
				 </div>
<?php
    // End loop.
    endwhile;

// No value.
else :
    // Do something...
endif;
?>
			 </div>
		</div>
	</div>
		 <div class="seccion-videos">
		 <div class="container">
			  <h2>
				<?php the_field('titulos_video_4')?>

				 </h2>
			 <div id="videos-cci3"class="owl-carousel bloque-video-1"> 
				
				 <?php

// Check rows exists.
if( have_rows('video_cci3') ):

    // Loop through rows.
    while( have_rows('video_cci3') ) : the_row();

        // Load sub field value.
        $sub_value = get_sub_field('sub_field');
        // Do something... ?> 
				 <div class="video-tutorial"> 
					 <div class="video">
						
					 <?php  the_sub_field('video')?> </div>
					 <p>
					 
						 <?php the_sub_field('titulo')?>
					 </p>
				 </div>
<?php
    // End loop.
    endwhile;

// No value.
else :
    // Do something...
endif;
?>
			 </div>
		</div>
	</div>
		 <div class="seccion-videos">
		 <div class="container">
			  <h2>
			  <?php the_field('titulos_video_5')?>
                <!--
				El que sabe, sabe-->
				 </h2>
			 <div id="videos-cci4"class="owl-carousel bloque-video-1"> 
				
				 <?php

// Check rows exists.
if( have_rows('video_cci4') ):

    // Loop through rows.
    while( have_rows('video_cci4') ) : the_row();

        // Load sub field value.
        $sub_value = get_sub_field('sub_field');
        // Do something... ?> 
				 <div class="video-tutorial"> 
					 <div class="video">
						
					 <?php  the_sub_field('video')?> </div>
					 <p>
					 
						 <?php the_sub_field('titulo')?>
					 </p>
				 </div>
<?php
    // End loop.
    endwhile;

// No value.
else :
    // Do something...
endif;
?>
			 </div>
		</div>
	</div>
</main>
<?php
    get_footer();
?>
