<?php
/**
 * Sports Hub: Customizer
 *
 * @package Sports Hub
 * @subpackage sports_hub
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function Sports_Hub_Customize_register( $wp_customize ) {

	require get_parent_theme_file_path('/inc/controls/icon-changer.php');

	require get_parent_theme_file_path('/inc/controls/range-slider-control.php');

	// Register the custom control type.
	$wp_customize->register_control_type( 'Sports_Hub_Toggle_Control' );

	//Register the sortable control type.
	$wp_customize->register_control_type( 'Sports_Hub_Control_Sortable' );	

	//add home page setting pannel
	$wp_customize->add_panel( 'sports_hub_panel_id', array(
	    'priority' => 10,
	    'capability' => 'edit_theme_options',
	    'theme_supports' => '',
	    'title' => __( 'Custom Home page', 'sports-hub' ),
	    'description' => __( 'Description of what this panel does.', 'sports-hub' ),
	) );

	//TP Genral Option
	$wp_customize->add_section('sports_hub_tp_general_settings',array(
        'title' => __('TP General Option', 'sports-hub'),
        'priority' => 1,
        'panel' => 'sports_hub_panel_id'
    ) );
 	$wp_customize->add_setting('sports_hub_tp_body_layout_settings',array(
		'default' => 'Full',
		'sanitize_callback' => 'sports_hub_sanitize_choices'
	));

 	$wp_customize->add_control('sports_hub_tp_body_layout_settings',array(
		'type' => 'radio',
		'label'     => __('Body Layout Setting', 'sports-hub'),
		'description'   => __('This option work for complete body, if you want to set the complete website in container.', 'sports-hub'),
		'section' => 'sports_hub_tp_general_settings',
		'choices' => array(
		'Full' => __('Full','sports-hub'),
		'Container' => __('Container','sports-hub'),
		'Container Fluid' => __('Container Fluid','sports-hub')
		),
	) );

    // Add Settings and Controls for Post Layout
	$wp_customize->add_setting('sports_hub_sidebar_post_layout',array(
     'default' => 'right',
     'sanitize_callback' => 'sports_hub_sanitize_choices'
	));
	$wp_customize->add_control('sports_hub_sidebar_post_layout',array(
     'type' => 'radio',
     'label'     => __('Post Sidebar Position', 'sports-hub'),
     'description'   => __('This option work for blog page, blog single page, archive page and search page.', 'sports-hub'),
     'section' => 'sports_hub_tp_general_settings',
     'choices' => array(
         'full' => __('Full','sports-hub'),
         'left' => __('Left','sports-hub'),
         'right' => __('Right','sports-hub'),
         'three-column' => __('Three Columns','sports-hub'),
         'four-column' => __('Four Columns','sports-hub'),
         'grid' => __('Grid Layout','sports-hub')
     ),
	) );

	// Add Settings and Controls for single post sidebar Layout
	$wp_customize->add_setting('sports_hub_sidebar_single_post_layout',array(
        'default' => 'right',
        'sanitize_callback' => 'sports_hub_sanitize_choices'
	));
	$wp_customize->add_control('sports_hub_sidebar_single_post_layout',array(
        'type' => 'radio',
        'label'     => __('Single Post Sidebar Position', 'sports-hub'),
        'description'   => __('This option work for single blog page', 'sports-hub'),
        'section' => 'sports_hub_tp_general_settings',
        'choices' => array(
            'full' => __('Full','sports-hub'),
            'left' => __('Left','sports-hub'),
            'right' => __('Right','sports-hub'),
        ),
	) );

	// Add Settings and Controls for Page Layout
	$wp_customize->add_setting('sports_hub_sidebar_page_layout',array(
     'default' => 'right',
     'sanitize_callback' => 'sports_hub_sanitize_choices'
	));
	$wp_customize->add_control('sports_hub_sidebar_page_layout',array(
     'type' => 'radio',
     'label'     => __('Page Sidebar Position', 'sports-hub'),
     'description'   => __('This option work for pages.', 'sports-hub'),
     'section' => 'sports_hub_tp_general_settings',
     'choices' => array(
         'full' => __('Full','sports-hub'),
         'left' => __('Left','sports-hub'),
         'right' => __('Right','sports-hub')
     ),
	) );
	//tp typography option
	$sports_hub_font_array = array(
		''                       => 'No Fonts',
		'Abril Fatface'          => 'Abril Fatface',
		'Acme'                   => 'Acme',
		'Anton'                  => 'Anton',
		'Architects Daughter'    => 'Architects Daughter',
		'Arimo'                  => 'Arimo',
		'Arsenal'                => 'Arsenal',
		'Arvo'                   => 'Arvo',
		'Alegreya'               => 'Alegreya',
		'Alfa Slab One'          => 'Alfa Slab One',
		'Averia Serif Libre'     => 'Averia Serif Libre',
		'Bangers'                => 'Bangers',
		'Boogaloo'               => 'Boogaloo',
		'Bad Script'             => 'Bad Script',
		'Bitter'                 => 'Bitter',
		'Bree Serif'             => 'Bree Serif',
		'BenchNine'              => 'BenchNine',
		'Cabin'                  => 'Cabin',
		'Cardo'                  => 'Cardo',
		'Courgette'              => 'Courgette',
		'Cherry Swash'           => 'Cherry Swash',
		'Cormorant Garamond'     => 'Cormorant Garamond',
		'Crimson Text'           => 'Crimson Text',
		'Cuprum'                 => 'Cuprum',
		'Cookie'                 => 'Cookie',
		'Chewy'                  => 'Chewy',
		'Days One'               => 'Days One',
		'Dosis'                  => 'Dosis',
		'Droid Sans'             => 'Droid Sans',
		'Economica'              => 'Economica',
		'Fredoka One'            => 'Fredoka One',
		'Fjalla One'             => 'Fjalla One',
		'Francois One'           => 'Francois One',
		'Frank Ruhl Libre'       => 'Frank Ruhl Libre',
		'Gloria Hallelujah'      => 'Gloria Hallelujah',
		'Great Vibes'            => 'Great Vibes',
		'Handlee'                => 'Handlee',
		'Hammersmith One'        => 'Hammersmith One',
		'Inconsolata'            => 'Inconsolata',
		'Indie Flower'           => 'Indie Flower',
		'IM Fell English SC'     => 'IM Fell English SC',
		'Julius Sans One'        => 'Julius Sans One',
		'Josefin Slab'           => 'Josefin Slab',
		'Josefin Sans'           => 'Josefin Sans',
		'Kanit'                  => 'Kanit',
		'Lobster'                => 'Lobster',
		'Lato'                   => 'Lato',
		'Lora'                   => 'Lora',
		'Libre Baskerville'      => 'Libre Baskerville',
		'Lobster Two'            => 'Lobster Two',
		'Merriweather'           => 'Merriweather',
		'Monda'                  => 'Monda',
		'Montserrat'             => 'Montserrat',
		'Muli'                   => 'Muli',
		'Marck Script'           => 'Marck Script',
		'Noto Serif'             => 'Noto Serif',
		'Open Sans'              => 'Open Sans',
		'Overpass'               => 'Overpass',
		'Overpass Mono'          => 'Overpass Mono',
		'Oxygen'                 => 'Oxygen',
		'Orbitron'               => 'Orbitron',
		'Patua One'              => 'Patua One',
		'Pacifico'               => 'Pacifico',
		'Padauk'                 => 'Padauk',
		'Playball'               => 'Playball',
		'Playfair Display'       => 'Playfair Display',
		'PT Sans'                => 'PT Sans',
		'Philosopher'            => 'Philosopher',
		'Permanent Marker'       => 'Permanent Marker',
		'Poiret One'             => 'Poiret One',
		'Quicksand'              => 'Quicksand',
		'Quattrocento Sans'      => 'Quattrocento Sans',
		'Raleway'                => 'Raleway',
		'Rubik'                  => 'Rubik',
		'Rokkitt'                => 'Rokkitt',
		'Russo One'              => 'Russo One',
		'Righteous'              => 'Righteous',
		'Slabo'                  => 'Slabo',
		'Source Sans Pro'        => 'Source Sans Pro',
		'Shadows Into Light Two' => 'Shadows Into Light Two',
		'Shadows Into Light'     => 'Shadows Into Light',
		'Sacramento'             => 'Sacramento',
		'Shrikhand'              => 'Shrikhand',
		'Tangerine'              => 'Tangerine',
		'Ubuntu'                 => 'Ubuntu',
		'VT323'                  => 'VT323',
		'Varela Round'           => 'Varela Round',
		'Vampiro One'            => 'Vampiro One',
		'Vollkorn'               => 'Vollkorn',
		'Volkhov'                => 'Volkhov',
		'Yanone Kaffeesatz'      => 'Yanone Kaffeesatz'
	);

	$wp_customize->add_section('sports_hub_typography_option',array(
		'title'         => __('TP Typography Option', 'sports-hub'),
		'priority' => 1,
		'panel' => 'sports_hub_panel_id'
   	));

   	$wp_customize->add_setting('sports_hub_heading_font_family', array(
		'default'           => '',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'sports_hub_sanitize_choices',
	));
	$wp_customize->add_control(	'sports_hub_heading_font_family', array(
		'section' => 'sports_hub_typography_option',
		'label'   => __('heading Fonts', 'sports-hub'),
		'type'    => 'select',
		'choices' => $sports_hub_font_array,
	));

	$wp_customize->add_setting('sports_hub_body_font_family', array(
		'default'           => '',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'sports_hub_sanitize_choices',
	));
	$wp_customize->add_control(	'sports_hub_body_font_family', array(
		'section' => 'sports_hub_typography_option',
		'label'   => __('Body Fonts', 'sports-hub'),
		'type'    => 'select',
		'choices' => $sports_hub_font_array,
	));

	//TP Color Option
	$wp_customize->add_section('sports_hub_color_option',array(
     'title'         => __('TP Color Option', 'sports-hub'),
     'priority' => 1,
     'panel' => 'sports_hub_panel_id'
    ) );
    
	$wp_customize->add_setting( 'sports_hub_tp_color_option', array(
	    'default' => '',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sports_hub_tp_color_option', array(
			'label'     => __('First Theme Color', 'sports-hub'),
	    'description' => __('It will change the complete theme color in one click.', 'sports-hub'),
	    'section' => 'sports_hub_color_option',
	    'settings' => 'sports_hub_tp_color_option',
  	)));

  	$wp_customize->add_setting( 'sports_hub_tp_color_option_second', array(
	    'default' => '',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sports_hub_tp_color_option_second', array(
			'label'     => __('Second Theme Color', 'sports-hub'),
	    'description' => __('It will change the complete theme color in one click.', 'sports-hub'),
	    'section' => 'sports_hub_color_option',
	    'settings' => 'sports_hub_tp_color_option_second',
  	)));

	//TP Preloader Option
	$wp_customize->add_section('sports_hub_prelaoder_option',array(
		'title'         => __('TP Preloader Option', 'sports-hub'),
		'priority' => 1,
		'panel' => 'sports_hub_panel_id'
	) );
	$wp_customize->add_setting( 'sports_hub_preloader_show_hide', array(
		'default'           => false,
		'transport'         => 'refresh',
		'sanitize_callback' => 'sports_hub_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Sports_Hub_Toggle_Control( $wp_customize, 'sports_hub_preloader_show_hide', array(
		'label'       => esc_html__( 'Show / Hide Preloader Option', 'sports-hub' ),
		'section'     => 'sports_hub_prelaoder_option',
		'type'        => 'toggle',
		'settings'    => 'sports_hub_preloader_show_hide',
	) ) );
	$wp_customize->add_setting( 'sports_hub_tp_preloader_color1_option', array(
	    'default' => '',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sports_hub_tp_preloader_color1_option', array(
			'label'     => __('Preloader First Ring Color', 'sports-hub'),
	    'description' => __('It will change the complete theme preloader ring 1 color in one click.', 'sports-hub'),
	    'section' => 'sports_hub_prelaoder_option',
	    'settings' => 'sports_hub_tp_preloader_color1_option',
  	)));
  	$wp_customize->add_setting( 'sports_hub_tp_preloader_color2_option', array(
	    'default' => '',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sports_hub_tp_preloader_color2_option', array(
			'label'     => __('Preloader Second Ring Color', 'sports-hub'),
	    'description' => __('It will change the complete theme preloader ring 2 color in one click.', 'sports-hub'),
	    'section' => 'sports_hub_prelaoder_option',
	    'settings' => 'sports_hub_tp_preloader_color2_option',
  	)));
  	$wp_customize->add_setting( 'sports_hub_tp_preloader_bg_color_option', array(
	    'default' => '',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sports_hub_tp_preloader_bg_color_option', array(
			'label'     => __('Preloader Background Color', 'sports-hub'),
	    'description' => __('It will change the complete theme preloader bg color in one click.', 'sports-hub'),
	    'section' => 'sports_hub_prelaoder_option',
	    'settings' => 'sports_hub_tp_preloader_bg_color_option',
  	)));

	//TP Blog Option
	$wp_customize->add_section('sports_hub_blog_option',array(
		'title' => __('TP Blog Option', 'sports-hub'),
		'priority' => 1,
		'panel' => 'sports_hub_panel_id'
	) );

	$wp_customize->add_setting('blog_meta_order', array(
        'default' => array('date', 'author', 'comment', 'category'),
        'sanitize_callback' => 'sports_hub_sanitize_sortable',
    ));
    $wp_customize->add_control(new Sports_Hub_Control_Sortable($wp_customize, 'blog_meta_order', array(
    	'label' => esc_html__('Meta Order', 'sports-hub'),
        'description' => __('Drag & Drop post items to re-arrange the order and also hide and show items as per the need by clicking on the eye icon.', 'sports-hub') ,
        'section' => 'sports_hub_blog_option',
        'choices' => array(
            'date' => __('date', 'sports-hub') ,
            'author' => __('author', 'sports-hub') ,
            'comment' => __('comment', 'sports-hub') ,
            'category' => __('category', 'sports-hub') ,
        ) ,
    )));

    $wp_customize->add_setting( 'sports_hub_excerpt_count', array(
		'default'              => 35,
		'type'                 => 'theme_mod',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'sports_hub_sanitize_number_range',
		'sanitize_js_callback' => 'absint',
	) );
	$wp_customize->add_control( 'sports_hub_excerpt_count', array(
		'label'       => esc_html__( 'Edit Excerpt Limit','sports-hub' ),
		'section'     => 'sports_hub_blog_option',
		'type'        => 'number',
		'input_attrs' => array(
			'step'             => 2,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	$wp_customize->add_setting('sports_hub_read_more_text',array(
		'default'=> __('Read More','sports-hub'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('sports_hub_read_more_text',array(
		'label'	=> __('Edit Button Text','sports-hub'),
		'section'=> 'sports_hub_blog_option',
		'type'=> 'text'
	));

	$wp_customize->add_setting('sports_hub_post_image_round', array(
	  'default' => '0',
      'sanitize_callback' => 'sports_hub_sanitize_number_range',
	));
	$wp_customize->add_control(new Sports_Hub_Range_Slider($wp_customize, 'sports_hub_post_image_round', array(
       'section' => 'sports_hub_blog_option',
      'label' => esc_html__('Edit Post Image Border Radius', 'sports-hub'),
      'input_attrs' => array(
        'min' => 0,
        'max' => 180,
        'step' => 1
    )
	)));

	$wp_customize->add_setting('sports_hub_post_image_width', array(
	  'default' => '',
      'sanitize_callback' => 'sports_hub_sanitize_number_range',
	));
	$wp_customize->add_control(new Sports_Hub_Range_Slider($wp_customize, 'sports_hub_post_image_width', array(
       'section' => 'sports_hub_blog_option',
      'label' => esc_html__('Edit Post Image Width', 'sports-hub'),
      'input_attrs' => array(
        'min' => 0,
        'max' => 367,
        'step' => 1
    )
	)));

	$wp_customize->add_setting('sports_hub_post_image_length', array(
	  'default' => '',
      'sanitize_callback' => 'sports_hub_sanitize_number_range',
	));
	$wp_customize->add_control(new Sports_Hub_Range_Slider($wp_customize, 'sports_hub_post_image_length', array(
       'section' => 'sports_hub_blog_option',
      'label' => esc_html__('Edit Post Image height', 'sports-hub'),
      'input_attrs' => array(
        'min' => 0,
        'max' => 900,
        'step' => 1
    )
	)));

	$wp_customize->add_setting( 'sports_hub_remove_read_button', array(
		'default'           => true,
		'transport'         => 'refresh',
		'sanitize_callback' => 'sports_hub_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Sports_Hub_Toggle_Control( $wp_customize, 'sports_hub_remove_read_button', array(
		'label'       => esc_html__( 'Show / Hide Read More Button', 'sports-hub' ),
		'section'     => 'sports_hub_blog_option',
		'type'        => 'toggle',
		'settings'    => 'sports_hub_remove_read_button',
	) ) );

    $wp_customize->selective_refresh->add_partial( 'sports_hub_remove_read_button', array(
		'selector' => '.readmore-btn',
		'render_callback' => 'Sports_Hub_Customize_partial_sports_hub_remove_read_button',
	 ));

	 $wp_customize->add_setting( 'sports_hub_remove_tags', array(
		'default'           => true,
		'transport'         => 'refresh',
		'sanitize_callback' => 'sports_hub_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Sports_Hub_Toggle_Control( $wp_customize, 'sports_hub_remove_tags', array(
		'label'       => esc_html__( 'Show / Hide Tags Option', 'sports-hub' ),
		'section'     => 'sports_hub_blog_option',
		'type'        => 'toggle',
		'settings'    => 'sports_hub_remove_tags',
	) ) );
    $wp_customize->selective_refresh->add_partial( 'sports_hub_remove_tags', array(
		'selector' => '.box-content a[rel="tag"]',
		'render_callback' => 'Sports_Hub_Customize_partial_sports_hub_remove_tags',
	));
	$wp_customize->add_setting( 'sports_hub_remove_category', array(
		'default'           => true,
		'transport'         => 'refresh',
		'sanitize_callback' => 'sports_hub_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Sports_Hub_Toggle_Control( $wp_customize, 'sports_hub_remove_category', array(
		'label'       => esc_html__( 'Show / Hide Category Option', 'sports-hub' ),
		'section'     => 'sports_hub_blog_option',
		'type'        => 'toggle',
		'settings'    => 'sports_hub_remove_category',
	) ) );
    $wp_customize->selective_refresh->add_partial( 'sports_hub_remove_category', array(
		'selector' => '.box-content a[rel="category"]',
		'render_callback' => 'Sports_Hub_Customize_partial_sports_hub_remove_category',
	));
	$wp_customize->add_setting( 'sports_hub_remove_comment', array(
	 'default'           => true,
	 'transport'         => 'refresh',
	 'sanitize_callback' => 'sports_hub_sanitize_checkbox',
 	) );

	$wp_customize->add_control( new Sports_Hub_Toggle_Control( $wp_customize, 'sports_hub_remove_comment', array(
	 'label'       => esc_html__( 'Show / Hide Comment Form', 'sports-hub' ),
	 'section'     => 'sports_hub_blog_option',
	 'type'        => 'toggle',
	 'settings'    => 'sports_hub_remove_comment',
	) ) );

	$wp_customize->add_setting( 'sports_hub_remove_related_post', array(
	 'default'           => true,
	 'transport'         => 'refresh',
	 'sanitize_callback' => 'sports_hub_sanitize_checkbox',
 	) );

	$wp_customize->add_control( new Sports_Hub_Toggle_Control( $wp_customize, 'sports_hub_remove_related_post', array(
	 'label'       => esc_html__( 'Show / Hide Related Post', 'sports-hub' ),
	 'section'     => 'sports_hub_blog_option',
	 'type'        => 'toggle',
	 'settings'    => 'sports_hub_remove_related_post',
	) ) );
	$wp_customize->add_setting( 'sports_hub_related_post_per_page', array(
		'default'              => 3,
		'type'                 => 'theme_mod',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'sports_hub_sanitize_number_range',
		'sanitize_js_callback' => 'absint',
	) );
	$wp_customize->add_control( 'sports_hub_related_post_per_page', array(
		'label'       => esc_html__( 'Related Post Per Page','sports-hub' ),
		'section'     => 'sports_hub_blog_option',
		'type'        => 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 3,
			'max'              => 9,
		),
	) );

	 //MENU TYPOGRAPHY
	$wp_customize->add_section( 'sports_hub_menu_typography', array(
    	'title'      => __( 'Menu Typography', 'sports-hub' ),
    	'priority' => 2,
		'panel' => 'sports_hub_panel_id'
	) );
	$wp_customize->add_setting('sports_hub_menu_font_family', array(
		'default'           => '',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'sports_hub_sanitize_choices',
	));
	$wp_customize->add_control(	'sports_hub_menu_font_family', array(
		'section' => 'sports_hub_menu_typography',
		'label'   => __('Menu Fonts', 'sports-hub'),
		'type'    => 'select',
		'choices' => $sports_hub_font_array,
	));

	$wp_customize->add_setting('sports_hub_menu_text_tranform',array(
		'default' => '',
		'sanitize_callback' => 'sports_hub_sanitize_choices'
 	));
 	$wp_customize->add_control('sports_hub_menu_text_tranform',array(
		'type' => 'select',
		'label' => __('Menu Text Transform','sports-hub'),
		'section' => 'sports_hub_menu_typography',
		'choices' => array(
		   'Uppercase' => __('Uppercase','sports-hub'),
		   'Lowercase' => __('Lowercase','sports-hub'),
		   'Capitalize' => __('Capitalize','sports-hub'),
		),
	) );
	
	$wp_customize->add_setting('sports_hub_menu_font_size', array(
	  'default' => '',
      'sanitize_callback' => 'sports_hub_sanitize_number_range',
	));
	$wp_customize->add_control(new Sports_Hub_Range_Slider($wp_customize, 'sports_hub_menu_font_size', array(
       'section' => 'sports_hub_menu_typography',
      'label' => esc_html__('Font Size', 'sports-hub'),
      'input_attrs' => array(
        'min' => 0,
        'max' => 20,
        'step' => 1
    )
	)));

	// Top bar Section
	$wp_customize->add_section( 'sports_hub_topbar', array(
    	'title'      => __( 'Header Details', 'sports-hub' ),
    	'description' => __( 'Add your contact details', 'sports-hub' ),
		'panel' => 'sports_hub_panel_id',
      'priority' => 2,
	) );

	$wp_customize->add_setting('sports_hub_topbar_visibility', array(
	    'default'           => true, // Default is to show the top bar.
	    'transport'         => 'refresh',
	    'sanitize_callback' => 'sports_hub_sanitize_checkbox',
	));
	$wp_customize->add_control(new Sports_Hub_Toggle_Control($wp_customize, 'sports_hub_topbar_visibility', array(
	    'label'       => esc_html__('Show / Hide Topbar', 'sports-hub'),
	    'section'     => 'sports_hub_topbar',
	    'type'        => 'toggle',
	    'settings'    => 'sports_hub_topbar_visibility',
	)));

	$wp_customize->add_setting('sports_hub_discount_text_top',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('sports_hub_discount_text_top',array(
		'label'	=> __('Add Topbar Text','sports-hub'),
		'section'=> 'sports_hub_topbar',
		'type'=> 'text'
	));

	$wp_customize->add_setting( 'sports_hub_cart_language_translator', array(
		'default'           => true,
		'transport'         => 'refresh',
		'sanitize_callback' => 'sports_hub_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Sports_Hub_Toggle_Control( $wp_customize, 'sports_hub_cart_language_translator', array(
		'label'       => esc_html__( 'Show / Hide Language Translator', 'sports-hub' ),
		'section'     => 'sports_hub_topbar',
		'type'        => 'toggle',
		'settings'    => 'sports_hub_cart_language_translator',
	) ) );

	// Social Link
	$wp_customize->add_section( 'sports_hub_social_media', array(
    	'title'      => __( 'Social Media Links', 'sports-hub' ),
    	'description' => __( 'Add your Social Links', 'sports-hub' ),
		'panel' => 'sports_hub_panel_id',
      'priority' => 2,
	) );

	$wp_customize->add_setting( 'sports_hub_header_fb_new_tab', array(
		'default'           => true,
		'transport'         => 'refresh',
		'sanitize_callback' => 'sports_hub_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Sports_Hub_Toggle_Control( $wp_customize, 'sports_hub_header_fb_new_tab', array(
		'label'       => esc_html__( 'Open in new tab', 'sports-hub' ),
		'section'     => 'sports_hub_social_media',
		'type'        => 'toggle',
		'settings'    => 'sports_hub_header_fb_new_tab',
	) ) );

	$wp_customize->add_setting('sports_hub_facebook_url',array(
		'default'=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('sports_hub_facebook_url',array(
		'label'	=> __('Facebook Link','sports-hub'),
		'section'=> 'sports_hub_social_media',
		'type'=> 'url'
	));

	$wp_customize->selective_refresh->add_partial( 'sports_hub_facebook_url', array(
		'selector' => '.social-media',
		'render_callback' => 'Sports_Hub_Customize_partial_sports_hub_facebook_url',
	) );

	$wp_customize->add_setting('sports_hub_facebook_icon',array(
		'default'	=> 'fab fa-facebook-f',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Sports_Hub_Icon_Changer(
        $wp_customize,'sports_hub_facebook_icon',array(
		'label'	=> __('Facebook Icon','sports-hub'),
		'transport' => 'refresh',
		'section'	=> 'sports_hub_social_media',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting( 'sports_hub_pinterest_new_tab', array(
		'default'           => true,
		'transport'         => 'refresh',
		'sanitize_callback' => 'sports_hub_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Sports_Hub_Toggle_Control( $wp_customize, 'sports_hub_pinterest_new_tab', array(
		'label'       => esc_html__( 'Open in new tab', 'sports-hub' ),
		'section'     => 'sports_hub_social_media',
		'type'        => 'toggle',
		'settings'    => 'sports_hub_pinterest_new_tab',
	) ) );

	$wp_customize->add_setting('sports_hub_pinterest_url',array(
		'default'=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('sports_hub_pinterest_url',array(
		'label'	=> __('Pinterest Link','sports-hub'),
		'section'=> 'sports_hub_social_media',
		'type'=> 'url'
	));

	$wp_customize->add_setting('sports_hub_pinterest_icon',array(
		'default'	=> 'fab fa-pinterest-p',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Sports_Hub_Icon_Changer(
        $wp_customize,'sports_hub_pinterest_icon',array(
		'label'	=> __('Pinterest Icon','sports-hub'),
		'transport' => 'refresh',
		'section'	=> 'sports_hub_social_media',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting( 'sports_hub_header_ins_new_tab', array(
		'default'           => true,
		'transport'         => 'refresh',
		'sanitize_callback' => 'sports_hub_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Sports_Hub_Toggle_Control( $wp_customize, 'sports_hub_header_ins_new_tab', array(
		'label'       => esc_html__( 'Open in new tab', 'sports-hub' ),
		'section'     => 'sports_hub_social_media',
		'type'        => 'toggle',
		'settings'    => 'sports_hub_header_ins_new_tab',
	) ) );

	$wp_customize->add_setting('sports_hub_instagram_url',array(
		'default'=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('sports_hub_instagram_url',array(
		'label'	=> __('Instagram Link','sports-hub'),
		'section'=> 'sports_hub_social_media',
		'type'=> 'url'
	));

	$wp_customize->add_setting('sports_hub_instagram_icon',array(
		'default'	=> 'fab fa-instagram',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Sports_Hub_Icon_Changer(
        $wp_customize,'sports_hub_instagram_icon',array(
		'label'	=> __('Instagram Icon','sports-hub'),
		'transport' => 'refresh',
		'section'	=> 'sports_hub_social_media',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting( 'sports_hub_header_twt_new_tab', array(
		'default'           => true,
		'transport'         => 'refresh',
		'sanitize_callback' => 'sports_hub_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Sports_Hub_Toggle_Control( $wp_customize, 'sports_hub_header_twt_new_tab', array(
		'label'       => esc_html__( 'Open in new tab', 'sports-hub' ),
		'section'     => 'sports_hub_social_media',
		'type'        => 'toggle',
		'settings'    => 'sports_hub_header_twt_new_tab',
	) ) );

	$wp_customize->add_setting('sports_hub_twitter_url',array(
		'default'=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('sports_hub_twitter_url',array(
		'label'	=> __('Twitter Link','sports-hub'),
		'section'=> 'sports_hub_social_media',
		'type'=> 'url'
	));

	$wp_customize->add_setting('sports_hub_twitter_icon',array(
		'default'	=> 'fab fa-twitter',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Sports_Hub_Icon_Changer(
        $wp_customize,'sports_hub_twitter_icon',array(
		'label'	=> __('Twitter Icon','sports-hub'),
		'transport' => 'refresh',
		'section'	=> 'sports_hub_social_media',
		'type'		=> 'icon'
	)));
	
	
	
	//home page slider
	$wp_customize->add_section( 'sports_hub_slider_section' , array(
    	'title'      => __( 'Slider Section', 'sports-hub' ),
    	'priority' => 2,
		'panel' => 'sports_hub_panel_id'
	) );

	$wp_customize->add_setting( 'sports_hub_slider_arrows', array(
		'default'           => true,
		'transport'         => 'refresh',
		'sanitize_callback' => 'sports_hub_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Sports_Hub_Toggle_Control( $wp_customize, 'sports_hub_slider_arrows', array(
		'label'       => esc_html__( 'Show / Hide slider', 'sports-hub' ),
		'section'     => 'sports_hub_slider_section',
		'type'        => 'toggle',
		'settings'    => 'sports_hub_slider_arrows',
	) ) );

	for ( $sports_hub_count = 1; $sports_hub_count <= 4; $sports_hub_count++ ) {

		$wp_customize->add_setting( 'sports_hub_slider_page' . $sports_hub_count, array(
			'default'           => '',
			'sanitize_callback' => 'sports_hub_sanitize_dropdown_pages'
		) );

		$wp_customize->add_control( 'sports_hub_slider_page' . $sports_hub_count, array(
			'label'    => __( 'Select Slide Image Page', 'sports-hub' ),
			'section'  => 'sports_hub_slider_section',
			'type'     => 'dropdown-pages'
		) );
	}

	$wp_customize->add_setting('sports_hub_slider_short_heading',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('sports_hub_slider_short_heading',array(
		'label'	=> __('Add Sub Heading','sports-hub'),
		'section'=> 'sports_hub_slider_section',
		'type'=> 'text'
	));

	// Service Section Settings
	$wp_customize->add_section('sports_hub_service_section', array(
	  'title' => __('Our Services Section', 'sports-hub'),
	  'panel' => 'sports_hub_panel_id',
	  'priority' => 7,
	));

	$wp_customize->add_setting('sports_hub_show_hide_sec', array(
	  'default' => true,
	  'transport' => 'refresh',
	  'sanitize_callback' => 'sports_hub_sanitize_checkbox',
	));
	$wp_customize->add_control(new Sports_Hub_Toggle_Control($wp_customize, 'sports_hub_show_hide_sec', array(
	  'label' => esc_html__('Show / Hide Service Section', 'sports-hub'),
	  'section' => 'sports_hub_service_section',
	  'type' => 'toggle',
	  'settings' => 'sports_hub_show_hide_sec',
	)));


	$wp_customize->add_setting('sports_hub_featured_section_title', array(
	  'default' => '',
	  'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control('sports_hub_featured_section_title', array(
	  'label' => __('Add Heading', 'sports-hub'),
	  'section' => 'sports_hub_service_section',
	  'type' => 'text'
	));

	$wp_customize->add_setting('sports_hub_serv_short_heading',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('sports_hub_serv_short_heading',array(
		'label'	=> __('Add short Heading','sports-hub'),
		'section'=> 'sports_hub_service_section',
		'type'=> 'text'
	));

	$categories = get_categories();
	$cats = array();
	$sports_hub_i = 0;
	$sports_hub_offer_cat[] = 'select';
	foreach ($categories as $category) {
	  if ($sports_hub_i == 0) {
	    $default = $category->slug;
	    $sports_hub_i++;
	  }
	  $sports_hub_offer_cat[$category->slug] = $category->name;
	}

	$wp_customize->add_setting('sports_hub_featured_section_category', array(
	  'default' => 'select',
	  'sanitize_callback' => 'sports_hub_sanitize_choices',
	));
	$wp_customize->add_control('sports_hub_featured_section_category', array(
	  'type' => 'select',
	  'choices' => $sports_hub_offer_cat,
	  'label' => __('Select Category', 'sports-hub'),
	  'section' => 'sports_hub_service_section',
	));

	//footer
	$wp_customize->add_section('sports_hub_footer_section',array(
		'title'	=> __('Footer Text','sports-hub'),
		'description'	=> __('Add copyright text.','sports-hub'),
		'panel' => 'sports_hub_panel_id',
		'priority' => 7,
	));
	
	$wp_customize->add_setting('sports_hub_footer_text',array(
		'default'	=> 'Sports WordPress Theme',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('sports_hub_footer_text',array(
		'label'	=> __('Copyright Text','sports-hub'),
		'section'	=> 'sports_hub_footer_section',
		'type'		=> 'text'
	));

	//footer widget title font size
	$wp_customize->add_setting('sports_hub_footer_copyright_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sports_hub_sanitize_number_absint'
	));
	$wp_customize->add_control('sports_hub_footer_copyright_font_size',array(
		'label'	=> __('Change Footer Copyright Font Size in PX','sports-hub'),
		'section'	=> 'sports_hub_footer_section',
	    'setting'	=> 'sports_hub_footer_copyright_font_size',
		'type'	=> 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 50,
		),
	));

	$wp_customize->add_setting( 'sports_hub_footer_copyright_text_color', array(
	    'default' => '',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sports_hub_footer_copyright_text_color', array(
			'label'     => __('Change Footer Copyright Text Color', 'sports-hub'),
	    'section' => 'sports_hub_footer_section',
	    'settings' => 'sports_hub_footer_copyright_text_color',
  	)));

  	$wp_customize->add_setting('sports_hub_footer_copyright_top_bottom_padding',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sports_hub_sanitize_number_absint'
	));
	$wp_customize->add_control('sports_hub_footer_copyright_top_bottom_padding',array(
		'label'	=> __('Change Footer Copyright Padding in PX','sports-hub'),
		'section'	=> 'sports_hub_footer_section',
	    'setting'	=> 'sports_hub_footer_copyright_top_bottom_padding',
		'type'	=> 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 50,
		),
	));

	// footer columns
	$wp_customize->add_setting('sports_hub_footer_columns',array(
		'default'	=> 4,
		'sanitize_callback'	=> 'sports_hub_sanitize_number_absint'
	));
	$wp_customize->add_control('sports_hub_footer_columns',array(
		'label'	=> __('Footer Widget Columns','sports-hub'),
		'section'	=> 'sports_hub_footer_section',
		'setting'	=> 'sports_hub_footer_columns',
		'type'	=> 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 4,
		),
	));
	$wp_customize->add_setting( 'sports_hub_tp_footer_bg_color_option', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sports_hub_tp_footer_bg_color_option', array(
			'label'     => __('Footer Widget Background Color', 'sports-hub'),
			'description' => __('It will change the complete footer widget backgorund color.', 'sports-hub'),
			'section' => 'sports_hub_footer_section',
			'settings' => 'sports_hub_tp_footer_bg_color_option',
	)));
	
	$wp_customize->add_setting('sports_hub_footer_widget_image',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,'sports_hub_footer_widget_image',array(
        'label' => __('Footer Widget Background Image','sports-hub'),
         'section' => 'sports_hub_footer_section'
	)));

	//footer widget title font size
	$wp_customize->add_setting('sports_hub_footer_widget_title_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sports_hub_sanitize_number_absint'
	));
	$wp_customize->add_control('sports_hub_footer_widget_title_font_size',array(
		'label'	=> __('Change Footer Widget Title Font Size in PX','sports-hub'),
		'section'	=> 'sports_hub_footer_section',
	    'setting'	=> 'sports_hub_footer_widget_title_font_size',
		'type'	=> 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 50,
		),
	));

	$wp_customize->add_setting( 'sports_hub_footer_widget_title_color', array(
	    'default' => '',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sports_hub_footer_widget_title_color', array(
			'label'     => __('Change Footer Widget Title Color', 'sports-hub'),
	    'section' => 'sports_hub_footer_section',
	    'settings' => 'sports_hub_footer_widget_title_color',
  	)));

	$wp_customize->add_setting('sports_hub_return_to_header',array(
		 'default' => true,
		 'sanitize_callback'	=> 'sports_hub_sanitize_checkbox'
	));
	$wp_customize->add_control( new Sports_Hub_Toggle_Control( $wp_customize, 'sports_hub_return_to_header', array(
		'label'       => esc_html__( 'Show / Hide Return To Header', 'sports-hub' ),
		'section'     => 'sports_hub_footer_section',
		'type'        => 'toggle',
		'settings'    => 'sports_hub_return_to_header',
	) ) );

	$wp_customize->add_setting( 'sports_hub_return_to_header', array(
		'default'           => true,
		'transport'         => 'refresh',
		'sanitize_callback' => 'sports_hub_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Sports_Hub_Toggle_Control( $wp_customize, 'sports_hub_return_to_header', array(
		'label'       => esc_html__( 'Show / Hide Return to header', 'sports-hub' ),
		'section'     => 'sports_hub_footer_section',
		'type'        => 'toggle',
		'settings'    => 'sports_hub_return_to_header',
	) ) );
    $wp_customize->add_setting('sports_hub_scroll_top_icon',array(
	  'default'	=> 'fas fa-arrow-up',
	  'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Sports_Hub_Icon_Changer(
	        $wp_customize,'sports_hub_scroll_top_icon',array(
		'label'	=> __('Scroll to top Icon','sports-hub'),
		'transport' => 'refresh',
		'section'	=> 'sports_hub_footer_section',
			'type'		=> 'icon'
	)));

    // Add Settings and Controls for Scroll top
	$wp_customize->add_setting('sports_hub_scroll_top_position',array(
        'default' => 'Right',
        'sanitize_callback' => 'sports_hub_sanitize_choices'
	));
	$wp_customize->add_control('sports_hub_scroll_top_position',array(
        'type' => 'radio',
        'label'     => __('Scroll to top Position', 'sports-hub'),
        'description'   => __('This option work for scroll to top', 'sports-hub'),
       'section' => 'sports_hub_footer_section',
       'choices' => array(
            'Right' => __('Right','sports-hub'),
            'Left' => __('Left','sports-hub'),
            'Center' => __('Center','sports-hub')
     ),
	) );
	$wp_customize->get_setting( 'blogname' )->transport          = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport   = 'postMessage';
	$wp_customize->selective_refresh->add_partial( 'blogname', array(
		'selector' => '.site-title a',
		'render_callback' => 'Sports_Hub_Customize_partial_blogname',
	) );
	$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
		'selector' => '.site-description',
		'render_callback' => 'Sports_Hub_Customize_partial_blogdescription',
	) );

	//Mobile Respnsive
	$wp_customize->add_section('sports_hub_mobile_media_option',array(
		'title'         => __('Mobile Responsive media', 'sports-hub'),
		'description' => __('Control will not function if the toggle in the main settings is off.', 'sports-hub'),
		'priority' => 8,
		'panel' => 'sports_hub_panel_id'
	) );
	$wp_customize->add_setting( 'sports_hub_return_to_header_mob', array(
		'default'           => true,
		'transport'         => 'refresh',
		'sanitize_callback' => 'sports_hub_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Sports_Hub_Toggle_Control( $wp_customize, 'sports_hub_return_to_header_mob', array(
		'label'       => esc_html__( 'Show / Hide Return to header', 'sports-hub' ),
		'section'     => 'sports_hub_mobile_media_option',
		'type'        => 'toggle',
		'settings'    => 'sports_hub_return_to_header_mob',
	) ) );
	$wp_customize->add_setting( 'sports_hub_related_post_mob', array(
		'default'           => true,
		'transport'         => 'refresh',
		'sanitize_callback' => 'sports_hub_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Sports_Hub_Toggle_Control( $wp_customize, 'sports_hub_related_post_mob', array(
		'label'       => esc_html__( 'Show / Hide Related Post', 'sports-hub' ),
		'section'     => 'sports_hub_mobile_media_option',
		'type'        => 'toggle',
		'settings'    => 'sports_hub_related_post_mob',
	) ) );

	//Site Identity
	$wp_customize->add_setting( 'sports_hub_site_title', array(
		'default'           => true,
		'transport'         => 'refresh',
		'sanitize_callback' => 'sports_hub_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Sports_Hub_Toggle_Control( $wp_customize, 'sports_hub_site_title', array(
		'label'       => esc_html__( 'Show / Hide Site Title', 'sports-hub' ),
		'section'     => 'title_tagline',
		'type'        => 'toggle',
		'settings'    => 'sports_hub_site_title',
	) ) );

	$wp_customize->add_setting('sports_hub_site_title_font_size',array(
		'default'	=> 30,
		'sanitize_callback'	=> 'sports_hub_sanitize_number_absint'
	));
	$wp_customize->add_control('sports_hub_site_title_font_size',array(
		'label'	=> __('Site Title Font Size in PX','sports-hub'),
		'section'	=> 'title_tagline',
		'setting'	=> 'sports_hub_site_title_font_size',
		'type'	=> 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 80,
		),
	));

	$wp_customize->add_setting( 'sports_hub_site_tagline_color', array(
	    'default' => '',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sports_hub_site_tagline_color', array(
			'label'     => __('Change Site Title Color', 'sports-hub'),
	    'section' => 'title_tagline',
	    'settings' => 'sports_hub_site_tagline_color',
  	)));

	$wp_customize->add_setting( 'sports_hub_site_tagline', array(
	    'default'           => false,
		'transport'         => 'refresh',
		'sanitize_callback' => 'sports_hub_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Sports_Hub_Toggle_Control( $wp_customize, 'sports_hub_site_tagline', array(
		'label'       => esc_html__( 'Show / Hide Site Tagline', 'sports-hub' ),
		'section'     => 'title_tagline',
		'type'        => 'toggle',
		'settings'    => 'sports_hub_site_tagline',
	) ) );

	// logo site tagline size
	$wp_customize->add_setting('sports_hub_site_tagline_font_size',array(
		'default'	=> 15,
		'sanitize_callback'	=> 'sports_hub_sanitize_number_absint'
	));
	$wp_customize->add_control('sports_hub_site_tagline_font_size',array(
		'label'	=> __('Site Tagline Font Size in PX','sports-hub'),
		'section'	=> 'title_tagline',
	    'setting'	=> 'sports_hub_site_tagline_font_size',
		'type'	=> 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 50,
		),
	));

	$wp_customize->add_setting( 'sports_hub_logo_tagline_color', array(
	    'default' => '',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sports_hub_logo_tagline_color', array(
			'label'     => __('Change Site Tagline Color', 'sports-hub'),
	    'section' => 'title_tagline',
	    'settings' => 'sports_hub_logo_tagline_color',
  	)));

    $wp_customize->add_setting('sports_hub_logo_width',array(
		'default' => 50,
		'sanitize_callback'	=> 'sports_hub_sanitize_number_absint'
	));
	$wp_customize->add_control('sports_hub_logo_width',array(
		'label'	=> esc_html__('Here You Can Customize Your Logo Size','sports-hub'),
		'section'	=> 'title_tagline',
		'type'		=> 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 150,
		),
	));

	//Woo Coomerce
	$wp_customize->add_setting('sports_hub_per_columns',array(
		'default'=> 3,
		'sanitize_callback'	=> 'sports_hub_sanitize_number_absint'
	));
	$wp_customize->add_control('sports_hub_per_columns',array(
		'label'	=> __('Product Per Row','sports-hub'),
		'section'=> 'woocommerce_product_catalog',
		'type'=> 'number'
	));
	$wp_customize->add_setting('sports_hub_product_per_page',array(
		'default'=> 9,
		'sanitize_callback'	=> 'sports_hub_sanitize_number_absint'
	));
	$wp_customize->add_control('sports_hub_product_per_page',array(
		'label'	=> __('Product Per Page','sports-hub'),
		'section'=> 'woocommerce_product_catalog',
		'type'=> 'number'
	));
   	$wp_customize->add_setting( 'sports_hub_product_sidebar', array(
		 'default'           => true,
		 'transport'         => 'refresh',
		 'sanitize_callback' => 'sports_hub_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Sports_Hub_Toggle_Control( $wp_customize, 'sports_hub_product_sidebar', array(
		'label'       => esc_html__( 'Show / Hide Shop Page Sidebar', 'sports-hub' ),
		'section'     => 'woocommerce_product_catalog',
		'type'        => 'toggle',
		'settings'    => 'sports_hub_product_sidebar',
	) ) );

	$wp_customize->add_setting( 'sports_hub_single_product_sidebar', array(
		'default'           => true,
		'transport'         => 'refresh',
		'sanitize_callback' => 'sports_hub_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Sports_Hub_Toggle_Control( $wp_customize, 'sports_hub_single_product_sidebar', array(
		'label'       => esc_html__( 'Show / Hide Product Page Sidebar', 'sports-hub' ),
		'section'     => 'woocommerce_product_catalog',
		'type'        => 'toggle',
		'settings'    => 'sports_hub_single_product_sidebar',
	) ) );
	$wp_customize->add_setting( 'sports_hub_related_product', array(
		'default'           => true,
		'transport'         => 'refresh',
		'sanitize_callback' => 'sports_hub_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Sports_Hub_Toggle_Control( $wp_customize, 'sports_hub_related_product', array(
		'label'       => esc_html__( 'Show / Hide related product', 'sports-hub' ),
		'section'     => 'woocommerce_product_catalog',
		'type'        => 'toggle',
		'settings'    => 'sports_hub_related_product',
	) ) );
	
	//add page template setting pannel
	$wp_customize->add_panel( 'sports_hub_page_panel_id', array(
	    'priority' => 10,
	    'capability' => 'edit_theme_options',
	    'theme_supports' => '',
	    'title' => __( 'Page Template Settings', 'sports-hub' ),
	    'description' => __( 'Description of what this panel does.', 'sports-hub' ),
	) );

	// 404 PAGE
	$wp_customize->add_section('sports_hub_404_page_section',array(
		'title'         => __('404 Page', 'sports-hub'),
		'description'   => 'Here you can customize 404 Page content.',
		'panel' => 'sports_hub_page_panel_id'
	) );

	$wp_customize->add_setting('sports_hub_edit_404_title',array(
		'default'=> __('Oops! That page cant be found.','sports-hub'),
		'sanitize_callback'	=> 'sanitize_text_field',
	));
	$wp_customize->add_control('sports_hub_edit_404_title',array(
		'label'	=> __('Edit Title','sports-hub'),
		'section'=> 'sports_hub_404_page_section',
		'type'=> 'text',
	));

	$wp_customize->add_setting('sports_hub_edit_404_text',array(
		'default'=> __('It looks like nothing was found at this location. Maybe try a search?','sports-hub'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('sports_hub_edit_404_text',array(
		'label'	=> __('Edit Text','sports-hub'),
		'section'=> 'sports_hub_404_page_section',
		'type'=> 'text'
	));

	// Search Results
	$wp_customize->add_section('sports_hub_no_result_section',array(
		'title'         => __('Search Results', 'sports-hub'),
		'description'   => 'Here you can customize Search Result content.',
		'panel' => 'sports_hub_page_panel_id'
	) );

	$wp_customize->add_setting('sports_hub_edit_no_result_title',array(
		'default'=> __('Nothing Found','sports-hub'),
		'sanitize_callback'	=> 'sanitize_text_field',
	));
	$wp_customize->add_control('sports_hub_edit_no_result_title',array(
		'label'	=> __('Edit Title','sports-hub'),
		'section'=> 'sports_hub_no_result_section',
		'type'=> 'text',
	));

	$wp_customize->add_setting('sports_hub_edit_no_result_text',array(
		'default'=> __('Sorry, but nothing matched your search terms. Please try again with some different keywords.','sports-hub'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('sports_hub_edit_no_result_text',array(
		'label'	=> __('Edit Text','sports-hub'),
		'section'=> 'sports_hub_no_result_section',
		'type'=> 'text'
	));

}
add_action( 'customize_register', 'Sports_Hub_Customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @since Sports Hub 1.0
 * @see Sports_Hub_Customize_register()
 *
 * @return void
 */
function Sports_Hub_Customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @since Sports Hub 1.0
 * @see Sports_Hub_Customize_register()
 *
 * @return void
 */
function Sports_Hub_Customize_partial_blogdescription() {
	bloginfo( 'description' );
}

if ( ! defined( 'SPORTS_HUB_PRO_THEME_NAME' ) ) {
	define( 'SPORTS_HUB_PRO_THEME_NAME', esc_html__( 'Sports Hub Pro', 'sports-hub' ));
}
if ( ! defined( 'SPORTS_HUB_PRO_THEME_URL' ) ) {
	define( 'SPORTS_HUB_PRO_THEME_URL', esc_url('https://www.themespride.com/products/sports-accessory-wordpress-theme'));
}
if ( ! defined( 'SPORTS_HUB_DOCS_URL' ) ) {
	define( 'SPORTS_HUB_DOCS_URL', esc_url('https://page.themespride.com/demo/docs/sports-hub-lite/'));
}

if ( ! defined( 'SPORTS_HUB_DEMO_TITLE' ) ) {
	define( 'SPORTS_HUB_DEMO_TITLE', esc_html__( 'Click to View Site', 'sports-hub' ));
}
/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class Sports_Hub_Customize {

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
		$manager->register_section_type( 'Sports_Hub_Customize_Section_Pro' );

		// Register sections.
		$manager->add_section(
			new Sports_Hub_Customize_Section_Pro(
				$manager,
				'sports_hub_section_pro',
				array(
					'priority'   => 9,
					'title'    => SPORTS_HUB_PRO_THEME_NAME,
					'pro_text' => esc_html__( 'Upgrade Pro', 'sports-hub' ),
					'pro_url'  => esc_url( SPORTS_HUB_PRO_THEME_URL, 'sports-hub' ),
				)
			)
		);

		// Register sections.
		$manager->add_section(
			new sports_hub_Customize_Section_Pro(
				$manager,
				'sports_hub_documentation',
				array(
					'priority'   => 500,
					'title'    => esc_html__( 'Theme Documentation', 'sports-hub' ),
					'pro_text' => esc_html__( 'Click Here', 'sports-hub' ),
					'pro_url'  => esc_url( SPORTS_HUB_DOCS_URL, 'sports-hub'),
				)
			)
		);

		// Register sections.
		$manager->add_section(
			new sports_hub_Customize_Section_Pro(
				$manager,
				'sports_hub_section_pro_demo',
				array(
					'priority'   => 9,
					'title'    => SPORTS_HUB_DEMO_TITLE,
					'pro_text' => esc_html__( 'View Site', 'sports-hub' ),
					'pro_url'  => esc_url( home_url() ),
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

		wp_enqueue_script( 'sports-hub-customize-controls', trailingslashit( esc_url( get_template_directory_uri() ) ) . '/assets/js/customize-controls.js', array( 'customize-controls' ) );

		wp_enqueue_style( 'sports-hub-customize-controls', trailingslashit( esc_url( get_template_directory_uri() ) ) . '/assets/css/customize-controls.css' );
	}
}

// Doing this customizer thang!
Sports_Hub_Customize::get_instance();