<?php
    /*
    * Template Name: cobertura
    */
    get_header();
?>
    <main class="contenedor-cobertura seccion"> 
         <div class="container">
             <div class="cobertura-left"> 
                  <h1>Sucursales y distribuidores</h1> 
                  <?php if (have_rows('cobertura')) : ?>
              <div id="accordion" class="accordion">
                <?php $first = true; ?>
                <?php while (have_rows('cobertura')) : the_row(); ?>
                  <div class="card">
                    <div class="card-header" id="heading<?php echo get_row_index(); ?>">
                      <h5 class="mb-0">
                        <button class="btn btn-link" data-toggle="collapse" data-target="#collapse<?php echo get_row_index(); ?>" aria-expanded="<?php echo $first ? 'true' : 'false'; ?>" aria-controls="collapse<?php echo get_row_index(); ?>">
                          <?php the_sub_field('titulo'); ?>
                        </button>
                      </h5>
                    </div>
                    <div id="collapse<?php echo get_row_index(); ?>" class="collapse <?php echo $first ? 'show' : ''; ?>" aria-labelledby="heading<?php echo get_row_index(); ?>" data-parent="#accordion">
                      <div class="card-body">
                        <?php the_sub_field('texto'); ?>
                      </div>
                    </div>
                  </div>
                  <?php $first = false; ?>
                <?php endwhile; ?>
              </div>
            <?php endif; ?>

             </div> 
             <div class="cobertura-right">
                <div class="img-cobertura">
                     <img src="http://localhost/costagas/wp-content/uploads/2023/05/mapa.png" alt="">
                </div>
             </div>
         </div>

    </main>

<?php
    get_footer();
?>
