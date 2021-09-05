<?php get_header(); ?>

<h1> Sección: <?php single_term_title(); ?> </h1>

<?php if(have_posts()): ?>

<?php   while(have_posts()):
        the_post(); 
?>

        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        <br>
        <hr>
        <?php the_post_thumbnail();?>
        <hr>
        <?php the_excerpt();?>
        <hr>

<?php  endwhile;?> 
<?php endif;?> 
