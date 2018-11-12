<?php
/**
 * The Template for displaying all single posts.
 *
 * @package codesigner
 * @since codesigner 0.1
 */

get_header(); ?>
	<div class="filter-overlay"></div>

	<div id="page" class="container">
		<?php do_action( 'before' ); ?>
		<div id="main" class="row">

			<div id="primary" class="col-xs-12">
				<div class="title_page">
					<h1><?php the_title() ?></h1>
					<span>
							<?php the_field('subtitulo_posts');?>
					</span>
				</div>
				<?php while ( have_posts() ) : the_post(); ?>
					<div class="conteudo_principal">
						<div class="post-img">
								<?php if( get_field('produtos_kit') ): ?>
									<div class="product_lists">
											<?php the_field('produtos_kit')?>
									</div>
								<?php endif; ?>

									<div class="main_image">
										<?php the_post_thumbnail()?>
									</div>
									<?php if( get_field('seal_product') ): ?>
										<div class="seal_content">
												<img src="<?php the_field('seal_product')?>" alt=""> 
										</div>
									<?php endif; ?>

						</div>
						<div class="product_description">
								<h2 id="product_description-title">DESCRIÇÃO DO TRATAMENTO</h2>
								<?php the_content('')?>
						</div>
						<?php if( get_field('passo_a_passo') ): ?>
							<div class="descricao_tratamento">
								<h2 id="product_description-title">MODO DE USAR</h2>
								<?php the_field('passo_a_passo')?>
							</div>
						<?php endif; ?>
					</div>
					<div class="post-share">
						<div class="row">
							<div class="col-xs-12">
								<ul class="sharelist">
									<li><strong>Compartilhe</strong></li>
									<li><a href="http://www.facebook.com/share.php?u=<?php the_permalink()?>&title=<?php the_title()?>" target="_blank"><i class="icon-facebook"></i></a></li>
									<li><a href="http://twitter.com/intent/tweet?status=<?php the_title()?>+<?php the_permalink()?>" target="_blank"><i class="icon-twitter"></i></a></li>
									<li><a href="https://plus.google.com/share?url=<?php the_permalink()?>" target="_blank"><i class="icon-google"></i></a></li>
									<li><a href="http://pinterest.com/pin/create/bookmarklet/?media=<?php the_post_thumbnail_url(); ?>&url=<?php the_permalink()?>&is_video=false&description=<?php the_title()?>" target="_blank"><i class="icon-pinterest"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="facebook-comment-post">
						<div class="fb-comments" data-href="<?php the_permalink(); ?>" data-width="100%" data-num-posts="10"></div>
					</div>


				<?php endwhile; // end of the loop. ?>
			</div><!-- #primary -->
		</div>
	</div>

<?php get_footer(); ?>
