<?php
	session_start();
	if( isset( $_GET[ 'sprytne' ] ) or isset( $_COOKIE[ 'sprytne' ] ) ){
		$_SESSION[ 'sprytne' ]  = true;
		
	}
	
	if( $_SESSION[ 'sprytne' ] !== true ){
		include "wbudowie.php";
		exit;
		
	}
	
	define( 'DMODE', isset( $_COOKIE[ 'sprytne' ] ) );
	
?>
<!DOCTYPE html>
<html lang="pl">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no, shrink-to-fit=no">
		<meta charset="utf-8">
		<?php
			$infix = DMODE?( "" ):( ".min" );
			$buster = DMODE?( time() ):( false );
			
			// ładowanie styli
			// wp_enqueue_style( string $handle, string $src = '', array $deps = array(), string|bool|null $ver = false, string $media = 'all' )
			wp_enqueue_style( 'bootstrap', get_template_directory_uri() . "/css/bootstrap.css" );
			wp_enqueue_style( 'fontawesome', get_template_directory_uri() . "/css/font-awesome.min.css" );
			wp_enqueue_style( 'gfont-Lora', "https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" );
			wp_enqueue_style( 'gfont-OpenSans', "https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" );
			wp_enqueue_style( 'gfont-MuktaMahee', "https://fonts.googleapis.com/css?family=Mukta+Mahee:200,300,400,500,600,700,800" );
			wp_enqueue_style( 'style', get_template_directory_uri() . "/style{$infix}.css", array(), $buster );
			
			// ładowanie skryptów
			// wp_enqueue_script( string $handle, string $src = '', array $deps = array(), string|bool|null $ver = false, bool $in_footer = false )
			wp_enqueue_script( 'jQ', get_template_directory_uri() . "/js/jquery.min.js", array(), false, true );
			wp_enqueue_script( 'jQ-Touch-Swipe', get_template_directory_uri() . "/js/jquery.touchSwipe.min.js", array(), false, true );
			wp_enqueue_script( 'bootstrap', get_template_directory_uri() . "/js/bootstrap.bundle.min.js", array(), false, true );
			wp_enqueue_script( 'clean-blog', get_template_directory_uri() . "/js/clean-blog.min.js", array(), false, true );
			wp_enqueue_script( 'clean-blog', get_template_directory_uri() . "/js/clean-blog.min.js", array(), false, true );
			wp_enqueue_script( 'GSAP-CSS', get_template_directory_uri() . "/js/CSSPlugin.min.js", array(), false, true );
			wp_enqueue_script( 'GSAP-Tween', get_template_directory_uri() . "/js/TweenLite.min.js", array(), false, true );
			
			wp_enqueue_script( 'akordeon', get_template_directory_uri() . "/js/akordeon{$infix}.js", array(), $buster, true );
			wp_enqueue_script( 'wiza-wniosek', get_template_directory_uri() . "/js/wiza-wniosek{$infix}.js", array(), $buster, true );
			
			wp_enqueue_script( 'FP-Slider', get_template_directory_uri() . "/js/fp_slider{$infix}.js", array(), $buster, true );
			wp_enqueue_script( 'FP-Slidein', get_template_directory_uri() . "/js/fp_slidein{$infix}.js", array(), $buster, true );
			wp_enqueue_script( 'FP-Pin', get_template_directory_uri() . "/js/fp_pin{$infix}.js", array(), $buster, true );
			wp_enqueue_script( 'FP-Filter', get_template_directory_uri() . "/js/fp_filter{$infix}.js", array(), $buster, true );
			wp_enqueue_script( 'FP-Form', get_template_directory_uri() . "/js/fp_form{$infix}.js", array(), $buster, true );
			
		?>
		<?php wp_head(); ?>
	</head>
	<body class='<?php bodyMarkUp(); ?>'>