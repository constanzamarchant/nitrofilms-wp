<?php get_header() ?>

<main class="main_container">
		<section class="main_container__heroproj">
			<?php the_post_thumbnail('main_container__thumb', array('class' => 'main_container__singlethumb')) ?>
		</section>
		<section class="main_container__nameproj">
			<h2 class="main_container__titleproj">
				<?php the_title() ?> <!-- <span class="main_container__titleproj--bold">Energy Drink</span>  -->
			</h2>
		</section>
		<section class="main_container__descproj">
			<div class="main_container__credits">
				<ul class="main_container__creditslist">
					<li class="main_container__creditsitem"><?php the_field('valor_field_name')  ?> <span class="main_container__creditsitem--info">Nike</span></li>
					<li class="main_container__creditsitem">Directed and produced by: <span class="main_container__creditsitem--info">Lorem ipsum dolor sit amet</span></p></li>
					<li class="main_container__creditsitem">Year: <span class="main_container__creditsitem--info">Lorem ipsum dolor sit amet</span></li>
					<li class="main_container__creditsitem">Services: <span class="main_container__creditsitem--info">Lorem ipsum dolor sit amet</span></li>
					<li class="main_container__creditsitem">Credits: <span class="main_container__creditsitem--info">Lorem ipsum dolor sit amet</span></li>
				</ul>
			</div>
			<div class="main_container__overview">
				<span class="main_container__overviewtitle">Overview</span>
				<p class="main_container__overviewtext">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora officia unde doloremque non reprehenderit doloribus temporibus dolores distinctio labore nemo alias reiciendis nostrum tempore, asperiores, nihil eius ea necessitatibus culpa.</p>
				<span class="main_container__overviewtitle">Proyecto</span>
				<p class="main_container__overviewtext">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus perspiciatis repudiandae reprehenderit quidem quis quae excepturi, mollitia qui accusamus doloremque nostrum odit corporis labore ullam ut totam aspernatur exercitationem.</p>
			</div>
		</section>
		<section class="main_container__stills">
			<ul id="gallery" class="main_container__masonry">
			  <li class="main_container__frame--halfwidth tomato">1</li>
			  <li class="main_container__frame--halfwidth slateBlue">2</li>
			  <li class="main_container__frame--halfwidth orange">3</li>
			  <li class="main_container__frame--halfwidth gray">4</li>
		</ul>
		</section>
		<section class="main_container__pagination">
			<div class="main_container__prev"><a class="main_container__paglink" href="#"><i class="fas fa-chevron-left fa-2x"></i></a></div>
			<div class="main_container__thanks"><h5>Thanks for watching!</h5></div>
			<div class="main_container__next"><a class="main_container__paglink" href="#"><i class="fas fa-chevron-right fa-2x"></i></a></div>
		</section>
	</main>

<?php get_footer() ?>