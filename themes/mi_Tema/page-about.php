<?php get_header() ?>
	<main class="main_container">
		<section class="main_container__studio">
			<h3>We make great things happen</h3>
			<p class="main_container__description"><?php the_field('descripcion_nitrofilms'); ?></p>
		</section>

		<section class="main_container__calltoaction">
			<h4 class="main_container__textcall">Let's work <span class="main_container__break">together!</span></h4>
		</section>

		<section class="ig_container"><?php echo do_shortcode( '[jr_instagram id="2"]'); ?>
		</section>
		
	</main>

<?php get_footer() ?>