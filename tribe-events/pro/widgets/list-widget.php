<?php
/**
 * Events Pro List Widget Template
 * This is the template for the output of the events list widget.
 * All the items are turned on and off through the widget admin.
 * There is currently no default styling, which is highly needed.
 *
 * Override this template in your own theme by creating a file at [your-theme]/tribe-events/pro/widgets/list-widget.php
 *
 * When the template is loaded, the following vars are set:
 *
 * @version 4.1.1
 *
 * @var string $start
 * @var string $end
 * @var string $venue
 * @var string $address
 * @var string $city
 * @var string $state
 * @var string $province
 * @var string $zip
 * @var string $country
 * @var string $phone
 * @var string $cost
 * @var array  $instance
 *
 * @package TribeEventsCalendarPro
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

// Retrieves the posts used in the List Widget loop.
$posts = tribe_get_list_widget_events();

// The URL for this widget's "View More" link.
$link_to_all = tribe_events_get_list_widget_view_all_link( $instance );

// Check if any posts were found.
if ( isset( $posts ) && $posts ) :

	$event_index = 0;

	foreach ( $posts as $post ) :
		setup_postdata( $post );
		do_action( 'tribe_events_widget_list_inside_before_loop' ); ?>

		<!-- Event  -->
		<div class="<?php tribe_events_event_classes() ?>">

			<!-- add the image / events-home is 500 x 340 -->
			<?php if ($event_index == 0) { ?>
				<div class="tribe-events-event-image"><img src="http://staging3.buckhillbrewery.com/wp-content/uploads/2016/06/Brewery-Blairstown-NJ.jpg"></div>

			<?php } ?>
			<?php// echo tribe_event_featured_image( null, 'events-home' ); ?>

			<!-- <?php //echo tribe_get_event_taxonomy ( 'category' ); ?> -->

			<?php tribe_get_template_part( 'pro/widgets/modules/single-event-home', null, $instance ) ?>
		</div>

		<?php do_action( 'tribe_events_widget_list_inside_after_loop' ) ?>

		<?php $event_index++; ?>

	<?php endforeach ?>

	<p class="tribe-events-widget-link">
		<a href="<?php get_home_url() ?>/events" class="button small" id="homepage-to-events-btn">View the full Calendar</a>
	</p>

<?php
// No Events were found.
else:
?>
	<p><?php printf( __( 'There are no upcoming %s at this time.', 'tribe-events-calendar-pro' ), tribe_get_event_label_plural_lowercase() ); ?></p>
<?php
endif;

// Cleanup. Do not remove this.
wp_reset_postdata();
