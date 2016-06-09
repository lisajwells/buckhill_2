<?php
/**
 */

// Remove post title area
remove_action( 'genesis_entry_header', 'genesis_do_post_title'                 );
remove_action( 'genesis_entry_header', 'genesis_entry_header_markup_open',  5  );
remove_action( 'genesis_entry_header', 'genesis_entry_header_markup_close', 15 );


// add top section
add_action( 'genesis_after_header', 'buckhill_add_topsection' );
function buckhill_add_topsection() { ?>

    <div class="topsection">
        <div class="topsection-text">
            <p>An American Craft Beer and Food Experience</p>
            <a class="button" href="#">Menu</a><a class="button" href="#">Directions</a>
        </div>
        <div class="topsection-img">
        <img src="<?php echo get_stylesheet_directory_uri() ?>/images/Buck-Hill-Brewery-Blairstown-NJ.jpg"/>
        </div>
    </div>

<?php
}


// add events list widget
add_action( 'genesis_before_content_sidebar_wrap', 'buckhill_add_upcoming' );
function buckhill_add_upcoming() {
    genesis_widget_area ('upcoming-events', array(
        'before' => '<div class="upcoming-events"><div class="wrap">',
        'after' => '</div></div>',
    ) );
}


genesis();
