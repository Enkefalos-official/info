<?php
/**
 * Sports Hub functions and definitions
 *
 * @package Sports Hub
 * @subpackage sports_hub
 */

function sports_hub_setup() {

	load_theme_textdomain( 'sports-hub', get_template_directory() . '/languages' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'woocommerce' );
	add_theme_support( 'title-tag' );
	add_theme_support( "responsive-embeds" );
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'align-wide' );
	add_theme_support( 'post-thumbnails' );
	add_image_size( 'sports-hub-featured-image', 2000, 1200, true );
	add_image_size( 'sports-hub-thumbnail-avatar', 100, 100, true );

	// Set the default content width.
	$GLOBALS['content_width'] = 525;

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'primary-menu'    => __( 'Primary Menu', 'sports-hub' ),
	) );

	// Add theme support for Custom Logo.
	add_theme_support( 'custom-logo', array(
		'width'       => 250,
		'height'      => 250,
		'flex-width'  => true,
		'flex-height' => true,
	) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	add_theme_support( 'custom-background', array(
		'default-color' => 'ffffff'
	) );

	/*
	 * Enable support for Post Formats.
	 *
	 * See: https://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array('image','video','gallery','audio',) );

	add_theme_support( 'html5', array('comment-form','comment-list','gallery','caption',) );

	/*
	 * This theme styles the visual editor to resemble the theme style,
	 * specifically font, colors, and column width.
 	 */
	add_editor_style( array( 'assets/css/editor-style.css', sports_hub_fonts_url() ) );
}
add_action( 'after_setup_theme', 'sports_hub_setup' );

/**
 * Register custom fonts.
 */
function sports_hub_fonts_url(){
	$sports_hub_font_url = '';
	$sports_hub_font_family = array();
	$sports_hub_font_family[] = 'Mali:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,200;1,300;1,400;1,500;1,600;1,700';
	$sports_hub_font_family[] = 'Nunito:wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;0,1000;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900;1,1000';
	$sports_hub_font_family[] = 'Roboto:wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900';
	$sports_hub_font_family[] = 'Fira Sans Condensed:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900';
	$sports_hub_font_family[] = 'Jura:ital,wght@300;400;500;600;700';
	$sports_hub_font_family[] = 'Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900';
	$sports_hub_font_family[] = 'Bad Script';
	$sports_hub_font_family[] = 'Bebas Neue';
	$sports_hub_font_family[] = 'Fjalla One';
	$sports_hub_font_family[] = 'PT Sans:ital,wght@0,400;0,700;1,400;1,700';
	$sports_hub_font_family[] = 'PT Serif:ital,wght@0,400;0,700;1,400;1,700';
	$sports_hub_font_family[] = 'Roboto Condensed:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700';
	$sports_hub_font_family[] = 'Alex Brush';
	$sports_hub_font_family[] = 'Overpass:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900';
	$sports_hub_font_family[] = 'Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900';
	$sports_hub_font_family[] = 'Playball';
	$sports_hub_font_family[] = 'Alegreya:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900';
	$sports_hub_font_family[] = 'Julius Sans One';
	$sports_hub_font_family[] = 'Arsenal:ital,wght@0,400;0,700;1,400;1,700';
	$sports_hub_font_family[] = 'Slabo 13px';
	$sports_hub_font_family[] = 'Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900';
	$sports_hub_font_family[] = 'Overpass Mono:wght@300;400;500;600;700';
	$sports_hub_font_family[] = 'Source Sans Pro:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700;1,900';
	$sports_hub_font_family[] = 'Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900';
	$sports_hub_font_family[] = 'Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900';
	$sports_hub_font_family[] = 'Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900';
	$sports_hub_font_family[] = 'Lora:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700';
	$sports_hub_font_family[] = 'Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700';
	$sports_hub_font_family[] = 'Cabin:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700';
	$sports_hub_font_family[] = 'Arimo:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700';
	$sports_hub_font_family[] = 'Playfair Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900';
	$sports_hub_font_family[] = 'Quicksand:wght@300;400;500;600;700';
	$sports_hub_font_family[] = 'Padauk:wght@400;700';
	$sports_hub_font_family[] = 'Mulish:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;0,1000;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900;1,1000';
	$sports_hub_font_family[] = 'Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900';
	$sports_hub_font_family[] = 'Inconsolata:wght@200;300;400;500;600;700;800;900&family=Mulish:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;0,1000;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900;1,1000';
	$sports_hub_font_family[] = 'Bitter:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Mulish:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;0,1000;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900;1,1000';
	$sports_hub_font_family[] = 'Pacifico';
	$sports_hub_font_family[] = 'Indie Flower';
	$sports_hub_font_family[] = 'VT323';
	$sports_hub_font_family[] = 'Dosis:wght@200;300;400;500;600;700;800';
	$sports_hub_font_family[] = 'Frank Ruhl Libre:wght@300;400;500;700;900';
	$sports_hub_font_family[] = 'Fjalla One';
	$sports_hub_font_family[] = 'Figtree:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900';
	$sports_hub_font_family[] = 'Oxygen:wght@300;400;700';
	$sports_hub_font_family[] = 'Arvo:ital,wght@0,400;0,700;1,400;1,700';
	$sports_hub_font_family[] = 'Noto Serif:ital,wght@0,400;0,700;1,400;1,700';
	$sports_hub_font_family[] = 'Lobster';
	$sports_hub_font_family[] = 'Crimson Text:ital,wght@0,400;0,600;0,700;1,400;1,600;1,700';
	$sports_hub_font_family[] = 'Yanone Kaffeesatz:wght@200;300;400;500;600;700';
	$sports_hub_font_family[] = 'Anton';
	$sports_hub_font_family[] = 'Libre Baskerville:ital,wght@0,400;0,700;1,400';
	$sports_hub_font_family[] = 'Bree Serif';
	$sports_hub_font_family[] = 'Gloria Hallelujah';
	$sports_hub_font_family[] = 'Abril Fatface';
	$sports_hub_font_family[] = 'Varela Round';
	$sports_hub_font_family[] = 'Vampiro One';
	$sports_hub_font_family[] = 'Shadows Into Light';
	$sports_hub_font_family[] = 'Cuprum:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700';
	$sports_hub_font_family[] = 'Rokkitt:wght@100;200;300;400;500;600;700;800;900';
	$sports_hub_font_family[] = 'Vollkorn:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900';
	$sports_hub_font_family[] = 'Francois One';
	$sports_hub_font_family[] = 'Orbitron:wght@400;500;600;700;800;900';
	$sports_hub_font_family[] = 'Patua One';
	$sports_hub_font_family[] = 'Acme';
	$sports_hub_font_family[] = 'Satisfy';
	$sports_hub_font_family[] = 'Josefin Slab:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700';
	$sports_hub_font_family[] = 'Quattrocento Sans:ital,wght@0,400;0,700;1,400;1,700';
	$sports_hub_font_family[] = 'Architects Daughter';
	$sports_hub_font_family[] = 'Russo One';
	$sports_hub_font_family[] = 'Monda:wght@400;700';
	$sports_hub_font_family[] = 'Righteous';
	$sports_hub_font_family[] = 'Lobster Two:ital,wght@0,400;0,700;1,400;1,700';
	$sports_hub_font_family[] = 'Hammersmith One';
	$sports_hub_font_family[] = 'Courgette';
	$sports_hub_font_family[] = 'Permanent Marke';
	$sports_hub_font_family[] = 'Cherry Swash:wght@400;700';
	$sports_hub_font_family[] = 'Cormorant Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700';
	$sports_hub_font_family[] = 'Poiret One';
	$sports_hub_font_family[] = 'BenchNine:wght@300;400;700';
	$sports_hub_font_family[] = 'Economica:ital,wght@0,400;0,700;1,400;1,700';
	$sports_hub_font_family[] = 'Handlee';
	$sports_hub_font_family[] = 'Cardo:ital,wght@0,400;0,700;1,400';
	$sports_hub_font_family[] = 'Alfa Slab One';
	$sports_hub_font_family[] = 'Averia Serif Libre:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700';
	$sports_hub_font_family[] = 'Cookie';
	$sports_hub_font_family[] = 'Chewy';
	$sports_hub_font_family[] = 'Great Vibes';
	$sports_hub_font_family[] = 'Coming Soon';
	$sports_hub_font_family[] = 'Philosopher:ital,wght@0,400;0,700;1,400;1,700';
	$sports_hub_font_family[] = 'Days One';
	$sports_hub_font_family[] = 'Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900';
	$sports_hub_font_family[] = 'Shrikhand';
	$sports_hub_font_family[] = 'Tangerine:wght@400;700';
	$sports_hub_font_family[] = 'IM Fell English SC';
	$sports_hub_font_family[] = 'Boogaloo';
	$sports_hub_font_family[] = 'Bangers';
	$sports_hub_font_family[] = 'Fredoka One';
	$sports_hub_font_family[] = 'Volkhov:ital,wght@0,400;0,700;1,400;1,700';
	$sports_hub_font_family[] = 'Shadows Into Light Two';
	$sports_hub_font_family[] = 'Marck Script';
	$sports_hub_font_family[] = 'Sacramento';
	$sports_hub_font_family[] = 'Unica One';
	$sports_hub_font_family[] = 'Dancing Script:wght@400;500;600;700';
	$sports_hub_font_family[] = 'Exo 2:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900';
	$sports_hub_font_family[] = 'Archivo:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900';
	$sports_hub_font_family[] = 'Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900';
	$sports_hub_font_family[] = 'DM Serif Display:ital@0;1';
	$sports_hub_font_family[] = 'Open Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800';
	
	$sports_hub_query_args = array(
		'family'	=> rawurlencode(implode('|',$sports_hub_font_family)),
	);
	$sports_hub_font_url = add_query_arg($sports_hub_query_args,'//fonts.googleapis.com/css');
	return $sports_hub_font_url;
	$contents = wptt_get_websports_hub_font_url( esc_url_raw( $fonts_url ) );
}

/**
 * Register widget area.
 */
function sports_hub_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Blog Sidebar', 'sports-hub' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add widgets here to appear in your sidebar on blog posts and archive pages.', 'sports-hub' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Page Sidebar', 'sports-hub' ),
		'id'            => 'sidebar-2',
		'description'   => __( 'Add widgets here to appear in your sidebar on pages.', 'sports-hub' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Sidebar 3', 'sports-hub' ),
		'id'            => 'sidebar-3',
		'description'   => __( 'Add widgets here to appear in your sidebar on blog posts and archive pages.', 'sports-hub' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 1', 'sports-hub' ),
		'id'            => 'footer-1',
		'description'   => __( 'Add widgets here to appear in your footer.', 'sports-hub' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s py-2">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 2', 'sports-hub' ),
		'id'            => 'footer-2',
		'description'   => __( 'Add widgets here to appear in your footer.', 'sports-hub' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s py-2">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 3', 'sports-hub' ),
		'id'            => 'footer-3',
		'description'   => __( 'Add widgets here to appear in your footer.', 'sports-hub' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s py-2">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 4', 'sports-hub' ),
		'id'            => 'footer-4',
		'description'   => __( 'Add widgets here to appear in your footer.', 'sports-hub' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s py-2">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'sports_hub_widgets_init' );

// Category count 
function sports_hub_display_post_category_count() {
    $sports_hub_category = get_the_category();
    $sports_hub_category_count = ($sports_hub_category) ? count($sports_hub_category) : 0;
    $sports_hub_category_text = ($sports_hub_category_count === 1) ? 'category' : 'categories'; // Check for pluralization
    echo $sports_hub_category_count . ' ' . $sports_hub_category_text;
}

//post tag
function sports_hub_custom_tags_filter($sports_hub_tag_list) {
    // Replace the comma (,) with an empty string
    $sports_hub_tag_list = str_replace(', ', '', $sports_hub_tag_list);

    return $sports_hub_tag_list;
}
add_filter('the_tags', 'sports_hub_custom_tags_filter');

function sports_hub_custom_output_tags() {
    $sports_hub_tags = get_the_tags();

    if ($sports_hub_tags) {
        $sports_hub_tags_output = '<div class="post_tag">Tags: ';
        $sports_hub_first_tag = reset($sports_hub_tags);
        foreach ($sports_hub_tags as $tag) {
            $sports_hub_tags_output .= '<a href="' . esc_url(get_tag_link($tag)) . '" rel="tag" class="mr-2">' . esc_html($tag->name) . '</a>';
            if ($tag !== $sports_hub_first_tag) {
                $sports_hub_tags_output .= ' ';
            }
        }
        $sports_hub_tags_output .= '</div>';
        echo $sports_hub_tags_output;
    }
}
/**
 * Enqueue scripts and styles.
 */
function sports_hub_scripts() {
	// Add custom fonts, used in the main stylesheet.
	wp_enqueue_style( 'sports-hub-fonts', sports_hub_fonts_url(), array(), null );

	// owl
	wp_enqueue_style( 'owl-carousel-css', get_theme_file_uri( '/assets/css/owl.carousel.css' ) );

	// Bootstrap
	wp_enqueue_style( 'bootstrap-css', get_theme_file_uri( '/assets/css/bootstrap.css' ) );

	// Theme stylesheet.
	wp_enqueue_style( 'sports-hub-style', get_stylesheet_uri() );
	require get_parent_theme_file_path( '/tp-theme-color.php' );
	wp_add_inline_style( 'sports-hub-style',$sports_hub_tp_theme_css );
	require get_parent_theme_file_path( '/tp-body-width-layout.php' );
	wp_add_inline_style( 'sports-hub-style',$sports_hub_tp_theme_css );
	wp_style_add_data('sports-hub-style', 'rtl', 'replace');
	
	// Theme block stylesheet.
	wp_enqueue_style( 'sports-hub-block-style', get_theme_file_uri( '/assets/css/blocks.css' ), array( 'sports-hub-style' ), '1.0' );

	// Fontawesome
	wp_enqueue_style( 'fontawesome-css', get_theme_file_uri( '/assets/css/fontawesome-all.css' ) );

	wp_enqueue_script( 'bootstrap-js', get_theme_file_uri( '/assets/js/bootstrap.js' ), array( 'jquery' ), true );

	wp_enqueue_script( 'owl-carousel-js', get_theme_file_uri( '/assets/js/owl.carousel.js' ), array( 'jquery' ), true );
	
	wp_enqueue_script( 'sports-hub-custom-scripts', esc_url( get_template_directory_uri() ) . '/assets/js/sports-hub-custom.js', array('jquery'), true);

	wp_enqueue_script( 'sports-hub-focus-nav', esc_url( get_template_directory_uri() ) . '/assets/js/focus-nav.js', array('jquery'), true);

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
	
	$sports_hub_body_font_family = get_theme_mod('sports_hub_body_font_family', '');

	$sports_hub_heading_font_family = get_theme_mod('sports_hub_heading_font_family', '');

	$sports_hub_menu_font_family = get_theme_mod('sports_hub_menu_font_family', '');

	$sports_hub_tp_theme_css = '
		body{
		    font-family: '.esc_html($sports_hub_body_font_family).';
		}
		.more-btn a{
		    font-family: '.esc_html($sports_hub_body_font_family).';
		}
		h1{
		    font-family: '.esc_html($sports_hub_heading_font_family).';
		}
		h2{
		    font-family: '.esc_html($sports_hub_heading_font_family).';
		}
		h3{
		    font-family: '.esc_html($sports_hub_heading_font_family).';
		}
		h4{
		    font-family: '.esc_html($sports_hub_heading_font_family).';
		}
		h5{
		    font-family: '.esc_html($sports_hub_heading_font_family).';
		}
		h6{
		    font-family: '.esc_html($sports_hub_heading_font_family).';
		}
		#theme-sidebar .wp-block-search .wp-block-search__label{
		    font-family: '.esc_html($sports_hub_heading_font_family).';
		}
		.menubar,.main-navigation a{
		    font-family: '.esc_html($sports_hub_menu_font_family).';
		}
	';
	wp_add_inline_style('sports-hub-style', $sports_hub_tp_theme_css);
}
add_action( 'wp_enqueue_scripts', 'sports_hub_scripts' );

//Admin Enqueue for Admin
function sports_hub_admin_enqueue_scripts(){
	wp_enqueue_style('sports-hub-admin-style', get_template_directory_uri() . '/assets/css/admin.css');
	wp_register_script( 'sports-hub-admin-script', get_template_directory_uri() . '/assets/js/sports-hub-admin.js', array( 'jquery' ), '', true );

	wp_localize_script(
		'sports-hub-admin-script',
		'sports_hub',
		array(
			'admin_ajax'	=>	admin_url('admin-ajax.php'),
			'wpnonce'			=>	wp_create_nonce('sports_hub_dismissed_notice_nonce')
		)
	);
	wp_enqueue_script('sports-hub-admin-script');

    wp_localize_script( 'sports-hub-admin-script', 'sports_hub_ajax_object',
        array( 'ajax_url' => admin_url( 'admin-ajax.php' ) )
    );
}
add_action( 'admin_enqueue_scripts', 'sports_hub_admin_enqueue_scripts' );

/*radio button sanitization*/
function sports_hub_sanitize_choices( $input, $setting ) {
    global $wp_customize;
    $control = $wp_customize->get_control( $setting->id );
    if ( array_key_exists( $input, $control->choices ) ) {
        return $input;
    } else {
        return $setting->default;
    }
}

// Sanitize Sortable control.
function sports_hub_sanitize_sortable( $val, $setting ) {
	if ( is_string( $val ) || is_numeric( $val ) ) {
		return array(
			esc_attr( $val ),
		);
	}
	$sanitized_value = array();
	foreach ( $val as $item ) {
		if ( isset( $setting->manager->get_control( $setting->id )->choices[ $item ] ) ) {
			$sanitized_value[] = esc_attr( $item );
		}
	}
	return $sanitized_value;
}

function sports_hub_sanitize_dropdown_pages( $page_id, $setting ) {
  // Ensure $input is an absolute integer.
  $page_id = absint( $page_id );
  // If $page_id is an ID of a published page, return it; otherwise, return the default.
  return ( 'publish' == get_post_status( $page_id ) ? $page_id : $setting->default );
}


// Change number or products per row to 3
add_filter('loop_shop_columns', 'sports_hub_loop_columns');
if (!function_exists('sports_hub_loop_columns')) {
	function sports_hub_loop_columns() {
		$sports_hub_columns = get_theme_mod( 'sports_hub_per_columns', 3 );
		return $sports_hub_columns;
	}
}

//Change number of products that are displayed per page (shop page)
add_filter( 'loop_shop_per_page', 'sports_hub_per_page', 20 );
function sports_hub_per_page( $sports_hub_cols ) {
  	$sports_hub_cols = get_theme_mod( 'sports_hub_product_per_page', 9 );
	return $sports_hub_cols;
}

function sports_hub_sanitize_number_range( $number, $setting ) {

	// Ensure input is an absolute integer.
	$number = absint( $number );

	// Get the input attributes associated with the setting.
	$atts = $setting->manager->get_control( $setting->id )->input_attrs;

	// Get minimum number in the range.
	$min = ( isset( $atts['min'] ) ? $atts['min'] : $number );

	// Get maximum number in the range.
	$max = ( isset( $atts['max'] ) ? $atts['max'] : $number );

	// Get step.
	$step = ( isset( $atts['step'] ) ? $atts['step'] : 1 );

	// If the number is within the valid range, return it; otherwise, return the default
	return ( $min <= $number && $number <= $max && is_int( $number / $step ) ? $number : $setting->default );
}

function sports_hub_sanitize_checkbox( $input ) {
	// Boolean check
	return ( ( isset( $input ) && true == $input ) ? true : false );
}

function sports_hub_sanitize_number_absint( $number, $setting ) {
	// Ensure $number is an absolute integer (whole number, zero or greater).
	$number = absint( $number );

	// If the input is an absolute integer, return it; otherwise, return the default
	return ( $number ? $number : $setting->default );
}

/**
 * Use front-page.php when Front page displays is set to a static page.
 */
function sports_hub_front_page_template( $template ) {
	return is_home() ? '' : $template;
}
add_filter( 'frontpage_template','sports_hub_front_page_template' );

/**
 * Logo Custamization.
 */

function sports_hub_logo_width(){

	$sports_hub_logo_width   = get_theme_mod( 'sports_hub_logo_width', 50 );

	echo "<style type='text/css' media='all'>"; ?>
		img.custom-logo{
		    width: <?php echo absint( $sports_hub_logo_width ); ?>px;
		    max-width: 100%;
		}
	<?php echo "</style>";
}

add_action( 'wp_head', 'sports_hub_logo_width' );

// Footer link
define('SPORTS_HUB_CREDIT', 'https://www.themespride.com/products/free-sports-wordpress-theme');

if ( ! function_exists( 'sports_hub_credit' ) ) {
    function sports_hub_credit() {
        // Get the footer text with a translatable default
        $footer_text = get_theme_mod(
            'sports_hub_footer_text',
            __('Sports Hub WordPress Theme', 'sports-hub') // Default translatable text
        );

        // Output the footer link
        printf(
            '<a href="%s" target="_blank">%s</a>',
            esc_url(SPORTS_HUB_CREDIT),
            esc_html($footer_text)
        );
    }
}


// get started
add_action( 'wp_ajax_sports_hub_dismissed_notice_handler', 'sports_hub_ajax_notice_handler' );

function sports_hub_ajax_notice_handler() {
	if (!wp_verify_nonce($_POST['wpnonce'], 'sports_hub_dismissed_notice_nonce')) {
		exit;
	}
    if ( isset( $_POST['type'] ) ) {
        $type = sanitize_text_field( wp_unslash( $_POST['type'] ) );
        update_option( 'dismissed-' . $type, TRUE );
    }
}

function sports_hub_activation_notice() { 

	if ( ! get_option('dismissed-get_started', FALSE ) ) { ?>

    <div class="sports-hub-notice-wrapper updated notice notice-get-started-class is-dismissible" data-notice="get_started">
        <div class="sports-hub-getting-started-notice clearfix">
            <div class="sports-hub-theme-notice-content">
                <h2 class="sports-hub-notice-h2">
                    <?php
                printf(
                /* translators: 1: welcome page link starting html tag, 2: welcome page link ending html tag. */
                    esc_html__( 'Welcome! Thank you for choosing %1$s!', 'sports-hub' ), '<strong>'. wp_get_theme()->get('Name'). '</strong>' );
                ?>
                </h2>

                <p class="plugin-install-notice"><?php echo sprintf(__('Click here to get started with the theme set-up.', 'sports-hub')) ?></p>

                <a class="sports-hub-btn-get-started button button-primary button-hero sports-hub-button-padding" href="<?php echo esc_url( admin_url( 'themes.php?page=sports-hub-about' )); ?>" ><?php esc_html_e( 'Begin Installation - Import Demo', 'sports-hub' ) ?></a><span class="sports-hub-push-down">
                <?php
                    /* translators: %1$s: Anchor link start %2$s: Anchor link end */
                    printf(
                        'or %1$sCustomize theme%2$s</a></span>',
                        '<a target="_blank" href="' . esc_url( admin_url( 'customize.php' ) ) . '">',
                        '</a>'
                    );
                ?>
            </div>
        </div>
    </div>
<?php }

}
add_action( 'admin_notices', 'sports_hub_activation_notice' );

add_action('after_switch_theme', 'sports_hub_setup_options');
function sports_hub_setup_options () {
    update_option('dismissed-get_started', FALSE );
}

add_action( 'admin_notices', 'sports_hub_activation_notice' );

/**
 * Implement the Custom Header feature.
 */
require get_parent_theme_file_path( '/inc/custom-header.php' );

/**
 * Custom template tags for this theme.
 */
require get_parent_theme_file_path( '/inc/template-tags.php' );

/**
 * Additional features to allow styling of the templates.
 */
require get_parent_theme_file_path( '/inc/template-functions.php' );

/**
 * Customizer additions.
 */
require get_parent_theme_file_path( '/inc/customizer.php' );
/**
 * Load Theme Web File
 */
require get_parent_theme_file_path('/inc/wptt-webfont-loader.php' );
/**
 * Load Toggle file
 */
require get_parent_theme_file_path( '/inc/controls/customize-control-toggle.php' );

/**
 * load sortable file
 */
require get_parent_theme_file_path( '/inc/controls/sortable-control.php' );

/**
 * TGM Recommendation
 */
require get_parent_theme_file_path( '/inc/TGM/tgm.php' );

/**
 * About Theme Page
 */
require get_parent_theme_file_path( '/inc/about-theme.php' );

add_filter( 'woocommerce_prevent_automatic_wizard_redirect', '__return_true' );
