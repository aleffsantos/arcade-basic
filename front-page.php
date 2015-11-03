<?php
/**
 * The front page template.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @since 1.0.0
 */
get_header();

global $paged;
$bavotasan_theme_options = bavotasan_theme_options();

if ( 2 > $paged ) {
	// Display jumbo headline is the option is set
	if ( is_active_sidebar( 'jumbo-headline' ) || ! empty( $bavotasan_theme_options['jumbo_headline_title'] ) ) {
	?>
	<div class="home-top">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<?php
					if ( is_active_sidebar( 'jumbo-headline' ) ) {
						dynamic_sidebar( 'jumbo-headline' );
					} else {
						?>
						<div class="home-jumbotron jumbotron">
							<h1><?php echo apply_filters( 'the_title', html_entity_decode( $bavotasan_theme_options['jumbo_headline_title'] ) ); ?></h1>
							<p><?php echo wp_kses_post( html_entity_decode( $bavotasan_theme_options['jumbo_headline_text'] ) ); ?></p>
						</div>
						<?php
					}
					?>
				</div>
			</div>
		</div>
	</div>
	<?php
	}

	// Display home page top widgetized area
	if ( is_active_sidebar( 'home-page-top-area' ) ) {
		?>
		<div id="home-page-widgets">
			<div class="container">
				<div class="row">
					<?php dynamic_sidebar( 'home-page-top-area' ); ?>
				</div>
			</div>
		</div>
		<?php
	}
}
if ( 'page' == get_option('show_on_front') ) {
	include( get_page_template() );
} else {
?>
	<div class="container">
		<div class="row">
			<div id="primary" class="col-xs-12">
                <div class="tag-panel">
                    <p class="tag-name" style="background-color: #B8292F"># Felicidade</p>
                </div>
                   
                <!-- Place somewhere in the <body> of your page -->
                <div class="flexslider">
                    <ul class="slides">
                        <li>
                            <video width="300" height="168" controls webkitallowfullscreen mozallowfullscreen allowfullscreen style="background: #000;">
                                <source src="http://localhost/z-Frameye/wordpress/wp-content/uploads/2015/11/felicidade-SP-noelle.mp4">        
                            </video>
                        </li>
                        <li>
                            <video width="300" height="168" controls webkitallowfullscreen mozallowfullscreen allowfullscreen style="background: #000;">
                                <source src="http://localhost/z-Frameye/wordpress/wp-content/uploads/2015/11/Felicidade-SP-robson.mp4">        
                            </video>
                        </li>
                        <li>
                            <video width="300" height="168" controls webkitallowfullscreen mozallowfullscreen allowfullscreen style="background: #000;">
                                <source src="http://localhost/z-Frameye/wordpress/wp-content/uploads/2015/11/felicidade-VALINHOS-lucas.mp4">        
                            </video>
                        </li>
                        <li>
                            <video width="300" height="168" controls webkitallowfullscreen mozallowfullscreen allowfullscreen style="background: #000;">
                                <source src="http://localhost/z-Frameye/wordpress/wp-content/uploads/2015/11/Marcela-feliciade-Lonrina_PR.mp4">        
                            </video>
                        </li>
                        <li>
                            <video width="300" height="168" controls webkitallowfullscreen mozallowfullscreen allowfullscreen style="background: #000;">
                                <source src="http://localhost/z-Frameye/wordpress/?attachment_id=94">        
                            </video>
                        </li>
                        <li>
                            <video width="300" height="168" controls webkitallowfullscreen mozallowfullscreen allowfullscreen style="background: #000;">
                                <source src="http://localhost/z-Frameye/wordpress/wp-content/uploads/2015/11/Richard-Aaron_felicidade-Recife.mp4">        
                            </video>
                        </li>
                        <li>
                            <video width="300" height="168" controls webkitallowfullscreen mozallowfullscreen allowfullscreen style="background: #000;">
                                <source src="http://localhost/z-Frameye/wordpress/wp-content/uploads/2015/11/video-1443532825.mp4.mp4">        
                            </video>
                        </li>
                        <li>
                            <video width="300" height="168" controls webkitallowfullscreen mozallowfullscreen allowfullscreen style="background: #000;">
                                <source src="http://localhost/z-Frameye/wordpress/wp-content/uploads/2015/11/Felicidade-Murilo-Praia-grande.mp4">        
                            </video>
                        </li>
                        <li>
                            <video width="300" height="168" controls webkitallowfullscreen mozallowfullscreen allowfullscreen style="background: #000;">
                                <source src="http://localhost/z-Frameye/wordpress/wp-content/uploads/2015/11/felicidade-luciene-florida.mp4">        
                            </video>
                        </li>
                        <li>
                            <video width="300" height="168" controls webkitallowfullscreen mozallowfullscreen allowfullscreen style="background: #000;">
                                <source src="http://localhost/z-Frameye/wordpress/?attachment_id=85">        
                            </video>
                        </li>
                        <li>
                            <video width="300" height="168" controls webkitallowfullscreen mozallowfullscreen allowfullscreen style="background: #000;">
                                <source src="http://localhost/z-Frameye/wordpress/wp-content/uploads/2015/11/Felicidade-Felipe-Munoz-EUA-Pensacola.mp4">        
                            </video>
                        </li>
                        <li>
                            <video width="300" height="168" controls webkitallowfullscreen mozallowfullscreen allowfullscreen style="background: #000;">
                                <source src="http://localhost/z-Frameye/wordpress/wp-content/uploads/2015/11/felicidade-EUA-nadege1.mp4">        
                            </video>
                        </li>
                        <li>
                            <video width="300" height="168" controls webkitallowfullscreen mozallowfullscreen allowfullscreen style="background: #000;">
                                <source src="http://localhost/z-Frameye/wordpress/wp-content/uploads/2015/11/Felicidade-Carol-Gomes-SP.mp4">        
                            </video>
                        </li>
                        <li>
                            <video width="300" height="168" controls webkitallowfullscreen mozallowfullscreen allowfullscreen style="background: #000;">
                                <source src="http://localhost/z-Frameye/wordpress/wp-content/uploads/2015/11/Felicidade-Bruna-Herber-SP.mp4">        
                            </video>
                        </li>
                        <li>
                            <video width="300" height="168" controls webkitallowfullscreen mozallowfullscreen allowfullscreen style="background: #000;">
                                <source src="http://localhost/z-Frameye/wordpress/wp-content/uploads/2015/11/Felicidade-2-Murilo-Praia-grande.mp4">        
                            </video>
                        </li>
                        <li>
                            <video width="300" height="168" controls webkitallowfullscreen mozallowfullscreen allowfullscreen style="background: #000;">
                                <source src="http://localhost/z-Frameye/wordpress/wp-content/uploads/2015/11/felicidade-EUA-nadege2.mp4">        
                            </video>
                        </li>
                        <li>
                            <video width="300" height="168" controls webkitallowfullscreen mozallowfullscreen allowfullscreen style="background: #000;">
                                <source src="http://localhost/z-Frameye/wordpress/wp-content/uploads/2015/11/felicidade-EUA-nadege.mp4">        
                            </video>
                        </li>
                        <li>
                            <video width="300" height="168" controls webkitallowfullscreen mozallowfullscreen allowfullscreen style="background: #000;">
                                <source src="http://localhost/z-Frameye/wordpress/wp-content/uploads/2015/11/felicidade-EUA-nadege.mp4">        
                            </video>
                        </li>
                        <li>
                            <video width="300" height="168" controls webkitallowfullscreen mozallowfullscreen allowfullscreen style="background: #000;">
                                <source src="http://localhost/z-Frameye/wordpress/wp-content/uploads/2015/10/arthurfelicidade-stabarbaraEUA.mp4">        
                            </video>
                        </li>
                    </ul>
                </div>
                
                <div class="tag-panel">
                    <p class="tag-name" style="background-color: #69ABB0;"># Liberdade</p>
                </div>
                   
                <!-- SECOND SLIDER -->
                
                <div class="flexslider">
                <ul class="slides">
                    <li>
                        <video width="300" height="168" controls webkitallowfullscreen mozallowfullscreen allowfullscreen style="background: #000;">
                            <source src="http://localhost/z-Frameye/wordpress/wp-content/uploads/2015/11/Rodrigo-Poncinelli_Liberdade-Juiz-de-Fora-MG1.mov">        
                        </video>
                    </li>
                    <li>
                        <video width="300" height="168" controls webkitallowfullscreen mozallowfullscreen allowfullscreen style="background: #000;">
                            <source src="http://localhost/z-Frameye/wordpress/wp-content/uploads/2015/11/Luciene-liberdade-EUA.mp4">        
                        </video>
                    </li>
                    <li>
                        <video width="300" height="168" controls webkitallowfullscreen mozallowfullscreen allowfullscreen style="background: #000;">
                            <source src="http://localhost/z-Frameye/wordpress/wp-content/uploads/2015/11/Liberdade-POLONIA-cynthia.mp4">        
                        </video>
                    </li>
                    <li>
                        <video width="300" height="168" controls webkitallowfullscreen mozallowfullscreen allowfullscreen style="background: #000;">
                            <source src="http://localhost/z-Frameye/wordpress/wp-content/uploads/2015/11/liberdade-polly-rio-de-janeiro.mp4">        
                        </video>
                    </li>
                    <li>
                        <video width="300" height="168" controls webkitallowfullscreen mozallowfullscreen allowfullscreen style="background: #000;">
                            <source src="http://localhost/z-Frameye/wordpress/?attachment_id=99">        
                        </video>
                    </li>
                    <li>
                        <video width="300" height="168" controls webkitallowfullscreen mozallowfullscreen allowfullscreen style="background: #000;">
                            <source src="http://localhost/z-Frameye/wordpress/wp-content/uploads/2015/11/video-1443532783.mp4.mp4">        
                        </video>
                    </li>
                    <li>
                        <video width="300" height="168" controls webkitallowfullscreen mozallowfullscreen allowfullscreen style="background: #000;">
                            <source src="http://localhost/z-Frameye/wordpress/wp-content/uploads/2015/11/Stefhan-rafael_Liberdade-Recife.mp4">        
                        </video>
                    </li>
                    <li>
                        <video width="300" height="168" controls webkitallowfullscreen mozallowfullscreen allowfullscreen style="background: #000;">
                            <source src="http://localhost/z-Frameye/wordpress/wp-content/uploads/2015/11/video-1446408223.mp4.mp4">        
                        </video>
                    </li>
                </ul>
            </div>
               
                <div class="tag-panel">
                    <p class="tag-name" style="background-color: #85A640;"># Descoberta</p>
                </div>
               <!-- THIRD SLIDER -->
               
            <div class="flexslider">
            <ul class="slides">
                <li>
                    <video width="300" height="168" controls webkitallowfullscreen mozallowfullscreen allowfullscreen style="background: #000;">
                        <source src="http://localhost/z-Frameye/wordpress/wp-content/uploads/2015/11/video-1446408222.mp4.mp4">        
                    </video>
                </li>
                <li>
                    <video width="300" height="168" controls webkitallowfullscreen mozallowfullscreen allowfullscreen style="background: #000;">
                        <source src="http://localhost/z-Frameye/wordpress/wp-content/uploads/2015/11/video-1446408223.mp4.mp4">        
                    </video>
                </li>
            </ul>
        </div>
                
		</div>
	</div>

<?php
}
get_footer(); ?>