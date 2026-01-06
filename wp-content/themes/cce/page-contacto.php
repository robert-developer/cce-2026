<?php
    /*
    * Template Name: contacto
    */
    get_header();
?>
    <main class="contenedor-nosotros"> 
		<div class="banner-nosotros"> 
				<?php 
				$image = get_field('banner_contactos');
				if( !empty( $image ) ): ?>
					<img  class="cce-banner"src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
				<?php endif; ?>
		  <?php 
			$image = get_field('banner_contactos_movil');
			if( !empty( $image ) ): ?>
				<img class="cce-banner-movil" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
			<?php endif; ?>   
			<!--<img src="/wp-conten
			<img src="/wp-content/uploads/2023/10/Capa-1086-1.png">-->
			<div class="container">
			<div class="texto-nosotros"> 
				<h1>
				Estamos para ayudarte.
    ¿Tienes consultas? Comunícate con nosotros.
				</h1>
			</div> 
			</div>
		</div> 






<div class="seccion-contactos-1"> 
   <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h2>Escríbenos y te responderemos a la brevedad.</h2> 
		  <!--<p>Recuerda que si necesitas un CCI puedes escribirnos directamente y obtenerlo en minutos.</p>-->
		  <a href="/obten-tu-cci/">Obtén tu CCI</a>
		 
      </div> 
      <div class="col-md-6">   
		  <?php echo do_shortcode('[contact-form-7 id="d28fe66" title="prueba"]') ?>
        <!--<img src="/wp-content/uploads/2023/10/Grupo-17.png" alt="">--->
      </div>
    </div> 
	<div class="row">
		<div class="col-md-12">
			   <ul>
<li>Las Transferencias Interbancarias por horarios en una misma plaza o ciudad tienen un costo que será asumido por el cliente de la cuenta origen.</li>
<li>El costo depende de cada entidad financiera y puede variar entre S/2 a S/5.</li>
<li>Las transferencias interbancarias inmediatas en una misma plaza o ciudad tienen un costo que será asumido por el cliente de la cuenta origen.</li>
<li>El costo depende de cada entidad financiera y puede variar entre S/4 y S/7.</li>
</ul>
		</div>
	</div>

   <!-- <div class="row"> 
		 <strong>Conoce el procedimiento de
			  afiliación de tu banco o financiera aquí</strong>
       <div class="select">
           <span>Selecciona tu banco o financiera</span> 
           <div class="select-input">
                <select name="" id="">
                <option value="Caja Trujillo">Caja Trujillo</option>
                <option value="Caja huancayo"></option>
          </select> 
            <input type="submit" value="Buscar">
           </div>
       </div>
    </div>
-->
   </div>

</div>
		<!--
<div class="seccion-servicios-2"> 
   <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h3>Tranfsfeernecia inmediastas</h3>
        <p>Las transferencias inmediatas se encuentran disponibles todos los días en horario extendido en la mayoría de entidades financieras.</p>
        <a href="">Conoce la tarifa</a>
      </div> 
      <div class="col-md-6"> 
         <img src="/wp-content/uploads/2023/10/Grupo-17-1.png" alt="">
      </div>
    </div> 
    <div class="row">
      <span class="col-md-12">Comoce la dispoibilidad de cada finncira</span> 
      <div class="col-md-12 input-select"> 
        <span>Selecciona tu banco</span> <select name="" id="">
          <option value="">sdsds</option>
          <option value="">sdsds</option>
        </select>
      </div> 
		 <div class="col-md-12 input-select"> 
        <span>Selecciona tu banco</span> <select name="" id="">
          <option value="">sdsds</option>
          <option value="">sdsds</option>
        </select>
      </div>        
		
    </div> 
	   <div class="row">
		   <div class="col-md-12">  
			   <div class="lista"> 
			  <ul>
<li>Servicio válido desde Diciembre 2020 en adelante.</li>
<li>La información de esta página es referencial, consulta con tu entidad financiera sobre los detalles.</li>
<li>Las entidades financieras que cuentan con el servicio de transferencias interbancarias inmediatas 24x7 son: Alfin Banco, Banbif, Banco de Comercio, Banco Falabella, Banco GNB, Banco Pichincha, BBVA, BCP, Citibank, Interbank, Mibanco, Scotiabank, Crediscotia, Caja Arequipa, Caja Cusco, Caja Ica, Caja Piura, Caja Sullana, Caja Trujillo, Financiera Oh.</li>
<li>Cada entidad financiera gestiona el servicio bajo sus propios términos y condiciones.</li>
<li>Las entidades financieras que no se muestran, no cuentan con el servicio de transferencias interbancarias inmediatas 24x7. Podrás elegir la opción de transferencia interbancaria por horarios que se encuentra disponible en: Alfin Banco, Banbif, Banco de Comercio, BCP, Banco de la Nación, Banco Pichincha, Banco Santander, Bank of China, BCI, Citibank, Interbank, Scotiabank, Banco Falabella, Banco GNB, Banco Ripley, BBVA, ICBC, Mibanco, Crediscotia, Caja Arequipa, Caja Cusco, Caja Huancayo, Caja Ica, Caja Maynas, Caja Metropolitana, Caja Piura, Caja Sullana, Caja Tacna, Caja Trujillo, Caja Raiz, Compartamos Financiera, Financiera Confianza, Financiera Oh, Financiera Qapaq.</li>
</ul>
			   </div>
		   </div>
	   </div>
   </div>
</div>
<div class="seccion-servicios-3"> 
  <div class="container"> 
		<div class="row">
			 <div class="col-md-6"> 
				 <div class="item-transferencias"> 
					 <h4> 
					Transferencias
gratuitas </h4> 
				 <p>Conoce todo lo que debes tener en cuenta para hacer transferencias interbancarias sin pagar comisión:</p>
					<ul>
						
						<li> Este beneficio aplica solo para personas naturales.</li>
						<li>Aplica tanto si se realizan en la misma ciudad o entre cuentas de distintas ciudades a nivel nacional (de Lima a Cusco, por ejemplo).</li>
						<li>Es importante mencionar que esta promoción no aplica para personas jurídicas o empresas en ninguno de los casos.</li>
						<li>Debes revisar las características de la promoción según la entidad financiera desde donde se realizan las transferencias.</li> 
					 </ul>
				 </div>
			</div> 
			<div class="col-md-6">
				<img src=" /wp-content/uploads/2023/10/Grupo-17-2.png">
			</div>
	   </div>
	</div>		
</div>
<div class="secccion-servicios-1"></div>

<ax
-->
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
								<a class="link" href="https://cce.althus.pe/blog/hello-world/"><i class="fa-solid fa-arrow-right-long"></i>Leer más</a>
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
