<?php

$sports_hub_tp_theme_css = '';

$sports_hub_tp_color_option = get_theme_mod('sports_hub_tp_color_option');

if($sports_hub_tp_color_option != false){
$sports_hub_tp_theme_css .='button[type="submit"], .center1 .ring::before, .center2 .ring::before, .top-main, p.discount-top, .product-cart .cart-count, .main-navigation ul ul, .main-navigation ul.sub-menu li a, .main-navigation .menu > ul > li.highlight, .readmore-btn a, #slider .slider-border-sec:after, #slider .slider-border-sec:before, #slider .slider-border-first:after, #slider .slider-content-col:after, #service-sec .inner-content:before, .woocommerce ul.products li.product .button,
a.checkout-button.button.alt.wc-forward , .woocommerce .added_to_cart, .woocommerce ul.products li.product .onsale,.woocommerce span.onsale, .wc-block-cart__submit-container a,.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button,.woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, nav.woocommerce-MyAccount-navigation ul li, .wc-block-checkout__actions_row .wc-block-components-checkout-place-order-button, .page-numbers, .prev.page-numbers,
.next.page-numbers, span.meta-nav, .error-404 [type="submit"], #theme-sidebar .wp-block-search .wp-block-search__label:before,#theme-sidebar h3:before, #theme-sidebar h1.wp-block-heading:before, #theme-sidebar h2.wp-block-heading:before, #theme-sidebar h3.wp-block-heading:before,#theme-sidebar h4.wp-block-heading:before, #theme-sidebar h5.wp-block-heading:before, #theme-sidebar h6.wp-block-heading:before, #theme-sidebar button[type="submit"],
#footer button[type="submit"], #comments input[type="submit"], #footer .wp-calendar-table th, #secondary .wp-calendar-table th, .site-info, .toggle-nav button, .toggle-nav i{';
$sports_hub_tp_theme_css .='background: '.esc_attr($sports_hub_tp_color_option).';';
$sports_hub_tp_theme_css .='}';
}
if($sports_hub_tp_color_option != false){
$sports_hub_tp_theme_css .='.wc-block-components-product-badge{';
$sports_hub_tp_theme_css .='background: '.esc_attr($sports_hub_tp_color_option).'!important;';
$sports_hub_tp_theme_css .='}';
}
if($sports_hub_tp_color_option != false){
$sports_hub_tp_theme_css .='a,a:hover,#theme-sidebar .textwidget a,
#footer .textwidget a,
.comment-body a,
.entry-content a,
.entry-summary a,#main-content p a, .content-area a, .logo h1 a:hover, .logo p a:hover, .social-media a:hover, .header-details i, .main-navigation a:hover, .box-info i, #slider .inner_carousel h1 a:hover, #slider .red, #service-sec h2, .wp-block-search .wp-block-search__label,#theme-sidebar h3, #theme-sidebar h1.wp-block-heading, #theme-sidebar h2.wp-block-heading, #theme-sidebar h3.wp-block-heading,#theme-sidebar h4.wp-block-heading, #theme-sidebar h5.wp-block-heading, #theme-sidebar h6.wp-block-heading, #footer li a:hover, #theme-sidebar a:hover, #theme-sidebar .tagcloud a:hover,#sidebar p.wp-block-tag-cloud a:hover, .post_tag a:hover,#theme-sidebar .widget_tag_cloud a:hover, #footer li a:hover, #footer .tagcloud a:hover,#footer p.wp-block-tag-cloud a:hover{';
$sports_hub_tp_theme_css .='color: '.esc_attr($sports_hub_tp_color_option).';';
$sports_hub_tp_theme_css .='}';
}
if($sports_hub_tp_color_option != false){
$sports_hub_tp_theme_css .='.woocommerce-message, .center1, .center2 {';
$sports_hub_tp_theme_css .='border-top-color: '.esc_attr($sports_hub_tp_color_option).';';
$sports_hub_tp_theme_css .='}';
}
if($sports_hub_tp_color_option != false){
$sports_hub_tp_theme_css .=' .page-box,#theme-sidebar section {';
$sports_hub_tp_theme_css .='border-bottom-color: '.esc_attr($sports_hub_tp_color_option).';';
$sports_hub_tp_theme_css .='}';
}
if($sports_hub_tp_color_option != false){
$sports_hub_tp_theme_css .='.page-box,#theme-sidebar section,.center1, .center2{';
$sports_hub_tp_theme_css .='border-left-color: '.esc_attr($sports_hub_tp_color_option).';';
$sports_hub_tp_theme_css .='}';
}
if($sports_hub_tp_color_option != false){
$sports_hub_tp_theme_css .='#service-sec .cat-inner-box:hover{';
$sports_hub_tp_theme_css .='border-right-color: '.esc_attr($sports_hub_tp_color_option).';';
$sports_hub_tp_theme_css .='}';
}
if($sports_hub_tp_color_option != false){
$sports_hub_tp_theme_css .='.wp-block-quote:not(.is-large):not(.is-style-large),.wp-block-tag-cloud a:hover,#theme-sidebar .tagcloud a:hover,#sidebar p.wp-block-tag-cloud a:hover, .post_tag a:hover,#theme-sidebar .widget_tag_cloud a:hover, #footer .wp-calendar-table th, #secondary .wp-calendar-table th, #footer .tagcloud a:hover,#footer p.wp-block-tag-cloud a:hover{';
$sports_hub_tp_theme_css .='border-color: '.esc_attr($sports_hub_tp_color_option).';';
$sports_hub_tp_theme_css .='}';
}

//hover color
$sports_hub_tp_color_option_second = get_theme_mod('sports_hub_tp_color_option_second');

if($sports_hub_tp_color_option_second != false){
$sports_hub_tp_theme_css .='.product-cart .cart-count, #service-sec .inner-content:after, .product-cart .cart-count{';
$sports_hub_tp_theme_css .='background: '.esc_attr($sports_hub_tp_color_option_second).';';
$sports_hub_tp_theme_css .='}';
}
if($sports_hub_tp_color_option_second != false){
$sports_hub_tp_theme_css .='#slider .orange{';
$sports_hub_tp_theme_css .='color: '.esc_attr($sports_hub_tp_color_option_second).';';
$sports_hub_tp_theme_css .='}';
}
if($sports_hub_tp_color_option_second != false){
$sports_hub_tp_theme_css .='#service-sec .cat-inner-box:hover{';
$sports_hub_tp_theme_css .='border-left-color: '.esc_attr($sports_hub_tp_color_option_second).';';
$sports_hub_tp_theme_css .='}';
}


// linera bg
if ($sports_hub_tp_color_option && $sports_hub_tp_color_option_second) {
    $sports_hub_tp_theme_css .= '#service-sec .cat-inner-box:hover {';
    $sports_hub_tp_theme_css .= 'border-image: linear-gradient(to right, ' . esc_attr($sports_hub_tp_color_option) . ', ' . esc_attr($sports_hub_tp_color_option_second) . ');';
    $sports_hub_tp_theme_css .= 'border-image-slice: 1;'; // Required for border-image to display correctly
    $sports_hub_tp_theme_css .= '}';
}


//preloader
$sports_hub_tp_preloader_color1_option = get_theme_mod('sports_hub_tp_preloader_color1_option');
$sports_hub_tp_preloader_color2_option = get_theme_mod('sports_hub_tp_preloader_color2_option');
$sports_hub_tp_preloader_bg_color_option = get_theme_mod('sports_hub_tp_preloader_bg_color_option');

if($sports_hub_tp_preloader_color1_option != false){
$sports_hub_tp_theme_css .='.center1{';
	$sports_hub_tp_theme_css .='border-color: '.esc_attr($sports_hub_tp_preloader_color1_option).' !important;';
$sports_hub_tp_theme_css .='}';
}
if($sports_hub_tp_preloader_color1_option != false){
$sports_hub_tp_theme_css .='.center1 .ring::before{';
	$sports_hub_tp_theme_css .='background: '.esc_attr($sports_hub_tp_preloader_color1_option).' !important;';
$sports_hub_tp_theme_css .='}';
}
if($sports_hub_tp_preloader_color2_option != false){
$sports_hub_tp_theme_css .='.center2{';
	$sports_hub_tp_theme_css .='border-color: '.esc_attr($sports_hub_tp_preloader_color2_option).' !important;';
$sports_hub_tp_theme_css .='}';
}
if($sports_hub_tp_preloader_color2_option != false){
$sports_hub_tp_theme_css .='.center2 .ring::before{';
	$sports_hub_tp_theme_css .='background: '.esc_attr($sports_hub_tp_preloader_color2_option).' !important;';
$sports_hub_tp_theme_css .='}';
}
if($sports_hub_tp_preloader_bg_color_option != false){
$sports_hub_tp_theme_css .='.loader{';
	$sports_hub_tp_theme_css .='background: '.esc_attr($sports_hub_tp_preloader_bg_color_option).';';
$sports_hub_tp_theme_css .='}';
}

// footer-bg-color
$sports_hub_tp_footer_bg_color_option = get_theme_mod('sports_hub_tp_footer_bg_color_option');

if($sports_hub_tp_footer_bg_color_option != false){
$sports_hub_tp_theme_css .='#footer{';
	$sports_hub_tp_theme_css .='background: '.esc_attr($sports_hub_tp_footer_bg_color_option).' !important;';
$sports_hub_tp_theme_css .='}';
}

// logo tagline color
$sports_hub_site_tagline_color = get_theme_mod('sports_hub_site_tagline_color');

if($sports_hub_site_tagline_color != false){
$sports_hub_tp_theme_css .='.logo h1 a, .logo p a{';
$sports_hub_tp_theme_css .='color: '.esc_attr($sports_hub_site_tagline_color).';';
$sports_hub_tp_theme_css .='}';
}

$sports_hub_logo_tagline_color = get_theme_mod('sports_hub_logo_tagline_color');
if($sports_hub_logo_tagline_color != false){
$sports_hub_tp_theme_css .='p.site-description{';
$sports_hub_tp_theme_css .='color: '.esc_attr($sports_hub_logo_tagline_color).';';
$sports_hub_tp_theme_css .='}';
}

// footer widget title color
$sports_hub_footer_widget_title_color = get_theme_mod('sports_hub_footer_widget_title_color');
if($sports_hub_footer_widget_title_color != false){
$sports_hub_tp_theme_css .='#footer h3{';
$sports_hub_tp_theme_css .='color: '.esc_attr($sports_hub_footer_widget_title_color).';';
$sports_hub_tp_theme_css .='}';
}

// copyright text color
$sports_hub_footer_copyright_text_color = get_theme_mod('sports_hub_footer_copyright_text_color');
if($sports_hub_footer_copyright_text_color != false){
$sports_hub_tp_theme_css .='#footer .site-info p, #footer .site-info p a {';
$sports_hub_tp_theme_css .='color: '.esc_attr($sports_hub_footer_copyright_text_color).';';
$sports_hub_tp_theme_css .='}';
}