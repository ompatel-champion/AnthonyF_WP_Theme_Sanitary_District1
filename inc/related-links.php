<div class="container">
<?php 

$orig_post = $post; global $post;
$tags = wp_get_post_tags($post->ID);
	if ($tags) {
		$tag_ids = array();
		foreach($tags as $individual_tag) $tag_ids[] = $individual_tag->term_id;
		$args=array(
			'tag__in' 						=> $tag_ids,
			'post__not_in' 				 => array($post->ID),
			'posts_per_page'		  =>3,
			'ignore_sticky_posts'	 =>1,
			'post_type' 				  => array('page', 'post'),
		);
		$my_query = new wp_query( $args );
		if( $my_query->have_posts() ) {
			echo '<div class="row related-links">';
				while( $my_query->have_posts() ) {
			$my_query->the_post(); ?>
				<div class="three-col">
					<div class="three-col-img">
						<?php the_post_thumbnail(); ?>
					</div>
					<div class="three-col-content">
						<a href="<?php the_permalink()?>" rel="bookmark" title="<?php the_title(); ?>"><h3><?php the_title(); ?></h3></a>
					</div>
				</div>
			<?php } echo '	</div>'; } } $post = $orig_post; wp_reset_query(); ?>
</div>