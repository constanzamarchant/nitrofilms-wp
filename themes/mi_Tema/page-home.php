<?php get_header() ?>

<main class="main_container">
		<section class="main_container__hero">
			<div style="padding:56.25% 0 0 0;position:relative;">
            <iframe src="https://player.vimeo.com/video/335512315?&loop=1&title=0&byline=0&portrait=0" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
          </div><script src="https://player.vimeo.com/api/player.js"></script>
		</section>

		<ul id="gallery" class="main_container__masonry">
			<?php
			$arg = array(
				'post_type'		=> 'portafolio',
				'category_name'	=> '',
				'posts_per_page'=> 22,

			);

			$get_arg = new WP_Query( $arg );
			$iteracion = 0;
			$frames = ['smallsquare', 'horect','smallsquare', 'vertrect', 'bigsquare',  'vertrect', 'bigsquare', 'smallsquare', 'smallsquare', 'horect', 'smallsquare', 'smallsquare', 'horect','smallsquare', 'vertrect', 'bigsquare',  'vertrect', 'bigsquare', 'smallsquare', 'smallsquare', 'horect', 'smallsquare'];

			while ( $get_arg->have_posts() ) {
				$get_arg->the_post();
			?>
			<li class="main_container__frame--<?= $frames[$iteracion] ?>">
				<a href="<?php the_permalink() ?>" class="main_container__link"> 
					<?php the_post_thumbnail('main_container__thumb', array('class' => 'main_container__image')) ?>
					<object class="main_container__caption">
						<span class="main_container__captiontitle"><?php the_title(); ?></span>
						<a class="main_container__captiontext" href="#" target="_blank"><?php the_category(' / '); ?></a>
					</object>
				</a>
			</li>
			<?php  ?>
		<?php ++$iteracion;} wp_reset_postdata(); ?>
		</ul>
</main>
<?php get_footer() ?>