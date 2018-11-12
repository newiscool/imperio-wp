<?php
/**
 * The Template for displaying all single posts.
 *
 * @package codesigner
 * @since codesigner 0.1
 */

get_header(); ?>
	<div id="page">
		<?php do_action( 'before' ); ?>
		<div id="main">

			<?php while ( have_posts() ) : the_post(); ?>
			<div id="product-main-infos">
				<div class="container">
					<div class="title_page">
						<h1><?php the_title() ?></h1>
						<span>
								<?php the_field('subtitulo_posts');?>
							</span>
					</div>
					<div class="conteudo_principal-produto">
						<div class="main_image">

								<?php the_post_thumbnail('')?>

						</div>

					<div class="product_description">
							<h2 id="product_description-title">Descrição do produto</h2>
							<?php the_content('')?>
					</div>

					<?php if( get_field('modo_de_usar') ): ?>
						<div class="descricao_tratamento">
								<h2 id="product_description-title">Modo de usar</h2>
								<?php the_field('modo_de_usar')?>
						</div>
					<?php endif; ?>

					</div>

					<div class="product-share">
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
				</div>
			</div>
			</div>

			<?php endwhile; // end of the loop. ?>
		</div>
	</div>

	<style>
	  body.produtos-template-default.single.single-produtos {
	    background-image: url("<?php bloginfo('template_directory'); ?>/img/bg_product.jpeg ");
			background-repeat: no-repeat;
			background-attachment: fixed;
			background-size: cover;
			background-position: 30%;
	  }
	</style>

<?php get_footer(); ?>
