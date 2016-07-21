<?php
/**
 * Genesis Sample.
 */

//* Template Name: Contact


add_action('genesis_after_content_sidebar_wrap', 'bh_contact_add_imageband');
function bh_contact_add_imageband() { ?>
    <div class="contact-imageband">
        <img class="size-full wp-image-287 contact-imageband-img" src="http://staging3.buckhillbrewery.com/wp-content/uploads/2016/06/horse-parking.jpg" alt="Horse Parking" width="500" height="324" />
        <img class="size-full wp-image-288 contact-imageband-img" src="http://staging3.buckhillbrewery.com/wp-content/uploads/2016/06/Buck-Hill-Brewery-Drections.jpg" alt="Buck-Hill-Brewery-Drections" width="500" height="324" />
        <img class="size-full wp-image-289 contact-imageband-img" src="http://staging3.buckhillbrewery.com/wp-content/uploads/2016/06/restaurant-motorcycle-parking.jpg" alt="Motorcycle Parking" width="500" height="324" />
    </div>
<?php }

//* Run the Genesis loop
genesis();
