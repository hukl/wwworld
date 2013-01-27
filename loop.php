<?php
/**
 * @package WordPress
 * @subpackage Toolbox
 */
?>

<?php /* Start the Loop */ ?>
<?php while ( have_posts() ) : the_post(); ?>

  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
      <h1 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'themename' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h1>

      <div class="entry-meta">
        <?php
          printf( __( '<span class="meta-prep meta-prep-author">Posted on </span><a href="%1$s" rel="bookmark"><time class="entry-date" datetime="%2$s">%3$s</time></a> <span class="meta-sep"> by </span> <span class="author vcard"><a class="url fn n" href="%4$s" title="%5$s">%6$s</a></span>', 'themename' ),
            get_permalink(),
            get_the_date( 'c' ),
            get_the_date(),
            get_author_posts_url( get_the_author_meta( 'ID' ) ),
            sprintf( esc_attr__( 'View all posts by %s', 'themename' ), get_the_author() ),
            get_the_author()
          );
        ?>
      </div><!-- .entry-meta -->
    </header><!-- .entry-header -->

    <?php if ( is_archive() || is_search() ) : // Only display Excerpts for archives & search ?>
    <div class="entry-summary">
      <?php the_excerpt( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'themename' ) ); ?>
    </div><!-- .entry-summary -->
    <?php else : ?>
    <div class="entry-content">
      <?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'themename' ) ); ?>
      <?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'themename' ), 'after' => '</div>' ) ); ?>
    </div><!-- .entry-content -->
    <?php endif; ?>

    <footer>
      <div class="entry-meta">
        <div>&#x25BA; <?php comments_popup_link( __( 'Leave a comment', 'themename' ), __( '1 Comment', 'themename' ), __( '% Comments', 'themename' ) ); ?></div>
        <div>
          Posted in: <?php the_category( ', ' ) ?> |
          <?php the_tags( __( 'Tagged: ', 'themename' ) ); ?></div>
      </div>
    </footer><!-- #entry-meta -->
  </article><!-- #post-<?php the_ID(); ?> -->

  <?php comments_template( '', true ); ?>

<?php endwhile; ?>

<?php /* Display navigation to next/previous pages when applicable */ ?>
<?php if (  $wp_query->max_num_pages > 1 ) : ?>
  <nav id="nav-below">
    <div class="nav-previous"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Older posts', 'themename' ) ); ?></div>
    <div class="nav-next"><?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&rarr;</span>', 'themename' ) ); ?></div>
  </nav><!-- #nav-below -->
<?php endif; ?>
