<?php get_header(); ?>
<h1>Welcome to a page</h1>
<?php if(have_posts()): ?>

<?php   while(have_posts()):
        the_post(); ?>

        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        <hr>
        <?php //the_post_thumbnail();?>
        <hr>

        <?php the_excerpt();?>
        <hr>

        <?php the_content(); ?>

<?php  endwhile;?> 
<?php endif;?> 

