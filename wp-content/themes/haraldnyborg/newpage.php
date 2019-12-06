<?php
get_header();
/*
Template name: new page
*/

wp_nav_menu( array( 'theme_location' => 'header-menu' ) );


$some = get_field('new2');
?>

<h1><?php echo $some['titel']; ?></h1>

<?php 
wp_footer() 
?>