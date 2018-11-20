<?php
/**
 *  * The Header for our theme.
 *  * Displays all of the <head> section and everything up till <div id="main">
 *  * @package codesigner
 *  * @since codesigner 0.1
 *  */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;
	wp_title( '|', true, 'right' );
	// Add the blog name.
	bloginfo( 'name' );
	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";
	// Add a page number if necessary:
		if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'codesigner' ), max( $paged, $page ) );
	?></title>
<?php echo get_theme_mod('font_family');?>
<script type="text/javascript" src="http://code.jquery.com/jquery-2.0.2.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/funcoes.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/slick.min.js"></script>
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_url'); ?>/css/slick-theme.css" />
	<link href="https://fonts.googleapis.com/css?family=Philosopher" rel="stylesheet">
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_url'); ?>/css/bootstrap.css" />
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_url'); ?>/css/icomoon.css" />
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
	<?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.parallax-1.1.3.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.elevateZoom-3.0.8.min.js"></script>
<?php wp_head(); ?>
<?php
	$store = get_theme_mod( 'store_link' );
	$HeaderTopSwitch = get_theme_mod( 'codesigner_header_top_switch' );
	$phone = get_theme_mod( 'tel_1' );
	$phoneTitle = get_theme_mod( 'tel_1_title' );
	$HeaderSloganSwitch = get_theme_mod( 'codesigner_header_top_slogan_switch' );
	$HeaderPhoneSwitch = get_theme_mod( 'codesigner_header_top_phone_switch' );
	$HeaderSearchSwitch = get_theme_mod( 'header_bottom_search_switch' );
	$socialSwitch = get_theme_mod('footer_social_switch');
	$facebookUrl = get_theme_mod('facebook_url');
	$facebookIcon = get_theme_mod('facebook_icon');
	$instagramUrl = get_theme_mod('instagram_url');
	$instagramIcon = get_theme_mod('instagram_icon');
	$youtubeUrl = get_theme_mod('youtube_url');
	$youtubeIcon = get_theme_mod('youtube_icon');
?>
</head>
<body <?php body_class(); ?>>
<div class="hidden" hidden>
  <?php get_template_part( 'img/sprite.svg' ); ?>
</div>
	<div id="fb-root"></div>
		<header class="main-header" role="navigation" id="main-header">
			<div class="header-bottom">
				<div class="container">
					<div class="wrap-content_home">
						<div id="main-menu-trigger" class="visible-sm visible-xs">
							<i></i>
							<i></i>
							<i></i>
						</div>
						<div class="content_logo">
							<div class="main-logo">
								<?php if ( get_theme_mod( 'upload_logo' ) ) : ?>
									<a href="<?php echo home_url(); ?>">
										<img src='<?php echo esc_url( get_theme_mod( 'upload_logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'>
									</a>
								<?php else :?>
									<a href="<?php echo home_url(); ?>">
										<?php bloginfo('name'); ?>
									</a>
								<?php endif; ?>
							</div>
						</div>
						<div class="wrapper">
							<div class="menu_search">
								<div class="main-menu">
									<?php wp_nav_menu( array(
										'menu'              => 'primary',
										'theme_location'    => 'primary',
										'depth'             => 3,
										'container'         => 'div',
										'menu_class'        => 'main-menu-list'
									));	?>
								</div>
							</div>
						</div>
					</div>
					<div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
					    <?php if(function_exists('bcn_display')) { bcn_display();}?>
					</div>
				</div>
			</div>
		</header>
