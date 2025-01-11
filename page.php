<?php
/**
 * The template for displaying all pages
 *
 * @package Sports Hub
 * @subpackage sports_hub
 */

get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>
	<div id="post-<?php the_ID(); ?>" class="external-div">
        <div class="box-image">
          	<?php if(has_post_thumbnail()){ 
            	the_post_thumbnail();
	        }else { ?>
	            <div class="single-page-img"></div>
	        <?php } ?>
        </div> 
        <div class="box-text">
        	<h2><?php the_title();?></h2>  
        </div> 
	</div>
<?php endwhile; ?>

	<main id="tp_content" role="main">
		<div class="container">
			<div id="primary" class="content-area">
				<?php $sports_hub_sidebar_layout = get_theme_mod( 'sports_hub_sidebar_page_layout','right');
			    if($sports_hub_sidebar_layout == 'left'){ ?>
			        <div class="row">
			          	<div class="col-lg-4 col-md-4" id="theme-sidebar"><?php get_sidebar(); ?></div>
			          	<div class="col-lg-8 col-md-8 singlepage-main">
			           		<?php while ( have_posts() ) : the_post();

									the_content();

									wp_link_pages( array(
										'before' => '<div class="page-links">' . __( 'Pages:', 'sports-hub' ),
										'after'  => '</div>',
									) );

								// If comments are open or we have at least one comment, load up the comment template.
								if ( comments_open() || get_comments_number() ) :
									comments_template();
								endif;

								endwhile; // End of the loop.
							?>
			          	</div>
			        </div>
			        <div class="clearfix"></div>
			    <?php }else if($sports_hub_sidebar_layout == 'right'){ ?>
			        <div class="row">
			          	<div class="col-lg-8 col-md-8 singlepage-main">
				            <?php while ( have_posts() ) : the_post();

									the_content();

									wp_link_pages( array(
										'before' => '<div class="page-links">' . __( 'Pages:', 'sports-hub' ),
										'after'  => '</div>',
									) );

								// If comments are open or we have at least one comment, load up the comment template.
								if ( comments_open() || get_comments_number() ) :
									comments_template();
								endif;

								endwhile; // End of the loop.
							?>
			          	</div>
			          	<div class="col-lg-4 col-md-4" id="theme-sidebar"><?php get_sidebar(); ?></div>
			        </div>
			    <?php }else if($sports_hub_sidebar_layout == 'full'){ ?>
			        <div class="full">
			            <?php while ( have_posts() ) : the_post();

									the_content();

									wp_link_pages( array(
										'before' => '<div class="page-links">' . __( 'Pages:', 'sports-hub' ),
										'after'  => '</div>',
									) );

							// If comments are open or we have at least one comment, load up the comment template.
							if ( comments_open() || get_comments_number() ) :
								comments_template();
							endif;

							endwhile; // End of the loop.
						?>
			      	</div>
				<?php }?>
			</div>
	 	</div>
	</main>

<?php get_footer();