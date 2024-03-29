<?php get_header() ?>
	<main class="main_container">
		<section class="main_container__slidercontact">
			<img class="main_container__contactimg" src="<?php the_field('imagen_contacto'); ?>" />
		</section>

		<section class="main_container__calltoaction">
			<h4 class="main_container__textcall">Say <span class="main_container__break">hello!</span></h4>
		</section>

		<section class="main_container__contactinfo">
			<div class="main_container__hello">
				<p class="main_container__title">Say hello!</p>
				<ul class="main_container__list">
					<li class="main_container__item">info@nitrofilms.tv</li>
					<li class="main_container__item">F +56 981597149</li>
					<li class="main_container__item">F +56 977975869</li>
				</ul>
			</div>

			<div class="main_container__headquarters">
				<p class="main_container__title">Headquarters</p>
				<p class="main_container__text">Jaime Eyzaguirre 9, Santiago, Chile</p>
			</div>

			<span class="border_right"></span>

			<div class="main_container__representation">
				<p class="main_container__text">We are looking for international representation please write to: <span>info@nitrofilms.tv</span></p>
			</div>
		</section>
		<section class="main_container__form">
			<?php echo do_shortcode( '[contact-form-7 id="178" title="Contacto"]' ); ?>
		</section>
		<section class="main_container__map">
			<?php echo do_shortcode( '[wpgmza id="1"]' ); ?>
		</section>
	</main>

<?php get_footer() ?>