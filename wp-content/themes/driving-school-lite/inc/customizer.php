<?php
/**
 * Driving School Lite Theme Customizer
 * @package Driving School Lite
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */

function driving_school_lite_customize_register( $wp_customize ) {	

	//add home page setting pannel
	$wp_customize->add_panel( 'driving_school_lite_panel_id', array(
	    'priority' => 10,
	    'capability' => 'edit_theme_options',
	    'theme_supports' => '',
	    'title' => __( 'Theme Settings', 'driving-school-lite' ),
	    'description' => __( 'Description of what this panel does.', 'driving-school-lite' ),
	) );

	//layout setting
	$wp_customize->add_section( 'driving_school_lite_theme_layout', array(
    	'title'      => __( 'Layout Settings', 'driving-school-lite' ),
		'priority'   => null,
		'panel' => 'driving_school_lite_panel_id'
	) );

	// Add Settings and Controls for Layout
	$wp_customize->add_setting('driving_school_lite_layout',array(
	        'default' => __( 'Right Sidebar', 'driving-school-lite' ),
	        'sanitize_callback' => 'driving_school_lite_sanitize_choices'	        
	    )
    );

	$wp_customize->add_control('driving_school_lite_layout',
	    array(
	        'type' => 'radio',
	        'label' => __( 'Do you want this section', 'driving-school-lite' ),
	        'section' => 'driving_school_lite_theme_layout',
	        'choices' => array(
	            'Left Sidebar' => __('Left Sidebar','driving-school-lite'),
	            'Right Sidebar' => __('Right Sidebar','driving-school-lite'),
	            'One Column' => __('One Column','driving-school-lite'),
	            'Three Columns' => __('Three Columns','driving-school-lite'),
	            'Four Columns' => __('Four Columns','driving-school-lite'),
	            'Grid Layout' => __('Grid Layout','driving-school-lite')
	        ),
	    )
    );

	//Topbar section
	$wp_customize->add_section('driving_school_lite_topbar_icon',array(
		'title'	=> __('Topbar Section','driving-school-lite'),
		'description'	=> __('Add Header Content here','driving-school-lite'),
		'priority'	=> null,
		'panel' => 'driving_school_lite_panel_id',
	));

	$wp_customize->add_setting('driving_school_lite_location',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('driving_school_lite_location',array(
		'label'	=> __('Add Location','driving-school-lite'),
		'section'	=> 'driving_school_lite_topbar_icon',
		'setting'	=> 'driving_school_lite_location',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('driving_school_lite_facebook',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('driving_school_lite_facebook',array(
		'label'	=> __('Add Facebook link','driving-school-lite'),
		'section'	=> 'driving_school_lite_topbar_icon',
		'setting'	=> 'driving_school_lite_facebook',
		'type'		=> 'url'
	));

	$wp_customize->add_setting('driving_school_lite_twitter',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('driving_school_lite_twitter',array(
		'label'	=> __('Add Twitter link','driving-school-lite'),
		'section'	=> 'driving_school_lite_topbar_icon',
		'setting'	=> 'driving_school_lite_twitter',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('driving_school_lite_youtube',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('driving_school_lite_youtube',array(
		'label'	=> __('Add Google Plus link','driving-school-lite'),
		'section'	=> 'driving_school_lite_topbar_icon',
		'setting'	=> 'driving_school_lite_youtube',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('driving_school_lite_linkedin',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('driving_school_lite_linkedin',array(
		'label'	=> __('Add Linkedin link','driving-school-lite'),
		'section'	=> 'driving_school_lite_topbar_icon',
		'setting'	=> 'driving_school_lite_linkedin',
		'type'	=> 'url'
	));

	
	$wp_customize->add_setting('driving_school_lite_button_text',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('driving_school_lite_button_text',array(
		'label'	=> __('Button text','driving-school-lite'),
		'section'	=> 'driving_school_lite_topbar_icon',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('driving_school_lite_button_link',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('driving_school_lite_button_link',array(
		'label'	=> __('Add Button Link','driving-school-lite'),
		'section'	=> 'driving_school_lite_topbar_icon',
		'setting'	=> 'driving_school_lite_button_link',
		'type'		=> 'url'
	));

	//Contact Details
	$wp_customize->add_section( 'driving_school_lite_contact_section' , array(
    	'title'      => __( 'Contact Details', 'driving-school-lite' ),
		'priority'   => null,
		'panel' => 'driving_school_lite_panel_id'
	) );

	$wp_customize->add_setting('driving_school_lite_call_text',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('driving_school_lite_call_text',array(
		'label'	=> __('Call Text','driving-school-lite'),
		'section'	=> 'driving_school_lite_contact_section',
		'setting'	=> 'driving_school_lite_call_text',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('driving_school_lite_call_number',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('driving_school_lite_call_number',array(
		'label'	=> __('Add Contact Number','driving-school-lite'),
		'section'	=> 'driving_school_lite_contact_section',
		'setting'	=> 'driving_school_lite_call_number',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('driving_school_lite_email_text',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('driving_school_lite_email_text',array(
		'label'	=> __('Add Email Text','driving-school-lite'),
		'section'	=> 'driving_school_lite_contact_section',
		'setting'	=> 'driving_school_lite_email_text',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('driving_school_lite_email',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('driving_school_lite_email',array(
		'label'	=> __('Add Email Address','driving-school-lite'),
		'section'	=> 'driving_school_lite_contact_section',
		'setting'	=> 'driving_school_lite_email',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('driving_school_lite_timing_text',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('driving_school_lite_timing_text',array(
		'label'	=> __('Add Timing Text','driving-school-lite'),
		'section'	=> 'driving_school_lite_contact_section',
		'setting'	=> 'driving_school_lite_timing_text',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('driving_school_lite_timing',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('driving_school_lite_timing',array(
		'label'	=> __('Add Time','driving-school-lite'),
		'section'	=> 'driving_school_lite_contact_section',
		'setting'	=> 'driving_school_lite_timing',
		'type'		=> 'text'
	));

	//home page slider
	$wp_customize->add_section( 'driving_school_lite_slider_section' , array(
    	'title'      => __( 'Slider Settings', 'driving-school-lite' ),
		'priority'   => null,
		'panel' => 'driving_school_lite_panel_id'
	) );

	$wp_customize->add_setting('driving_school_lite_slider_hide',array(
       'default' => 'false',
       'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('driving_school_lite_slider_hide',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide slider','driving-school-lite'),
       'section' => 'driving_school_lite_slider_section',
    ));

	for ( $count = 1; $count <= 4; $count++ ) {

		// Add color scheme setting and control.
		$wp_customize->add_setting( 'driving_school_lite_slider_page' . $count, array(
			'default'           => '',
			'sanitize_callback' => 'driving_school_lite_sanitize_dropdown_pages'
		) );
		$wp_customize->add_control( 'driving_school_lite_slider_page' . $count, array(
			'label'    => __( 'Select Slide Image Page', 'driving-school-lite' ),
			'section'  => 'driving_school_lite_slider_section',
			'type'     => 'dropdown-pages'
		) );
	}

	//Our Features Section
	$wp_customize->add_section('driving_school_lite_features',array(
		'title'	=> __('Our Features','driving-school-lite'),
		'description'	=> __('Add our features sections below.','driving-school-lite'),
		'panel' => 'driving_school_lite_panel_id',
	));

	$wp_customize->add_setting('driving_school_lite_page_title',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('driving_school_lite_page_title',array(
		'label'	=> __('Section Title','driving-school-lite'),
		'section'	=> 'driving_school_lite_features',
		'type'		=> 'text'
	));

	// category left
	$categories = get_categories();
	$cats = array();
	$i = 0;
	$cat_post[]= 'select';
	foreach($categories as $category){
		if($i==0){
			$default = $category->slug;
			$i++;
		}
		$cat_post[$category->slug] = $category->name;
	}

    $wp_customize->add_setting( 'driving_school_lite_category', array(
      'default'           => '',
      'sanitize_callback' => 'driving_school_lite_sanitize_choices'
    ));
    $wp_customize->add_control('driving_school_lite_category',array(
		'type'    => 'select',
		'choices' => $cat_post,
		'label' => __('Select Category to display Latest Post','driving-school-lite'),
		'section' => 'driving_school_lite_features',
	));

	//footer text
	$wp_customize->add_section('driving_school_lite_footer_section',array(
		'title'	=> __('Footer Text','driving-school-lite'),
		'description'	=> __('Add some text for footer like copyright etc.','driving-school-lite'),
		'panel' => 'driving_school_lite_panel_id'
	));
	
	$wp_customize->add_setting('driving_school_lite_text',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('driving_school_lite_text',array(
		'label'	=> __('Copyright Text','driving-school-lite'),
		'section'	=> 'driving_school_lite_footer_section',
		'type'		=> 'text'
	));	
}
add_action( 'customize_register', 'driving_school_lite_customize_register' );	

/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class Driving_School_Lite_Customize {

	/**
	 * Returns the instance.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return object
	 */
	public static function get_instance() {

		static $instance = null;

		if ( is_null( $instance ) ) {
			$instance = new self;
			$instance->setup_actions();
		}

		return $instance;
	}

	/**
	 * Constructor method.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function __construct() {}

	/**
	 * Sets up initial actions.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function setup_actions() {

		// Register panels, sections, settings, controls, and partials.
		add_action( 'customize_register', array( $this, 'sections' ) );

		// Register scripts and styles for the controls.
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'enqueue_control_scripts' ), 0 );
	}

	/**
	 * Sets up the customizer sections.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  object  $manager
	 * @return void
	 */
	public function sections( $manager ) {

		// Load custom sections.
		load_template( trailingslashit( get_template_directory() ) . '/inc/section-pro.php' );

		// Register custom section types.
		$manager->register_section_type( 'Driving_School_Lite_Customize_Section_Pro' );

		// Register sections.
		$manager->add_section(
			new Driving_School_Lite_Customize_Section_Pro(
			$manager,
			'example_1',
				array(
				'priority'   => 9,
				'title'    => esc_html__( 'Driving School Pro', 'driving-school-lite' ),
				'pro_text' => esc_html__( 'Go Pro', 'driving-school-lite' ),
				'pro_url'  => esc_url('https://www.themesglance.com/themes/driving-school-lite-wordpress-theme/')					
				)
			)
		);
	}

	/**
	 * Loads theme customizer CSS.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function enqueue_control_scripts() {

		wp_enqueue_script( 'driving-school-lite-customize-controls', trailingslashit( get_template_directory_uri() ) . '/js/customize-controls.js', array( 'customize-controls' ) );

		wp_enqueue_style( 'driving-school-lite-customize-controls', trailingslashit( get_template_directory_uri() ) . '/css/customize-controls.css' );
	}
}

// Doing this customizer thang!
Driving_School_Lite_Customize::get_instance();