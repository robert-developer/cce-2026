<?php
    /*
    * Template Name: nosotros
    */
    get_header();
?>
    <main class="contenedor-nosotros"> 
		<div class="banner-nosotros"> 
			<?php 
				$image = get_field('banner_cce');
				if( !empty( $image ) ): ?>
					<img  class="cce-banner"src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
				<?php endif; ?>
		  <?php 
			$image = get_field('banner_cce_movil');
			if( !empty( $image ) ): ?>
				<img class="cce-banner-movil" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
			<?php endif; ?>   
			<!--<img src="/wp-content/uploads/2023/10/Niveles-680.png">-->
			<div class="container">
			<div class="texto-nosotros"> 
				<h1> 
					<?php the_field('texto_banner_cce')?>
					<!--Transformando
					la vida financiera
					de los peruanos con
					soluciones digitales
					innovadoras y accesibles.-->

				</h1>
			</div> 
			</div>
		</div> 

<div class="seccion-nosotros-1" id="propositos">
  <div class="container">
        <div class="row">
            <div class="col-md-6" data-aos="fade-right">
                  <p><?php the_field('descripcion_proposito')?><!--Creamos un ecosistema de pagos digitales que promueve la inclusión financiera en el Perú para que las personas realicen sus operaciones interbancarias de manera segura. Somos un equipo líder y comprometido, que busca mejorar la vida de las personas con soluciones financieras innovadoras y confiables.--></p>
            </div>
            <div class="col-md-6" data-aos="fade-left">
              <?php 
			$image = get_field('imagen_descripcion');
			if( !empty( $image ) ): ?>
				<img class="" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
			<?php endif; ?>   
            </div>
        </div>
  </div>
</div>
<div class="seccion-nosotros-2"> 
  <div class="item-nosotros">
    <div class="container">
      <div class="row"> 
        <div class="col-md-12">
           <h2><!--Nuestra Visión--><?php the_field('titulo_vision')?></h2> 
           <p><?php the_field('descripcion_vision')?><!--Lorem ipsum dolor sit amet consectetur adipisicing elit.
             Vero cupiditate veritatis atque cumque sed nisi architecto accusamus in. Laborum, veniam--></p>
        </div>
      </div>
    </div> 
    </div>


  <div class="item-nosotros">
    <div class="container">
      <div class="row"> 
        <div class="col-md-12">
           <h2><!--Nuestra misión--><?php the_field('titulo_mision')?></h2> 
           <p><?php the_field('descripcion_mision')?><!--Lorem ipsum dolor sit amet consectetur adipisicing elit.
             Vero cupiditate veritatis atque cumque sed nisi architecto accusamus in. Laborum, veniam.--></p>
        </div>
      </div>
    </div>

  </div>
<div class="item-valores">
  <div class="container">
    <div class="row"> 
      <div class="col-md-12">
         <h2>Nuestros valores</h2> 
               <?php
					// Check rows exists.
					if( have_rows('valores') ):?>
  					<div class="valores"> 
				  <?
					// Loop through rows.
					while( have_rows('valores') ) : the_row();

						// Load sub field value.
						$sub_value = get_sub_field('sub_field');
						// Do something...
			        ?> 
               <div class="icon-valores"> 
	     <?php 
			$image = get_sub_field('imagen_valores');
			if( !empty( $image ) ): ?>
				<img class="" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
			<?php endif; ?>   
                <!--<img src="/wp-content/uploads/2023/10/pasion.png" alt="">-->
				   
                  <p><?php the_sub_field('titulo_valor')?></p>
                
               </div>
	  
	  <?
						// End loop.
						endwhile;

					// No value.
					else :
						// Do something...
					endif; 
			  
		?>	  
			  
			  
			  
			  
			  
			  
			  
			  
			  <!--
               <div cdlass="icon-valores">
                <img src="/wp-content/uploads/2023/10/pasion.png" alt="">
                  <pvzxc>Pasión</p>
                
               </div> 
               <div class="icon-valores">
                <img src="/wp-content/uploads/2023/10/rompecabezas.png" alt="">
                  <p>Integridad</p>
                
               </div>
               <div class="icon-valores">
                <img src="/wp-content/uploads/2023/10/practicas.png" alt="">
                  <p>Vocación de servicio</p>
                
               </div>
               <div class="icon-valores">
                <img src="/wp-content/uploads/2023/10/apreton-de-manos.png" alt="">
                  <p>Trabajo en equipo</p>
                
               </div> --hge>+
          </div>
        <!--<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
           Vero cupiditate veritatis atque cumque sed nisi architecto accusamus in. Laborum, veniam.</z<-->
      </div>
    </div>
  </div>

</div>

</div>
<div class="seccion-nosotros-3" id="equipo"> 
	<div class="container"> 
		<h2>
		    Nuestro equipo
		</h2></div>
    <div class="equipo-1">
        <div class="container">
            <div class="row"> 				             
				<?php
					// Check rows exists.
					if( have_rows('equipo_1') ):?>
  					
				  <?
					// Loopa through rows.
					while( have_rows('equipo_1') ) : the_row();

						// Load sub field value.
						$sub_value = get_sub_field('sub_field');
						// Do something...
			        ?> 
                <div class="col-md-3" data-aos="fade-up">
					<div class="img-equipo">
					 <?php 
					$image = get_sub_field('imagen');
					if( !empty( $image ) ): ?>
						<img class="" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
					<?php endif; ?>   
					</div>
                      <p><?php the_sub_field('nombre')?><!--Martín Santa María Fernández Stoll --></p> 
					<span><?php the_sub_field('cargo')?><!--Gerente General--></span>
                    
                </div> 
				<!--
                <div class="col-md-3" data-aos="fade-up"> 
					<div class="img-equipo">
						 <img src="/wp-content/uploads/2023/10/Capa-723.png" alt="">
					</div>
                      <p> Gustavo Gálvez Canseco</p> 
					<span>Gerente de Operaciones</span>
                    
                </div>
                <div class="col-md-3" data-aos="fade-up"> 
					<div class="img-equipo">
			         <img src="/wp-content/uploads/2023/10/Capa-724.png" alt="">
                    
					</div>
                    <p>Christine Mur Aurich</p> 
					<span>Gerente de Marketing y Promoción</span>
				</div> 
				 <div class="col-md-3" data-aos="fade-up"> 
					<div class="img-equipo">
			         <img src="/wp-content/uploads/2023/10/Frame-1171276681.png" alt="">
                    
					</div>
                    <p>Diego Rojas Herrera</p> 
					<span>Gerente de Innovación</span>
                
				</div> -->
				
				
					  <?
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
   <!-- <div class="equipo-2">
        <div class="container">
            <div class="row">
                <div class="col-md-4" data-aos="fade-up">
                    <img src="/wp-content/uploads/2023/10/Capa-723.png" alt="">
                       <p> aqui nombres y apellidos </p> 
					<span> Puesto de trabajo</span>
                </div>
                <div class="col-md-4" data-aos="fade-up">
                    <img src="/wp-content/uploads/2023/10/Capa-724.png" alt="">
                      <p> aqui nombres y apellidos </p> 
					<span> Puesto de trabajo</span>
                </div>
                <div class="col-md-4" data-aos="fade-up">
                    <img src="/wp-content/uploads/2023/10/Capa-722.png" alt="">
                        <p> aqui nombres y apellidos </p> 
					<span> Puesto de trabajo</span>
                    
                </div>
              <!--<div class="col-md-4">
                    <img src="/wp-content/uploads/2023/10/item.gg" alt="">
                        <strong>
                            <p>Qui nostrum quasi amet ipsum quod.</p>
                        </strong>
                    
                </div> 
            </div>
        </div> 
    </div>-->
</div>
<div class="seccion-nosotros-4" id="que-hacemos"> 
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="item-que-hacemos"> 
					 <div class="titulo-que-hacemos"> <?php the_field('titulo_corto')?></div> 
						 
							<h3> <?php the_field('titulo_largo')?></h3>
		<!--	
		Facilitamos
las transacciones
interbancarias de
la
			siguiente manera:--> 
<p><?php  the_field('descripcion')?>
	
				<!--Cada vez que una persona o empresa envía o recibe dinero de una cuenta en otra entidad financiera usando cheques o Transferencias Interbancarias, nosotros participamos en el procesamiento de esa operación.--></p>
                    <h2><strong></strong></h2>
					<p></p></div>
				</div>
            <div class="col-md-8">  
				 <?php 
					$image = get_field('imagen_que_hacemos');
					if( !empty( $image ) ): ?>
						<img class="" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
					<?php endif; ?>   

               <!-- <img src="/wp-content/uploads/2023/10/Group-1.png" alt="">-->
            </div>
        </div>
    </div>

</div>
                </div>
<div class="seccion-nosotros-5" id="memorias"> 
    <div class="container">
      <div class="row">
        <div class="col-md-6">  
           <h4>  <?Php the_field('titulo_memorias')?> <!--Descubre
nuestra historia:
lee nuestras memorias
y conoce cómo hemos
impulsado los pagos
digitales en el país --></h4>
        </div> 
		
        <div class="col-md-6"> 
          <div class="memorias">
            <div class="row">  
				  <?php
					// Check rows exists.
					if( have_rows('memorias') ):?>
  					
				  <?
					// Loopa through rows.
					while( have_rows('memorias') ) : the_row();

						// Load sub field value.
						$sub_value = get_sub_field('sub_field');
						// Do something...
			        ?> 
              <div class="col-md-6">
                  <?php 
					$image = get_sub_field('imagen_memorias');
					if( !empty( $image ) ): ?>
						<img class="" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
					<?php endif; ?>   
				   <div class="memorias-item">
                  <p><!--Memoria anual 2022--><?php the_sub_field('titulo')?></p> 
				 <a class="link-memorias" href="<?php echo get_sub_field('enlace_memorias'); ?>" target="_blank">Descargar aquí</a> 
				</div>  
                
              </div>
				<?
						// End loop.
						endwhile;

					// No value.
					else :
						// Do something...
					endif; 
			  
				?>	 
				<!--
              <div class="col-md-6">
                 <img src="/wp-content/uploads/2023/10/Capa-764.png" alt="">

				   <div class="memorias-item">
                  <p>Memoria anual 2021</p> 
				 <a href="https://cce.althus.pe/wp-content/uploads/2023/10/Memoria-CCE-2021.pdf">Descargar aqui</a> 
				</div>               
                
              </div>
              <div class="col-md-6">
                 <img src="/wp-content/uploads/2023/10/Capa-765.png" alt="">

                  				   <div class="memorias-item">
                  <p>Memoria anual 2020</p> 
				 <a href="https://cce.althus.pe/wp-content/uploads/2023/10/Memoria-CCE-2020.pdf" target="_blank">Descargar aqui</a> 
				</div>
              </div>
              <div class="col-md-6">
                 <img src="/wp-content/uploads/2023/10/Capa-766.png" alt="">

                 				   <div class="memorias-item">
                  <p>Memoria anual 2019</p> 
				 <a href="https://cce.althus.pe/wp-content/uploads/2023/10/memoriacce2019.pdf">Descargar aqui</a> 
				</div>
                
              </div>
              <div class="col-md-6">
                 <img src="/wp-content/uploads/2023/10/Capa-767.png" alt="">

                				   <div class="memorias-item">
                  <p>Memoria anual 2018</p> 
				 <a href="https://cce.althus.pe/wp-content/uploads/2023/10/memoriacce2018.pdf">Descargar aqui</a> 
				</div>
                
              </div>--> 
 
			  
            </div>
          </div>
        </div>
      </div>
    </div>
</div> 
		<div class="seccion-financieras" id="financieras-nosotros">
	<div class="container"> 
		  <div class="row">   
			  <div class="col-md-12">  
				  <h2>
					Entidades que participan con el servicio
de transferencias diferidas.
				  </h2>
			  </div> 
			  <div class="col-md-12">  
				 <div id="financieras-1" class="owl-carousel owl-theme">
					 <?php
					// ChAeck rows exists.
					if( have_rows('entidades_diferidas') ):?>
  					
				  <?
					// Loopa through rows.
					while( have_rows('entidades_diferidas') ) : the_row();

						// Load sub field value.
						$sub_value = get_sub_field('sub_field');
						// Do something...
			        ?> 						

						<div class="item"><a href="<?php echo get_sub_field('enlace_banco')?>" target="_blank">     <?php 
					$image = get_sub_field('imagen_entidad');
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
		<div class="row">
				  <div class="col-md-12">  
				  <h2>
					 Entidades que participan con el servicio
de
transferencias inmediatas.
				  </h2>
			  </div> 
			  <div class="col-md-12">  
						  <div id="financieras-2" class="owl-carousel owl-theme">
						 <?php
						// ChAeck rows exists.
						if( have_rows('entidades_transferencias_inmediatas') ):?>

					  <?
						// Loopa through rows.
						while( have_rows('entidades_transferencias_inmediatas') ) : the_row();

							// Load sub field value.
							$sub_value = get_sub_field('sub_field');
							// Do something...
						?> 
							<div class="item">  <a href="<?php echo get_sub_field('enlace_entidad')?>"target="_blank">   <?php 
						$image = get_sub_field('imagen_entidad');
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
			</div>
			  </div>
		</div>
	</div>
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
						
						<div class="col-md-4" data-aos="fade-up"> 
							<div class="item-post">
								<div class="image-post">
								<?php the_post_thumbnail();?>
							</div> 
							<div class="content-post"> 
								<span><?php the_category();?></span>
								<h2>	
								<?php the_title()?></h2> 
								<!--<p>hge+
									<?php the_excerpt()?>
								</p>-->
								<a class="link" href="<?php echo get_permalink()?>"><i class="fa-solid fa-arrow-right-long"></i>Leer más</a>
							</div>
						
							</div>
						</div>
						
						
						
						
						
					<?php endforeach;
						 wp_reset_postdata();
?>
					</div> 
					<div class="row btn-blog">
						<div class="col-md-12">
							<a class="btn-ver-noticias" href="/blog">Ver todas las noticias</a>
						</div>
					</div>
					
				</div>
			</div>
			

		<div class="seccion-banner-general"> 
	<div class="banner">
		  <?php 
						$image = get_field('banner_general','option');
						if( !empty( $image ) ): ?>
							<img class="" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
								<?php endif; ?> 
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
			<!--
<div class="seccion-nosotros-1"></div>
         <div class="container">
             <div class="cobertura-left"> 
                  <h1>Sucursales y distribuidores</h1>
             </div> 
             <div class="cobertura-right">
                <div class="img-cobertura">
                     <img src="http://localhost/costagas/wp-content/uploads/2023/05/mapa.png" alt="">
                </div>
             </div>
</divzZzx<X.<.xzX<xX<-c-<.x<x<c<-->

    </main>

<?php
    get_footer();
?>
