<?php
/**
 * The template for displaying Category Archive pages.
 *
 * @package codesigner
 * @since codesigner 0.1
 */

get_header();

?>

	<div class="filter-overlay"></div>


	<div id="page" class="container">
		<?php do_action( 'before' ); ?>
		<div id="main" class="row">
			<div class="col-xs-12 visible-xs">
				<div class="title_page">

					<h1><?php the_title() ?></h1>

					<span>

							<?php the_field('subtitulo_posts');?>

					</span>

				</div>

			</div>
			<div id="primary" class="col-sm-8 col-xs-12">
				<div id="content" role="main">

					<?php if ( have_posts() ) : ?>

						<div class="postlist-row">
							<?php /* Start the Loop */ ?>
							<?php while ( have_posts() ) : the_post(); ?>
								<div class="post-list-item">
									<div class="list-image">
										<a href="<?php the_permalink() ?>">
											<span class="data"><?php the_time('j M Y')?></span>
											<?php the_post_thumbnail()?>
										</a>
									</div>
									<div class="list-text">
										<a href="<?php the_permalink() ?>">
											<h2><?php the_title()?></h2>
											<?php the_content()?>
										</a>
									</div>
								</div>
							<?php endwhile; ?>
						</div>
						<div class="pag text-right">
							<?php
							if ( function_exists('vb_pagination') ) {
								vb_pagination();
							}
							?>
						</div>

					<?php else : ?>

						<div class="col-xs-12">
							<h1 class="entry-title"><?php _e( 'Nothing Found', 'codesigner' ); ?></h1>
							<div class="entry-content">
								<p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'codesigner' ); ?></p>
								<?php get_search_form(); ?>
							</div><!-- .entry-content -->
						</div><!-- #post-0 -->

					<?php endif; ?>

				</div><!-- #content -->
			</div><!-- #primary -->
			<?php get_sidebar(); ?>
		</div>
	</div>
<?php get_footer(); ?>
