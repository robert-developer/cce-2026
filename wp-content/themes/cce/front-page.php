<?php
    get_header();
?> 
<main>
<div id="home" class="seccion-home-slider owl-carousel">
	 <?php if( have_rows('slider','option') ): ?>

              <?php while( have_rows('slider','option') ): the_row(); 

                  // vars
                  $image = get_sub_field('imagen','option'); 
		 		  $imagemovil = get_sub_field('imagen_movil','option');
                  ?>
			<div class="slider">
 				 <img src="<?php echo $image['url']; ?>"  class="desktop" alt=""/> 
             	 <img src="<?php echo $imagemovil['url']; ?>" class="movil"/>
     
			<div class="contenido-slider"> 
				<div class="content <?php the_sub_field('elegir_modo')?>">
				<strong><?php  the_sub_field('titulo','option');?></strong> 
				<p> <?php the_Sub_field('texto', 'option')?></p> 
					<?php 
					$link = get_sub_field('link','option');
					if( $link ): ?>
						<a class="button btn-slider" href="<?php echo esc_url( $link ); ?>"> Ver más</a>
					<?php endif; ?>
				</div>
			</div>
			
	</div>  
	
		<?php  endwhile;?>
            <?php endif; ?>
	
</div> 
<div class="seccion-home-1">
	<div class="container"> 
		<div class="row"> 
			<div class=col-md-6> 
				<div>
					<p><?php the_field('texto_informativo','option')?>
<!--Durante el 2023, CCE conectó a más de 19 millones de cuentas a nivel nacional, realizando más de 181 millones de transacciones de pago por un valor de 301 mil millones de soles.-->
<em><!--**Actualizado a Enero 2024zz<<--><?php the_field('texto_informativo_2','option')?></em></p>
				</div><
			</div> 
			<div class="col-md-6">
			  <img src="/wp-content/uploads/2025/07/datos_transferencias_interbancarias.jpg">
			</div>
			<div class="col-md-12">
				<div class="contenido-contador"> 
					<?php echo do_shortcode("[parametros]"); ?>
					<!--<div class="item">
						<div class="contador-numero">
							+<span class="contador" data-valor="145">145</span><span>M</span>
						</div>
						<p>
						Consultas de
transferencias
						</p>
					</div> 
					<div class="item">
						<div class="contador-numero">
							+<span class="contador" data-valor="107">107</span><span>M</span>
						</div> <p>
			 Total de transferencias inmediatas

						</p>
					</div>
					<div class="item">
						<div class="contador-numero">
							+<span class="contador" data-valor="44">44</span><span>M</span>
						</div>
						<p>Total de transferencias
diferidas.

						</p>
					</div><div class="item">
							<div class="contador-numero">
							<span class="contador" data-valor="367">367</span><span>M</span>
						</div> <p>	
		Monto tranferido  solarizado
						</p>
					</div><div class="item">
					    <div class="contador-numero">
							<span class="contador" data-valor="19">19</span><span>M</span>
					 </div> 
					<p>Cuentas transaccionales
					
					</p>
					</div>-->
				</div>
			</div>
		</div>
	</div>
</div> 
<div class="seccion-blog">
	<div class="container">
		<div class="row">
		<div class="col-md-8">
						     <?php

                $args = array(
                    'posts_per_page' => 1,
                    'meta_key' => 'post_views',
                    'orderby' => 'meta_value_num',
                    'order' => 'DESC'
                );

                $popular_posts = new WP_Query( $args );
                while ( $popular_posts->have_posts() ) : $popular_posts->the_post();?>

                      <div class="post-destacado"  data-aos="fade-up ">
						 <div class="post-right">
							
                         <?php the_post_thumbnail('large'); ?>
                         </div>
                         <div class="post-left"> 
                         
							 	<div class="titulos"><span><?php the_category();?></span></div>
                               <h2><?php the_title();?></h2>
                             <!-- <?php the_excerpt();?>--> 
							 <div class="datos">
								 <a class="link-destacado" href="<?php echo get_permalink()?>"><i class="fa-solid fa-arrow-right-long"></i>Leer más</a>    <span>  <?php the_time( get_option('date_format') ); ?></span></div>
                         </div> 
                        
                      </div>
                 
               <?php endwhile; ?>
					</div> 
					<div class="col-md-4">  
						 <ul class="listado-grid">
							<?php
								 global $post;

								$last_posts = get_posts(array('posts_per_page' => 3));

								foreach ( $last_posts as $post ) :
								 setup_postdata( $post );?>

								<div class="last-posts-wrap" data-aos="fade-up">
									<div class="img-post">
										<a href="<?php echo get_permalink()?>"><?php the_post_thumbnail();?></a> 

									</div> 
									<div class="title-post"> 
										 <span><?php the_category();?></span>
										<h3>
											<a href="<?php echo get_permalink()?>"><?php the_title();?></a>
										</h3>
										        <!-- <?php the_excerpt();?>-->
                            <a class="link" href="<?php echo get_permalink()?>"><i class="fa-solid fa-arrow-right-long"></i>Leer más</a>
                       
									</div>
							
				                </div>

						<?php endforeach;
						 wp_reset_postdata();
?>
        </ul>
						
					</div>
				
		</div>
	</div>
</div> 
<div class="seccion-financieras">
	<div class="container"> 
		  <div classs="row">   
			  <div class="col-md-12">  
				  <h2 class="titulo-entidades-financieras">
					  Entidades financieras interoperables
				  </h2>
			  </div> 
			  <div class="col-md-12">  
						 <div id="financieras" class="owl-carousel owl-theme">
					 <?php
					// ChAeck rows exists.
					if( have_rows('entidades_asociadas','option') ):?>
  					
				  <?
					// Loopa through rows.
					while( have_rows('entidades_asociadas','option') ) : the_row();

						// Load sub field value.
						$sub_value = get_sub_field('sub_field');
						// Do something...
			        ?> 						

						<div class="item"><a href="<?php echo get_sub_field('enlace_banco')?>" target="_blank">     <?php 
					$image = get_sub_field('imagen_entidad','option');
					if( !empty( $image ) ): ?>
							<img class="" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
					<?php endif; ?>  </a> </div> 
					  <?
						// End loop.
						endwhile;

					// No value.
					else :
						// Do something...
					endif; 
			  
				?>	 	
					 <!--
						<div class="item"><img src="/wp-content/uploads/2023/10/logo-1.png  "/><h4>2</h4></div>
						<div class="item"><img src="/wp-content/uploads/2023/10/logo-2.jpg"/><h4>3</h4></div>
						<div class="item"><img src="/wp-content/uploads/2023/10/logo-3.png  "/><h4>4</h4></div>
						<div class="item"><img src="/wp-content/uploads/2023/10/logo-4.png  "/><h4>5</h4></div>
						<div class="item"><img src="/wp-content/uploads/2023/10/logo-5.jpg  "/><h4>6</h4></div>
						<div class="item"><img src="/wp-content/uploads/2023/10/logo-1.png  "/><h4>7</h4></div>-->
				<!--<div class="item"><h4>8</h4></div>
				<div class="item"><h4>9</h4></div>
				<div class="item"><h4>10</h4></div>
				<div class="item"><h4>11</h4></div>
				<div class="item"><h4>12</h4></div> -->
			</div>
			  </div>
		</div>
		
		
		
	</div>
</div> 
<div class="seccion-banner-general"> 
	<div class="banner">
		<img src="/wp-content/uploads/2023/10/banner0001-2-1.png">
	</div> 
	<div class="container">
		 <div class="textos-banner">
			 <h4 class="titulo-banner-general">
				 ¡Ahora transfiere desde tu celular!
			 </h4> 
			 <a href="#" class="btn-banner-general">Conoce más aquí</a>
		</div>
	</div>
</div> 
</main>
<?php
    get_footer();
?>