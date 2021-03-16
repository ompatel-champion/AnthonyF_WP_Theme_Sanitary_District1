<div class="body-wrapper container news-wrapper">
	<section class="title-wrapper">
		<h2>Featured News</h2>
		<div class="title-button"><a href="#" class="green-btn">View All News</a></div>
	</section>
	<section class="news-wrapper sm-p">
		<div class="owl-carousel">
			<?php  query_posts('posts_per_page=3'); while ( have_posts() ) : the_post(); ?>
			<article class="news">
				<div class="news-inner">
					<div class="date"><?php echo get_the_date(); ?></div>
					<div class="title"><h3><?php the_title(); ?></h3></div>
					<div class="tag"><?php  foreach((get_the_category()) as $category){ echo $category->name."<br>";}?></div>
				</div>
				<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><i class="fas fa-chevron-right"></i></a>
				<?php if ( has_post_thumbnail()) : ?><?php the_post_thumbnail(); ?><?php endif; ?>
			</article>
			<?php endwhile; // end of the loop. ?>
		</div>
	</section>
</div>