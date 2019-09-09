<?php get_header() ?>

<main class="main_container">
		<section class="main_container__heroproj">
			<img class="main_container__imagestill" src="<?php the_field('imagen_destacada'); ?>" />
			<div class="main_container__iframe" data="" type=""><?php the_field('video_destacado'); ?></div>
		</section>
		<section class="main_container__nameproj">
			<h2 class="main_container__titleproj">
				<?php the_title() ?> <!-- <span class="main_container__titleproj--bold">Energy Drink</span>  -->
			</h2>
		</section>
		<section class="main_container__descproj">
			<div class="main_container__credits">
				<ul class="main_container__creditslist">
					<li class="main_container__creditsitem">Client: <span class="main_container__creditsitem--info"><?php the_field('client') ?></span></li>
					<li class="main_container__creditsitem">Directed and produced by: <span class="main_container__creditsitem--info"><?php the_field('directed_and_produced_by') ?></span></p></li>
					<li class="main_container__creditsitem">Year: <span class="main_container__creditsitem--info"><?php the_field('year') ?></span></li>
					<li class="main_container__creditsitem">Services: <span class="main_container__creditsitem--info"><?php the_field('services') ?></span></li>
					<li class="main_container__creditsitem">Credits: <span class="main_container__creditsitem--info"><?php the_field('credits') ?></span></li>
				</ul>
			</div>
			<div class="main_container__overview">
				<span class="main_container__overviewtitle">Overview</span>
				<p class="main_container__overviewtext"><?php the_field('overview') ?></p>
				<span class="main_container__overviewtitle">Proyecto</span>
				<p class="main_container__overviewtext"><?php the_field('proyecto') ?></p>
			</div>
		</section>
		<section class="main_container__stills">
			<ul id="gallery" class="main_container__stillist">
			  <li class="main_container__frame--halfwidth">
			  	<img class="main_container__imagestill" src="<?php the_field('first-still'); ?>" />
			  </li>
			  <li class="main_container__frame--halfwidth"><img class="main_container__imagestill" src="<?php the_field('second-still'); ?>" />
			  </li>
			  <li class="main_container__frame--halfwidth"><img class="main_container__imagestill" src="<?php the_field('third-still'); ?>" />
			  </li>
			  <li class="main_container__frame--halfwidth"><img class="main_container__imagestill" src="<?php the_field('fourth-still'); ?>" />
			  </li>
		</ul>
		</section>
		<section class="main_container__pagination">
			<div class="main_container__prev"><?php previous_post_link( '<strong>%link</strong>'); ?></div>
			<div class="main_container__thanks"><h5>Thanks for watching!</h5></div>
			<div class="main_container__next"><?php next_post_link( '<strong>%link</strong>' ); ?></div>
		</section>
	</main>

<?php get_footer() ?>