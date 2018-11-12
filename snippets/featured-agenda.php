<?php
/**
 * Created by PhpStorm.
 * User: Diego
 * Date: 17/02/17
 * Time: 18:51
 */

?>
<!-- UPDATES -->

<?php
	$postColumns = get_theme_mod('ft_posts_columns');
	$itemButton = get_theme_mod('ft_posts_item_show_button');
?>

<?php switch($postColumns):
	case '1':
		$postCount = '1';
	break;
	case '2':
		$postCount = '2';
	break;
	case '3':
		$postCount = '3';
	break;
	case '4':
		$postCount = '4';
	break;
endswitch;


?>



<div class="featured-block featured-posts">

		<?php
			$updates = new WP_Query(
				array(
					'post_type' => 'agenda',
					'order' => 'DESC',
					'limit' => 12,
					'orderby'        => 'meta_value',
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

		<div class="container titulo_content">
                    <span class="titulo_home">
                        <h2>
							AGENDA
						</h2>
                    </span>
                    <span class="sub_title-home">
                            Os Melhores eventos você encontra aqui
                    </span>

			<div class="agenda-filter">
				<form action="<?php echo site_url() ?>/wp-admin/admin-ajax.php" method="POST" id="filter">
					<label>
						<i class="icon-map_point"></i>
						<input type="text" name="local_do_evento" autocomplete="off" placeholder="Digite o local do evento" />
					</label>
					<label>
						<i class="icon-calendar"></i>
						<input type="text" name="data_evento" autocomplete="off" placeholder="Data do evento" />
					</label>
					<input type="hidden" name="reset_query" />
					<span class="btn-reset"><i class="icon-reset"></i></span>
					<button>OK</button>
					<input type="hidden" name="action" value="myfilter">
				</form>
			</div>


		</div>

		<div class="agenda-wrapper">
			<div class="container">
				<div class="lds-dual-ring agenda-loader"></div>
				<ul class="updates-list agenda_content home_agenda" id="response_agenda">
					<?php if( $updates->have_posts() ): ?>
						<?php while( $updates->have_posts() ) : $updates->the_post(); ?>
							<li>
								<a href="<?php the_permalink() ?>">
									<?php the_post_thumbnail( 'homelist-thumb' ); ?>
									<h2><?php the_title()?></h2>
									<span class="data_evento"><?php the_field('data_evento');?></span>
									<div class="info_local">
										<span>
										 <span class="local_evento"><?php the_field('local_do_evento');?></span>
										<span class="cidade_evento"><?php the_field('cidade_do_evento');?></span>
											</span>
									</div>
								</a>
								<?php switch($itemButton):
								case 'yes': ?>
									<a href="<?php the_permalink() ?>" class="btn-default">Saiba mais</a>
								<?php break; ?>
								<?php endswitch; ?>
							</li>
						<?php endwhile;?>
					<?php endif;?>
					<?php wp_reset_query() ;?>

				</ul>
			</div>
		</div>

		
</div>
