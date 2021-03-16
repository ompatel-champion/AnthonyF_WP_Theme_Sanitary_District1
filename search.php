<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Sanitary_District_1
 */

get_header();
?>


<section class="container sm-p">
	<?php if ( have_posts() ) : ?>
	<h1 class="page-title"><?php printf( esc_html__( 'Location Results for: %s', 'sanitary-district-one' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
</section>
<section class="select-project">
	<div class="select-project-inner">
		<p>Enter Your Street Name to Find out</p>
		<h2>What Day is My Pickup</h2>
			<div class="search-field">
				<form action="/" method="get">
					<input type="text" name="s" id="search" class="search-term" placeholder="Street Name" value="<?php the_search_query(); ?>" />
					<button type="submit" alt="Search" class="search-button"><i class="fa fa-search"></i></button>
				</form>
			</div>
	</div>
</section>
<div class="container sm-p">
	<?php while ( have_posts() ) : the_post();
		get_template_part( 'template-parts/content', 'search' );
	endwhile;
		the_posts_navigation();
	else :
		get_template_part( 'template-parts/content', 'none' );
	endif; ?>
</div>
<?php
get_footer();