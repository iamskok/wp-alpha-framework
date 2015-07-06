<?php
/**
* The header for the theme.
*/
?>

<?php
	// Get the favicon
	$favicon = IMAGES . '/icons/favicon.png';

	// Get the custom touch icon
	$touch_icon = IMAGES . '/icons/apple-touch-icon-152x152-precomposed.png';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<title><?php wp_title( '|', true, 'right' ); ?><?php bloginfo( 'name' ) ?></title>
	<meta name="description" content="<?php bloginfo( 'description' ) ?>">

	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/style.css">

	<link rel="shortcut icon" href="<?php echo $favicon; ?>">
	<link rel="apple-touch-icon-precomposed" size=-"152x152" href="<?php echo $touch_icon; ?>">

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<!-- Header -->
<header class="site-header" role="banner">
	<div class="container">
		<div class="row">
			<div class="col-xs-3">
				<div class="site-logo">
					<a href="<?php esc_url( home_url( '/' ) ); ?>" rel="home"></a>
				</div>
			</div>
			<div class="col-xs-9">
				<nav class="site-navigation" role="navigation">
					<?php
						/**
						* Displays a navigation menu
						* @param array $args Arguments
						*/
						wp_nav_menu(
							array(
								'theme_location' => 'main-menu',
								'menu_class' => 'site-menu'
							)
						);
					?>
				</nav>
			</div><!-- .col-xs-9 -->
		</div><!-- .row -->
	</div><!-- .container -->
</header><!-- .site-header -->

<!-- Main Contnent Area -->
<div class="container">
	<div class="row">

