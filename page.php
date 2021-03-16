<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Sanitary_District_1
 */

get_header();
?>
<?php 
	$title = get_post_meta( get_the_ID(), '_hero_title', true );
	$blurb = get_post_meta( get_the_ID(), '_hero_blurb', true );
	$size = get_post_meta( get_the_ID(), '_hero_size', true );
	if ( has_post_thumbnail() ) { 
?>
<section class="hero <?php echo esc_html( $size ); ?>">
	<div class="container">
		<div class="hero-inner">
			<?php if ( get_post_meta($post->ID, 'hero_title', true) ) : ?><h1><?php echo esc_html( $title ); ?></h1><?php else: ?><h1><?php the_title(); ?></h1><?php endif; ?>
			<p><?php echo esc_html( $blurb ); ?></p>
		</div>
	</div>
	<?php the_post_thumbnail(); ?>
</section>
<section class="container">
	<div class="breadcrumb">
		<?php custom_breadcrumbs(); ?>
	</div>
</section>
<?php } else { ?>
<div class="container-fluid no-img-hero">
	<div class="container">
		<?php custom_breadcrumbs(); ?>
		<?php if ( get_post_meta($post->ID, 'hero_title', true) ) : ?><h1><?php echo esc_html( $title ); ?></h1><?php else: ?><h1><?php the_title(); ?></h1><?php endif; ?>
		<?php if ( get_post_meta($post->ID, '_hero_blurb', true) ) : ?>
			<p><?php echo esc_html( $blurb ); ?></p>
		<?php endif; ?>
	</div>
</div>
<?php } ?>
<div class="container-fluid">
	<div class="body-wrapper body-content container">
		<?php while ( have_posts() ) : the_post();
			get_template_part( 'template-parts/content', 'page' );
		endwhile; ?>
		<?php include (TEMPLATEPATH . '/inc/holiday-table.php'); ?> 
		
		
		
		
		
		
		
		
		

	</div>
</div>















<?php include (TEMPLATEPATH . '/inc/related-links.php'); ?> 
<?php
get_footer();
