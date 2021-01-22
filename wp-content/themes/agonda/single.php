<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package agonda
 */
get_header();
?>
<?php while ( have_posts() ) : the_post(); ?>
<h3><?php the_category('&nbsp;&rsaquo;&nbsp;'); echo "&nbsp;&rsaquo;&nbsp;"; the_title(); ?></h3>
<?php the_content(); ?>
<?php endwhile;  ?>
<?php
get_footer();
