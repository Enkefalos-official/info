<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package Sports Hub
 * @subpackage sports_hub
 */

get_header(); ?>

<div class="container">
	<main id="tp_content" role="main">
		<div id="primary" class="content-area">
			<section class="error-404 not-found">
				<h1 class="page-title text-center pt-3"><?php echo esc_html(get_theme_mod('sports_hub_edit_404_title',__('Oops! That page can&rsquo;t be found.','sports-hub')));?></h1>
				<div class="page-content text-center">
					<p class="py-3"><?php echo esc_html(get_theme_mod('sports_hub_edit_404_text',__('It looks like nothing was found at this location. Maybe try a search?','sports-hub')));?></p>
					<?php get_search_form(); ?>
				</div>
			</section>
		</div>
	</main>
</div>

<?php get_footer();