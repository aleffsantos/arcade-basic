<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the main and #page div elements.
 *
 * @since 1.0.0
 */
$bavotasan_theme_options = bavotasan_theme_options();
?>
	</main><!-- main -->
    
	<footer id="footer" role="contentinfo">
        <div class="colored-bar"></div>
		<div id="footer-content" class="container">
			<div class="row">
				<div class="copyright col-lg-12">
                    <span class="pull-left">
                       <?php printf( __( '&copy; %s %s por: <i class="fa fa-spinner"></i> <a href="*">CICLO Design</a> - All Rights Reserved.', 'arcade' ), date( 'Y' ), ' <a href="' . home_url() . '">' . get_bloginfo( 'name' ) .'</a>' ); ?></span>
                       <div id="footer_nav" class="pull-right">
                        <?php wp_nav_menu( array( 'container_class' => 'menu-footer', 'theme_location' => 'footer' ) ); ?>
                    </div>
				</div><!-- .col-lg-12 -->
			</div><!-- .row -->
		</div><!-- #footer-content.container -->
		
        
		
	</footer><!-- #footer -->
</div><!-- #page -->

<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3.16&key=AIzaSyBWcRdeBybFQUpx5tyfIw1QbwskiRuFsdc" />
<script src="library/vendor/hero-slider/js/jquery-2.1.1.js"></script>
<!-- Resource jQuery -->
<?php wp_footer(); ?>

</body>
</html>