<?php

	$sports_hub_tp_theme_css = "";

$sports_hub_theme_lay = get_theme_mod( 'sports_hub_tp_body_layout_settings','Full');
if($sports_hub_theme_lay == 'Container'){
$sports_hub_tp_theme_css .='body{';
	$sports_hub_tp_theme_css .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto;';
$sports_hub_tp_theme_css .='}';
$sports_hub_tp_theme_css .='@media screen and (max-width:575px){';
		$sports_hub_tp_theme_css .='body{';
			$sports_hub_tp_theme_css .='max-width: 100%; padding-right:0px; padding-left: 0px';
		$sports_hub_tp_theme_css .='} }';
$sports_hub_tp_theme_css .='.page-template-front-page .menubar{';
	$sports_hub_tp_theme_css .='position: static;';
$sports_hub_tp_theme_css .='}';
$sports_hub_tp_theme_css .='.scrolled{';
	$sports_hub_tp_theme_css .='width: auto; left:0; right:0;';
$sports_hub_tp_theme_css .='}';
}else if($sports_hub_theme_lay == 'Container Fluid'){
$sports_hub_tp_theme_css .='body{';
	$sports_hub_tp_theme_css .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';
$sports_hub_tp_theme_css .='}';
$sports_hub_tp_theme_css .='@media screen and (max-width:575px){';
		$sports_hub_tp_theme_css .='body{';
			$sports_hub_tp_theme_css .='max-width: 100%; padding-right:0px; padding-left:0px';
		$sports_hub_tp_theme_css .='} }';
$sports_hub_tp_theme_css .='.page-template-front-page .menubar{';
	$sports_hub_tp_theme_css .='width: 99%';
$sports_hub_tp_theme_css .='}';		
$sports_hub_tp_theme_css .='.scrolled{';
	$sports_hub_tp_theme_css .='width: auto; left:0; right:0;';
$sports_hub_tp_theme_css .='}';
}else if($sports_hub_theme_lay == 'Full'){
$sports_hub_tp_theme_css .='body{';
	$sports_hub_tp_theme_css .='max-width: 100%;';
$sports_hub_tp_theme_css .='}';
}

$sports_hub_scroll_position = get_theme_mod( 'sports_hub_scroll_top_position','Right');
if($sports_hub_scroll_position == 'Right'){
$sports_hub_tp_theme_css .='#return-to-top{';
    $sports_hub_tp_theme_css .='right: 20px;';
$sports_hub_tp_theme_css .='}';
}else if($sports_hub_scroll_position == 'Left'){
$sports_hub_tp_theme_css .='#return-to-top{';
    $sports_hub_tp_theme_css .='left: 20px;';
$sports_hub_tp_theme_css .='}';
}else if($sports_hub_scroll_position == 'Center'){
$sports_hub_tp_theme_css .='#return-to-top{';
    $sports_hub_tp_theme_css .='right: 50%;left: 50%;';
$sports_hub_tp_theme_css .='}';
}

    
//Social icon Font size
$sports_hub_social_icon_fontsize = get_theme_mod('sports_hub_social_icon_fontsize');
	$sports_hub_tp_theme_css .='.media-links a i{';
$sports_hub_tp_theme_css .='font-size: '.esc_attr($sports_hub_social_icon_fontsize).'px;';
$sports_hub_tp_theme_css .='}';

// site title font size option
$sports_hub_site_title_font_size = get_theme_mod('sports_hub_site_title_font_size', 30);{
$sports_hub_tp_theme_css .='.logo h1 , .logo p a{';
	$sports_hub_tp_theme_css .='font-size: '.esc_attr($sports_hub_site_title_font_size).'px;';
$sports_hub_tp_theme_css .='}';
}

//site tagline font size option
$sports_hub_site_tagline_font_size = get_theme_mod('sports_hub_site_tagline_font_size', 15);{
$sports_hub_tp_theme_css .='.logo p{';
	$sports_hub_tp_theme_css .='font-size: '.esc_attr($sports_hub_site_tagline_font_size).'px;';
$sports_hub_tp_theme_css .='}';
}

// related post
$sports_hub_related_post_mob = get_theme_mod('sports_hub_related_post_mob', true);
$sports_hub_related_post = get_theme_mod('sports_hub_remove_related_post', true);
$sports_hub_tp_theme_css .= '.related-post-block {';
if ($sports_hub_related_post == false) {
    $sports_hub_tp_theme_css .= 'display: none;';
}
$sports_hub_tp_theme_css .= '}';
$sports_hub_tp_theme_css .= '@media screen and (max-width: 575px) {';
if ($sports_hub_related_post == false || $sports_hub_related_post_mob == false) {
    $sports_hub_tp_theme_css .= '.related-post-block { display: none; }';
}
$sports_hub_tp_theme_css .= '}';

//return to header mobile				
$sports_hub_return_to_header_mob = get_theme_mod('sports_hub_return_to_header_mob', true);
$sports_hub_return_to_header = get_theme_mod('sports_hub_return_to_header', true);
$sports_hub_tp_theme_css .= '.return-to-header{';
if ($sports_hub_return_to_header == false) {
    $sports_hub_tp_theme_css .= 'display: none;';
}
$sports_hub_tp_theme_css .= '}';
$sports_hub_tp_theme_css .= '@media screen and (max-width: 575px) {';
if ($sports_hub_return_to_header == false || $sports_hub_return_to_header_mob == false) {
    $sports_hub_tp_theme_css .= '.return-to-header{ display: none; }';
}
$sports_hub_tp_theme_css .= '}';


//footer image
$sports_hub_footer_widget_image = get_theme_mod('sports_hub_footer_widget_image');
if($sports_hub_footer_widget_image != false){
$sports_hub_tp_theme_css .='#footer{';
	$sports_hub_tp_theme_css .='background: url('.esc_attr($sports_hub_footer_widget_image).');';
$sports_hub_tp_theme_css .='}';
}

// related product
$sports_hub_related_product = get_theme_mod('sports_hub_related_product',true);
if($sports_hub_related_product == false){
$sports_hub_tp_theme_css .='.related.products{';
	$sports_hub_tp_theme_css .='display: none;';
$sports_hub_tp_theme_css .='}';
}

//menu font size
$sports_hub_menu_font_size = get_theme_mod('sports_hub_menu_font_size', '');{
$sports_hub_tp_theme_css .='.main-navigation a, .main-navigation li.page_item_has_children:after,.main-navigation li.menu-item-has-children:after{';
	$sports_hub_tp_theme_css .='font-size: '.esc_attr($sports_hub_menu_font_size).'px;';
$sports_hub_tp_theme_css .='}';
}

// menu text tranform
$sports_hub_menu_text_tranform = get_theme_mod( 'sports_hub_menu_text_tranform','');
if($sports_hub_menu_text_tranform == 'Uppercase'){
$sports_hub_tp_theme_css .='.main-navigation a {';
	$sports_hub_tp_theme_css .='text-transform: uppercase;';
$sports_hub_tp_theme_css .='}';
}else if($sports_hub_menu_text_tranform == 'Lowercase'){
$sports_hub_tp_theme_css .='.main-navigation a {';
	$sports_hub_tp_theme_css .='text-transform: lowercase;';
$sports_hub_tp_theme_css .='}';
}
else if($sports_hub_menu_text_tranform == 'Capitalize'){
$sports_hub_tp_theme_css .='.main-navigation a {';
	$sports_hub_tp_theme_css .='text-transform: capitalize;';
$sports_hub_tp_theme_css .='}';
}

// patient
// Retrieve the customer review setting from the theme customization options.
$sports_hub_customer_review = get_theme_mod('sports_hub_customer_review', '');

// Check if the customer review is empty.
if (empty($sports_hub_customer_review)) {
    // Initialize the CSS variable if not already done.
    if (!isset($sports_hub_tp_theme_css)) {
        $sports_hub_tp_theme_css = '';
    }
    
    // Append the necessary CSS to remove padding, border, and border-radius when the review is empty.
    $sports_hub_tp_theme_css .= '.customzer-rating {';
    $sports_hub_tp_theme_css .= 'padding: 0; border: 0; border-radius: 0;';
    $sports_hub_tp_theme_css .= '}';
    // Append the necessary CSS to remove padding, border, and border-radius when the review is empty.
    $sports_hub_tp_theme_css .= '.half-width-border-top::before{';
    $sports_hub_tp_theme_css .= 'right:0; top:-40px;';
    $sports_hub_tp_theme_css .= '}';
}

// Output the CSS using a suitable hook (if necessary).

//slider false
$sports_hub_slider_arrows = get_theme_mod('sports_hub_slider_arrows',true);
if($sports_hub_slider_arrows != true){
$sports_hub_tp_theme_css .='.page-template-front-page .headerbox{';
	$sports_hub_tp_theme_css .='position:static;border-bottom:1px solid #ccc;';
$sports_hub_tp_theme_css .='}';
}

/*------------- Blog Page------------------*/
	$sports_hub_post_image_round = get_theme_mod('sports_hub_post_image_round', 0);
	if($sports_hub_post_image_round != false){
		$sports_hub_tp_theme_css .='.blog .box-image img{';
			$sports_hub_tp_theme_css .='border-radius: '.esc_attr($sports_hub_post_image_round).'px;';
		$sports_hub_tp_theme_css .='}';
	}

	$sports_hub_post_image_width = get_theme_mod('sports_hub_post_image_width', '');
	if($sports_hub_post_image_width != false){
		$sports_hub_tp_theme_css .='.blog .box-image img{';
			$sports_hub_tp_theme_css .='Width: '.esc_attr($sports_hub_post_image_width).'px;';
		$sports_hub_tp_theme_css .='}';
	}

	$sports_hub_post_image_length = get_theme_mod('sports_hub_post_image_length', '');
	if($sports_hub_post_image_length != false){
		$sports_hub_tp_theme_css .='.blog .box-image img{';
			$sports_hub_tp_theme_css .='height: '.esc_attr($sports_hub_post_image_length).'px;';
		$sports_hub_tp_theme_css .='}';
	}

	// footer widget title font size
	$sports_hub_footer_widget_title_font_size = get_theme_mod('sports_hub_footer_widget_title_font_size', '');{
	$sports_hub_tp_theme_css .='#footer h3{';
		$sports_hub_tp_theme_css .='font-size: '.esc_attr($sports_hub_footer_widget_title_font_size).'px;';
	$sports_hub_tp_theme_css .='}';
	}

	// Copyright text font size
	$sports_hub_footer_copyright_font_size = get_theme_mod('sports_hub_footer_copyright_font_size', '');{
	$sports_hub_tp_theme_css .='#footer .site-info p{';
		$sports_hub_tp_theme_css .='font-size: '.esc_attr($sports_hub_footer_copyright_font_size).'px;';
	$sports_hub_tp_theme_css .='}';
	}

	// copyright padding
	$sports_hub_footer_copyright_top_bottom_padding = get_theme_mod('sports_hub_footer_copyright_top_bottom_padding', '');
	if ($sports_hub_footer_copyright_top_bottom_padding !== '') { 
	    $sports_hub_tp_theme_css .= '.site-info {';
	    $sports_hub_tp_theme_css .= 'padding-top: ' . esc_attr($sports_hub_footer_copyright_top_bottom_padding) . 'px;';
	    $sports_hub_tp_theme_css .= 'padding-bottom: ' . esc_attr($sports_hub_footer_copyright_top_bottom_padding) . 'px;';
	    $sports_hub_tp_theme_css .= '}';
	}