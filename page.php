<?php
/**
 * @package WordPress
 * @subpackage Toolbox
 */

get_header(); ?>

<div class="row">
  <div class="column grid_8" id="content">
    <div id="primary">
        <?php the_post(); ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <header class="entry-header">
            <h1 class="entry-title"><?php the_title(); ?></h1>
          </header><!-- .entry-header -->

          <div class="entry-content">
            <?php the_content(); ?>
            <?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'themename' ), 'after' => '</div>' ) ); ?>
            <?php edit_post_link( __( 'Edit', 'themename' ), '<span class="edit-link">', '</span>' ); ?>
          </div><!-- .entry-content -->
        </article><!-- #post-<?php the_ID(); ?> -->
    </div><!-- #primary -->
  </div>
  <div class="column grid_4">
    <?php get_sidebar(); ?>
  </div>
</div>
<?php get_footer(); ?>
