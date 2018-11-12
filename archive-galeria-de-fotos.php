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
				<div class="category-menu">
					<strong>Mais novidades</strong>
					<div class="category-trigger">
						<i></i>
						<i></i>
						<i></i>
					</div>
				</div>
			</div>
			<div id="primary" class="col-sm-8 col-xs-12">
				<div id="content" role="main">
					<?php if ( have_posts() ) : ?>
						<div class="postlist-row">
							<?php /* Start the Loop */ ?>
							<?php while ( have_posts() ) : the_post(); ?>
								<div style="display:none" class="fancybox-hidden">
									<div id="fancyboxID-1" class="hentry" style="width:460px;max-width:100%;">
										<div class="post-list-item">

											<a href="#fancyboxID-1" class="fancybox-inline">
											<div class="list-image">
													<?php the_post_thumbnail()?>
											</div>
												<div class="list-text">
														<h2><?php the_title()?></h2>

														<?php the_content()?>
												</div>
											</a>
										</div>

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
							<h2 class="entry-title"><?php _e( 'Não encontramos nada :(', 'codesigner' ); ?></h2>
							<div class="entry-content">
								<p><?php _e( 'Em caso de dúvida, faça uma busca!', 'codesigner' ); ?></p>
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
