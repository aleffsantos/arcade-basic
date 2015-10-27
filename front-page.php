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
                    <p><span class="badge-tag">#</span>
                    <span class="tag-name">Felicidade</span></p>
                </div>
                <!-- Place somewhere in the <body> of your page -->
                <div class="flexslider">
                    <ul class="slides">
                        <li>
                            <iframe id="player_1" src="https://player.vimeo.com/video/142904077?title=0&byline=0&portrait=0" width="200" height="126" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </li>
                        <li>
                            <iframe id="player_1" src="https://player.vimeo.com/video/141692625?title=0&byline=0&portrait=0" width="200" height="126" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </li>
                        <li>
                            <iframe id="player_1" src="https://player.vimeo.com/video/142097942?title=0&byline=0&portrait=0" width="200" height="126" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </li>
                        <li>
                            <iframe id="player_1" src="https://player.vimeo.com/video/142888768?color=ffffff&title=0&byline=0&portrait=0" width="200" height="126" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </li>
                        <li>
                            <iframe id="player_1" src="http://player.vimeo.com/video/39683393?api=1&player_id=player_1" width="200" height="126" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
                        </li>
                        <li>
                            <iframe id="player_1" src="https://player.vimeo.com/video/142904077?title=0&byline=0&portrait=0" width="200" height="126" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </li>
                        <li>
                            <iframe id="player_1" src="https://player.vimeo.com/video/141692625?title=0&byline=0&portrait=0" width="200" height="126" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </li>
                        <li>
                            <iframe id="player_1" src="https://player.vimeo.com/video/142097942?title=0&byline=0&portrait=0" width="200" height="126" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </li>
                        <li>
                            <iframe id="player_1" src="https://player.vimeo.com/video/142097942?title=0&byline=0&portrait=0" width="200" height="126" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </li>
                        <li>
                            <iframe id="player_1" src="https://player.vimeo.com/video/142888768?color=ffffff&title=0&byline=0&portrait=0" width="200" height="126" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </li>
                        <li>
                            <iframe id="player_1" src="http://player.vimeo.com/video/39683393?api=1&player_id=player_1" width="200" height="126" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
                        </li>
                        <li>
                            <iframe id="player_1" src="https://player.vimeo.com/video/142904077?title=0&byline=0&portrait=0" width="200" height="126" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </li>
                        <li>
                    </ul>
                </div>
                
                <div class="tag-panel">
                    <p><span class="badge-tag" style="color:#69ABB0;">#</span>
                        <span class="tag-name" style="background-color: #69ABB0;">Liberdade</span></p>
                </div>
                <!-- SECOND SLIDER -->
                
                <div class="flexslider">
                <ul class="slides">
                    <li>
                        <iframe id="player_1" src="https://player.vimeo.com/video/141843181?color=5ea9b1&title=0&byline=0&portrait=0" width="200" height="126" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                    </li>
                    <li>
                        <iframe id="player_1" src="https://player.vimeo.com/video/142895278?color=5ea9b1&title=0&byline=0&portrait=0" width="200" height="126" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                    </li>
                    <li>
                        <iframe id="player_1" src="https://player.vimeo.com/video/141929668?color=5ea9b1&title=0&byline=0&portrait=0" width="200" height="126" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                    </li>
                    <li>
                        <iframe id="player_1" src="https://player.vimeo.com/video/137158633?color=ffffff&title=0&byline=0&portrait=0&badge=0" width="200" height="126" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                    </li>
                    <li>
                        <iframe id="player_1" src="https://player.vimeo.com/video/141843181?color=5ea9b1&title=0&byline=0&portrait=0" width="200" height="126" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                    </li>
                    <li>
                        <iframe id="player_1" src="https://player.vimeo.com/video/142895278?color=5ea9b1&title=0&byline=0&portrait=0" width="200" height="126" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                    </li>
                    <li>
                        <iframe id="player_1" src="https://player.vimeo.com/video/141929668?color=5ea9b1&title=0&byline=0&portrait=0" width="200" height="126" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                    </li>
                    <li>
                        <iframe id="player_1" src="https://player.vimeo.com/video/142652233?color=ffffff&title=0&byline=0&portrait=0" width="200" height="126" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                    </li>
                    <li>
                        <iframe id="player_1" src="https://player.vimeo.com/video/141843181?color=5ea9b1&title=0&byline=0&portrait=0" width="200" height="126" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                    </li>
                    <li>
                        <iframe id="player_1" src="https://player.vimeo.com/video/142895278?color=5ea9b1&title=0&byline=0&portrait=0" width="200" height="126" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                    </li>
                </ul>
            </div>
               
                <div class="tag-panel">
                    <p><span class="badge-tag" style="color:#85A640;">#</span>
                        <span class="tag-name" style="background-color: #85A640;">Humanidade</span></p>
                </div>
               <!-- THIRD SLIDER -->
               
            <div class="flexslider">
            <ul class="slides">
                <li>
                    <iframe id="player_1" src="https://player.vimeo.com/video/142168579?color=7f983b&title=0&byline=0&portrait=0" width="200" height="126" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                </li>
                <li>
                    <iframe id="player_1" src="https://player.vimeo.com/video/142783501?color=7f983b&title=0&byline=0&portrait=0" width="200" height="126" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                </li>
                <li>
                    <iframe id="player_1" src="https://player.vimeo.com/video/142568836?color=7f983b&title=0&byline=0&portrait=0" width="200" height="126" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                </li>
                <li>
                    <iframe id="player_1" src="https://player.vimeo.com/video/142245723?color=7f983b&title=0&byline=0&portrait=0" width="200" height="126" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                </li>
                <li>
                    <iframe id="player_1" src="https://player.vimeo.com/video/29017795?color=7f983b&title=0&byline=0&portrait=0" width="200" height="126" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                </li>
                <li>
                    <iframe id="player_1" src="https://player.vimeo.com/video/108679294?color=7f983b&title=0&byline=0&portrait=0&badge=0" width="200" height="126" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                </li>
                <li>
                    <iframe id="player_1" src="https://player.vimeo.com/video/96992249?color=ffffff" width="200" height="126" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                </li>
                <li>
                    <iframe id="player_1" src="https://player.vimeo.com/video/142245723?color=7f983b&title=0&byline=0&portrait=0" width="200" height="126" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                </li>
                <li>
                    <iframe id="player_1" src="https://player.vimeo.com/video/29017795?color=7f983b&title=0&byline=0&portrait=0" width="200" height="126" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                </li>
                <li>
                    <iframe id="player_1" src="https://player.vimeo.com/video/108679294?color=7f983b&title=0&byline=0&portrait=0&badge=0" width="200" height="126" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                </li>
            </ul>
        </div>
                
		</div>
	</div>

<?php
}
get_footer(); ?>