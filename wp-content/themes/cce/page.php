<footer class="footer contenedor">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<img src="https://acl.althus.pe/wp-content/uploads/2023/07/Logotipo.png"/>
			</div> 
			<div class="col-md-6">
				<div class="row">
					<div class="col-md-6">
						<ul> 
							<li><a href="">home</a></li>
                            <li><a href="">home</a></li>
                            <li><a href="">home</a></li>
                            <li><a href="">home</a></li>
                            <li><a href="">home</a></li>
						
						</ul>
 					</div> 
					<div  class="col-md-6">
						<ul>
                            <li><a href="">horwe</a></li>
                            <li><a href="">horwe</a></li>
                            <li><a href="">horwe</a></li>
                        </ul> 
                        <div class="redes-sociales">
                            <a href=""><i class="fa fa-facebook"></i>
                        </a><a href=""><i class="fa fa-linkedin-in"></i></a>
                        </div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
</footer>


<!--<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.easing.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.mousewheel.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.easing.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.flexslider.js"></script-->
<script src="<?php echo get_template_directory_uri(); ?>/assets/aos-master/dist/aos.js"></script> 
<script src="<?php echo get_template_directory_uri(); ?>/assets/owlcarousel/owl.carousel.js"></script> 
	

			<script>
			AOS.init({
				easing: 'ease-in-out-sine'
			}); 

			(function( $ ){
				$('.owl-carousel').owlCarousel({
					loop:true,
					margin:10,
					responsiveClass:true,
					responsive:{
						0:{
							items:1,
							nav:true
						},
						600:{
							items:1,
							nav:false
						},
						1000:{
							items:1,
							nav:true,
							loop:false
						}
					}
				}) 
				
		/*	$('.aliados-carrusel').owlCarousel({
					loop:true,
					margin:10,
					responsiveClass:true,
					responsive:{
						0:{
							items:1,
							nav:true
						},
						600:{
							items:3,
							nav:false
						},
						1000:{
							items:5,
							nav:true,
							loop:false
						}
					}
				}) 
				
*/


			})( jQuery ); 


			

			
			</script>


			<?php wp_footer(); ?>
		</body>
		</html>