<?php get_header(); ?>

<?php
	$newsSwitch = get_theme_mod('footer_newsletter_switch');
	$mainSwitch = get_theme_mod('footer_main_switch');
	$mail1 = get_theme_mod( 'email_1' );
	$mail1Name = get_theme_mod( 'email_1_name' );
	$mail2 = get_theme_mod( 'email_2' );
	$mail2Name = get_theme_mod( 'email_2_name' );
	$mail3 = get_theme_mod( 'email_3' );
	$mail3Name = get_theme_mod( 'email_3_name' );
	$mail4 = get_theme_mod( 'email_4' );
	$mail4Name = get_theme_mod( 'email_4_name' );
	$tel1 = get_theme_mod( 'tel_1' );
	$tel1Title =get_theme_mod( 'tel_1_title' );
	$tel2 = get_theme_mod( 'tel_2' );
	$tel2Title =get_theme_mod( 'tel_2_title' );
	$tel3 = get_theme_mod( 'tel_3' );
	$tel3Title =get_theme_mod( 'tel_3_title' );
	$tel4 = get_theme_mod( 'tel_4' );
	$tel4Title =get_theme_mod( 'tel_4_title' );
	$dados = get_theme_mod( 'dados_empresa' );
	$endereco = get_theme_mod( 'endereco' );
	$horario = get_theme_mod( 'horario_atendimento' );
	$logo_footer = get_theme_mod( 'footer_logo' );

	$socialSwitch = get_theme_mod('footer_social_switch');
	$facebookUrl = get_theme_mod('facebook_url');
	$facebookIcon = get_theme_mod('facebook_icon');
	$twitterUrl = get_theme_mod('twitter_url');
	$twitterIcon = get_theme_mod('twitter_icon');
	$youtubeUrl = get_theme_mod('youtube_url');
	$youtubeIcon = get_theme_mod('youtube_icon');
	$instagramUrl = get_theme_mod('instagram_url');
	$instagramIcon = get_theme_mod('instagram_icon');
	$pinterestUrl = get_theme_mod('pinterest_url');
	$pinterestIcon = get_theme_mod('pinterest_icon');
	$gplusUrl = get_theme_mod('gplus_url');
	$gplusIcon = get_theme_mod('gplus_icon');
?>

	<div id="page" class="page-single-distribuidores">
	<?php do_action( 'before' ); ?>
	<div class="container">
		<div id="main" class="row">

			<div class="title_page col-xs-12">
				<h1><?php the_title() ?></h1>
				<span>Seja um parceiro, e ganhe benefícios</span>
			</div>

			<div id="primary" class="col-xs-12">
				<div id="content" role="main">
					<div class="content_distribuidores">
						<div class="content_form">
							<h2>Seja um distribuidor</h2>
							<?php echo do_shortcode('[contact-form-7 id="52" title="Rede de distribuidores"]'); ?>
						</div>
						<div class="content-find-distribuidores">
								<h2>Localize um distribuidor</h2>
								<div class="info_contact">
									<?php if ($tel1) :?>
											<div class="text">
												<?php if($tel1Title):?><small><?php echo ($tel1Title); ?></small><?php endif;?>
												<strong><?php echo ($tel1); ?></strong>
											</div>
									<?php endif; ?>
									<?php if ($tel2) :?>
											<div class="text">
												<?php if($tel2Title):?><small><?php echo ($tel2Title); ?></small><?php endif;?>
												<strong><?php echo ($tel2); ?></strong>
											</div>
									<?php endif; ?>

									<?php if ($mail1) :?>
									<div class="mail_find_distribuidor">
										<?php if ($mail1Name) :?>
										<h2><?php echo ($mail1Name) ?></h2>
										<?php endif; ?>
										<p><?php echo ($mail1);?></p>
									</div>
									<?php endif; ?>
								</div>
						</div>
						<div class="sac_info">
									<h2>Fale conosco</h2>
									<div class="endereco_info">
										Taya Brazil
										<?php if ($dados || $endereco) :?>
										<div class="footer-block">
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
									</div>
									<?php if ($tel3) :?>
											<div class="text">
												<?php if($tel3Title):?><small><?php echo ($tel3Title); ?></small><?php endif;?>
												<strong><?php echo ($tel3); ?></strong>
											</div>
									<?php endif; ?>
									<?php if ($tel4) :?>
											<div class="text">
												<?php if($tel4Title):?><small><?php echo ($tel4Title); ?></small><?php endif;?>
												<strong><?php echo ($tel4); ?></strong>
											</div>
									<?php endif; ?>
									<?php if ($mail2) :?>
									<div class="mail_find_distribuidor">
										<?php if ($mail2Name) :?>
										<h2><?php echo ($mail2Name) ?></h2>
										<?php endif; ?>
										<p><?php echo ($mail2);?></p>
									</div>
									<?php endif; ?>
						</div>
					</div>
				</div><!-- #content -->
			</div><!-- #primary -->
		</div>
		</div>
	</div>
<?php get_footer(); ?>
