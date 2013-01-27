<?php
/**
 * @package WordPress
 * @subpackage Toolbox
 */
?>
    <div id="secondary" class="widget-area">

      <?php if ( ! dynamic_sidebar( 'sidebar' ) ) : ?>


        <aside id="archives" class="widget">
          <h1 class="widget-title"><?php _e( 'Archives', 'themename' ); ?></h2>
          <ul>
            <?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
          </ul>
        </aside>

        <aside id="meta" class="widget">
          <h1 class="widget-title"><?php _e( 'Meta', 'themename' ); ?></h2>
          <ul>
            <?php wp_register(); ?>
            <aside><?php wp_loginout(); ?></aside>
            <?php wp_meta(); ?>
          </ul>
        </aside>


      <?php endif; // end sidebar widget area ?>
      <aside id="search" class="widget widget_search">
        <?php get_search_form(); ?>
      </aside>
    </div><!-- #secondary .widget-area -->
