<?php
/**
 * The header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<style>
		.se-pre-con {
			position: fixed;
			display: flex;
			flex-direction: row;
			justify-content: center;
			left: 0px;
			top: 0px;
			width: 100vw;
			height: 100vh;
			z-index: 9999;
			background: #fff;
			color: #000;
			text-align: center;
		}
		.se-pre-con img {
			width: 75px;
			height: 80px;
			top: 50%;
			left: 50%;
			margin-top: -40px;
			margin-left: -37px;
			position: absolute;
		}
		.sk-chase {
			width: 40px;
			height: 40px;
			position: relative;
			animation: sk-chase 2.5s infinite linear both;
			align-self: center;
		}

		.sk-chase-dot {
			width: 100%;
			height: 100%;
			position: absolute;
			left: 0;
			top: 0;
			animation: sk-chase-dot 2.0s infinite ease-in-out both;
		}

		.sk-chase-dot:before {
			content: '';
			display: block;
			width: 25%;
			height: 25%;
			background-color: #000;
			border-radius: 100%;
			animation: sk-chase-dot-before 2.0s infinite ease-in-out both;
		}

		.sk-chase-dot:nth-child(1) { animation-delay: -1.1s; }
		.sk-chase-dot:nth-child(2) { animation-delay: -1.0s; }
		.sk-chase-dot:nth-child(3) { animation-delay: -0.9s; }
		.sk-chase-dot:nth-child(4) { animation-delay: -0.8s; }
		.sk-chase-dot:nth-child(5) { animation-delay: -0.7s; }
		.sk-chase-dot:nth-child(6) { animation-delay: -0.6s; }
		.sk-chase-dot:nth-child(1):before { animation-delay: -1.1s; }
		.sk-chase-dot:nth-child(2):before { animation-delay: -1.0s; }
		.sk-chase-dot:nth-child(3):before { animation-delay: -0.9s; }
		.sk-chase-dot:nth-child(4):before { animation-delay: -0.8s; }
		.sk-chase-dot:nth-child(5):before { animation-delay: -0.7s; }
		.sk-chase-dot:nth-child(6):before { animation-delay: -0.6s; }

		@keyframes sk-chase {
			100% { transform: rotate(360deg); }
		}

		@keyframes sk-chase-dot {
			80%, 100% { transform: rotate(360deg); }
		}

		@keyframes sk-chase-dot-before {
			50% {
				transform: scale(0.4);
			} 100%, 0% {
				  transform: scale(1.0);
			  }
		}
	</style>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<!-- Theme color for chrome -->
	<meta name="theme-color" content="#141414"/>

	<?php wp_head(); ?>
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
		<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
	<link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"/>
	<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

</head>

<body <?php body_class(); ?> <?php understrap_body_attributes(); ?>>

<!-- LOADER SCREEN -->
<div class="se-pre-con">
	<div class="sk-chase">
		<div class="sk-chase-dot"></div>
		<div class="sk-chase-dot"></div>
		<div class="sk-chase-dot"></div>
		<div class="sk-chase-dot"></div>
		<div class="sk-chase-dot"></div>
		<div class="sk-chase-dot"></div>
	</div>
</div>

<?php do_action( 'wp_body_open' ); ?>
<div class="site" id="page"><!-- do not remove -->

<!-- MOBILE NAV -->
	<?php get_template_part("mobile-menu"); ?>
	<main id="panel"><!-- needed for mobile menu. this is what slides when you click mobile menu button -->

