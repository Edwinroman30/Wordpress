<?php get_header(); ?>

    <main role="main" class="container">
        <div class="row">
            <div class="col-md-8 blog-main">
                <?php if(have_posts()): ?>

                <?php   while(have_posts()):
                        the_post(); 
                ?>

                
                    <div class="blog-post">
                        
                        <h2 class="blog-post-title"><?php the_title(); ?></h2>
                        <?php the_date('','<p class="blog-post-meta">','</p>') ?>
                        <br/>
                        
                        <p> <?php the_excerpt();?> </p>
                        <br/>
                        <p> <?php the_content();?> </p>

                    </div><!-- /.blog-post -->
                
                <?php  endwhile;?> 
                <?php endif;?> 
                
    </div><!-- /.blog-main -->


            <?php get_sidebar( );?>

        </div><!-- /.row -->

    </main><!-- /.container -->

<?php get_footer( ); ?>