<?php
    get_header();
?>
    <main class="contenedor seccion">
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
			<!--<img src="/wp-contenxzx<zXZxzzxz-->
				
					  
					  
			<div class="container">
			<div class="texto-nosotros"> 
				<h1>
					Realiza
						tu transferencia
						interbancaria desde
						tu banca móvil o desde
						tu banca por internet.

				</h1>
			</div> 
			</div>
		</div> 

		<div class="container">
		
        <div class="destacada">
					<div class="datos-detalle"> 
						<h1>
							<?php the_title()?>
						</h1> 
						<div class="datos-fecha">
							<span> <?php the_time( get_option('date_format') ); ?> </span><div>Noticias y novedades <span><?php the_category()?></span></div>
						</div>
					</div>
                        <div class="post-destacado">
                            <div class="post-left">

               
                               <!-- <a href="<?php echo get_permalink()?>">Leer nota</a> -->
                            </div> 
                            <div class="post-right"> 
                        
                            </div>
                        </div>
                    
       
                </div>
        <?php
            get_template_part('template-parts/post');
        ?>

<!--
        <div class="comentarios">
            <?php //comment_form(); ?>

            <h3 class="text-center text-primary comentarios">Comentarios</h3>
            <ul class="lista-comentarios">
                <?php 
                    $comentarios = get_comments( array(
                        'post_id' => $post->ID,
                        'status' => 'approve'
                    ));

                    wp_list_comments( array(
                        'per_page' => 10,
                        'reverse_top_level' => false
                    ), $comentarios);
                ?>
            </ul>
        </div>--> 
		</div> 
		
<div class="seccion-blog"> 
	
	<div class="container">
					<h2 class="titulos">¡Mantente al día con las últimas noticias sobre transferencias
interbancarias y nuestra empresa de pagos digitales!</h2>
					<div class="row">
						<?php
								 global $post;

								$last_posts = get_posts(array('posts_per_page' => 6));

								foreach ( $last_posts as $post ) :
								 setup_postdata( $post );?> 
						
						<div class="col-md-4"> 
							<div class="item-post">
								<div class="image-post">
								<?php the_post_thumbnail();?>
							</div> 
							<div class="content-post"> 
								<span><?php the_category();?></span>
								<h2>	
								<?php the_title()?></h2> 
								<!--<p>
									<?php the_excerpt()?>
								</p>-->
								<a class="link" href="https://cce.althus.pe/blog/hello-world/"><i class="fa-solid fa-arrow-right-long"></i>Leer nota</a>
							</div>
						
							</div>
						</div>
						
						
						
						
						
					<?php endforeach;
						 wp_reset_postdata();
?>
					</div>
					
				</div>
			</div>
			

		<div class="seccion-banner-general"> 
	<div class="banner">
		<img src="/wp-content/uploads/2023/10/banner0001-2-1.png">
	</div> 
	<div class="container">
		 <div class="textos-banner">
			 <h4>
				 ¡Ahora transfiere desde tu celular!
			 </h4> 
			 <a href="#">Conoce más aquí</a>
		</div>
	</div> 
		</div>	
    </main>
    
<?php
    get_footer();
?>