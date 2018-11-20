<?php get_header(); ?>
	<div id="page" class="page-column">
	<div class="container">
	<?php do_action( 'before' ); ?>
		<div id="main" class="row">
			<div id="primary" class="col-xs-12">
				<div id="content" role="main">
					<div class="title_page">
						<h1><?php the_title() ?></h1>
						<span>
							<?php the_field('subtitulo_da_pagina');?>
						</span>
					</div>
					<?php
					global $more;
					$more = 0;
					?>
					<?php while ( have_posts() ) : the_post(); ?>
						<?php the_content(); ?>
					<?php endwhile; // end of the loop. ?>
				</div><!-- #content -->
			</div><!-- #primary -->
			</div>
		</div>
	</div>
<?php get_footer(); ?>