<div class="container-fluid">
	<div class="body-wrapper container">
		<section class="pickup-days">
			<div class="map"><img src="<?php bloginfo('template_directory'); ?>/lib/img/map.svg" alt="map"/></div>
			<div class="pd-inner">
				<p>Enter Your Street Name to Find out</p>
				<h2>What Day is My Pickup</h2>
				<div class="search">
					<form action="/" method="get">
    					<input type="text" name="s" id="search" class="search-term" placeholder="Street Name" value="<?php the_search_query(); ?>" />
						<button type="submit" alt="Search" class="search-button"><i class="fa fa-search"></i></button>
					</form>
				</div>
			</div>
		</section>
	<div class="green-box"></div>
	</div>
	<div class="gray-triangle"></div>
</div>