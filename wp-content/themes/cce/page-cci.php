<?php
    /*
    * Template Name: cci
    */
    get_header();
?>
    <main class="contenedor-nosotros"> 
		<div class="banner-nosotros">
			<?php 
				$image = get_field('banner_cci');
				if( !empty( $image ) ): ?>
					<img  class="cce-banner"src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
				<?php endif; ?>
		  <?php 
			$image = get_field('banner_cci_movil');
			if( !empty( $image ) ): ?>
				<img class="cce-banner-movil" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
			<?php endif; ?>   
			<!--<img src="/wp-conten-->
			<div class="container">
			<div class="texto-nosotros"> 
				<h1><?php the_field('titulo_banner')?>
				<!--Ahora todo
				más fácil en
				una plataforma
				digital--></h1>
			</div> 
			</div>
		</div> 






<div class="seccion-servicios-1"> 
   <div class="container">
    <div class="row">
      <div class="col-md-7">
        <h2>¿Quieres obtener un CCI?</h2> 
		  <p>Elige una entidad financiera para obtener un CCI.</p> 
<!-------------------FORMULARIO OBTEN CCI------------------------------->
		  <!--FORMULARIO OBTEN CCI-->
		  <div class="bloque-cci">
			  <form>
				  <div class="formulario-cci"> 
					  <div class="bloque-select">
							<select name="iptcci" id="iptcci" class="select-cci" required="" onchange="redirect_cci()">
								<option value="">Selecciona</option>
								<?php
								  $args_agencia = array( 'post_type' => 'agencia-bancaria', 'posts_per_page' => -1, 'order' => 'ASC',  'post_status' => 'publish');
								  $loop_agencia = new WP_Query( $args_agencia );
								  while ( $loop_agencia->have_posts() ) : $loop_agencia->the_post();
								?>
								<option value="<?php echo get_field("url_banco"); ?>"><?php echo get_the_title();?></option>
								<?php endwhile; ?>
							</select> 
							<i class="fa-solid fa-chevron-down"></i>
					  </div>
					  <!--<input type="text" class="numero-cci" maxlength="16" placeholder="Número de cuenta" required="">
					  <div class="btn-calcular">
							<input type="submit" value="Obtener CCI">
					  </div>-->
				  </div> 
			  </form>
		  </div>
<!-----------------FIN--FORMULARIO OBTEN CCI------------------------------->
		 
      </div> 
      <div class="col-md-5"> 
        <img src="/wp-content/uploads/2023/10/Grupo-17-3.png" alt="">
      </div>
    </div> 
  
<div class="seccion-transferencias formulario" id="formulario">
	 <div class="container"> 
		 <h2>Conoce las tarifas aquí:</h2>
			<ul class="nav nav-tabs" role="tablist">
				<li class="nav-item">
					<a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab">Transferencia entre cuentas</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab">Pago con tarjeta de crédito</a>
				</li>
				<!--<li class="nav-item">
					<a class="nav-link" data-toggle="tab" href="#tabs-3" role="tab">Third Panel</a>
				</li> -->
			</ul><!-- Tab panes -->
			<div class="tab-content">
				<div class="tab-pane active" id="tabs-1" role="tabpanel">
					<form class="needs-validation" novalidate="">
					 <div class="radios-form" id="seccionradios">
						<span>Tipo de transferencia</span>
						<div class="l-container">
							<div id="radioinmediatas" class="radiostop">
							
						
							<input data-target-radio="radio2" class="Form-input" id="radio2" value="2" name="tipotransford" required type="radio">
							<label class="Form-label Form-label--radio" for="radio2">Transferencias inmediatas</label>	</div>
	
							<div id="radiohorarios" class="radiostop">
								
							
							<input class="Form-input" data-target-radio="radio1" checked="checked" id="radio1" value="1" name="tipotransford" required type="radio">
							<label class="Form-label Form-label--radio" for="radio1">Transferencias por horarios</label></div>						<!-- Commented out radio buttons with unique names if needed -->
						</div>
					</div>
			  
					<div class="bloque-selects">
						<div class="bloque-select-1">
							<span>Desde</span>
							<div class="item-select">
								<select name="entidadorigenord" id="entidadorigenord" required>
									<option>Elige una financiera</option> 
									<?php
									  $args_agencia = array( 'post_type' => 'entidad', 'posts_per_page' => -1, 'order' => 'ASC',  'post_status' => 'publish');
									  $loop_agencia = new WP_Query( $args_agencia );
									  while ( $loop_agencia->have_posts() ) : $loop_agencia->the_post();
									?>
									<option value="<?php echo get_field("id"); ?>"><?php echo get_the_title();?></option>
									<?php endwhile; ?>
								</select> 
								  <i class="fa-solid fa-chevron-down"></i>
							</div>
						</div> 
						<div class="bloque-select-1"> 
							<span>Medio</span>
							<div class="item-select">
								<select name="medioorigen_ord" id="medioorigen_ord" required>
									<option value="1">Página Web</option>
                                    <option value="2">Aplicación Móvil</option>
                                    <option value="3">Ventanilla</option>
								</select> 
								 <i class="fa-solid fa-chevron-down"></i>
							</div>
							</div>
						</div> 
					<div class="bloque-selects">
						<div class="bloque-select-1">
							<span>Hacia</span>
							<div class="item-select">
								<select name="entidadfinord" id="entidadfinord" required>
									<option>Elige una financiera</option> 
									<?php
									  $args_agencia = array( 'post_type' => 'entidad', 'posts_per_page' => -1, 'order' => 'ASC',  'post_status' => 'publish');
									  $loop_agencia = new WP_Query( $args_agencia );
									  while ( $loop_agencia->have_posts() ) : $loop_agencia->the_post();
									?>
									<option value="<?php echo get_field("id"); ?>"><?php echo get_the_title();?></option>
									<?php endwhile; ?>
								</select> 
								  <i class="fa-solid fa-chevron-down"></i>
							</div>
							<div class="radios-form radios-form-1 mt-5">
								<span>Plaza</span>
								<div class="l-container">
									<input class="Form-input1" checked="checked" id="radio5" name="plazaord" type="radio" required value="1">
									<label class="Form-label1 Form-label1--radio" for="radio5">Misma ciudad</label>
									<input class="Form-input1" id="radio6" name="plazaord" type="radio" required value="2">
									<label class="Form-label1 Form-label1--radio" for="radio6">Otra ciudad</label>
									<input class="Form-input1" id="radio7" name="plazaord" type="radio" required value="3">
									<label class="Form-label1 Form-label1--radio" for="radio7">Ciudad remota</label>
								</div>
							</div>		
							<div class="radios-form radios-form-1 mt-3">
								<span>Monto y tipo de moneda</span>
								<div class="l-container">
									<input class="Form-input1" checked="checked" id="radio3" name="monedaord" type="radio"  value="1" required>
									<label class="Form-label1 Form-label1--radio" for="radio3">Soles</label>
									<input class="Form-input1" id="radio4" name="monedaord" type="radio"  value="2" required>
									<label class="Form-label1 Form-label1--radio" for="radio4">Dólares</label>
								</div>
							</div>

							<div class="input-monto mt-3">
								<input type="text" placeholder="Monto a pagar S/ o $" name="montoord">
							</div> 
						</div> 
						
					</div>
					
					<button class="btn-ajax-calcular" id="calcularTarifaOrd" type="submit">Calcular</button>
						
					<div class="bloque-select-1 rpta_api_transferencia_negativa mt-5">
						<p id="resultadoparcialordnegativa"></p>
					</div>

					<div class="bloque-select-1 rpta_api_transferencia mt-5"> 
							<p id="resultadoparcialord"></p>
							<h5>*Total inc.comisión:</h5>
                        	<h5 class="" id="montofinalord">0.00</h5>
						</div>
					</form>
				</div>
				<div class="tab-pane" id="tabs-2" role="tabpanel">
						<form>
					 <div class="radios-form">
						<span>Tipo de transferencia</span>
						<div class="l-container">
							<input class="Form-input" id="tipotransfhortar" value="1" name="tipotransftar" required checked type="radio">
							<label class="Form-label Form-label--radio" for="tipotransfhortar">Transferencias por horarios</label>
							<input class="Form-input" id="tipotransfinmtar" value="2" name="tipotransftar" required type="radio">
							<label class="Form-label Form-label--radio" for="tipotransfinmtar">Transferencias inmediatas</label>
							<!-- Commented out radio buttons with unique names if needed -->
						</div>
					</div>
			  
					<div class="bloque-selects">
						<div class="bloque-select-1">
							<span>Desde</span>
							<div class="item-select">
								<select name="entidadorigentar" id="entidadorigentar" required>
									<option>Elige una financiera</option> 
									<?php
									  $args_agencia = array( 'post_type' => 'entidad', 'posts_per_page' => -1, 'order' => 'ASC',  'post_status' => 'publish');
									  $loop_agencia = new WP_Query( $args_agencia );
									  while ( $loop_agencia->have_posts() ) : $loop_agencia->the_post();
									?>
									<option value="<?php echo get_field("id"); ?>"><?php echo get_the_title();?></option>
									<?php endwhile; ?>
								</select> 
								  <i class="fa-solid fa-chevron-down"></i>
							</div>
						</div> 
						<div class="bloque-select-1"> 
							<span>Medio</span>
							<div class="item-select">
								<select name="mediotar" id="mediotar" required>
									<option value="1">Página Web</option>
                                    <option value="2">Aplicación Móvil</option>
                                    <option value="3">Ventanilla</option>
								</select> 
								 <i class="fa-solid fa-chevron-down"></i>
							</div>
							</div>
						</div> 
						<div class="bloque-selects">
							<div class="bloque-select-1">
								<span>Hacia</span>
								<div class="item-select">
									<select name="entidadfintar" id="entidadfintar" required>
										<option>Elige una financiera</option> 
										<?php
										  $args_agencia = array( 'post_type' => 'entidad', 'posts_per_page' => -1, 'order' => 'ASC',  'post_status' => 'publish');
										  $loop_agencia = new WP_Query( $args_agencia );
										  while ( $loop_agencia->have_posts() ) : $loop_agencia->the_post();
										?>
										<option value="<?php echo get_field("id"); ?>"><?php echo get_the_title();?></option>
										<?php endwhile; ?>
									</select> 
									  <i class="fa-solid fa-chevron-down"></i>
								</div>
								<div class="radios-form radios-form-1  mt-5">
									<span>Monto y tipo de moneda</span>
									<div class="l-container">
										<input class="Form-input1" id="monedasolestar" value="1" name="monedatar" required checked type="radio">
										<label class="Form-label1 Form-label1--radio" for="monedasolestar">Soles</label>
										<input class="Form-input1" id="monedadolartar" value="2" name="monedatar" required type="radio">
										<label class="Form-label1 Form-label1--radio" for="monedadolartar">Dolares</label>
									</div>
								</div>

								<div class="input-monto">
									<input type="text" id="montotar" name="montotar" placeholder="Monto a pagar S/ o $" required>
								</div> 
							</div> 
							
						</div>
									
					
						<div class="btn-calcular">
							<input type="submit" value="Calcular"  id="calcularTarifaTar">
						</div>
							
						<div class="bloque-select-1 rpta_api_pago_negativa mt-5">
							<p id="resultadoparcialtarnegativa"></p>
						</div>

						<div class="bloque-select-1 rpta_api_pago mt-5"> 
								<p id="resultadoparcialtar"></p>
								<h5>*Total inc. Comisión:</h5>
								<h5 class="" id="montofinaltar">0.00</h5>
							</div>
					</form>
				</div>
				<div class="tab-pane" id="tabs-3" role="tabpanel">
					<p>Third Panel</p>
				</div>		
			</div>
	</div> 

	<div class="row texto">
		<div class="col-md-12">
			<ul>
				<li>**El monto por la entidad financiera receptora se reflejará en el estado de cuenta a final del mes de la tarjeta de crédito.</li>
<li>**Monto total aproximado referencial determinado por la última información entregada por la entidad financiera.</li>
			</ul>
		</div>
	</div>
</div>
	   </div>
	</div>

<div class="seccion-blog"> 
	
	<div class="container">
					<h2 class="titulos"> Noticias <span class="titulos-home">recientes</span></h2>
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
				 ahora transfiere desde tu celular
			 </h4> 
			 <a href="#">Conoce mas aqui</a>
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
