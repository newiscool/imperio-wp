<?php

/**
Diego
 * Created by PhpStorm.

 * User: Vanssiler

 * Date: 17/02/17

 * Time: 18:51

 */



?>

<!-- UPDATES -->



<?php

	$productColumns = get_theme_mod('ft_products_columns');

	$itemButton = get_theme_mod('ft_products_item_show_button');

?>



<?php switch($productColumns):

	case '1':

		$productCount = '1';

	break;

	case '2':

		$productCount = '2';

	break;

	case '3':

		$productCount = '3';

	break;

	case '4':

		$productCount = '4';

	break;

endswitch; ?>



<?php

$product = new WP_Query(

	array(

		'post_type' => 'produtos',

		'posts_per_page' => $productCount,

		'meta_query'	=> array(

			'relation'		=> 'AND',

			array(

				'key'	  	=> 'destaque_na_home',

				'value'	  	=> '1',

				'compare' 	=> '=',

			),

		),

	)

);

?>

<ul class="featured-products">

<?php if( $product->have_posts() ): ?>

<?php while( $product->have_posts() ) : $product->the_post(); ?>



	<li>

		<div class="content_featured_home">

			<a href="<?php the_permalink() ?>" class="content_img">

				<?php the_post_thumbnail( '' ); ?>

			</a>

				<div class="conteudo_titulo">

					<a href="<?php the_permalink() ?>">

					<h2>

						<?php the_title()?>

						<span>

								<?php the_field('subtitulo_posts');?>

						</span>

					</h2>

					<h3>

						<?php the_content()?>

					</h3>

				</a>

				</div>

			</div>

	</li>

<?php endwhile;?>

<?php endif;?>

<?php wp_reset_query() ;?>

</ul>

