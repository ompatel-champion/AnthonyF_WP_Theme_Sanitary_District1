<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Sanitary_District_1
 */

	$street = get_post_meta( get_the_ID(), 'pickup_street', true );
	$recycle = get_post_meta( get_the_ID(), 'pickup_recycle_day', true );
?>
<article class="location-wrapper">
	<h2><?php the_title(); ?></h2>
	<div class="row">
		<div class="four-col ">
			<h4>Location</h4>
			<p><?php echo esc_html( $street ); ?></p>
		</div>
		<div class="four-col ">
			<h4>Town</h4>
			<p><?php $terms = get_the_terms( $post->ID , 'town' ); foreach ( $terms as $term ) { echo $term->name; } ?></p>
		</div>
		<div class="four-col ">
			<h4>Section</h4>
			<p><?php $terms = get_the_terms( $post->ID , 'section' ); foreach ( $terms as $term ) { echo $term->name; } ?></p>
		</div>
		<div class="four-col ">
			<h4>Recycle Day</h4>
			<p><?php echo esc_html( $recycle ); ?></p>
		</div>
	</div>
	<?php edit_post_link(__('Edit')); ?>
</article>



















