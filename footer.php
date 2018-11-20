<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package codesigner
 * @since codesigner 0.1
 */
?>
<?php
$newsSwitch 	= 	get_theme_mod('footer_newsletter_switch');
$mainSwitch 	= 	get_theme_mod('footer_main_switch');
$mail1 			= 	get_theme_mod( 'email_1' );
$mail1Name 		= 	get_theme_mod( 'email_1_name' );
$mail2 			= 	get_theme_mod( 'email_2' );
$mail2Name 		= 	get_theme_mod( 'email_2_name' );
$mail3 			= 	get_theme_mod( 'email_3' );
$mail3Name 		= 	get_theme_mod( 'email_3_name' );
$mail4 			= 	get_theme_mod( 'email_4' );
$mail4Name 		= 	get_theme_mod( 'email_4_name' );
$tel1 			= 	get_theme_mod( 'tel_1' );
$tel1Title 		= 	get_theme_mod( 'tel_1_title' );
$tel2 			= 	get_theme_mod( 'tel_2' );
$tel2Title 		= 	get_theme_mod( 'tel_2_title' );
$tel3 			= 	get_theme_mod( 'tel_3' );
$tel3Title 		= 	get_theme_mod( 'tel_3_title' );
$tel4 			= 	get_theme_mod( 'tel_4' );
$tel4Title 		= 	get_theme_mod( 'tel_4_title' );
$dados 			= 	get_theme_mod( 'dados_empresa' );
$endereco 		= 	get_theme_mod( 'endereco' );
$horario 		= 	get_theme_mod( 'horario_atendimento' );
$logo_footer 	=	get_theme_mod( 'footer_logo' );
$socialSwitch 	=	get_theme_mod('footer_social_switch');
$facebookUrl 	=	get_theme_mod('facebook_url');
$facebookIcon 	=	get_theme_mod('facebook_icon');
$twitterUrl 	=	get_theme_mod('twitter_url');
$twitterIcon 	=	get_theme_mod('twitter_icon');
$youtubeUrl 	=	get_theme_mod('youtube_url');
$youtubeIcon 	=	get_theme_mod('youtube_icon');
$instagramUrl 	=	get_theme_mod('instagram_url');
$instagramIcon 	=	get_theme_mod('instagram_icon');
$pinterestUrl 	=	get_theme_mod('pinterest_url');
$pinterestIcon 	=	get_theme_mod('pinterest_icon');
$gplusUrl 		=	get_theme_mod('gplus_url');
$gplusIcon 		=	get_theme_mod('gplus_icon');
?>
<footer class="footer">
	<div class="svg__wrapper svg__search">
		<svg shape-rendering="geometricPrecision">
		<use xlink:href="<?php echo is_customize_preview() ? esc_url( get_template_directory_uri() . '/img/sprite.svg' ) : '' ; ?>#icon-arvore">"></use>
		</svg>
	</div>

	<div class="content_footer">
		<div class="content_logo">
			<div class="main-logo">
				<?php if ( get_theme_mod( 'upload_logo' ) ) : ?>
					<a href="<?php echo home_url(); ?>"><img src='<?php echo esc_url( get_theme_mod( 'upload_logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'></a>
				<?php else :?>
					<a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>
				<?php endif; ?>
			</div>
		</div>
			
		<div class="footer-box">
			<h2>Contato</h2>
			<?php if ($mail1) :?>
				<div class="footer-block">
					<?php if ($mail1Name) :?>
						<small><?php echo ($mail1Name) ?></small>
					<?php endif; ?>
					<p><?php echo ($mail1);?></p>
				</div>
			<?php endif; ?>

			<?php if ($mail2) :?>
				<div class="footer-block">
					<?php if ($mail2Name) :?>
						<small><?php echo ($mail2Name) ?></small>
					<?php endif; ?>
					<p><?php echo ($mail2);?></p>
				</div>
			<?php endif; ?>

			<?php if ($mail3) :?>
				<div class="footer-block">
					<?php if ($mail3Name) :?>
						<small><?php echo ($mail3Name) ?></small>
					<?php endif; ?>
					<p><?php echo ($mail3);?></p>
				</div>
			<?php endif; ?>

			<?php if ($mail4) :?>
				<div class="footer-block">
					<?php if ($mail4Name) :?>
						<small><?php echo ($mail4Name) ?></small>
					<?php endif; ?>
					<p><?php echo ($mail4);?></p>
				</div>
			<?php endif; ?>

			<div class="televendas">
				<?php if ($tel1) :?>
					<?php echo get_theme_mod('tel_1_icon');?>
					<div class="text">
						<?php if($tel1Title):?><small><?php echo ($tel1Title); ?></small><?php endif;?>
						<strong><?php echo ($tel1); ?></strong>
					</div>
				<?php endif; ?>
				<?php if ($tel2) :?>	
					<?php echo get_theme_mod('tel_1_icon');?>
					<div class="text">
						<?php if($tel2Title):?><small><?php echo ($tel2Title); ?></small><?php endif;?>
						<strong><?php echo ($tel2); ?></strong>
					</div>
				<?php endif; ?>
			</div>

			<div class="footer-menu">
				<h2>Institucional</h2>
				<?php wp_nav_menu( array(
					'menu'              => 'primary',
					'theme_location'    => 'primary',
					'depth'             => 3,
					'container'         => 'div',
					'menu_class'        => 'footer-menu-list'
				));	?>
			</div>
		</div>

		<div class="footer_social">
			<h2>Siga a Império Lazer</h2>
			<ul class="social_list">
				<?php if ($facebookUrl) :?>
					<li><a href="<?php echo($facebookUrl) ?>" target="_blank"><?php echo($facebookIcon) ?></a></li>
				<?php endif; ?>
				<?php if ($twitterUrl) :?>
					<li><a href="<?php echo($twitterUrl) ?>" target="_blank"><?php echo($twitterIcon) ?></a></li>
				<?php endif; ?>
				<?php if ($youtubeUrl) :?>
					<li><a href="<?php echo($youtubeUrl) ?>" target="_blank"><?php echo($youtubeIcon) ?></a></li>
				<?php endif; ?>
				<?php if ($instagramUrl) :?>
					<li><a href="<?php echo($instagramUrl) ?>" target="_blank"><?php echo($instagramIcon) ?></a></li>
				<?php endif; ?>
				<?php if ($pinterestUrl) :?>
					<li><a href="<?php echo($pinterestUrl) ?>" target="_blank"><?php echo($pinterestIcon) ?></a></li>
				<?php endif; ?>
				<?php if ($gplusUrl) :?>
					<li><a href="<?php echo($gplusUrl) ?>" target="_blank"><?php echo($gplusIcon) ?></a></li>
				<?php endif; ?>
			</ul>
		</div>

		<?php if(get_theme_mod('facebook_url')):?>
			<div class="likebox">
				<div class="fb-page" 
					data-href="<?php echo get_theme_mod( 'facebook_url' ); ?>" 
					data-small-header="true"  
					data-width="300"  
					data-hide-cover="false" 
					data-show-facepile="true">
					<blockquote cite="<?php echo get_theme_mod( 'facebook_url' ); ?>" class="fb-xfbml-parse-ignore">
						<a href="<?php echo get_theme_mod( 'facebook_url' ); ?>"></a>
					</blockquote>
				</div>
			</div>
			
		<?php endif;?>
	</div>
	<div class="footer-ressalva">
		<div class="container">
			<?php if (get_theme_mod('ressalva_title')): ?>
				<h3><?php echo get_theme_mod('ressalva_title')?></h3>
			<?php endif;?>
			<p><?php echo get_theme_mod('ressalva_text');?></p>
		</div>
	</div>


	<?php if ($dados || $endereco) :?>
		<div class="adress-block">
			<p>
				<?php if($dados) :?>
					<?php echo ($dados);?>
				<?php endif ;?>
				<?php if($endereco) :?>
					<?php echo ($endereco);?>
				<?php endif ;?>
			</p>
		</div>
	<?php endif; ?>
</footer><!-- #colophon -->
<?php wp_footer(); ?>
<?php echo get_theme_mod('analytics');?>
</body>
</html>

