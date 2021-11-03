<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<?php wp_body_open(); ?>

		<header class="header">
			<div class="container header-container">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
					<img class="logo" src="<?php echo get_bloginfo('url') ?>/wp-content/uploads/2021/10/logo.svg" alt="">
				</a>
				<div class="header-navigation">
					<?php wp_nav_menu(
					array(
						'container' => 'ul',
						'menu_id'=> 'header-menu',
						'menu_class'=> 'main-menu clearfix'
					));
					?>
				</div>
			</div>

		</header>

		<main id="primary" class="site-main" role="main">
