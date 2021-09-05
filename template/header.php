<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php echo get_bloginfo('Name');?> - <?php echo get_bloginfo('description');?></title>
    <?php wp_head();?>
</head>
<body>

<nav>
<?php
    wp_nav_menu(array('theme_location' => 'main-menu'));
?>
</nav>
