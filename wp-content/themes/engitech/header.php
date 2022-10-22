<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	  <meta name="keywords" content="website, ios, android, nft, blockchain, software, fintech, app development"/>
        <meta name="description" content="Blockchain, smart contract, APP, software development in Vietnam"/>
        <link href="https://www.facebook.com/BanTaySoSolutions" rel="publisher">
        <meta name="generator" content="Công ty thiết kế website Bàn Tay Số" />
        <meta name="robots" content="index,follow,all" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<?php if ( ! function_exists( 'elementor_theme_do_location' ) || ! elementor_theme_do_location( 'header' ) ) { 
		get_template_part( 'template-parts/content', 'header' );
	} ?>

	<div id="content" class="site-content">
	<?php engitech_page_header(); ?>