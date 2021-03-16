<?php 
get_header(); 
	$title = get_post_meta( get_the_ID(), 'page_controller_hero_title', true );
	$blurb = get_post_meta( get_the_ID(), 'page_controller_hero_blurb', true );
	$size = get_post_meta( get_the_ID(), 'page_controller_hero_size', true );
?>
<section class="hero <?php echo esc_html( $size ); ?>">
	<div class="container">
		<div class="hero-inner">
			<h1><?php echo esc_html( $title ); ?></h1>
			<p><?php echo esc_html( $blurb ); ?></p>
			<a href="#">Learn More</a>
		</div>
	</div>		
	<?php if ( has_post_thumbnail()) : ?><?php the_post_thumbnail(); ?><?php endif; ?>
</section>
<?php include (TEMPLATEPATH . '/inc/panels/service-select.php'); ?> 
<?php include (TEMPLATEPATH . '/inc/panels/pickup.php'); ?> 
<?php include (TEMPLATEPATH . '/inc/panels/news.php'); ?> 
<?php
get_footer();