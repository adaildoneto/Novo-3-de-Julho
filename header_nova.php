<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till #main div
 *
 * @package Odin
 * @since 2.2.0
 */
?><!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
 <meta http-equiv="refresh" content="60">
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<!--Import Google Icon Font-->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<!--Let browser know website is optimized for mobile-->
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<?php if ( ! get_option( 'site_icon' ) ) : ?>
		<link href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.ico" rel="shortcut icon" />
	<?php endif; ?>
	<?php wp_head(); ?>
  <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({
          google_ad_client: "ca-pub-1705380769951157",
          enable_page_level_ads: true
     });
</script>
</head>

<body class="grey lighten-4">


<div class="row">


<div class="container-nova white z-depth-2" style="margin-top: 15px;">
		<nav class="nav-extended transparent z-depth-0" >


				<div class="row">


							<?php if (has_custom_logo() ): ?>

							 <div class="nav-wrapper">
								 <div class="center" style="display: block;">
								 			<?php odin_the_custom_logo();?>
								 </div>

							</div>
							<?php else : ?>

<div class="nav-wrapper center-align">

	<a class="brand-logo grey-text" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
			<i class="far fa-newspaper"></i>	<?php bloginfo( 'name' ); ?>
	</a></br>
	<h6 class="center">
		<?php bloginfo( 'description' ); ?>
	</h6>
</div>


							<?php endif ?>

						</div>

	<div class="row red darken-4">

		<div class="col s2 l9" style="padding: 0px; margin: 0px;">
			<a href="#" data-target="mobile-menu" class="sidenav-trigger"><i class="material-icons">menu</i></a>
				 <?php
						 wp_nav_menu( array(
								 'menu'              => 'main-menu',
								 'menu_id' 			=> 'primary-menu',
								 'theme_location'    => 'main-menu',
								 'depth'             =>  2,
								 'container'			=> 'div',
								 'container_class' => 'nav-wrapper red darken-1',
								 'menu_class' 		=> 'left hide-on-med-and-down',
								 'walker'			=>	new Materialize_Walker_Nav_Menu(),
						 ));
				 ?>
		 </div>

		 <div class="col s10 l3 right" style="padding: 0px; margin: 0px;">
			<div class="nav-wrapper red darken-1" >

			</div>
		</div>

	</div>


	</nav>

	<?php if ( dynamic_sidebar('topo-sidebar') ) : else : endif; ?>
	<?php 	 wp_nav_menu( array(
				 'menu'              => 'main-menu',
				 'menu_id' 			=> 'mobile-menu',
				 'theme_location'    => 'main-menu',
				 'depth'             =>  2,
				 'container'			=> 'ul',
				 'menu_class' 		=> 'sidenav',
				 'walker'			=>	new Materialize_Walker_Nav_Menu(),
		 ));
		 ?>
