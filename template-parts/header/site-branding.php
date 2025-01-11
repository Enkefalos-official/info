<?php
/*
 * Displays the header section with logo, site title, tagline, navigation, and contact information.
 */
?>

<div class="headerbox">
    <?php if (get_theme_mod('sports_hub_topbar_visibility', true)) : ?>
        <div class="discount-text text-center">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-5 align-self-center d-flex top-main-left">
                        <div class="social-media text-md-end text-center mb-md-0 mb-1">
                            <?php
                            $sports_hub_fb_url = get_theme_mod('sports_hub_facebook_url');
                            $sports_hub_twt_url = get_theme_mod('sports_hub_twitter_url');
                            $sports_hub_ins_url = get_theme_mod('sports_hub_instagram_url');
                            $sports_hub_pinterest_url = get_theme_mod('sports_hub_pinterest_url');

                            $sports_hub_fb_new_tab = esc_attr(get_theme_mod('sports_hub_header_fb_new_tab', 'true'));
                            $sports_hub_twt_new_tab = esc_attr(get_theme_mod('sports_hub_header_twt_new_tab', 'true'));
                            $sports_hub_ins_new_tab = esc_attr(get_theme_mod('sports_hub_header_ins_new_tab', 'true'));
                            $sports_hub_pinterest_new_tab = esc_attr(get_theme_mod('sports_hub_pinterest_new_tab', 'true'));

                            if ($sports_hub_fb_url || $sports_hub_twt_url || $sports_hub_ins_url || $sports_hub_pinterest_url) : ?>
                                
                                <?php if ($sports_hub_fb_url) : ?>
                                    <a <?php if ($sports_hub_fb_new_tab != false) : ?>target="_blank" <?php endif; ?>href="<?php echo esc_url($sports_hub_fb_url); ?>"><i class="me-lg-3 me-2 <?php echo esc_attr(get_theme_mod('sports_hub_facebook_icon', 'fab fa-facebook-f')); ?>"></i></a>
                                <?php endif; ?>
                                
                                <?php if ($sports_hub_pinterest_url) : ?>
                                    <a <?php if ($sports_hub_pinterest_new_tab != false) : ?>target="_blank" <?php endif; ?>href="<?php echo esc_url($sports_hub_pinterest_url); ?>"><i class="me-lg-3 me-2 <?php echo esc_attr(get_theme_mod('sports_hub_pinterest_icon', 'fab fa-pinterest-p')); ?>"></i></a>
                                <?php endif; ?>
                                
                                <?php if ($sports_hub_ins_url) : ?>
                                    <a <?php if ($sports_hub_ins_new_tab != false) : ?>target="_blank" <?php endif; ?>href="<?php echo esc_url($sports_hub_ins_url); ?>"><i class="me-lg-3 me-2  <?php echo esc_attr(get_theme_mod('sports_hub_instagram_icon', 'fab fa-instagram')); ?>"></i></a>
                                <?php endif; ?>

                                <?php if ($sports_hub_twt_url) : ?>
                                    <a <?php if ($sports_hub_twt_new_tab != false) : ?>target="_blank" <?php endif; ?>href="<?php echo esc_url($sports_hub_twt_url); ?>"><i class="me-lg-3 me-md-2 <?php echo esc_attr(get_theme_mod('sports_hub_twitter_icon', 'fab fa-twitter')); ?>"></i></a>
                                <?php endif; ?>
                                
                            <?php endif; ?>
                        </div>
                        <div class="langauge-box ps-md-3">
                            <span class="translate-btn">
                                <?php if (get_theme_mod('sports_hub_cart_language_translator', true) && class_exists('GTranslate')) : ?>
                                    <div class="translate-lang position-relative d-md-inline-block">
                                        <?php echo wp_kses_post(do_shortcode('[gtranslate]')); ?>
                                    </div>
                                <?php endif; ?>
                            </span>
                        </div>
                    </div>
                     <div class="col-lg-6 col-md-7 align-self-center">
                        <?php 
                        $sports_hub_discount_text_top = get_theme_mod('sports_hub_discount_text_top');
                        if ($sports_hub_discount_text_top) : ?>
                            <p class="discount-top m-0"><?php echo esc_html($sports_hub_discount_text_top); ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="col-lg-3 align-self-center">
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <div class="middle-header py-2">
        <div class="container">
            <div class="row">
                <!-- Logo Section -->
                <div class="col-lg-3 col-md-4 logo-col align-self-center">
                    <div class="logo text-center text-md-start">
                        <?php if (has_custom_logo()) : ?>
                            <?php the_custom_logo(); ?>
                        <?php endif; ?>

                        <?php if (get_theme_mod('sports_hub_site_title', 1)) : ?>
                            <?php if (is_front_page() && is_home()) : ?>
                                <p class="text-capitalize mb-0">
                                    <a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a>
                                </p>
                            <?php else : ?>
                                <h1 class="text-capitalize">
                                    <a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a>
                                </h1>
                            <?php endif; ?>
                        <?php endif; ?>

                        <?php
                        $sports_hub_description = get_bloginfo('description', 'display');
                        if ($sports_hub_description || is_customize_preview()) :
                            if (get_theme_mod('sports_hub_site_tagline', 1)) :
                                ?>
                                <p class="site-description my-1 text-capitalize"><?php echo esc_html($sports_hub_description); ?></p>
                            <?php endif; 
                        endif;
                        ?>
                    </div>
                </div>
                
                <!-- Navigation Section -->
                <div class="col-lg-6 col-md-4 align-self-center">
                    <div class="main-navhead">
                        <div class="menubox">
                            <div class="menu-content">
                                <?php get_template_part('template-parts/navigation/site-nav'); ?>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Header Details Section -->
                <div class="col-lg-3 col-md-4 align-self-center mb-md-0 mb-3">
                    <div class="header-details">

                        <?php 
                        $sports_hub_like_option = get_theme_mod('sports_hub_like_option');
                        if ($sports_hub_like_option): ?>
                            <p class="mb-0">
                                <a href="<?php echo esc_url($sports_hub_like_option); ?>">
                                    <i class="far fa-heart me-3" aria-hidden="true"></i>
                                </a>
                            </p>
                        <?php endif; ?>

                        <p class="mb-0">
                            <?php if (class_exists('YITH_WCWL')): ?>
                                <a href="<?php echo esc_url(YITH_WCWL()->get_wishlist_url()); ?>">
                                    <i class="fas fa-heart me-3" aria-hidden="true"></i>
                                </a>
                            <?php endif; ?>
                        </p>

                        <p class="mb-0">
                            <?php if (class_exists('WooCommerce')): ?> 
                                <span class="product-cart text-center position-relative">
                                    <a href="<?php echo esc_url(wc_get_cart_url()); ?>" title="<?php esc_attr_e('Shopping cart', 'sports-hub'); ?>">
                                        <i class="fas fa-shopping-cart me-3" aria-hidden="true"></i>
                                        <?php 
                                        $sports_hub_cart_count = WC()->cart->get_cart_contents_count(); 
                                        if ($sports_hub_cart_count > 0): ?>
                                            <span class="cart-count"><?php echo esc_html($sports_hub_cart_count); ?></span>
                                        <?php endif; ?>
                                    </a>
                                </span>
                            <?php endif; ?>
                        </p>

                        <p class="mb-0">
                            <?php if (class_exists('WooCommerce')): ?>
                                <a href="<?php echo esc_url(get_permalink(get_option('woocommerce_myaccount_page_id'))); ?>">
                                    <i class="<?php echo esc_attr(is_user_logged_in() ? 'fas' : 'far'); ?> fa-user" aria-hidden="true"></i>
                                </a>
                            <?php endif; ?>
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>