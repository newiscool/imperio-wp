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
						<span><?php echo category_description(); ?></span>
					</div>
					<ul class="content_tratamentos">
						<?php
							$term = get_queried_object();
							$children = get_terms( $term->taxonomy, array(
								'parent'    => $term->term_id,
								'hide_empty' => false
								) );
								// vars
							if ( $children ) {
								foreach( $children as $subcat )
							{
								$image = get_field('taxonomia_img', $subcat->taxonomy . '_' . $subcat->term_id );
								echo '<li class="site-header"><a href="' . esc_url(get_term_link($subcat, $subcat->taxonomy)) . '">  <h2 class="title_invert">'. $subcat->name . '</h2> <figure class="img_content"><img src=" '.$image.' " /></figure> <div class="description_category">' . $subcat->description . ' </div><div class="cta">VER MAIS</div></a></li>';
							}
							}
						?>
					</ul>
				</div><!-- #content -->
			</div><!-- #primary -->
		</div>
	</div>
<?php get_footer(); ?>


