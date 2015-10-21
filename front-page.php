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
                    <iframe id="player_1" src="https://player.vimeo.com/video/142364749?color=ff0179&title=0&byline=0&portrait=0" width="224" height="224" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
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
                    <iframe id="player_1" src="https://player.vimeo.com/video/91085172?color=7f983b&title=0&byline=0&portrait=0" width="224" height="74" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
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
                <li>
                    <iframe id="player_1" src="https://player.vimeo.com/video/91085172?color=7f983b&title=0&byline=0&portrait=0" width="224" height="74" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                </li>
            </ul>
        </div>
                <?php
				if ( have_posts() ) {
					while ( have_posts() ) : the_post();
						get_template_part( 'content', get_post_format() );
					endwhile;

					bavotasan_pagination();
				} else {
					if ( current_user_can( 'edit_posts' ) ) {
						// Show a different message to a logged-in user who can add posts.
						?>
						<article id="post-0" class="post no-results not-found">
							<h1 class="entry-title"><?php _e( 'Nothing Found', 'arcade' ); ?></h1>

							<div class="entry-content description clearfix">
								<p><?php printf( __( 'Ready to publish your first post? <a href="%s">Get started here</a>.', 'arcade' ), admin_url( 'post-new.php' ) ); ?></p>
							</div><!-- .entry-content -->
						</article>
						<?php
					} else {
						get_template_part( 'content', 'none' );
					} // end current_user_can() check
				}
				?>
			</div><!-- #primary.c8 -->
			
			<?php 
//        get_sidebar();
            ?>
		</div>
	</div>

<?php
}
get_footer(); ?>