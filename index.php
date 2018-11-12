<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package codesigner
 * @since codesigner 0.1
 */
get_header(); ?>
<?php
	$about 				= get_theme_mod('about_empresa' );
	$conceito 			= get_theme_mod('conceito_empresa' );
	$AboutTrigger 		= get_theme_mod('about_trigger');
	$PostsTrigger 		= get_theme_mod('posts_trigger');
	$sliderTrigger 		= get_theme_mod('slider_trigger');
	$EventsTrigger 		= get_theme_mod('events_trigger');
	$ProductsTrigger 	= get_theme_mod('products_trigger');
;?>
<?php switch($sliderTrigger):
	case '1': ?>
		<?php get_template_part('snippets/slider')?>
	<?php break; ?>
<?php endswitch; ?>
<div id="page">
<?php if(is_home()){ ?>
	<div class="dobra_1">
		<div class="destaque">
			<?php echo do_shortcode('[vsz_slick_slider id ="28"]');?>
		</div>
	</div>
	<div class="banner-secundarios">
		<?php echo do_shortcode('[vsz_slick_slider id="35"]');?>
	</div>
	<div class="dobra2 container">
		<div class="nossos-servicos">
			<span class="titulo-brand">Império lazer</span>
			<span class="titulo-sessao">O que fazemos</span>
			<span class="texto-sobre">
				<?php if ($about) :?>
					<div class="adress-block">
						<?php if($about) :?>
							<?php echo ($about);?>
						<?php endif ;?>
					</div>
				<?php endif; ?>
			</span>
		</div>
		<?php $template_directory = get_template_directory_uri(); ?>
		<div class="static-image col-md-5 hidden-xs hidden-sm">
			<figure>
				<img src="<?php echo $template_directory;?>/img/staticimg.jpg"/>
			</figure>
		</div>
	</div>
<?php } ?>
	<?php if(is_home()){ ?>
		<div class="carrossel-produtos">
			<div class="produtos-list">
				<?php echo do_shortcode('[vsz_slick_slider id="46"]');?>
			</div>
		</div>
	<?php } ?>

	<div class="dobra2 container">
		<div class="nossos-servicos">
			<span class="titulo-brand">Produtos sustentáveis</span>
			<span class="titulo-sessao">Conceito</span>
			<span class="texto-sobre">
				<?php if ($conceito) :?>
					<div class="adress-block">
						<?php if($conceito) :?>
							<?php echo ($conceito);?>
						<?php endif ;?>
					</div>
				<?php endif; ?>
			</span>
		</div>
		<?php $template_directory = get_template_directory_uri(); ?>
		<div class="static-image col-md-5 hidden-xs hidden-sm">
			<figure>
				<img src="<?php echo $template_directory;?>/img/staticimg.jpg"/>
			</figure>
		</div>
	</div>

	</div><!-- #page -->
	<?php get_footer(); ?>