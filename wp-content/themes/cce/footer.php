		
<div class="seccion-blog"> 
	
	<div class="container">
						<h2 class="titulos">Entérate aquí sobre las últimas noticias en transferencias interbancarias y pagos digitales.</h2>
					<div class="row">
						<?php
								 global $post;

								$last_posts = get_posts(array('posts_per_page' => 3));

								foreach ( $last_posts as $post ) :
								 setup_postdata( $post );?> 
						
						<div class="col-md-4" data-aos="fade-up"> 
							<div class="item-post">
								<div class="image-post">
									<a class="link" href="<?php echo get_permalink()?>"><?php the_post_thumbnail('medium');?></a>
							</div> 
							<div class="content-post"> 
								<span><?php the_category();?></span>
								<h2>	
									<a class="link" href="<?php echo get_permalink()?>"><?php the_title()?></a></h2>
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
							<img class="img-general" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
								<?php endif; ?>  
		<?php
							$image = get_field('banner_general_movil','option');
						if( !empty( $image ) ): ?>
							<img class="img-general-movil" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
								<?php endif; ?> 
	</div> 
	<div class="container">
		 <div class="textos-banner">
		  <h4 class="titulo-banner-general">
				¡Ahora transfiere solo con tu número de celular!
			 </h4> 
			 <a href="https://interoperabilidad.pe/" target="_blank"class="btn-banner-general">Conoce más aquí</a>
		</div>
	</div> 
		</div> 


		<div class="seccion-banner-general cci"> 
	<div class="banner">
		  <?php 
						$image = get_field('banner_cci','option');
						if( !empty( $image ) ): ?>
							<img class="cci-banner" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
								<?php endif; ?> 
		<?php
							$image = get_field('banner_cci_movil','option');
						if( !empty( $image ) ): ?>
							<img class="banner-cci-movil" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
								<?php endif; ?> 
	</div> 
	<div class="container">
		 <div class="textos-banner">
		  <h4 class="titulo-banner-general">
				¿Quieres saber cuánto te costará realizar tu transferencia interbancaria?
 </h4> 
			 <a href="#formulario" target="_blank"class="btn-banner-general"> Descúbrelo aquí</a>
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
<footer class="footer contenedor"> 
	<div class="container"> 
		<div class="row">
			<div class="col-md-4">
				<img src="/wp-content/uploads/2023/10/Objeto-inteligente-vectorial.png"/>
			</div>   
			<div class="col-md-2">
				<div class="menu-footer"> 
					<strong>¿QUÉ ES LA CCE?</strong>
					<ul class="menu-1">
						<li><a href="/que-es-la-cce/#propositos" class="scroll">Nuestro Propósito</a></li>
						<li><a href="/que-es-la-cce/#equipo" class="scroll">Equipo</a></li> 
						<li><a href="/que-es-la-cce/#que-hacemos" class="scroll">¿Qué hacemos?</a></li> 
						<li><a href="/que-es-la-cce/#memorias" class="scroll">Memorias</a></li>
						<li><a href="/que-es-la-cce/#financieras-nosotros" class="scroll">Entidades participantes</a></li>
					</ul>
				</div> 
				<div class="menu-footer">
					<strong>Transferencias</strong> 
					<ul> 
						<li><a href="/transferencias/#inmediatas">Inmediatas</a></li> 
						<li><a href="/transferencias/#por-celular">Con número de celular</a></li> 
						<li><a href="/transferencias/#gratuitas">Gratuitas</a></li> 
						<li><a href="/transferencias/#diferidas">Por horarios</a></li>
					</ul>
				</div>
			</div> 
			<div class="col-md-2">
				<div class="menu-footer"> 
					<ul>
						<li><a class="bold">TUTORIALES</a></li> 
						<ul> 
						<li><a href="/tutoriales/#ti">Transferencias con número de celular</a></li>
						<!--<li><a href="https://cce.althus.pe/tutoriales/#cci">Pago con CCI</a></li>
						<li><a href="https://cce.althus.pe/tutoriales/#celular">Pago con celular</a></li>>-->
						<li><a href="/tutoriales/#banco">Transferencias con CCI</a></li>
						<!--<li><a href="https://cce.althus.pe/tutoriales/#qr">Pago con QR</a></li>-->
						<li><a href="/tutoriales/#tarjeta">Pago Tarjeta de Crédito otros bancos</a></li> 
						<li><a  class="bold"href="/obten-tu-cci/">OBTÉN TU CCI</a></li>
						<li><a  class="bold"href="/blog/">BLOG</a> </li>
						<li><a class="bold" href="/contactos">CONTÁCTANOS</a></li> 
						<li><a  class="bold"href="/multimedia/">MULTIMEDIA</a></li>
</ul>
					</ul>

				</div>
			</div> 
			<div class="col-md-4">
				<div class="redes">  
					<strong>Síguenos en nuestras redes sociales</strong> 
					<div> 
						<?php 
							$link = get_field('facebook','option');
							if( $link ): ?>
								<a aria-label="red social" class="button" href="<?php echo esc_url( $link ); ?>" target="_blank"><i class="fa-brands fa fa-facebook"></i></a>
				<?php endif; ?> 
							
				<?php 
							$link = get_field('instagram','option');
							if( $link ): ?>
								<a aria-label="red social" class="button" href="<?php echo esc_url( $link ); ?>" target="_blank"><i class="fa fa-instagram"></i></a>
				<?php endif; ?>  
				 <?php 
				$link = get_field('linkedin','option');
				if( $link ): ?>
					<a aria-label="red social" class="button" href="<?php echo esc_url( $link ); ?>" target="_blank"><i class="fa fa-linkedin-in"></i></a>
				<?php endif; ?> 
							 <?php 
				$link = get_field('tiktok','option');
				if( $link ): ?>
					<a aria-label="red social" class="button" href="<?php echo esc_url( $link ); ?>" target="_blank"><i class="fa fa-tiktok"></i></a>
				<?php endif; ?>
						<?php 
							$link = get_field('youtube','option');
							if( $link ): ?>
								<a aria-label="red social" class="button" href="<?php echo esc_url( $link ); ?>" target="_blank"><i class="fa fa-youtube"></i></a>
				<?php endif; ?> 
							 <?php 
				$link = get_field('','option');
				if( $link ): ?>
					<a aria-label="red social" class="button" href="<?php echo esc_url( $link ); ?>" target="_blank"><i class="fa fa-linkedin-in"></i></a>
				<?php endif; ?> 
							
							<!--			
					<a href=""><i class="fa-brands fa-facebook"></i></a>
					<a href=""><i class="fa fa-instagram"></i></a>
					<a href=""><i class="fa fa-youtube"></i></a>
					<a href=""><i class="fa fa-linkedin"></i></a> -->

					</div>
				</div>
			</div>
		</div> 
		<div class="row row-1">
			<div  class="col-md-9">
				© 2024 Todos los derechos reservados -<a href="/wp-content/uploads/2023/11/politica-de-privacidad-cce.pdf" target="_blank">Políticas de Privacidad</a>-<a href="/wp-content/uploads/2023/11/terminos-y-condiciones-cce.pdf">Términos y Condiciones</a>de la Página.

			</div> 
			<div class="col-md-3">
				Powered By Althus
			</div>
		</div>
	</div>
</footer>

<script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/32714/owl.carousel.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.easing.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.mousewheel.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.easing.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.flexslider.js"></script>	
<script src="<?php echo get_template_directory_uri(); ?>/assets/aos-master/dist/aos.js"></script> 
<script src="<?php echo get_template_directory_uri(); ?>/assets/owlcarousel/owl.carousel.js"></script> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.0.8/popper.min.js"></script> 


			<script>
			AOS.init({
				easing: 'ease-in-out-sine'
			}); 

			(function( $ ){
				$('#home').owlCarousel({
					loop:true,
					margin:0,
					responsiveClass:true,
					responsive:{
						0:{
							items:1,
							nav:false
						},
						600:{
							items:1,
							nav:false
						},
						1000:{
							items:1,
							nav:false,
							dots:true,
							loop:false
						}
					}
				}) 
				$('#videos-cci').owlCarousel({
					loop:true,
					margin:15,
					responsiveClass:true,
					responsive:{
						0:{
							items:1,
							nav:false
						},
						600:{
							items:1,
							nav:false
						},
						1000:{
							items:3,
							nav:false,
							dots:true,
							loop:false
						}
					}
				}) 
				$('#videos-cci').owlCarousel({
					loop:true,
					margin:15,
					responsiveClass:true,
					responsive:{
						0:{
							items:1,
							nav:false
						},
						600:{
							items:1,
							nav:false
						},
						1000:{
							items:3,
							nav:false,
							dots:true,
							loop:false
						}
					}
				}) 
				$('#videos-cci1').owlCarousel({
					loop:true,
					margin:15,
					responsiveClass:true,
					responsive:{
						0:{
							items:1,
							nav:false
						},
						600:{
							items:1,
							nav:false
						},
						1000:{
							items:3,
							nav:false,
							dots:true,
							loop:false
						}
					}
				}) 
				$('#videos-cci2').owlCarousel({
					loop:true,
					margin:15,
					responsiveClass:true,
					responsive:{
						0:{
							items:1,
							nav:false
						},
						600:{
							items:1,
							nav:false
						},
						1000:{
							items:3,
							nav:false,
							dots:true,
							loop:false
						}
					}
				}) 
				$('#videos-cci3').owlCarousel({
					loop:true,
					margin:15,
					responsiveClass:true,
					responsive:{
						0:{
							items:1,
							nav:false
						},
						600:{
							items:1,
							nav:false
						},
						1000:{
							items:3,
							nav:false,
							dots:true,
							loop:false
						}
					}
				})  
				$('#videos-cci4').owlCarousel({
					loop:true,
					margin:15,
					responsiveClass:true,
					responsive:{
						0:{
							items:1,
							nav:false
						},
						600:{
							items:1,
							nav:false
						},
						1000:{
							items:3,
							nav:false,
							dots:true,
							loop:false
						}
					}
				}) 
				
				$('#pagosqr').owlCarousel({
					loop:true,
					margin:10,
					responsiveClass:true,
					responsive:{
						0:{
							items:2,
							nav:false
						},
						600:{
							items:2,
							nav:false
						},
						1000:{
							items:3,
							nav:false,
							dots:true,
							loop:false
						}
					}
				}) 
				
			$('#financieras').owlCarousel({
					loop:true,
					margin:40,
					item: 6, 
					autoplay: true, 
					autoplayTimeout:1000,
					autoplayHoverPause:false,
					responsiveClass:true,
					responsive:{
						0:{
							items:2,
							nav:false
						},
						600:{
							items:3,
							nav:false
						},
						1000:{
							items:6,
							nav:false,
						}
					}
				}) 
					$('#financieras-1').owlCarousel({
					loop:true,
					margin:40, 
						autoplayTimeout:1000,
						autoplayHoverPause:false,
						autoplay: true,
					responsiveClass:true,
					responsive:{
						0:{
							items:2,
							nav:false
						},
						600:{
							items:3,
							nav:false
						},
						1000:{
							items:6,
							nav:false,
						}
					}
				}) 
				
			$('#financieras-2').owlCarousel({
					loop:true,
					margin:40, 
					autoplayTimeout:1000,
						autoplayHoverPause:false,
						autoplay: true,
					autoplay: true,
					responsiveClass:true,
					responsive:{
						0:{
							items:2,
							nav:false
						},
						600:{
							items:3,
							nav:false
						},
						1000:{
							items:6,
							nav:false,
							loop:false
						}
					}
				}) 
				

			
				$(document).on('click','#calcularTarifaOrd',function(e){
					e.preventDefault();
					link = $(this);
					tipotransford = $('input[name = tipotransford]:checked').val();
					plazaord = $('input[name = plazaord]:checked').val();
					monedaord = $('input[name = monedaord]:checked').val();
					entidadorigenord = $('select#entidadorigenord').val();
					entidadfinord = $("select#entidadfinord").val();
					medioord = $('select#medioorigen_ord').val();
					montoord = $('input[name = montoord]').val();
					if(tipotransford > 0 && plazaord > 0 && monedaord > 0 && entidadorigenord > 0 && entidadfinord > 0 && medioord > 0 && montoord > 0){
						$.ajax({
							url : dcms_vars.ajaxurl,
							type: 'post',
							data: {
								action : 'dcms_ajax_get_tarifa',
								tipotransford: tipotransford,
								plazaord: plazaord,
								monedaord: monedaord,
								entidadorigenord: entidadorigenord,
								entidadfinord: entidadfinord,
								medioord: medioord,
								montoord: montoord
							},
							beforeSend: function(){
								$('.rpta_api_transferencia').hide();
								$('.rpta_api_transferencia_negativa').hide();
								link.html('CARGANDO...');

								//setInterval(link.html('OBTENER CCI'), 3000);
							},
							success: function(resultado){
								// console.log(resultado);
								result = resultado.split("|");
								if(result[0] == 1){
									setTimeout(function(){
										$('.rpta_api_transferencia').show();
										$('#resultadoparcialord').html('Monto: '+result[1]+'<br>Comisión interno: '+result[2]+'<br>Comisión: '+result[3]);
										$('#montofinalord').html(result[4]);
										link.html('CALCULAR');	
									},100);
								}else{
									link.html('CALCULAR');
									$('.rpta_api_transferencia_negativa').show();
									$('#resultadoparcialordnegativa').html(result[1]);
								}
							}
						});
					} else {
						link.html('CALCULAR');
						$('#montofinalord').html('Debe completar todos los campos.');
					}
				});

				$(document).on('click','#calcularTarifaTar',function(e){
					e.preventDefault();
					link = $(this);
					tipotransftar = $('input[name = tipotransftar]:checked').val();
					monedatar = $('input[name = monedatar]:checked').val();
					entidadorigentar = $('select#entidadorigentar').val();
					entidadfintar = $("select#entidadfintar").val();
					mediotar = $('select#mediotar').val();
					montotar = $('input[name = montotar]').val();
					if(tipotransftar > 0 && monedatar > 0 && entidadorigentar > 0 && entidadfintar > 0 && mediotar > 0 && montotar > 0){
						$.ajax({
							url : dcms_vars.ajaxurl,
							type: 'post',
							data: {
								action : 'dcms_ajax_get_tarifa_tar',
								tipotransftar: tipotransftar,
								monedatar: monedatar,
								entidadorigentar: entidadorigentar,
								entidadfintar: entidadfintar,
								mediotar: mediotar,
								montotar: montotar
							},
							beforeSend: function(){
								link.html('CARGANDO...');
								$('.rpta_api_pago').hide();
								$('.rpta_api_pago_negativa').hide();
							},
							success: function(resultado){
								// console.log(resultado);
								result = resultado.split("|");
								if(result[0] == 1){
									setTimeout(function(){
										$('.rpta_api_pago').show();
										$('#resultadoparcialtar').html('Monto: '+result[1]+'<br>Comisión interno: '+result[2]+'<br>Comisión: '+result[3]);
										$('#montofinaltar').html(result[4]);
										link.html('CALCULAR');	
									},100);
								}else{
									link.html('CALCULAR');
									$('.rpta_api_pago_negativa').show();
									$('#resultadoparcialtarnegativa').html(result[1]);
								}
							}
						});
					} else {
						link.html('CALCULAR');
						$('#montofinaltar').html('Debe completar todos los campos.');
					}
				});



			})( jQuery ); 
		function redirect_cci(){
			url = document.getElementById("iptcci").value;
			window.open(url, '_blank');
		}

			

		/*-------fixed-header----------------*/
				$(window).scroll(function(){
				if ($(window).scrollTop() >= 80) {
					$('.header').addClass('fixed-header');
				}
				else {
					$('.header').removeClass('fixed-header');
				}  
				});
			
			</script> 




<script>
function iniciarContadores() {
  var contadores = document.getElementsByClassName("contador");

  for (var i = 0; i < contadores.length; i++) {
    var contador = contadores[i];
    var valor = parseInt(contador.getAttribute("data-valor"));
    iniciarContador(contador, valor);
  }
}

function iniciarContador(contadorElemento, valor) {
  var contador = 0;

  function actualizarContador() {
    if (contador <= valor) {
      contadorElemento.textContent = contador;
      contador++;
    }
  }

  actualizarContador();

  setInterval(actualizarContador, 20);
}

iniciarContadores(); 
	/*
	Smooth scroll functionality for anchor links (animates the scroll
	rather than a sudden jump in the page)
*/

// scroll.js
// Obtén todos los enlaces de navegación
// to top right away
if ( window.location.hash ) scroll(0,0);
// void some browsers issue
setTimeout( function() { scroll(0,0); }, 1);
/*
$(function() {

    // your current click function
    $('.scroll').on('click', function(e) {
        e.preventDefault();
        $('html, body').animate({
            scrollTop: $($(this).attr('href')).offset().top + 'px'
        }, 1000, 'swing');
    });

    // *only* if we have anchor on the url
    if(window.location.hash) {

        // smooth scroll to the anchor id
        $('html, body').animate({
            scrollTop: $(window.location.hash).offset().top + 'px'
        }, 1000, 'swing');
    }

});
*/

	
	
</script>

<script> 
/*
jQuery(document).ready(function($) {
      $('.slick-slider').slick({
        dots: false,
        infinite: true,
        speed: 500,
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        arrows: true,
        responsive: [{
          breakpoint: 600,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1
          }
        },
        {
           breakpoint: 400,
           settings: {
              arrows: false,
              slidesToShow: 1,
              slidesToScroll: 1
           }
        }]
    });
});
	
*/
jQuery(document).ready(function($) {
    // Define the department dropdown and province/district dropdowns
    var $departmentDropdown = $("select[name='department']");
    var $provinceDropdown = $("select[name='province']");
    var $districtDropdown = $("select[name='district']");

    // Define the province and district options
    var provinceOptions = {
        "Department 1": ["Province 1A", "Province 1B"],
        "Department 2": ["Province 2A", "Province 2B"],
        "Department 3": ["Province 3A", "Province 3B"]
    };

    var districtOptions = {
        "Province 1A": ["District 1A1", "District 1A2"],
        "Province 1B": ["District 1B1", "District 1B2"],
        "Province 2A": ["District 2A1", "District 2A2"],
        "Province 2B": ["District 2B1", "District 2B2"],
        "Province 3A": ["District 3A1", "District 3A2"],
        "Province 3B": ["District 3B1", "District 3B2"]
    };

    // Function to populate province dropdown
    function populateProvinceDropdown() {
        var selectedDepartment = $departmentDropdown.val();
        var provinceOpts = provinceOptions[selectedDepartment];
        $provinceDropdown.empty();
        $.each(provinceOpts, function(index, value) {
            $provinceDropdown.append($("<option>").text(value).val(value));
        });
        populateDistrictDropdown();
    }

    // Function to populate district dropdown
    function populateDistrictDropdown() {
        var selectedProvince = $provinceDropdown.val();
        var districtOpts = districtOptions[selectedProvince];
        $districtDropdown.empty();
        $.each(districtOpts, function(index, value) {
            $districtDropdown.append($("<option>").text(value).val(value));
        });
    }

    // Initialize province and district dropdowns
    populateProvinceDropdown();

    // Event listeners for department and province dropdowns
    $departmentDropdown.on("change", populateProvinceDropdown);
    $provinceDropdown.on("change", populateDistrictDropdown);
});
	
// Image Slider Demo:
// https://codepen.io/vone8/pen/gOajmOo
</script>

<script>

$(function() {
  setTimeout(function() {
    if (location.hash) {
      // Espera a que la página se cargue completamente y luego obtén la altura del encabezado fijo.
      setTimeout(function() {
        var headerHeight = $('#fixed-header').outerHeight(); // Reemplaza 'fixed-header' con el ID o clase de tu encabezado fijo.
        smoothScrollTo($(location.hash), headerHeight);
      }, 500);
    }
  }, 1);

  $('footer a, .sub-menu li a, .financieras-textos a').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      // Obtén la altura del encabezado fijo.
      var headerHeight = $('#fixed-header').outerHeight(); // Reemplaza 'fixed-header' con el ID o clase de tu encabezado fijo.
      smoothScrollTo($(this.hash), headerHeight);
      return false;
    }
  });

  function smoothScrollTo(target, offset) {
    target = target.length ? target : $('[name=' + this.hash.slice(1) +']');

    if (target.length) {
      $('html,body').animate({
        scrollTop: target.offset().top - offset
      }, 800, 'swing');
    }
  }
});


</script>
<script>
/*
document.addEventListener("DOMContentLoaded", function() {
    // Obtén el identificador del ancla de la URL
    var anchor = window.location.hash.substring(1);

    // Verifica si el ancla apunta a la sección #formulario
    if (anchor === "formulario") {
        // Desplaza suavemente hasta la sección #formulario
        var formularioSection = document.getElementById("formulario");
        if (formularioSection) {
            formularioSection.scrollIntoView({ behavior: "smooth" });
        }

        // Luego, verifica si el ancla apunta al radio button "radioinmediatas"
        var radioInmediatas = document.getElementById("radio2");
        if (radioInmediatas) {
            radioInmediatas.checked = true;
        }
		 // Luego, verifica si el ancla apunta al radio button "radioinmediatas"
        var radioHorarios = document.getElementById("radio1");
        if (radioHorarios) {
            radioHorarios.checked = true;
        }
    }

    // Resto del código para manejar otros casos si es necesario
});
*/
 

</script>

<script>
document.addEventListener("DOMContentLoaded", function() {
    // Obtén el identificador del ancla de la URL
    var anchor = window.location.hash.substring(1);

    if (anchor.indexOf("formulario-") === 0) {
        var radioParam = anchor.replace("formulario-", "");

        if (radioParam === "radiohorarios") {
            var radioHorarios = document.getElementById("radio1");
            var formularioSection = document.getElementById("formulario");

            if (radioHorarios && formularioSection) {
                radioHorarios.checked = true;

                setTimeout(function() {
                    formularioSection.scrollIntoView({ behavior: "smooth" });
                }, 500); // Espera 500 milisegundos antes de desplazarse
            }
        }

        if (radioParam === "radioinmediatas") {
            var radioInmediatas = document.getElementById("radio2");
            var formularioSection = document.getElementById("formulario");

            if (radioInmediatas && formularioSection) {
                radioInmediatas.checked = true;

                setTimeout(function() {
                    formularioSection.scrollIntoView({ behavior: "smooth" });
                }, 500); // Espera 500 milisegundos antes de desplazarse
            }
        }
    }
});
</script>
<script>
    $(document).ready(function () {
        // Agregar la clase "active" al enlace "Todos" por defecto
        $("#category-filter-all").addClass("active");

        // Manejar clic en enlaces de categoría
        $("ul#category-filter  li a").on("click", function (e) {
            e.preventDefault();

            // Eliminar la clase "active" de todos los enlaces
            $("ul#category-filter li a").removeClass("active");

            // Agregar la clase "active" al enlace seleccionado
            $(this).addClass("active");

            // Aquí puedes realizar otras acciones, como filtrar contenido según la categoría seleccionada.
            // Por ejemplo, podrías usar la información en 'data-category' para filtrar contenido en la página.
            var selectedCategory = $(this).data("category");
            // Realizar acciones adicionales aquí, como mostrar solo el contenido de la categoría seleccionada.
        });
    });
</script>
<script> 
	$(document).ready(function(){
  $(".slide a").click(function(){
    //.preventDefault();
    var target = $(this).parent().children(".sub-menu");
    $(target).slideToggle();
  });
});
</script>
<style>
 .custom-menu-class1 .sub-menu {
		display: none;
	 position:relative;
	 top: auto;
	} 
	
	.custom-menu-class1 .navbar-nav li:hover .sub-menu {
		position: relative
	}
</style> 

<script>
document.addEventListener("DOMContentLoaded", function() {
    var selectOpciones1 = document.getElementById("selectOpciones1");
    var selectOpciones2 = document.getElementById("selectOpciones2");

    var contenedorInfo = document.getElementById("contenedorInfo");
    var contenedorInfo1 = document.getElementById("contenedorInfo1");

    var imagen = document.getElementById("imagen");
    var imagen1 = document.getElementById("imagen1");

    var mensaje = document.getElementById("mensaje");
    var mensaje1 = document.getElementById("mensaje1");

    var horarios1 = document.getElementById("horarios1");
    var horarios2 = document.getElementById("horarios2");
    var horarios3 = document.getElementById("horarios3");

    selectOpciones1.addEventListener("change", function() {
        var financieraId = selectOpciones1.value;
        mostrarInformacion(financieraId, bancosData, contenedorInfo, imagen, mensaje, horarios1);
    });

    selectOpciones2.addEventListener("change", function() {
        var financieraId = selectOpciones2.value;
        mostrarInformacion(financieraId, cajasFinancierasData, contenedorInfo1, imagen1, mensaje1, horarios2, horarios3);
    });

    function mostrarInformacion(financieraId, data, contenedorInfo, imagen, mensaje, horarios1, horarios2) {
        if (financieraId && data[financieraId]) {
            var info = data[financieraId];
            imagen.src = info.imagenSrc;
            mensaje.innerHTML = info.mensajeText;
            horarios1.innerHTML = info.horarios1Texto;
            if (horarios2) {
                horarios2.innerHTML = info.horariosText;
            }

            contenedorInfo.style.display = "block";
        } else {
            contenedorInfo.style.display = "none";
        }
    }
});
    
</script>

			<?php wp_footer(); ?>
		</body>
		</html>