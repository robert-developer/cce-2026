<li class="cards col-md-4">
    	<div class="item-post">
								<div class="image-post">
<?php if ( has_post_thumbnail() ) {
the_post_thumbnail();
} else { ?>
<img src="/wp-content/uploads/2024/02/bannerblog900x520-1.jpg" alt="<?php the_title(); ?>" />
<?php } ?>
								
							</div> 
							<div class="content-post"> 
								<span><?php the_category();?></span>
								<h2>	
								<?php the_title()?></h2> 
								<!--<p>
									<?php the_excerpt()?>
								</p>-->
								<a class="link" href="<?php echo get_permalink()?>"><i class="fa-solid fa-arrow-right-long"></i>Leer nota</a>
			</div></div>
</li>