<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>
<div class="large-4 medium-6 small-12 columns">
	<div id="post-<?php the_ID(); ?>" class="movie-container">
		<?php
		if ( is_sticky() && is_home() ) :
			echo twentyseventeen_get_svg( array( 'icon' => 'thumb-tack' ) );
		endif;
		?>

		<header class="entry-header movie-description-cover">
			<?php
				the_title( '<h2 class="entry-title"></h2>' ); 
				echo "</br>";
				echo "<span>Director: </span>";
				the_field('director');
			?>
		</header><!-- .entry-header -->
		
		<?php if ( '' !== get_the_post_thumbnail() && ! is_single() ) : ?>
			<div class="movie-cover">
				<a href="<?php the_permalink(); ?>" class="movie-link">
					<?php the_post_thumbnail( 'twentyseventeen-featured-image' ); ?>
				</a>
			</div><!-- .post-thumbnail -->
		<?php endif; ?>

		<div class="entry-content">
			<?php
			/* translators: %s: Name of current post */
			the_content( sprintf(
				__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'twentyseventeen' ),
				get_the_title()
			) );

			wp_link_pages( array(
				'before'      => '<div class="page-links">' . __( 'Pages:', 'twentyseventeen' ),
				'after'       => '</div>',
				'link_before' => '<span class="page-number">',
				'link_after'  => '</span>',
			) );
			?>
		</div><!-- .entry-content -->

		<?php
		if ( is_single() ) {
			twentyseventeen_entry_footer();
		}
		?>
	</div><!-- #post-## -->	
</div>

