<?php
/**
 * Genesis Sample.
 */

//* Template Name: Events


add_action('genesis_entry_footer', 'bh_events_add_buttons');
function bh_events_add_buttons() {

    echo '<a class="button" href="'.esc_url( home_url() ).'/event-venues">Book a Private Event</a><a class="button" href="'.esc_url( home_url() ).'/directions-contact">Directions</a>';
}

add_action('genesis_after_content_sidebar_wrap', 'bh_contact_add_imageband');
function bh_contact_add_imageband() {
    echo '<div class="contact-imageband">';
        echo '<img class="size-full contact-imageband-img" src="http://staging3.buckhillbrewery.com/wp-content/uploads/2016/07/Full-Bar-and-Specialty-Cocktails.jpg" alt="Full Bar and Specialty Cocktails">';
        echo '<img class="size-full contact-imageband-img" src="http://staging3.buckhillbrewery.com/wp-content/uploads/2016/07/Race-Farms.png" alt="Race Farms">';
        echo '<img class="size-full contact-imageband-img" src="http://staging3.buckhillbrewery.com/wp-content/uploads/2016/07/Tables-Made-From-Local-Wood.jpg" alt="Tables-Made-From-Local-Wood">';
    echo '</div>';
}

//* Run the Genesis loop
genesis();
