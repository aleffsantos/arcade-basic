<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <main>
 * and the left sidebar conditional
 *
 * @since 1.0.0
 */
?><!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>><![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>><![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9" <?php language_attributes(); ?>><![endif]-->
<!--[if gt IE 8]><!--><html class="no-js" <?php language_attributes(); ?>><!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="profile" href="css/custom.css">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if IE]><script src="<?php echo BAVOTASAN_THEME_URL; ?>/library/js/html5.js"></script><![endif]-->
	<?php wp_head(); ?>
    <!-- HERO-SLIDER LINKS -->
    <link rel="stylesheet" href="wp-content/themes/arcade-basic/library/vendor/hero-slider/css/reset.css"> <!-- CSS reset -->
    <link rel="stylesheet" href="wp-content/themes/arcade-basic/library/vendor/hero-slider/css/style.css"> <!-- Resource style -->
    <script src="wp-content/themes/arcade-basic/library/vendor/hero-slider/js/modernizr.js"></script>
    <!-- HERO-SLIDER LINKS -->
</head>
<?php
$bavotasan_theme_options = bavotasan_theme_options();
$space_class = '';
?>
<body <?php body_class(); ?>>

	<div id="page">

		<header id="header">
			<nav id="site-navigation" class="navbar navbar-inverse navbar-fixed-top" role="navigation">
				<h3 class="sr-only"><?php _e( 'Main menu', 'arcade' ); ?></h3>
				<a class="sr-only" href="#primary" title="<?php esc_attr_e( 'Skip to content', 'arcade' ); ?>"><?php _e( 'Skip to content', 'arcade' ); ?></a>

				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				    </button>
				</div>

				<div class="collapse navbar-collapse">
					<?php
					$menu_class = ( is_rtl() ) ? ' navbar-right' : '';
					wp_nav_menu( array( 'theme_location' => 'primary', 'container' => '', 'menu_class' => 'nav navbar-nav' . $menu_class, 'fallback_cb' => 'bavotasan_default_menu' ) );
					?>
					
				</div>
			</nav><!-- #site-navigation -->

			 <div class="title-card-wrapper">
                <div class="title-card">
    				<div id="site-meta">
    					<h1 id="site-title">
                            <a href="<?php echo esc_url( home_url() ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
                                
                                <img src="http://localhost/z-Frameye/wordpress/wp-content/uploads/2015/10/frameye-shadow-1-1-8-multiply.png">
                            </a>
    					</h1>
                        
                        
                        
                        
                        
                        

    					<?php if ( $bavotasan_theme_options['header_icon'] ) { ?>
    					<?php } else {
    						$space_class = ' class="margin-top"';
    					} ?>

						<?php
						/**
						 * You can overwrite the defeault 'See More' text by defining the 'BAVOTASAN_SEE_MORE'
						 * constant in your child theme's function.php file.
						 */
						if ( ! defined( 'BAVOTASAN_SEE_MORE' ) )
							define( 'BAVOTASAN_SEE_MORE', __( 'See More', 'arcade' ) );
						?>
    					<a href="#" id="more-site" class="btn btn-default btn-lg"> Login</a>
    					
                        <a href="file:///C:/wamp/www/z-Frameye/estudos/FilterJs/examples/map.html" id="more-site" class="btn btn-default btn-lg"> Mapa</a>
                        <a href="http://localhost/z-Frameye/wordpress/sobre/" id="more-site" class="btn btn-default btn-lg"> Sobre</a>
    					
    				</div>

    				<?php
    				// Header image section
    				bavotasan_header_images();
    				?>
				</div>
			</div>
            
            
            <!--SCRIPT FILTERMAPS-->
            
            <!--SCRIPT FILTERMAPS-->

		</header>

		<main>