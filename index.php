<?php
/**
 * @package WordPress
 * @subpackage Toolbox
 */

get_header(); ?>

<main>
    <?php get_template_part( 'loop', 'index' ); ?>
</main>

<nav>
   <?php get_sidebar(); ?>
</nav>

<?php get_footer(); ?>

