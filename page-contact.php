<?php
/**
 * Genesis Sample.
 */

//* Template Name: Contact

add_action('genesis_after_content_sidebar_wrap', 'bh_contact_add_imageband');
function bh_contact_add_imageband() {
    echo '<div class="contact-imageband">';
        echo '<img class="size-full contact-imageband-img" src="'. get_home_url() . genesis_get_custom_field( 'Image_1_url' ) .'" alt="'. genesis_get_custom_field( 'Image_1_alt' ) .'">';
        echo '<img class="size-full contact-imageband-img" src="'. get_home_url() . genesis_get_custom_field( 'Image_2_url' ) .'" alt="'. genesis_get_custom_field( 'Image_2_alt' ) .'">';
        echo '<img class="size-full contact-imageband-img" src="'. get_home_url() . genesis_get_custom_field( 'Image_3_url' ) .'" alt="'. genesis_get_custom_field( 'Image_3_alt' ) .'">';

    echo '</div>';
}

//* Run the Genesis loop
genesis();
