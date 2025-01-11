<?php
/**
 * Template Name: Custom Home Page
 *
 * @package Sports Hub
 * @subpackage sports_hub
 */

get_header(); ?>

<main id="tp_content" role="main">
	<div>
		<?php do_action('sports_hub_before_slider'); ?>
		<?php get_template_part('template-parts/home/slider'); ?>
		<?php do_action('sports_hub_after_slider'); ?>
	</div>
	<div>
		<?php get_template_part('template-parts/home/services'); ?>
		<?php do_action('sports_hub_after_services'); ?>
		<?php get_template_part('template-parts/home/home-content'); ?>
		<?php do_action('sports_hub_after_home_content'); ?>
	</div>
</main>

<?php get_footer(); ?>