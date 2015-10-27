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