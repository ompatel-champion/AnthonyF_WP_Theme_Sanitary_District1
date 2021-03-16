<section class="select-project">
	<div class="select-project-inner">
		<p>Learn More About Sanitary District 1</p>
		<h2>Services & Projects</h2>
		<div class="select-field">
			<?php
				wp_nav_menu( array(
					'theme_location' => 'services',
					'menu'           	  => 'Services',
					'walker'         	  => new Walker_Nav_Menu_Dropdown(),
					'items_wrap'       => '<form><select onchange="if (this.value) window.location.href=this.value"><option selected>Our Services</option> %3$s</select></form>',
				) );
			?>
		</div>
	</div>
</section>