<?php get_header(); ?>

<?php if(have_posts()): ?>

<?php   while(have_posts()):
        the_post(); ?>

        <?php the_ID();?>
        <hr>
        <?php the_post_thumbnail();?>
        <hr>
    
   
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        <hr>
        <?php the_excerpt();?>
        <hr>

<?php  endwhile;?> 
<?php endif;?> 

