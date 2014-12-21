<?php
/**
 * A unique identifier is defined to store the options in the database and reference them from the theme.
 * By default it uses the theme name, in lowercase and without spaces, but this can be changed if needed.
 * If the identifier changes, it'll appear as if the options have been reset.
 *
 */

function optionsframework_option_name() {

	// This gets the theme name from the stylesheet (lowercase and without spaces)
	$themename = get_option( 'stylesheet' );
	$themename = preg_replace("/\W/", "_", strtolower($themename) );

	$optionsframework_settings = get_option('optionsframework');
	$optionsframework_settings['id'] = $themename;
	update_option('optionsframework', $optionsframework_settings);

	// echo $themename;
}

/**
 * Defines an array of options that will be used to generate the settings page and be saved in the database.
 * When creating the 'id' fields, make sure to use all lowercase and no spaces.
 *
 */
function optionsframework_options()
{
	$imagepath =  get_template_directory_uri() . '/images/';

	$options = array();

	$options[] = array(
		'name' => __('Diaporama', 'villeconin'),
		'type' => 'heading'
	);

	$slide_effects = array(
		'0' => __('None', 'villeconin'),
		'1' => __('Fade', 'villeconin'),
		'2' => __('Slide Top', 'villeconin'),
		'3' => __('Slide Right', 'villeconin'),
		'4' => __('Slide Bottom', 'villeconin'),
		'5' => __('Slide Left', 'villeconin'),
		'6' => __('Caroussel Right', 'villeconin'),
		'7' => __('Caroussel Left', 'villeconin'),
	);

	$options[] = array(
			'name'    => __('Effects', 'villeconin'),
			'desc'    => __('Slider effects', 'villeconin'),
			'id'      => 'sliderefect',
			'type'    => 'radio',
			'std'     => '1',
			'options' => $slide_effects,
	);

	$options[] = array(
			'name'    => __('Count', 'villeconin'),
			'desc'    => __('Slide count', 'villeconin'),
			'id'      => 'slidecount',
			'type'    => 'text',
			'std'     => '6',
	);

	$slidecount = of_get_option('slidecount');
	if (!is_numeric($slidecount)) {
		$slidecount = 6;
	} elseif ($slidecount > 20) { /* max 20 */
		$slidecount = 20;
	} elseif ($slidecount < 0) { /* min 1 */
		$slidecount = 1;
	}

	for ($i = 0; $i < $slidecount; $i++) {
		$options[] = array(
			'name'  => __('Slider Image '. $i, 'villeconin'),
			'desc'  => __('Slide '.$i, 'villeconin'),
			'id'    => 'slide'.$i,
			'class' => '',
			'std'   => '',
			'type'  => 'upload'
		);

		$options[] = array(
			'desc' => __('Title', 'villeconin'),
			'id' => 'slidetitle'.$i,
			'std' => 'Slider Image '.$i,
			'type' => 'text'
		);
	}

	return $options;
}
