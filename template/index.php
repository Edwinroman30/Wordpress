<?php get_header(); ?>

<h1>    
<?php echo get_bloginfo('name'); ?>
</h1>

<h3>All our post:</h3>
<?php

$filter = array('post-type' => 'post');

$query = new WP_Query($filter);

echo '<ul>';
while ($query->have_posts())
{
    $query->the_post();
    echo '<li>';
    the_title();
    echo '</li>';

}
echo '</ul>';
?>



<?php if($query->have_posts()): ?>

<?php   while($query->have_posts()):
        $query->the_post(); ?>

        <center><?php the_ID();?></center>
        <br>
        <?php the_post_thumbnail();?>
        <br>
    
   
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        <br>
        <?php the_excerpt();?>
        <hr>

<?php  endwhile;?> 
<?php endif;?> 



<?php 
//agragando el side bar definido en functions.php
dynamic_sidebar('barra_lateral_1'); ?>




</body>
</html>