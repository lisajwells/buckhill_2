<?php
/**
 * Genesis Sample.
 */

//* Template Name: Contact


        // <!-- example from formandfunction three-top, with echo -->
        // <!-- <img src="'. get_home_url() . genesis_get_custom_field( 'Image_1_url' ) .'" alt="'. genesis_get_custom_field( 'Image_1_alt' ) .'"> -->
        // <!-- usage in dashboard:
        // Image_1_url -> /wp-content/uploads/2016/06/master-bedroom-statement-wall-grasscloth-wallpaper-linen-drum-shade-pendant.jpg
        // Image_1_alt -> Master Bedroom Statement Wall Grasscloth Wallpaper Linen Drum Shade Pendant
        // -->

add_action('genesis_after_content_sidebar_wrap', 'bh_contact_add_imageband');
function bh_contact_add_imageband() {
    echo '
    <div class="contact-imageband">
        <img src="'. get_home_url() . genesis_get_custom_field( 'Image_1_url' ) .'" alt="'. genesis_get_custom_field( 'Image_1_alt' ) .'"
        <img src="'. get_home_url() . genesis_get_custom_field( 'Image_2_url' ) .'" alt="'. genesis_get_custom_field( 'Image_2_alt' ) .'"
        <img src="'. get_home_url() . genesis_get_custom_field( 'Image_3_url' ) .'" alt="'. genesis_get_custom_field( 'Image_3_alt' ) .'"

    </div>';
}

//* Run the Genesis loop
genesis();
