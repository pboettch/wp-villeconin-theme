<?php
/**
 * Home-page - called when no page/article is requested
 *
 * @package Villeconin
 */

get_header(); ?>

<div class="slider-parent">
	<div class="slider-wrapper theme-default container">

		<!--Thumbnail Navigation-->
		<div id="prevthumb"></div>
		<div id="nextthumb"></div>
		<div id="thumb-tray" class="load-item">
			<div id="thumb-back"></div>
			<div id="thumb-forward"></div>
		</div>
		<div id="progress-back" class="load-item">
			<div id="progress-bar"></div>
		</div><!--Time Bar-->
		<div id="slidecaption"></div><!--Slide captions displayed here-->
		<div id="controls-wrapper" class="load-item">
			<div id="controls">
				<a id="play-button"><img id="pauseplay" src="<?php echo get_template_directory_uri();?>/supersized/img/pause.png"/></a>
				<!--Arrow Navigation-->
				<a id="prevslide" class="load-item"></a>
				<a id="nextslide" class="load-item"></a>
				<div id="slidecounter">
					<span class="slidenumber"></span> / <span class="totalslides"></span>
				</div><!--Slide counter-->
			</div>
		</div><!--Control Bar-->

	</div><!--.container-->
</div><!--.slider-parent--><


<?php get_footer(); ?>
