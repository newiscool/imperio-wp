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
			<div id="primary" class="col-xs-12">
				<div id="content" role="main">
					<div class="title_page">
						<h1><?php wp_title(''); ?></h1>
					</div>

					<div class="content_intro_category">
						<?php if (category_description($category_id)) : ?>
						<div class="descricao_categoria">
							<?php /* Start the Loop */
    					echo category_description($category_id);
							?>
						</div>
						<?php endif; ?>

					</div>
					<?php if ( have_posts() ) : ?>
						<div class="postlist-row">
							<?php /* Start the Loop */ ?>
							<?php while ( have_posts() ) : the_post(); ?>
								<div class="post-list-item">
									<div class="list-image">
										<a href="<?php the_permalink() ?>">
										<?php the_post_thumbnail() ?>
										</a>
									</div>
									<div class="list-text">
										<a href="<?php the_permalink() ?>">
											<div class="content_description">
												<h2><?php the_title()?></h2>
											</div>
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
							<h2 class="entry-title"><?php _e( 'Não encontramos nada :(', 'codesigner' ); ?></h2>
							<div class="entry-content">
								<p><?php _e( 'Em caso de dúvida, faça uma busca!', 'codesigner' ); ?></p>
								<?php get_search_form(); ?>
							</div><!-- .entry-content -->
						</div><!-- #post-0 -->

					<?php endif; ?>

				</div><!-- #content -->
			</div><!-- #primary -->
		</div>
	</div>
<?php get_footer(); ?>
