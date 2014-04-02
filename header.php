<!DOCTYPE html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width">
<title><?php is_front_page() ? bloginfo('description') : wp_title(''); ?> - <?php bloginfo('name'); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<!--[if lt IE 9]><script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script><![endif]-->
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header id="head">
	<h1 id="title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
	<p id="description"><?php bloginfo( 'description' ); ?></p>
	<nav id="menu"><?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?></nav>
</header>