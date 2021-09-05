<?php get_header(); ?>


    <main role="main" class="container">
      <div class="row">
        <div class="col-md-8 blog-main">
          
        <h3 class="pb-3 mb-4 font-italic border-bottom">
            Sección - <?php single_term_title( )?>
        </h3>
			
		
        <?php if(have_posts()): ?>

        <?php   while(have_posts()):
                the_post(); 
        ?>                
      
              
                <div class="col-md-12">
                <div class="card flex-md-row mb-4 box-shadow h-md-auto">
                    
                    <?php the_post_thumbnail('img_small');?>
                    
                    <div class="card-body d-flex flex-column align-items-start">
                    
                    <strong class="d-inline-block mb-2 text-primary"><?php echo the_category(', '); ?></strong>
                    
                    <h3 class="mb-2">
                        <a class="text-dark" href="<?php esc_url(the_permalink()); ?>"><?php the_title(); ?></a>
                    </h3>

                    <?php the_date('','<div class="mb-1 text-muted">','</div>') ?>
                    <p class="card-text mb-auto"> <?php the_excerpt();?></p>
                    
                    <a href="<?php esc_url(the_permalink()); ?>" >Continuar leyendo...</a>
                    
                    </div>
                    
                    </div>
                    </div>
        <?php  endwhile;?> 
        <?php endif;?> 
		
		
          <nav class="blog-pagination text-center">
           <?php posts_nav_link(); ?>
          </nav>

        </div><!-- /.blog-main -->

        <?php get_sidebar( );?>

      </div><!-- /.row -->

    </main><!-- /.container -->

<?php get_footer();?>