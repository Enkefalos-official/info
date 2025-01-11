<?php 

/**
 * Template part for displaying service section
 *
 * @package Sports Hub
 * @subpackage sports_hub
 */

if (get_theme_mod('sports_hub_show_hide_sec', true)) : ?>
  <section id="service-sec" class="my-5">
    <div class="container">
        <div class="text-center">
            <?php
            // Featured section title
            $sports_hub_featured_section_title = get_theme_mod('sports_hub_featured_section_title', 'Our Services');
            if ($sports_hub_featured_section_title) : ?>
                <h2 class="text-center text-capitalize"><?php echo esc_html($sports_hub_featured_section_title); ?></h2>
            <?php endif; ?>

            <?php
            // Short heading
            $sports_hub_serv_short_heading = get_theme_mod('sports_hub_serv_short_heading', '');
            if ($sports_hub_serv_short_heading) : ?>
                <p class="mb-4 serv-short text-center d-inline-block text-capitalize">
                    <?php echo esc_html($sports_hub_serv_short_heading); ?>
                </p>
            <?php endif; ?>
        </div>

        <?php
        // Initialize variables
        $sports_hub_column_count = get_theme_mod('sports_hub_column_count', 6); // Default to 6 columns
        $sports_hub_columns_content = array_fill(0, $sports_hub_column_count, []);
        $sports_hub_post_category = get_theme_mod('sports_hub_featured_section_category', '');
        $sports_hub_static_image = get_stylesheet_directory_uri() . '/assets/images/header_img.png';

        if ($sports_hub_post_category) :
            // Query posts from the selected category
            $sports_hub_page_query = new WP_Query(array(
                'category_name' => esc_html($sports_hub_post_category), // Fetch posts by category slug
                'posts_per_page' => 12, // Limit to 12 posts
            ));

            if ($sports_hub_page_query->have_posts()) :
                $sports_hub_counter = 0;

                // Loop through posts and distribute into columns
                while ($sports_hub_page_query->have_posts()) : $sports_hub_page_query->the_post();
                    $sports_hub_column_index = $sports_hub_counter % $sports_hub_column_count;
                    $sports_hub_columns_content[$sports_hub_column_index][] = [
                        'title' => get_the_title(),
                        'permalink' => get_permalink(),
                        'thumbnail_url' => has_post_thumbnail() ? get_the_post_thumbnail_url(null, 'full') : $sports_hub_static_image,
                    ];
                    $sports_hub_counter++;
                endwhile;

                wp_reset_postdata();
            endif;
        endif;
        ?>

        <div class="row">
            <?php for ($sports_hub_i = 0; $sports_hub_i < $sports_hub_column_count; $sports_hub_i++) : ?>
                <div class="col-lg-2 col-md-2 mb-4 serv-column-<?php echo $sports_hub_i + 1; ?>">
                    <?php if (!empty($sports_hub_columns_content[$sports_hub_i])) : ?>
                        <?php foreach ($sports_hub_columns_content[$sports_hub_i] as $post) : ?>
                            <div class="cat-inner-box mb-3">
                                <img src="<?php echo esc_url($post['thumbnail_url']); ?>" alt="<?php echo esc_attr($post['title']); ?>" class="img-fluid" />
                                <div class="inner-content text-center">
                                    <div class="post-title">
                                        <h3><a href="<?php echo esc_url($post['permalink']); ?>"><?php echo esc_html($post['title']); ?></a></h3>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            <?php endfor; ?>
        </div>
    </div>
</section>

<?php endif; ?>
