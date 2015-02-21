<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Leniy Board
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<?php do_action( 'leniyboard_credits' ); ?>
			<a href="http://wordpress.org/" rel="generator"><?php printf( __( 'Proudly powered by %s', 'leniyboard' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( 'Theme: %1$s by %2$s.', 'leniyboard' ), 'Leniy Board', '<a href="http://blog.leniy.org" rel="designer">Leniy</a>' ); ?>
			<span class="sep"> | </span>
			<p><?php echo get_num_queries(); ?> queries in <?php timer_stop(3); ?> seconds</p>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>














<script>
jQuery(document).ready(function($) {
$(function(){
	var arr=[]
	$("article").each(function(index, element) {
        var rel=$(this).attr("rel")
		arr.push(rel)
    });
	arr = $.unique(arr)
	$.each(arr,function(key,val){
		$("."+val).eq(0).addClass("first-day")
		$("."+val+":gt(0)").addClass("same-day")
	});
	var navTop=$(".main-navigation").position().top
	$(window).scroll(function(){
		if($(window).scrollTop()>navTop){
			$(".main-navigation").addClass("locked")
		}
		else{
			$(".main-navigation").removeClass("locked")
		}
	})
});
});
</script>






</body>
</html>