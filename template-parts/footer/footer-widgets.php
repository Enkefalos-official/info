<?php
/**
 * Displays footer widgets if assigned
 *
 * @package Sports Hub
 * @subpackage sports_hub
 */

?>
<?php

// Determine the number of columns dynamically for the footer (you can replace this with your logic).
$sports_hub_number_of_footer_columns = get_theme_mod('sports_hub_footer_columns', 4); // Change this value as needed.

// Calculate the Bootstrap class for large screens (col-lg-X) for footer.
$sports_hub_col_lg_footer_class = 'col-lg-' . (12 / $sports_hub_number_of_footer_columns);

// Calculate the Bootstrap class for medium screens (col-md-X) for footer.
$sports_hub_col_md_footer_class = 'col-md-' . (12 / $sports_hub_number_of_footer_columns);
?>
<div class="container">
    <aside class="widget-area row" role="complementary" aria-label="<?php esc_attr_e( 'Footer', 'sports-hub' ); ?>">
        <div class="<?php echo esc_attr($sports_hub_col_lg_footer_class); ?> <?php echo esc_attr($sports_hub_col_md_footer_class); ?>">
            <?php dynamic_sidebar('footer-1'); ?>
        </div>
        <?php
        // Footer boxes 2 and onwards.
        for ($sports_hub_i = 2; $sports_hub_i <= $sports_hub_number_of_footer_columns; $sports_hub_i++) :
            if ($sports_hub_i <= $sports_hub_number_of_footer_columns) :
                ?>
               <div class="col-12 <?php echo esc_attr($sports_hub_col_lg_footer_class); ?> <?php echo esc_attr($sports_hub_col_md_footer_class); ?>">
                    <?php dynamic_sidebar('footer-' . $sports_hub_i); ?>
                </div><!-- .footer-one-box -->
                <?php
            endif;
        endfor;
        ?>
    </aside>
</div>