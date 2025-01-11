<?php
/**
 * Template part for displaying slider section
 *
 * @package Sports Hub
 * @subpackage sports_hub
 */

// Get the default slider image URL.
$sports_hub_static_image = get_stylesheet_directory_uri() . '/assets/images/header_img.png';

// Check if slider arrows option is enabled.
$sports_hub_slider_arrows = get_theme_mod('sports_hub_slider_arrows', true);
?>

<?php if ($sports_hub_slider_arrows) : ?>
  <section id="slider">
    <div class="container">
      <div class="slider-border-first">
        <div class="slider-border-sec">
          <div class="owl-carousel owl-theme">
            <?php 
            // Initialize an array to store selected pages for the slider.
            $sports_hub_slide_pages = array();
            
            // Loop through theme modifications to get selected pages.
            for ($sports_hub_count = 1; $sports_hub_count <= 4; $sports_hub_count++) {
              $sports_hub_mod = absint(get_theme_mod('sports_hub_slider_page' . $sports_hub_count));
              if ($sports_hub_mod != 0) {
                $sports_hub_slide_pages[] = $sports_hub_mod;
              }
            }

            // If there are pages to display, set up the query.
            if (!empty($sports_hub_slide_pages)) :
              $sports_hub_args = array(
                'post_type' => 'page',
                'post__in' => $sports_hub_slide_pages,
                'orderby' => 'post__in',
                'posts_per_page' => -1 // Ensure all selected pages are retrieved.
              );
              $sports_hub_query = new WP_Query($sports_hub_args);

              // Check if the query has posts.
              if ($sports_hub_query->have_posts()) :
                while ($sports_hub_query->have_posts()) : $sports_hub_query->the_post(); ?>
                  <div class="item">
                    <div class="row">
                      <div class="col-lg-6 col-md-6 col-12 align-self-center">
                        <div class="slider-content-col">
                          <div class="inner_carousel">
                              <div class="slider-top-content">
                                <h1 class="mb-0">
                                  <a href="<?php echo esc_url(get_permalink()); ?>">
                                      <?php 
                                      $sports_hub_title_words = explode(' ', get_the_title());
                                      foreach ($sports_hub_title_words as $word) {
                                          echo esc_html($word) . '<br>';
                                      }
                                      ?>
                                  </a>
                              </h1>
                              </div>
                              <div class="slider-bottom-content">
                                <?php
                                // Get the short heading from theme modifications.
                                $sports_hub_short_heading = get_theme_mod('sports_hub_slider_short_heading', '');
                                if (!empty($sports_hub_short_heading)) :
                                    // Split the heading into an array of words.
                                    $sports_hub_words = explode(' ', $sports_hub_short_heading);
                                    
                                    // Get the total number of words.
                                    $sports_hub_word_count = count($sports_hub_words);

                                    // Check if there are at least two words to apply the styling.
                                    if ($sports_hub_word_count >= 2) {
                                        // Extract the last and second-to-last words.
                                        $sports_hub_last_word = array_pop($sports_hub_words);
                                        $sports_hub_second_last_word = array_pop($sports_hub_words);

                                        // Combine the remaining words.
                                        $sports_hub_remaining_text = implode(' ', $sports_hub_words);

                                        // Construct the styled output.
                                        $sports_hub_styled_heading = $sports_hub_remaining_text . ' <span class="red">' . esc_html($sports_hub_second_last_word) . '</span> <span class="orange">' . esc_html($sports_hub_last_word) . '</span>';
                                    } else {
                                        // If there are less than two words, just display the text as is.
                                        $sports_hub_styled_heading = esc_html($sports_hub_short_heading);
                                    }
                                    ?>
                                    <p class="slidetop-text mb-md-1 mt-4 mt-md-0 mb-0"><?php echo $sports_hub_styled_heading; ?></p>
                                  <?php endif; ?>
                                <p class="slide-content"><?php echo esc_html( wp_trim_words( get_the_content(), 60) ); ?></p>
                                <div class="more-btn mt-md-2 mt-3">
                                  <a class="btn-1" href="<?php echo esc_url( get_permalink() ); ?>" target="_blank">
                                    <?php esc_html_e( 'Explore more', 'sports-hub' ); ?>
                                  </a>
                                </div>
                              </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-12 slider-img-col align-self-center">
                        <?php if (has_post_thumbnail()) : ?>
                          <img src="<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(), 'full')); ?>" alt="<?php the_title_attribute(); ?>" />
                        <?php else : ?>
                          <img src="<?php echo esc_url($sports_hub_static_image); ?>" alt="<?php esc_attr_e('Slider Image', 'sports-hub'); ?>" />
                        <?php endif; ?>
                      </div>
                    </div>
                  </div>
                <?php endwhile;
                wp_reset_postdata(); // Reset post data after the custom query.
              else : ?>
                <div class="no-postfound"><?php esc_html_e('No posts found', 'sports-hub'); ?></div>
              <?php endif;
            endif; ?>
          </div>
        </div>
      </div>
    </div>
    <div class="clearfix"></div>
  </section>
<?php endif; ?>