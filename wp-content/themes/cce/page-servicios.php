<?php
    /*
    * Template Name: servicios
    */
    get_header(); 
?>
<main class="contenedor-nosotros"> 
	<div class="banner-nosotros"> 
		<?php 
			$image = get_field('banner_servicio');
				if( !empty( $image ) ): ?>
					<img  class="cce-banner"src="<?php echo esc_url($image['url']); ?>" alt="<?php echo 		                                  esc_attr($image['alt']); ?>" />
				<?php endif; ?>
		 <?php 
			$image = get_field('banner_servicio_movil');
			if( !empty( $image ) ): ?>
				<img class="cce-banner-movil" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo 	                                     esc_attr($image['alt']); ?>" /> 
				<?php endif; ?>
		<div class="container">
			<div class="texto-nosotros"> 
				<h1 data-aos="fade-right"> 
							<?php the_field('texto_banner')?>
				</h1>
			</div> 
		</div>
</div> 
<div class="seccion-servicios-1" id="por-celular"> 
   <div class="container">
    <div class="row">
      <div class="col-md-6" data-aos="fade-right">
        <h2><!--Tranferencias por celular--><?php the_field('titulo_transferencias_por_celular')?></h2> 
		  <p><?php the_field('descripcion_transferencias_por_celular')?><!--Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto lorem Ipsum ha sido el texto de relleno estándar.----></p> 
		 
      </div> 
      <div class="col-md-6" data-aos="fade-left"> 
		  <?php 
				$image = get_field('img_transferencias_por_celular');
				if( !empty( $image ) ): ?>
					<img  class="cce-banner"src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" /> 
		  	<?php endif; ?>
		  
        <!--<img src="/wp-content/uploads/2023/10/Grupo-17.png" alt="">-->
      </div>
    </div> 
    <div class="row"> 
		<div class="col-md-12">
			
	
		 <strong>Conoce aquí el procedimiento de afiliación de tu banco o financiera.</strong>	</div> 
		
		
		<?php echo do_shortcode('[alphabetical_post_select_with_url]')?>
<!--
       <div class="select">
           <span>Selecciona tu banco o financiera</span> 
           <div class="select-input"> 
			   <div class="select-input-item">
                <select name="" id="selectOpciones">
                <option value="http://www.cmac-cusco.com.pe/PAGOQR">Caja Cusco</option> 
					<option value="https://cutt.ly/QwllZg07	">Casa Sullana</option>

					<option value="https://www.cajatrujillo.com.pe/portalnew/informacion-interoperabilidad.html">Caja Trujillo</option>  	

					<option value="https://www.mibanco.com.pe/categoria/app-mibanco-movil-primeravez">Mi Banco</option>  
					<option value="https://interbank.pe/canales-digitales/plin?rfid=menu:second-level:image:link#!tab-como-me-afilio	">Interbank</option>
			  </select> 	

				  <i class="fa fa-angle-down"></i>
			  </div>
            <input id="btnRedirigir" type="submit" value="Buscar">
           </div>
       </div>-->
    </div>
   </div>

</div>
<div class="seccion-servicios-2" id="inmediatas"> 
   <div class="container">
    <div class="row">
      <div class="col-md-6" data-aos="fade-right">
        <h3><!--Tranferencias inmediatas--><?php the_field('titulo_transferencias_inmediatas')?></h3>
        <p><?php the_field('descripcion_transferencias_inmediatas') ?><!--Las transferencias inmediatas se encuentran disponibles todos los días en horario extendido en la mayoría de entidades financ--></p>
        <a class="btn-seccion-inmedidatas" href="<?php the_field('enlace_boton_transferencias_inmediatas')?>" id="btnInmediatas"class="scroll-to-section">Conoce la tarifa</a>
      </div> 
      <div class="col-md-6" data-aos="fade-left"> 
		    <?php 
				$image = get_field('img_transferencias_inmediatas');
				if( !empty( $image ) ): ?>
					<img  class="" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" /> 
		  	<?php endif; ?>
        <!-- <img src="/wp-content/uploads/2023/10/Grupo-17-1.png" alt="">-->
      </div>
    </div> 
    <div class="row-selects">
      <span class="col-md-12">Conoce la disponibilidad de cada financiera</span> 
		
		<?php echo do_shortcode('[custom_post_type_selects]')?>

		<div class="content-select antiguo">
		  <div class="col-md-12 input-select"> 
			<span>Selecciona tu Banco</span>
				 <div class="select-input-item">
			 <select name="" id="selectOpciones1">
				  <option>Elige una opción
	</option>	  <option value="opcion12">AlFin Banco</option>
				  <option value="opcion13">Banco Ripley</option>
			  <option value="opcion1">Banbif</option>
			  <option value="opcion2">Banco de Comercio</option> 
			   <option value="opcion3">Banco Falabella</option> 
				<option value="opcion4">Banco GNB</option>
				<option value="opcion5">Banco Pichincha</option>
				<option value="opcion6">BBVA</option>
				<option value="opcion7">BCP</option>  
			    <option value="opcion8">City Bank</option>
				<option value="opcion9">Interbank</option>
				  <option value="opcion10">Mi Banco</option>
				  <option value="opcion11">Scotiabank</option>
			
				  <option value=""></option>
			</select> 
					 <i class="fa fa-angle-right"></i>
			  </div> 	
		
      </div> 
			 <div id="contenedorInfo" class="antiguo"> 
				 <div class="row">
					 <div class="col-md-8">
						 <div class="imagen">
							 <img id="imagen" src="" alt="Imagen">
						 </div> 
						 <div class="textos"> 
						 		<p id="mensaje"></p>
						 </div>
						 
					 </div> 
					 <div class="col-md-4">
						<p id="horarios1"></p> 
						 <p id="horarios">
							 
						 </p>
					 </div>
				 </div>
				
				
			</div> 
		</div>
			<div class="content-select content-select-1 antiguo">
		  <div class="col-md-12 input-select"> 
			<span>Selecciona tu Caja o Financiera</span>
				 <div class="select-input-item">
			  <select name="" id="selectOpciones2">
				  <option>Elige una opción
	</option>
			  <option value="opcion1">Caja Arequipa</option>
			  <option value="opcion2">Caja Cusco</option> 
			   <option value="opcion3">Caja Ica</option> 
				<option value="opcion4">Caja Piura</option>
				<option value="opcion5">Caja Sullana</option>
				<option value="opcion6">Caja Trujillo</option>
				<option value="opcion7">Caja Huancayo</option>  
			    <option value="opcion8">Crediscotia</option> 
				<option value="opcion9">Compartamos Financiera</option>
				 
				<option value="opcion10">Financiera oh</option>
				  <option value="opcion11">Financiera Efectiva</option>
				 <!-- <option value="opcion12">AlFin Banco</option>
				  <option value="opcion13">Banco Ripley</option>
				  <option value=""></option><<zx..x--x-x-->
			</select> 
					 <i class="fa fa-angle-right"></i>
			  </div> 	
		
      </div> 
			 <div id="contenedorInfo1" class="antiguo"> 
				 <div class="row">
					 <div class="col-md-8">
						 <div class="imagen">
							 <img id="imagen1" src="" alt="Imagen">
						 </div> 
						 <div class="textos"> 
						 		<p id="mensaje1"></p>
						 </div>
						 
					 </div> 
					 <div class="col-md-4">
						<p id="horarios2"></p> 
						 <p id="horarios3">
							 
						 </p>
					 </div>
				 </div>
				
				
			</div> 
		</div>
		
    </div> 
	   <div class="row">
		   <div class="col-md-12">  
			   <div class="lista"> 
				   <?php the_field('texto_informativo_conoce_la_disponibilidad_de_cada_financiera')?>
			<!--  <ul>
<li>Servicio válido desde Diciembre 2020 en adelante.</li>
<li>La información de esta página es referencial, consulta con tu entidad financiera sobre los detalles.</li>
<li>Las entidades financieras que cuentan con el servicio de transferencias interbancarias inmediatas 24x7 son: Alfin Banco, Banbif, Banco de Comercio, Banco Falabella, Banco GNB, Banco Pichincha, BBVA, BCP, Citibank, Interbank, Mibanco, Scotiabank, Crediscotia, Caja Arequipa, Caja Cusco, Caja Ica, Caja Piura, Caja Sullana, Caja Trujillo, Financiera Oh.</li>
<li>Cada entidad financiera gestiona el servicio bajo sus propios términos y condiciones.</li>
<li>Las entidades financieras que no se muestran, no cuentan con el servicio de transferencias interbancarias inmediatas 24x7. Podrás elegir la opción de transferencia interbancaria por horarios que se encuentra disponible en: Alfin Banco, Banbif, Banco de Comercio, BCP, Banco de la Nación, Banco Pichincha, Banco Santander, Bank of China, BCI, Citibank, Interbank, Scotiabank, Banco Falabella, Banco GNB, Banco Ripley, BBVA, ICBC, Mibanco, Crediscotia, Caja Arequipa, Caja Cusco, Caja Huancayo, Caja Ica, Caja Maynas, Caja Metropolitana, Caja Piura, Caja Sullana, Caja Tacna, Caja Trujillo, Caja Raiz, Compartamos Financiera, Financiera Confianza, Financiera Oh, Financiera Qapaq.</li>
</ul>
<!-- /wp:paragraph -->
			   </div>
		   </div>
	   </div>
   </div>
</div>
<div class="seccion-servicios-3" id="gratuitas"> 
  <div class="container"> 
		<div class="row">
			 <div class="col-md-6" data-aos="fade-right"> 
				 <div class="item-transferencias"> 
					 <h4> <?php the_field('titulo_transferencias_gratuitas')?>
					<!--Transferencias
gratuitas--> </h4> 
				 <p> <?php the_field('descripcion_transferencias_gratuitas')?><!--Conoce todo lo que debes tener en cuenta para hacer transferencias interbancarias sin pagar comisión:--></p>
				<?php  the_field('lista_transferencias_gratuitas')?>
				<!--<ul>
						
						<li> Este beneficio aplica solo para personas naturales.</li>
						<li>Aplica tanto si se realizan en la misma ciudad o entre cuentas de distintas ciudades a nivel nacional (de Lima a Cusco, por ejemplo).</li>
						<li>Es importante mencionar que esta promoción no aplica para personas jurídicas o empresas en ninguno de los casos.</li>
						<li>Debes revisar las características de la promoción según la entidad financiera desde donde se realizan las transferencias.</li> 
					 </ul> -->
				 </div>
			</div> 
			<div class="col-md-6" data-aos="fade-left">
				 <?php 
				$image = get_field('img_transferencias_gratuitas');
				if( !empty( $image ) ): ?>
					<img  class="" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" /> 
		  	<?php endif; ?>
				<!--<img src=" /wp-content/uploads/2023/10/Grupo-17-2.png">-->
			</div>
	   </div> 
	  <div class="row"> 
		 <div class="col-md-12">
		   	<p class="textos">
			  Elige un tipo de transferencia interbancaria y conoce las entidades financieras que cuentan con este beneficio.
			 </p>
		  </div>
		  <div class="col-md-12 item1">
			  <div class=" financieras-textos">
			<!--<p><?php the_field('texto_transferencias_inmediatas')?>
					Aquí las entidades financieras que cuentan con el beneficio
en la opción de transferencias interbancarias diferidas o por horarios.
				  </p> -->
				  <a href="#gratuitas" class="btn-conoce-financiera-diferidas">Transferencias interbancarias
<strong>gratuitas.</strong></a>
			  </div> 
			    <div class=" financieras-textos">
				<!--<p><?php the_field('texto_transferencias_diferidas') ?>
					Además, también cuentan con el beneficio en la opción de tra9nferencia
interbancaria inmediata las siguientes entidades financieras:
				  </p>-->
				  <a href="#diferidas" class="btn-conoce-financiera-opcion-inmediata" href="" id="">Transferencias interbancarias <strong>por horarios.</strong></a>
			  </div>
			  
			  
		  </div> 
		  <div class="col-md-12 item2">
			  <p><?php  the_field('texto_promociones')?>
				<!--Promoción válida desde el 06/09/21 en adelante.-->
			  </p>
		  </div>
	  </div>
	</div>		
</div>
<div class="secccion-servicios-1" id="diferidas"></div> 
		<div class="seccion-servicios-3 servicios-4"> 
  <div class="container"> 
		<div class="row">
			 <div class="col-md-5" data-aos="fade-right"> 
				 <div class="item-transferencias"> 
					 <h4> 
					<!--Transferencias por horariosxx--><?php  the_field('titulo_transferencias_horarios')?></h4> 
					 <?php the_field('lista_transferencias_horarios')?>
				 <!-- <p>El dinero es recibido en la cuenta de destino luego de unas horas.</p>
					wp:paragraph
					 <strong>Funcionan por Horarios</strong>
<ul>
<li>Si la haces hasta las 11:30 a.m. será recibida el mismo día a partir de las 02:00 p.m.</li>
<li>Si la haces una hasta las 02:00 p.m. será recibida el mismo día a partir de las 05:15 p.m.</li>
<li>Si la haces hasta las 07:00 p.m. será recibida a partir de las 10:00 a.m. del siguiente día útil.</li>
</ul>
<!-- /wp:paragraph 
					 <p>
						 El importe máximo que puedes enviar es S/.310,000 o US$60,000.
					 </p>--> 
					 <a class="btn-transferencia-horario"href="<?php the_field('enlace_transferencias_horarios')?>" class="scroll-to-section">Conoce la tarifa</a>
				 </div>
			</div> 
			<div class="col-md-7" data-aos="fade-left"> 
				 <?php 
				$image = get_field('img_transferencias_horarios');
				if( !empty( $image ) ): ?>
					<img  class="" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" /> 
		  	<?php endif; ?>
				<!--<img src=" /wp-co
				<img src=" /wp-content/uploads/2023/10/Grupo-17-4.png"> -->
			</div>
	   </div>
	<!--  <div class="row">
		  <div class="col-md-12">
			  <div class=" financieras-textos">
				<p>
					Aquí las entidades financieras que cuentan con el beneficio
en la opción de transferencias interbancarias diferidas o por horarios.
				  </p> 
				  <a href="">Conocelas aqui</a>
			  </div> 
			    <div class=" financieras-textos">
				<p>
					Aquí las entidades financieras que cuentan con el beneficio
en la opción de transferencias interbancarias diferidas o por horarios.
				  </p> 
				  <a href="">Conocelas aqui</a>
			  </div>
			  
			  
		  </div> 
		  <div class="col-md-12">
			  <p>
				Promoción válida desde el 06/09/21 en adelante.
			  </p>
		  </div>
	  </div> 
-->
	</div>		
</div> 
<div class="seccion-servicios-6">
	<div class="container">
		<h5>Transferencias por horarios</h5>
	</div>
</div>
<div class="seccion-servicios-5"> 
	<div class="container"> 
		<div class="row">
	   <div class="col-md-3">
			 <img src="/wp-content/uploads/2023/10/sol.png">
			 <p> <?php the_field('texto__horarios_1'); ?>
				<!-- Las transferencias que realices hasta las 12:00 horas, serán recibidas el mismo día hasta las 14:45 horas.-->
			 </p>
		</div> 
		 <div class="col-md-3">
			 <img src="/wp-content/uploads/2023/10/soleado.png">
			 <p> <?php the_field('texto__horarios_2'); ?>
				<!-- Las transferencias que realices hasta las 14:30 horas, serán recibidas el mismo día hasta las 16:45 horas.-->
			 </p>
		</div>
		 <div class="col-md-3">
			 <img src="/wp-content/uploads/2023/10/noche.png">
			 <p> <?php the_field('texto__horarios_3'); ?>
				<!-- Las transferencias que realices luego de las 14:30 horas, serán recibidas el siguiente día útil hasta las 09:30 horas.-->
			 </p>
		</div> <div class="col-md-3">
			 <img src="/wp-content/uploads/2023/10/peligro-1.png">
			 <p> <?php the_field('texto__horarios_4'); ?>
				 <!--Los sábados, domingos y feriados el sistema no está operativo, toda operación se procesará recién el lunes por la mañana. Si el lunes es feriado la operación se realizará al día siguiente útil.-->
			 </p>
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
		<div class="row btn-blog">
						<div class="col-md-12">
							<a href="/blog" class="btn-ver-noticias">Ver todas las noticias</a>
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



<script>
document.addEventListener("DOMContentLoaded", function() {
    // Obtener el select y el botón
    var select = document.getElementById("selectOpciones");
    var button = document.getElementById("btnRedirigir");

    // Agregar un manejador de eventos al botón
    button.addEventListener("click", function() {
        // Obtener el valor seleccionado en el select
        var selectedOption = select.value;

        // Redirigir a la URL seleccionada en una nueva pestaña
        if (selectedOption) {
            window.open(selectedOption, "_blank");
        }
    });
});
</script>

<script>
            
document.addEventListener("DOMContentLoaded", function() {
    var select = document.getElementById("selectOpciones1");
    var imagen = document.getElementById("imagen");
    var horarios1 = document.getElementById("horarios1"); 
	var horarios = document.getElementById("horarios");
    var mensaje = document.getElementById("mensaje");
    var contenedorInfo = document.getElementById("contenedorInfo");

    var opcionesInfo = {
        "opcion1": {
            imagenSrc: "/wp-content/uploads/2023/10/banbif-2.png",
            mensajeText: "Puedes transferir de forma inmediata todos los días <strong>excepto:</strong>",
            horarios1Texto: "De lunes a viernes entre:<strong>22:00 p.m - 23:00 p.m.</strong>", 
			horariosText: "Fines de semana y feriados entre: <strong>22.00 p.m  - 23:00 p.m</strong>"
        },
        "opcion2": {
            imagenSrc: "/wp-content/uploads/2023/10/banco-de-comercio.png",
            mensajeText: "Puedes transferir de forma inmediata todos los días <strong>excepto:</strong>", 
			horarios1Texto: "De lunes a viernes <strong>servicio las 24 horas</strong>", 
			horariosText: "Fines de semana y feriados entre: <strong>servicio los 24 horas</strong>"
			
        },
        "opcion3": {
            imagenSrc: "/wp-content/uploads/2023/10/banco-falabella.png",
            mensajeText: "Puedes transferir de forma inmediata todos los días <strong>excepto:</strong>",
            horarios1Texto: "De lunes a viernes entre:<strong>23:00 p.m - 5:30 a.m.</strong>", 
			horariosText: "Fines de semana y feriados entre: <strong>23.00 p.m  - 5:30 a.m</strong>"
           
        }, 
		 "opcion4": {
            imagenSrc: "/wp-content/uploads/2023/10/banco-comercio.png",
            mensajeText: "Puedes transferir de forma inmediata todos los días <strong>excepto:</strong>",
            horarios1Texto: "De lunes a viernes entre:<strong>servicio las 24 horas</strong>", 
			horariosText: "Fines de semana y feriados entre: <strong>servicio las 24 horas</strong>"
           
        }, 
		 "opcion5": {
            imagenSrc: "/wp-content/uploads/2023/10/pichincha-1.png", 
            mensajeText: "Puedes transferir de forma inmediata todos los días <strong>excepto:</strong>",
            horarios1Texto: "De lunes a viernes entre:<strong>22:00 p.m - 5:00 a.m.</strong>", 
			horariosText: "Fines de semana y feriados entre: <strong>22.00 p.m  - 5:00 a.m</strong>"
           
        }, 
		 "opcion6": {
            imagenSrc: "/wp-content/uploads/2023/10/bancobbva.png",
            mensajeText: "Puedes transferir de forma inmediata todos los días <strong>excepto:</strong>",
            horarios1Texto: "De lunes a viernes entre:<strong>21:40 p.m - 20.00 p.m.</strong>", 
			horariosText: "Fines de semana y feriados entre: <strong>servicio las 24 horas</strong>"
           
        }, 
		 "opcion7": {
            imagenSrc: "/wp-content/uploads/2023/10/banco-1.png",
            mensajeText: "Puedes transferir de forma inmediata todos los días <strong>excepto:</strong>",
            horarios1Texto: "De lunes a viernes entre:<strong>8:45 p.m - 9:00 p.m.</strong><strong>2:00 a.m - 3:00 a.m.</strong>", 
			horariosText: "Fines de semana y feriados entre: <strong>Domingo</strong><strong>8:45 p.m - 9:00 p.m.</strong>   <strong>Sabado</strong><strong>2:00 a.m - 3:00 a.m.</strong>"
           
        }, 
		 "opcion8": {
            imagenSrc: "/wp-content/uploads/2023/10/bancoComercio.jpg",
            mensajeText: "Puedes transferir de forma inmediata todos los días <strong>excepto:</strong>",
            horarios1Texto: "De lunes a viernes entre:<strong> 18:00 p.m - 8:00 a.m.</strong>", 
			horariosText: "Fines de semana y feriados entre: <strong>No disponible </strong>"
           
        }, 
		 "opcion9": {
            imagenSrc: "/wp-content/uploads/2023/10/bancoComercio-1.png",
            mensajeText: "Puedes transferir de forma inmediata todos los días <strong>excepto:</strong>",
            horarios1Texto: "De lunes a viernes entre:<strong> 12:00 a.m - 1:00 a.m.</strong>", 
			horariosText: "Fines de semana y feriados entre: <strong>servicio las 24 horas </strong>"
           
        }, 
		 "opcion10": {
            imagenSrc: "/wp-content/uploads/2023/10/bancoComercio-1.jpg",
            mensajeText: "Puedes transferir de forma inmediata todos los días <strong>excepto:</strong>",
            horarios1Texto: "De lunes a viernes entre:<strong> 20:30 p.m - 6:00 a.m.</strong>", 
			horariosText: "Fines de semana y feriados entre: <strong>No disponible </strong>"
           
        }, 
		 "opcion11": {
            imagenSrc: "/wp-content/uploads/2023/10/bancoComercio-3.png",
            mensajeText: "Puedes transferir de forma inmediata todos los días <strong>excepto:</strong>",
            horarios1Texto: "De lunes a viernes entre:<strong> 15:30 p.m - 16:05 p.m.</strong>", 
			horariosText: "Fines de semana y feriados entre: <strong>15:30 p.m - 16:05 p.m. </strong>"
           
        }, 
		 "opcion12": {
            imagenSrc: "/wp-content/uploads/2023/10/bancoComercio-2.png",
            mensajeText: "Puedes transferir de forma inmediata todos los días <strong>excepto:</strong>",
            horarios1Texto: "De lunes a viernes entre:<strong>servicio las 24 horas.</strong>", 
			horariosText: "Fines de semana y feriados entre: <strong>servicio las 24 horas</strong>"
           
        }, 
		 "opcion13": {
            imagenSrc: "/wp-content/uploads/2023/10/bancoComercio-5.png",
            mensajeText: "Puedes transferir de forma inmediata todos los días <strong>excepto:</strong>",
            horarios1Texto: "De lunes a viernes entre:<strong>servicio las 24 horas.</strong>", 
			horariosText: "Fines de semana y feriados entre: <strong>servicio las 24 horas</strong>"
           
        },
		
    };

    select.addEventListener("change", function() {
        var opcionSeleccionada = select.value;
        if (opcionSeleccionada && opcionesInfo[opcionSeleccionada]) {
            var info = opcionesInfo[opcionSeleccionada];
            imagen.src = info.imagenSrc;
            mensaje.innerHTML = info.mensajeText; 
			horarios1.innerHTML = info.horarios1Texto; 
			horarios.innerHTML = info.horariosText;
			
			
			// Usar innerHTML para HTML

            contenedorInfo.style.display = "block";
        } else {
            contenedorInfo.style.display = "none";
        }
    });
});
</script> 




<script>
            
document.addEventListener("DOMContentLoaded", function() {
    var select = document.getElementById("selectOpciones2");
    var imagen = document.getElementById("imagen1");
    var horarios1 = document.getElementById("horarios2"); 
	var horarios = document.getElementById("horarios3");
    var mensaje = document.getElementById("mensaje1");
    var contenedorInfo = document.getElementById("contenedorInfo1");

    var opcionesInfo = {
        "opcion1": {
            imagenSrc: "/wp-content/uploads/2023/10/bancoComercio-6.png",
            mensajeText: "Puedes transferir de forma inmediata todos los días <strong>excepto:</strong>",
            horarios1Texto: "De lunes a viernes entre:<strong>00:00 a.m - 8:00 a.m</strong>", 
			horariosText: "Fines de semana y feriados entre: <strong>00:00 a.m - 8:00 a.m. </strong>"
        },
        "opcion2": {
            imagenSrc: "/wp-content/uploads/2023/10/bancoComercio-7.png",
            mensajeText: "Puedes transferir de forma inmediata todos los días <strong>excepto:</strong>", 
			horarios1Texto: "De lunes a viernes <strong>23:00 p.m. - 05:00 a.m.</strong>", 
			horariosText: "Fines de semana y feriados entre: <strong>23:00 p.m. - 05:00 a.m.</strong>"
			
        },
        "opcion3": {
            imagenSrc: "/wp-content/uploads/2023/10/bancoComercio-9.png",
            mensajeText: "Puedes transferir de forma inmediata todos los días <strong>excepto:</strong>",
            horarios1Texto: "De lunes a viernes entre:<strong>18:00 p.m. - 08:59 a.m.</strong>", 
			horariosText: "Fines de semana y feriados entre: <strong>Domingos</strong><strong>13:00 p.m. - 08:59 a.m.</strong>"
           
        }, 
		 "opcion4": {
            imagenSrc: "/wp-content/uploads/2023/10/bancoComercio-8-1-1.png",
            mensajeText: "Puedes transferir de forma inmediata todos los días <strong>excepto:</strong>",
            horarios1Texto: "De lunes a viernes entre:<strong>00:00 a.m. - 00:30 a.m.</strong><strong>  04:00 a.m. - 4:30 a.m.</strong>", 
			horariosText: "Fines de semana y feriados entre: <strong>  6:00 a.m. - 6:30 a.m</strong>"
           
        }, 
		 "opcion5": {
            imagenSrc: "/wp-content/uploads/2023/10/bancoComercio-8-2.png", 
            mensajeText: "Puedes transferir de forma inmediata todos los días <strong>excepto:</strong>",
            horarios1Texto: "De lunes a viernes entre:<strong>servicio las 24 horas</strong>", 
			horariosText: "Fines de semana y feriados entre: <strong>servicio las 24 horas</strong>"
           
        }, 
		 "opcion6": {
            imagenSrc: "/wp-content/uploads/2023/10/bancoComercio-8-3.png",
            mensajeText: "Puedes transferir de forma inmediata todos los días <strong>excepto:</strong>",
            horarios1Texto: "De lunes a viernes entre:<strong>16:00 p.m - 16.30 p.m.</strong><strong>20:00 p.m. - 00:00 a.m.</strong>", 
			horariosText: "Fines de semana y feriados entre: <strong>20:00 a.m - 00:00 a.m.</strong>"
           
        }, 
		 "opcion7": {
            imagenSrc: "/wp-content/uploads/2023/10/bancoComercio-8.png",
            mensajeText: "Puedes transferir de forma inmediata todos los días <strong>excepto:</strong>",
            horarios1Texto: "De lunes a viernes entre:<strong>00:00 p.m - 02:00 a.m.</strong>", 
			horariosText: "Fines de semana y feriados entre: <strong>No disponible</strong>"
           
        }, 
		 "opcion8": {
            imagenSrc: "/wp-content/uploads/2023/10/bancoComercio-8-4.png",
            mensajeText: "Puedes transferir de forma inmediata todos los días <strong>excepto:</strong>",
            horarios1Texto: "De lunes a viernes entre:<strong>15:35 p.m. - 16:05  p.m.</strong><strong>21:00 p.m - 04:30 p.m.</strong>", 
			horariosText: "Fines de semana y feriados entre: <strong>No disponible </strong>"
          
		}, 
		 "opcion9": {
            imagenSrc: "https://www.transferenciasinterbancarias.pe/wp-content/uploads/2024/03/Proyecto-nuevo-7.jpg",
            mensajeText: "Puedes transferir de forma inmediata todos los días <strong>excepto:</strong>",
            horarios1Texto: "De lunes a viernes entre:<strong>  10:00 p.m. - 6:00 a.m.</strong>", 
			horariosText: "Fines de semana y feriados entre: <strong> 10:00 p.m. - 6:00 a.m. </strong>"
           
        }, 
		 "opcion10": {
            imagenSrc: "/wp-content/uploads/2023/10/bancoComercio-8-5.png",
            mensajeText: "Puedes transferir de forma inmediata todos los días <strong>excepto:</strong>",
            horarios1Texto: "De lunes a viernes entre:<strong>servicio las 24 horas</strong>", 
			horariosText: "Fines de semana y feriados entre: <strong>servicio las 24 horas </strong>"
           
        }, 
		 "opcion11": {
            imagenSrc: "/wp-content/uploads/2024/05/Logo-Efectiva-azul.png",
            mensajeText: "Puedes transferir de forma inmediata todos los días <strong></strong>",
            horarios1Texto: "De lunes a viernes entre:<strong> 11:30 p.m - 6:00 a.m.</strong>", 
			horariosText: "Fines de semana y feriados entre: <strong>11:30 p.m. - 6:00 a.m.</strong>"
           
        }, 
		 "opcion12": {
            imagenSrc: "/wp-content/uploads/2023/10/bancoComercio.jpg",
            mensajeText: "Puedes transferir de forma inmediata todos los días <strong>excepto:</strong>",
            horarios1Texto: "De lunes a viernes entre:<strong> 18:00 p.m - 8:00 a.m.</strong>", 
			horariosText: "Fines de semana y feriados entre: <strong>No disponible </strong>"
           
        }, 
		 "opcion12": {
            imagenSrc: "/wp-content/uploads/2023/10/bancoComercio.jpg",
            mensajeText: "Puedes transferir de forma inmediata todos los días <strong>excepto:</strong>",
            horarios1Texto: "De lunes a viernes entre:<strong> 18:00 p.m - 8:00 a.m.</strong>", 
			horariosText: "Fines de semana y feriados entre: <strong>No disponible </strong>"
           
        },
		
    };

    select.addEventListener("change", function() {
        var opcionSeleccionada = select.value;
        if (opcionSeleccionada && opcionesInfo[opcionSeleccionada]) {
            var info = opcionesInfo[opcionSeleccionada];
            imagen.src = info.imagenSrc;
            mensaje.innerHTML = info.mensajeText; 
			horarios1.innerHTML = info.horarios1Texto; 
			horarios.innerHTML = info.horariosText;
			
			
			// Usar innerHTML para HTML

            contenedorInfo.style.display = "block";
        } else {
            contenedorInfo.style.display = "none";
        }
    });
});
</script>

















<?php
    get_footer();
?>
