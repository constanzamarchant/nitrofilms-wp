<?php get_header() ?>

<main class="main_container">
		<section class="main_container__hero"></section>
		<ul id="gallery" class="main_container__masonry">
			<?php
		$arg = array(
			'post_type'		 => 'portafolio',
			'posts_per_page' => 11,
		);
	
		$get_arg = new WP_Query( $arg );
	
		while ( $get_arg->have_posts() ) {
			$get_arg->the_post();
		?>
			
			<li class="main_container__frame--smallsquare tomato ">
			  	<a href="project.html" class="main_container__link"> 
			  		<?php the_post_thumbnail('thumb-smallsquare', array('class' => 'main_container__thumb')); ?>

				  	<object class="main_container__caption">
				  		<span class="main_container__captiontitle">Nombre proyecto</span>
				  		<a class="main_container__captiontext" href="#" target="_blank">Categoría del proyecto</a>
				  	</object>
			  	</a>
		  </li>

		  <li class="main_container__frame--horect slateBlue">
		  	<a href="project.html" class="main_container__link"> 
		  		<?php the_post_thumbnail('thumb-horect', array('class' => 'main_container__thumb')); ?>
			  	<object class="main_container__caption">
			  		<span class="main_container__captiontitle">Nombre proyecto</span>
			  		<a class="main_container__captiontext" href="#" target="_blank">Categoría del proyecto</a>
			  	</object>
		  	</a>
		  </li>

		  <li class="main_container__frame--smallsquare orange">
		  	<a href="project.html" class="main_container__link"> 
		  		<?php the_post_thumbnail('thumb-smallsquare', array('class' => 'main_container__thumb')); ?>
			  	<object class="main_container__caption">
			  		<span class="main_container__captiontitle">Nombre proyecto</span>
			  		<a class="main_container__captiontext" href="#" target="_blank">Categoría del proyecto</a>
			  	</object>
		  	</a>
		  </li>

		  <li class="main_container__frame--vertrect gray">
		  	<a href="project.html" class="main_container__link"> 
		  		<?php the_post_thumbnail('thumb-rectvert', array('class' => 'main_container__thumb')); ?>
			  	<object class="main_container__caption">
			  		<span class="main_container__captiontitle">Nombre proyecto</span>
			  		<a class="main_container__captiontext" href="#" target="_blank">Categoría del proyecto</a>
			  	</object>
		  	</a>
		  </li>

		  <li class="main_container__frame--bigsquare dodgerBlue">
		  	<a href="project.html" class="main_container__link"> 
		  		<?php the_post_thumbnail('thumb-bigsquare', array('class' => 'main_container__thumb')); ?>
			  	<object class="main_container__caption">
			  		<span class="main_container__captiontitle">Nombre proyecto</span>
			  		<a class="main_container__captiontext" href="#" target="_blank">Categoría del proyecto</a>
			  	</object>
		  	</a>
		  </li>

		  <li class="main_container__frame--vertrect gray">
		  	<a href="project.html" class="main_container__link"> 
		  		<?php the_post_thumbnail('thumb-rectvert', array('class' => 'main_container__thumb')); ?>
			  	<object class="main_container__caption">
			  		<span class="main_container__captiontitle">Nombre proyecto</span>
			  		<a class="main_container__captiontext" href="#" target="_blank">Categoría del proyecto</a>
			  	</object>
		  	</a>
		  </li>

		  <li class="main_container__frame--bigsquare mediumSeaGreen">
		  	<a href="project.html" class="main_container__link"> 
		  		<?php the_post_thumbnail('thumb-bigsquare', array('class' => 'main_container__thumb')); ?>
			  	<object class="main_container__caption">
			  		<span class="main_container__captiontitle">Nombre proyecto</span>
			  		<a class="main_container__captiontext" href="#" target="_blank">Categoría del proyecto</a>
			  	</object>
		  	</a>
		  </li>

		  <li class="main_container__frame--smallsquare gray">
		  	<a href="project.html" class="main_container__link"> 
		  		<?php the_post_thumbnail('thumb-smallsquare', array('class' => 'main_container__thumb')); ?>
			  	<object class="main_container__caption">
			  		<span class="main_container__captiontitle">Nombre proyecto</span>
			  		<a class="main_container__captiontext" href="#" target="_blank">Categoría del proyecto</a>
			  	</object>
		  	</a>
		  </li>

		  <li class="main_container__frame--smallsquare slateBlue">
		  	<a href="project.html" class="main_container__link"> 
		  		<?php the_post_thumbnail('thumb-smallsquare', array('class' => 'main_container__thumb')); ?>
			  	<object class="main_container__caption">
			  		<span class="main_container__captiontitle">Nombre proyecto</span>
			  		<a class="main_container__captiontext" href="#" target="_blank">Categoría del proyecto</a>
			  	</object>
		  	</a>
		  </li>

		  <li class="main_container__frame--horect gray">
		  	<a href="project.html" class="main_container__link"> 
		  		<?php the_post_thumbnail('thumb-recthor', array('class' => 'main_container__thumb')); ?>
			  	<object class="main_container__caption">
			  		<span class="main_container__captiontitle">Nombre proyecto</span>
			  		<a class="main_container__captiontext" href="#" target="_blank">Categoría del proyecto</a>
			  	</object>
		  	</a>
		  </li>

		  <li class="main_container__frame--smallsquare violet">
		  	<a href="project.html" class="main_container__link"> 
		  		<?php the_post_thumbnail('thumb-smallsquare', array('class' => 'main_container__thumb')); ?>
			  	<object class="main_container__caption">
			  		<span class="main_container__captiontitle">Nombre proyecto</span>
			  		<a class="main_container__captiontext" href="#" target="_blank">Categoría del proyecto</a>
			  	</object>
		  	</a>
		  </li>
		</ul>
		<?php } wp_reset_postdata();
	?>
</main>
	
<?php get_footer() ?>