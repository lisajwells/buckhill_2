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
        echo '<img class="size-full contact-imageband-img" src="http://staging3.buckhillbrewery.com/wp-content/uploads/2016/07/Craft-Beer-on-Tap.jpg" alt="Buck Hill Brewery">';
        echo '<img class="size-full contact-imageband-img" src="http://staging3.buckhillbrewery.com/wp-content/uploads/2016/08/Buck-Hill-in-Blairstown.jpg" alt="Craft Beer on Tap">';
        echo '<img class="size-full contact-imageband-img" src="http://staging3.buckhillbrewery.com/wp-content/uploads/2016/08/Buck-Hill-Brewery.jpg" alt="Private Events and Bands at Buck Hill Brewery">';
    echo '</div>';
}

//* Run the Genesis loop
genesis();
