<?php

get_header();

?>

	<div id="page" class="container">

		<?php do_action( 'before' ); ?>
		<div id="main" class="row">

			<div id="primary" class="col-xs-12">
				<div class="title_page">
					<h1><?php wp_title(''); ?></h1>
					<span>Diversos produtos para valorizar ainda mais seu salão</span>
				</div>

				<div id="content" role="main">
					<?php if ( have_posts() ) : ?>
						<div class="productlist-row">
							<?php /* Start the Loop */ ?>
							<?php while ( have_posts() ) : the_post(); ?>
								<div class="product-list-item">
									<a href="<?php the_permalink() ?>">
									<div class="list-image">
										<?php the_post_thumbnail('')?>
									</div>
									<div class="list-text">
										<h2><?php the_title()?></h2>
									</div>
									<div class="conteudo_produto">
											<h3><?php the_content()?>
												<?php switch($itemButton):
												case 'yes': ?>
													<a href="<?php the_permalink() ?>" class="btn-default">Saiba mais</a>
												<?php break; ?>
												<?php endswitch; ?></h3>
									</div>
									</a>
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

						<div class="">
							<h1 class="entry-title"><?php _e( 'Nothing Found', 'codesigner' ); ?></h1>
							<div class="entry-content">
								<p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'codesigner' ); ?></p>
								<?php get_search_form(); ?>
							</div><!-- .entry-content -->
						</div><!-- #post-0 -->

					<?php endif; ?>

				</div><!-- #content -->
			</div><!-- #primary -->
		</div>
	</div>
<?php get_footer(); ?>
