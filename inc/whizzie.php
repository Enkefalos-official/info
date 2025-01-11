<?php 
if (isset($_GET['import-demo']) && $_GET['import-demo'] == true) {

    // Function to install and activate plugins
    function sports_hub_import_demo_content() {
        // Define the plugins you want to install and activate
        $plugins = array(
            array(
                'slug' => 'woocommerce',
                'file' => 'woocommerce/woocommerce.php',
                'url'  => 'https://downloads.wordpress.org/plugin/woocommerce.latest-stable.zip'
            ),
             array(
                'slug' => 'yith-woocommerce-wishlist',
                'file' => 'yith-woocommerce-wishlist/yith-woocommerce-wishlist.php',
                'url'  => 'https://downloads.wordpress.org/plugin/yith-woocommerce-wishlist.latest-stable.zip'
            ),
            array(
                'slug' => 'gtranslate',
                'file' => 'gtranslate/gtranslate.php',
                'url'  => 'https://downloads.wordpress.org/plugin/gtranslate.latest-stable.zip' // Correct GTranslate URL
            ),
        );

        // Include required files for plugin installation
        include_once(ABSPATH . 'wp-admin/includes/plugin-install.php');
        include_once(ABSPATH . 'wp-admin/includes/file.php');
        include_once(ABSPATH . 'wp-admin/includes/misc.php');
        include_once(ABSPATH . 'wp-admin/includes/class-wp-upgrader.php');

        // Loop through each plugin
        foreach ($plugins as $plugin) {
            $plugin_file = WP_PLUGIN_DIR . '/' . $plugin['file'];

            // Check if the plugin is installed
            if (!file_exists($plugin_file)) {
                // If the plugin is not installed, download and install it
                $upgrader = new Plugin_Upgrader();
                $result = $upgrader->install($plugin['url']);

                // Check for installation errors
                if (is_wp_error($result)) {
                    error_log('Plugin installation failed: ' . $plugin['slug'] . ' - ' . $result->get_error_message());
                    echo 'Error installing plugin: ' . esc_html($plugin['slug']) . ' - ' . esc_html($result->get_error_message());
                    continue;
                }
            }

            // If the plugin exists but is not active, activate it
            if (file_exists($plugin_file) && !is_plugin_active($plugin['file'])) {
                $result = activate_plugin($plugin['file']);

                // Check for activation errors
                if (is_wp_error($result)) {
                    error_log('Plugin activation failed: ' . $plugin['slug'] . ' - ' . $result->get_error_message());
                    echo 'Error activating plugin: ' . esc_html($plugin['slug']) . ' - ' . esc_html($result->get_error_message());
                }
            }
        }
    }

    // Call the import function
    sports_hub_import_demo_content();

    // ------- Create Nav Menu --------
$sports_hub_menuname = 'Main Menus';
$sports_hub_bpmenulocation = 'primary-menu';
$sports_hub_menu_exists = wp_get_nav_menu_object($sports_hub_menuname);

if (!$sports_hub_menu_exists) {
    $sports_hub_menu_id = wp_create_nav_menu($sports_hub_menuname);

    // Create Home Page
    $sports_hub_home_title = 'Home';
    $sports_hub_home = array(
        'post_type' => 'page',
        'post_title' => $sports_hub_home_title,
        'post_content' => '',
        'post_status' => 'publish',
        'post_author' => 1,
        'post_slug' => 'home'
    );
    $sports_hub_home_id = wp_insert_post($sports_hub_home);

    // Assign Home Page Template
    add_post_meta($sports_hub_home_id, '_wp_page_template', 'page-template/front-page.php');

    // Update options to set Home Page as the front page
    update_option('page_on_front', $sports_hub_home_id);
    update_option('show_on_front', 'page');

    // Add Home Page to Menu
    wp_update_nav_menu_item($sports_hub_menu_id, 0, array(
        'menu-item-title' => __('Home', 'sports-hub'),
        'menu-item-classes' => 'home',
        'menu-item-url' => home_url('/'),
        'menu-item-status' => 'publish',
        'menu-item-object-id' => $sports_hub_home_id,
        'menu-item-object' => 'page',
        'menu-item-type' => 'post_type'
    ));

    // Create About Us Page with Dummy Content
    $sports_hub_about_title = 'About Us';
    $sports_hub_about_content = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...<br>

             Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960 with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<br> 

                There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which dont look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isnt anything embarrassing hidden in the middle of text.<br> 

                All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.';
    $sports_hub_about = array(
        'post_type' => 'page',
        'post_title' => $sports_hub_about_title,
        'post_content' => $sports_hub_about_content,
        'post_status' => 'publish',
        'post_author' => 1,
        'post_slug' => 'about-us'
    );
    $sports_hub_about_id = wp_insert_post($sports_hub_about);

    // Add About Us Page to Menu
    wp_update_nav_menu_item($sports_hub_menu_id, 0, array(
        'menu-item-title' => __('About Us', 'sports-hub'),
        'menu-item-classes' => 'about-us',
        'menu-item-url' => home_url('/about-us/'),
        'menu-item-status' => 'publish',
        'menu-item-object-id' => $sports_hub_about_id,
        'menu-item-object' => 'page',
        'menu-item-type' => 'post_type'
    ));

    // Create Services Page with Dummy Content
    $sports_hub_services_title = 'Services';
    $sports_hub_services_content = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...<br>

             Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960 with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<br> 

                There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which dont look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isnt anything embarrassing hidden in the middle of text.<br> 

                All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.';
    $sports_hub_services = array(
        'post_type' => 'page',
        'post_title' => $sports_hub_services_title,
        'post_content' => $sports_hub_services_content,
        'post_status' => 'publish',
        'post_author' => 1,
        'post_slug' => 'services'
    );
    $sports_hub_services_id = wp_insert_post($sports_hub_services);

    // Add Services Page to Menu
    wp_update_nav_menu_item($sports_hub_menu_id, 0, array(
        'menu-item-title' => __('Services', 'sports-hub'),
        'menu-item-classes' => 'services',
        'menu-item-url' => home_url('/services/'),
        'menu-item-status' => 'publish',
        'menu-item-object-id' => $sports_hub_services_id,
        'menu-item-object' => 'page',
        'menu-item-type' => 'post_type'
    ));

    // Create Pages Page with Dummy Content
    $sports_hub_pages_title = 'Pages';
    $sports_hub_pages_content = '<h2>Our Pages</h2>
    <p>Explore all the pages we have on our website. Find information about our services, company, and more.</p>';
    $sports_hub_pages = array(
        'post_type' => 'page',
        'post_title' => $sports_hub_pages_title,
        'post_content' => $sports_hub_pages_content,
        'post_status' => 'publish',
        'post_author' => 1,
        'post_slug' => 'pages'
    );
    $sports_hub_pages_id = wp_insert_post($sports_hub_pages);

    // Add Pages Page to Menu
    wp_update_nav_menu_item($sports_hub_menu_id, 0, array(
        'menu-item-title' => __('Pages', 'sports-hub'),
        'menu-item-classes' => 'pages',
        'menu-item-url' => home_url('/pages/'),
        'menu-item-status' => 'publish',
        'menu-item-object-id' => $sports_hub_pages_id,
        'menu-item-object' => 'page',
        'menu-item-type' => 'post_type'
    ));

    // Create Contact Page with Dummy Content
    $sports_hub_contact_title = 'Contact';
    $sports_hub_contact_content = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...<br>

             Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960 with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<br> 

                There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which dont look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isnt anything embarrassing hidden in the middle of text.<br> 

                All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.';
    $sports_hub_contact = array(
        'post_type' => 'page',
        'post_title' => $sports_hub_contact_title,
        'post_content' => $sports_hub_contact_content,
        'post_status' => 'publish',
        'post_author' => 1,
        'post_slug' => 'contact'
    );
    $sports_hub_contact_id = wp_insert_post($sports_hub_contact);

    // Add Contact Page to Menu
    wp_update_nav_menu_item($sports_hub_menu_id, 0, array(
        'menu-item-title' => __('Contact', 'sports-hub'),
        'menu-item-classes' => 'contact',
        'menu-item-url' => home_url('/contact/'),
        'menu-item-status' => 'publish',
        'menu-item-object-id' => $sports_hub_contact_id,
        'menu-item-object' => 'page',
        'menu-item-type' => 'post_type'
    ));

    // Set the menu location if it's not already set
    if (!has_nav_menu($sports_hub_bpmenulocation)) {
        $locations = get_theme_mod('nav_menu_locations'); // Use 'nav_menu_locations' to get locations array
        if (empty($locations)) {
            $locations = array();
        }
        $locations[$sports_hub_bpmenulocation] = $sports_hub_menu_id;
        set_theme_mod('nav_menu_locations', $locations);
    }
}

        //---Header--//
        set_theme_mod('sports_hub_discount_text_top', 'Catch live scores, latest news, and exclusive sports highlights now!');

        set_theme_mod('sports_hub_header_fb_new_tab', true);
        set_theme_mod('sports_hub_facebook_url', '#');
        set_theme_mod('sports_hub_facebook_icon', 'fab fa-facebook-f');

        set_theme_mod('sports_hub_header_pint_new_tab', true);
        set_theme_mod('sports_hub_pint_url', '#');
        set_theme_mod('sports_hub_pint_icon', 'fab fa-pinterest');

        set_theme_mod('sports_hub_header_ins_new_tab', true);
        set_theme_mod('sports_hub_instagram_url', '#');
        set_theme_mod('sports_hub_instagram_icon', 'fab fa-instagram');

        set_theme_mod('sports_hub_header_twt_new_tab', true);
        set_theme_mod('sports_hub_twitter_url', '#');
        set_theme_mod('sports_hub_twitter_icon', 'fab fa-twitter');

        set_theme_mod('sports_hub_header_ut_new_tab', true);
        set_theme_mod('sports_hub_youtube_url', '#');
        set_theme_mod('sports_hub_youtube_icon', 'fab fa-youtube');


        // Slider Section
        set_theme_mod('sports_hub_slider_arrows', true);
        set_theme_mod('sports_hub_slider_short_heading', 'Welcome to Thrill Athlete.');

        for ($i = 1; $i <= 4; $i++) {
            $sports_hub_title = 'Victory Passion Endurance';
            $sports_hub_content = 'Welcome to Thrill Athlete, your all-access pass to the world of sports! Dive into the heart of every game with live scores, up-to-the-minute news, and in-depth analysis on your favorite athletes and teams. From breaking updates on major tournaments to exclusive player interviews and insights, we bring you the ultimate fan experience. ';

            // Create post object
            $my_post = array(
                'post_title'    => wp_strip_all_tags($sports_hub_title),
                'post_content'  => $sports_hub_content,
                'post_status'   => 'publish',
                'post_type'     => 'page',
            );

            /// Insert the post into the database
            $post_id = wp_insert_post($my_post);

            if ($post_id) {
                // Set the theme mod for the slider page
                set_theme_mod('sports_hub_slider_page' . $i, $post_id);

                $image_url = get_template_directory_uri() . '/assets/images/slider-img.png';
                $image_id = media_sideload_image($image_url, $post_id, null, 'id');

                if (!is_wp_error($image_id)) {
                    // Set the downloaded image as the post's featured image
                    set_post_thumbnail($post_id, $image_id);
                }
            }
        }

        // About Section
        set_theme_mod('sports_hub_about_show_hide', true);
        set_theme_mod('sports_hub_about_tittle', 'LOREM IPSUM IS SIMPLY');
        set_theme_mod('sports_hub_about_icon', 'fas fa-hand-point-right');

        // Create About page and set the featured image
        $sports_hub_abt_title = 'LOREM IPSUM IS PRINTING AND';
        $sports_hub_abt_content = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...<br>

             Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960 with the release of Letraset sheets containing Lorem Ipsum passages.<br> ';

        $my_post = array(
            'post_title'    => wp_strip_all_tags($sports_hub_abt_title),
            'post_content'  => $sports_hub_abt_content,
            'post_status'   => 'publish',
            'post_type'     => 'page',
        );

        // Insert the post into the database
        $post_id = wp_insert_post($my_post);

        if ($post_id) {
            // Set the theme mod for the About page
            set_theme_mod('sports_hub_about_page', $post_id);

            // Sideload image and set as the featured image
            $image_url = get_template_directory_uri() . '/assets/images/about-img.png';
            $image_id = media_sideload_image($image_url, $post_id, null, 'id');

            if (!is_wp_error($image_id)) {
                set_post_thumbnail($post_id, $image_id);
            }
        }

        // Our Services Section
set_theme_mod('sports_hub_featured_section_title', 'Sports');
set_theme_mod('sports_hub_serv_short_heading', 'Explore a world of sports, from cricket and football to basketball, tennis, and beyond!');

// Define post category name and titles
$sports_hub_category_name = 'postcategory1';
$sports_hub_titles = array(
    "Merchandise Pop", "Live Event", "Meet-and-Greet", "Court Rentals", 
    "Personal Training", "Training Workshops", "Equipment Rentals", 
    "Youth Camps", "Player Development", "Basketball Clinics", 
    "Fan Events", "Game Ticketing"
);

// Create or retrieve the post category term ID
$sports_hub_term = term_exists($sports_hub_category_name, 'category');
if (!$sports_hub_term) {
    $sports_hub_term = wp_insert_term($sports_hub_category_name, 'category');
}

if (is_wp_error($sports_hub_term)) {
    error_log('Error creating category: ' . $sports_hub_term->get_error_message());
} else {
    $category_id = is_array($sports_hub_term) ? $sports_hub_term['term_id'] : $sports_hub_term;

    // Loop through the titles to create posts
    foreach ($sports_hub_titles as $index => $sports_hub_title) {
        // Create post object
        $sports_hub_post = array(
            'post_title'  => wp_strip_all_tags($sports_hub_title),
            'post_status' => 'publish',
            'post_type'   => 'post',
            'posts_per_page' => -1,
        );

        // Insert post into the database
        $sports_hub_post_id = wp_insert_post($sports_hub_post);

        if (is_wp_error($sports_hub_post_id)) {
            error_log('Error creating post: ' . $sports_hub_post_id->get_error_message());
            continue; // Skip to the next post if creation fails
        }

        // Assign the category to the post
        wp_set_post_categories($sports_hub_post_id, array((int)$category_id));

        // Handle featured image
        $image_url = get_template_directory_uri() . '/assets/images/post-img' . ($index + 1) . '.png';
        $image_id = media_sideload_image($image_url, $sports_hub_post_id, null, 'id');

        if (is_wp_error($image_id)) {
            error_log('Error downloading image: ' . $image_id->get_error_message());
            continue; // Skip to the next post if image download fails
        }

        // Assign featured image to post
        set_post_thumbnail($sports_hub_post_id, $image_id);
    }
}




    }
?>