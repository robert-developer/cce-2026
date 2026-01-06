<?php
    /*
    * Template Name: tutoriales
    */
    get_header();
?>
    <main class="contenedor-nosotros"> 
		<div class="banner-nosotros"> 
			<?php 
				$image = get_field('banner_tutoriales');
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






<div class="seccion-servicios-1 tutoriales"> 
   <div class="container tutoriales-info">
    <div class="row" id="ti">
      <div class="col-md-4">
        <h2><?php the_field( 'titulo_video_1')?><!--¿Cómo realizar un
pago de Transferencias
Interbancarias?X--></h2> 
		  <p><?php the_field('texto_descripcion_video_1')?><!--Te presentamos el paso a paso de como realizar esta operación desde cualquier dispositivo.<-X--></p> 
		 <a href="/multimedia/">Ver tutoriales</a>
      </div> 
      <div class="col-md-8"> 
		  <div class="embed-container">
<?php the_field('video_1')?>
      <!--<iframe width="560" height="315" src="https://www.youtube.com/embed/-DXuTy5z7fg?si=jJlz0WP6OIMcg672" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>--> </div> 
      </div>
    </div> 
	    <div class="row" id="cci" style="display:none"> 
      <div class="col-md-4">
        <h2><?php the_field('titulo_video_2')?><!--Cómo realizar un
pago con Código dea
Cuenta Interbancario?--></h2> 
		  <p><?php the_field('texto_descripcion_video_2')?><!--Te presentamos el paso a paso de como realizar esta operación desde cualquier dispositivo.--></p> 
		  <a href="/multimedia/"> Ver tutoriales</a>
		 
      </div> 
      <div class="col-md-8"> 
		  <div class="embed-container">
 <?php the_field('video_2')?>
       <!--<iframe width="560" height="315" src="https://www.youtube.com/embed/FZcmbqKFPf4?si=D2q0XZ01RTQsV4-l" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>--> </div> 
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
    </div>-->
   </div> 

</div>

<div class="seccion-servicios-3" id="celular"> 
  <div class="container"> 
		<div class="row">
			 <div class="col-md-6"> 
				 <div class="item-transferencias item-info"> 
					 <h4><?php the_field('titulo_transferencias_celular')
						 ?>
					<!--¿Cómo realizar transferencias
de dinero entre entidades
financieras desde el celular?-->
</h4>
					 <?php the_field('descripcion_transferencias_celular')?>
				 <!--<p>Desde ahora puedes enviar, recibir y solicitar dinero entre diferentes Bancos, cajas, financieras, y billeteras (Yape, plin, fpay, Wayki), únicamente usando el número de celular desde la app de la entidad en la que tengas tus productos.</p><ul>
<li>Solo necesitas el número de celular</li>
<li>Sin traslados</li>
<li>Disponible 24/7</li>
<li>Sin retirar efectivo</li>
</ul> -->
					 <a href="https://interoperabilidad.pe/" target="_blank">Conoce más aquí</a>
				 </div>
			</div> 
			<div class="col-md-6">
				<?php 
				$image = get_field('imagen_transferencias_celular');
				if( !empty( $image ) ): ?>
					<img  class="cce-banner"src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
				<?php endif; ?>
				<img src=" /wp-content/uploads/2023/10/Capa-583.png">
			</div>
	   </div>
	</div>		
</div>
<div class="seccion-tutoriales" id="banco"> 
	<div class="container"> 
		
<?php echo do_shortcode('[alphabetical_post_select]')?>

					
					
			
		</div>
		
</div>
<div class="seccion-servicios-2" id="qr"> 
   <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h3>¿Cómo realizar
pagos con QR?</h3>
        <p>Los códigos QR se utilizan  para los pagos con billeteras. Funcionan como un método de pago seguro y sencillo, capaces de efectuar una compra sin necesidad de una tarjeta o efectivo.
Consulta aquí las entidades que tienen habilitado el pago con QR.</p>
        <!--<a href="">Conoce la tarifa</a>--> 
		  <div id="pagosqr" class="owl-carousel owl-theme">
				<div class="item"><img src="/wp-content/uploads/2023/10/logo-6.jpg "/><h4>1</h4></div>
				<div class="item"><img src="/wp-content/uploads/2023/10/logo-1.png  "/><h4>2</h4></div>
				<div class="item"><img src="/wp-content/uploads/2023/10/logo-2.jpg"/><h4>3</h4></div>
				<div class="item"><img src="/wp-content/uploads/2023/10/logo-3.png  "/><h4>4</h4></div>
				<div class="item"><img src="/wp-content/uploads/2023/10/logo-4.png  "/><h4>5</h4></div>
				<div class="item"><img src="/wp-content/uploads/2023/10/logo-5.jpg  "/><h4>6</h4></div>
				<div class="item"><img src="/wp-content/uploads/2023/10/logo-1.png  "/><h4>7</h4></div>
				<!--<div class="item"><h4>8</h4></div>
				<div class="item"><h4>9</h4></div>
				<div class="item"><h4>10</h4></div>
				<div class="item"><h4>11</h4></div>
				<div class="item"><h4>12</h4></div> -->
			</div>
      </div> 
      <div class="col-md-6"> 
         <img src="/wp-content/uploads/2023/10/Niveles-607.png" alt="">
      </div>
    </div> 
   <!--<div class="row">
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
		
    </div> -->
	 <!--  <div class="row">
		   <div class="col-md-12">  
			   <div class="lista"> 
			  <ul>
<li>Servicio válido desde Diciembre 2020 en adelante.</li>
<li>La información de esta página es referencial, consulta con tu entidad financiera sobre los detalles.</li>
<li>Las entidades financieras que cuentan con el servicio de transferencias interbancarias inmediatas 24x7 son: Alfin Banco, Banbif, Banco de Comercio, Banco Falabella, Banco GNB, Banco Pichincha, BBVA, BCP, Citibank, Interbank, Mibanco, Scotiabank, Crediscotia, Caja Arequipa, Caja Cusco, Caja Ica, Caja Piura, Caja Sullana, Caja Trujillo, Financiera Oh.</li>
<li>Cada entidad financiera gestiona el servicio bajo sus propios términos y condiciones.</li>
<li>Las entidades financieras que no se muestran, no cuentan con el servicio de transferencias interbancarias inmediatas 24x7. Podrás elegir la opción de transferencia interbancaria por horarios que se encuentra disponible en: Alfin Banco, Banbif, Banco de Comercio, BCP, Banco de la Nación, Banco Pichincha, Banco Santander, Bank of China, BCI, Citibank, Interbank, Scotiabank, Banco Falabella, Banco GNB, Banco Ripley, BBVA, ICBC, Mibanco, Crediscotia, Caja Arequipa, Caja Cusco, Caja Huancayo, Caja Ica, Caja Maynas, Caja Metropolitana, Caja Piura, Caja Sullana, Caja Tacna, Caja Trujillo, Caja Raiz, Compartamos Financiera, Financiera Confianza, Financiera Oh, Financiera Qapaq.</li>
</ul>
<!-- /wp:paragraph 
			   </div>
		   </div>
	   </div> 
-->
   </div>
</div> 
<div class="seccion-servicios-2 servicios-2-1" id="tarjeta"> 
   <div class="container">
    <div class="row">
      <div class="col-md-5">
        <h3>¿Cómo realizar el 
pago de una tarjeta de crédito desde otra entidad financiera?</h3>
        <p>Con este servicio puedes pagar cualquier tarjeta de crédito de otros bancos desde tu cuenta.</p>
        <a href="/multimedia/">Conoce la tarifa</a>
      </div> 
      <div class="col-md-7"> 
         <img src="/wp-content/uploads/2023/10/Capa-630.png" alt="">
      </div>
    </div> 
	   <div class="row lista-1">
		    <div class="col-md-6">
				<p>
					Conoce los requisitos aquí:<br>
Para hacerlo necesitas: 
				  </p>					<ul>
				<li>El número de la tarjeta de crédito.</li>
				<li>El nombre del banco emisor de la tarjeta.</li>
				<li>La cantidad que quieres pagar.</li>
				</ul>


		
		   </div> 
		   <div class="col-md-6"> 
			   <p>
				Canales: 
			   </p>
			   <ul>
				   <li>Ventanilla.</li>
				   <li>Banca por internet. </li></ul>
		   </div>
	   </div>
   <!--<div class="row">
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
		
    </div> -->
	 <!--  <div class="row">
		   <div class="col-md-12">  
			   <div class="lista"> 
			  <ul>
<li>Servicio válido desde Diciembre 2020 en adelante.</li>
<li>La información de esta página es referencial, consulta con tu entidad financiera sobre los detalles.</li>
<li>Las entidades financieras que cuentan con el servicio de transferencias interbancarias inmediatas 24x7 son: Alfin Banco, Banbif, Banco de Comercio, Banco Falabella, Banco GNB, Banco Pichincha, BBVA, BCP, Citibank, Interbank, Mibanco, Scotiabank, Crediscotia, Caja Arequipa, Caja Cusco, Caja Ica, Caja Piura, Caja Sullana, Caja Trujillo, Financiera Oh.</li>
<li>Cada entidad financiera gestiona el servicio bajo sus propios términos y condiciones.</li>
<li>Las entidades financieras que no se muestran, no cuentan con el servicio de transferencias interbancarias inmediatas 24x7. Podrás elegir la opción de transferencia interbancaria por horarios que se encuentra disponible en: Alfin Banco, Banbif, Banco de Comercio, BCP, Banco de la Nación, Banco Pichincha, Banco Santander, Bank of China, BCI, Citibank, Interbank, Scotiabank, Banco Falabella, Banco GNB, Banco Ripley, BBVA, ICBC, Mibanco, Crediscotia, Caja Arequipa, Caja Cusco, Caja Huancayo, Caja Ica, Caja Maynas, Caja Metropolitana, Caja Piura, Caja Sullana, Caja Tacna, Caja Trujillo, Caja Raiz, Compartamos Financiera, Financiera Confianza, Financiera Oh, Financiera Qapaq.</li>
</ul>
<!-- /wp:paragraph 
			   </div>
		   </div>
	   </div> 
-->
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
		<div class="row btn-blog">
						<div class="col-md-12">
							<a href="/blog">Ver todas las noticias</a>
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

<!--
<div id="contenedorImagen">
  <img id="imagenMostrada" src="" alt="Imagen">
</div>-->

<script>

// Obtiene los elementos select e imagen
const select = document.getElementById('seleccionarImagen');
const imagen = document.getElementById('imagenMostrada');

// Define un objeto que mapea las opciones a las rutas de las imágenes
const imagenes = {
  imagen1: 'https://cce.althus.pe/wp-content/uploads/2023/10/banbif.gif',
  imagen2: 'https://cce.althus.pe/wp-content/uploads/2023/10/banco_comercio.gif',
  imagen3: 'https://cce.althus.pe/wp-content/uploads/2023/10/banco_nacion.gif', 
  imagen4: 'https://cce.althus.pe/wp-content/uploads/2023/10/banco_falabella.gif', 
  imagen5: 'https://cce.althus.pe/wp-content/uploads/2023/10/banco_gnb.gif', 
  imagen6: 'https://cce.althus.pe/wp-content/uploads/2023/10/Tutorial-Web.gif', 
  imagen7: 'https://cce.althus.pe/wp-content/uploads/2023/10/bcp.gif', 
  imagen8: 'https://cce.althus.pe/wp-content/uploads/2023/10/caja_cusco.gif',
  imagen9: 'https://cce.althus.pe/wp-content/uploads/2023/10/caja_sullana.gif',
  imagen10: 'https://cce.althus.pe/wp-content/uploads/2023/10/caja_trujillo.gif', 
   imagen11: 'https://cce.althus.pe/wp-content/uploads/2023/10/crediscotia.gif', 
	  imagen12: 'https://cce.althus.pe/wp-content/uploads/2023/10/interbank.gif', 
	  imagen13: 'https://cce.althus.pe/wp-content/uploads/2023/10/scotiabank.gif', 
	  imagen99: 'https://cce.althus.pe/wp-content/uploads/2023/10/banco_nacion.gif', 

};

// Agrega un event listener al select
select.addEventListener('change', () => {
  const seleccion = select.value; // Obtiene el valor de la opción seleccionada
  const rutaImagen = imagenes[seleccion]; // Obtiene la ruta de la imagen correspondiente
  imagen.src = rutaImagen; // Actualiza la fuente de la imagen
});

// Carga la primera imagen por defecto al cargar la página
const primeraOpcion = select.querySelector('option:first-child').value;
imagen.src = imagenes[primeraOpcion];
</script>
<?php
    get_footer();
?>
