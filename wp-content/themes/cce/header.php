<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
	<title><?php the_title();?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
	<link  rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/estilos.css"> 
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/aos-master/dist/aos.css" /> 
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/bootstrap/bootstrap.min.css" /> 
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/owlcarousel/assets/owl.carousel.min.css" />
		<script src="<?php echo get_template_directory_uri(); ?>/js/scripts.js"></script> 

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/fontawesome.min.css" integrity="sha512-siarrzI1u3pCqFG2LEzi87McrBmq6Tp7juVsdmGY1Dr8Saw+ZBAzDzrGwX3vgxX1NkioYNCFOVC0GpDPss10zQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" /> 
 
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/brands.min.css" integrity="sha512-W/zrbCncQnky/EzL+/AYwTtosvrM+YG/V6piQLSe2HuKS6cmbw89kjYkp3tWFn1dkWV7L1ruvJyKbLz73Vlgfg==" crossorigin="anonymous" referrerpolicy="no-referrer" /> 

<script
  src="https://code.jquery.com/jquery-3.7.0.js"
  integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM="
  crossorigin="anonymous"></script>
</head>
<body <?php body_class(); ?>> 

    <header class="header" id="fixed-header">
		<div class="topbar">
		  <div class="container top-bar-inner">
			  <!--<a href="http://localhost/dolcceza/trabaja-con-nosotros/">Trabaja con nosotros </a-->
			  <a class="menu-top" href="/contactos/">Contáctanos</a><div class="redes redes-topbar">
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
							 <!--
						<a href=""><i class="fa-brands fa-facebook"></i></a>
					<a href=""><i class="fa fa-instagram"></i></a>
					<a href=""><i class="fa fa-youtube"></i></a>
					<a href=""><i class="fa fa-linkedin-in"></i></a> 
<a href=""><i class="fa fa-tiktok"></i></a>-->

			  </div>
		 </div>
		</div>
		<div class="header-inner">
			<div class="container container-header">
				<nav class="navbar navbar-expand-lg navbar-light">
  <a class="navbar-brand" href="<?php echo get_home_url();?>"><img src="/wp-content/uploads/2023/10/Objeto-inteligente-vectorial-1.png" ></a> 
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown"> 
	   <?php wp_nav_menu( array( 
						'theme_location' => 'menu-principal-5',
						'menu_class' => 'navbar-nav',//Clase de la etiqueta ul
						'container_class' => 'custom-menu-class' ) ); ?> 
	   <?php wp_nav_menu( array( 
						'theme_location' => 'menu-movil',
						'menu_class' => 'navbar-nav',//Clase de la etiqueta ul
						'container_class' => 'custom-menu-class1' ) ); ?> 
	  <!--
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">¿Que es la CCE?</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Servicios</a>
      </li>  
		<li>
		   <a class="nav-link" href="#">Tutoriales</a>
      </li> 
		<li>
		   <a class="nav-link" href="#"> Obten tu CCI</a>
		</li>  
		<li>
		   <a class="nav-link" href="#">Blog</a>
      </li>
		
		<!--
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown link
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
    </ul>-->
  </div>
</nav>
			</div> 
				
			</div>
    </header>