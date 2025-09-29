<?php

add_action( 'wp_dashboard_setup', 'visualmodo_dashboard_add_widgets' );
function visualmodo_dashboard_add_widgets() {
	wp_add_dashboard_widget( 'visualmodo_dashboard_widget_news', __( 'Visualmodo', 'vslmd' ), 'visualmodo_dashboard_widget_handler', 'visualmodo_dashboard_widget_config_handler' );
}

function visualmodo_dashboard_widget_handler() {
	$options = wp_parse_args( get_option( 'visualmodo_dashboard_widget_news' ), visualmodo_dashboard_widget_config_defaults() );

	$feeds = array(
		array(
			'url'          => 'https://www.visualmodo.com/feed/',
			'items'        => $options['items'],
			'show_summary' => 1,
			'show_author'  => 0,
			'show_date'    => 0,
		),
	);

	wp_dashboard_primary_output( 'visualmodo_dashboard_widget_news', $feeds );
	?>

	<!-- Guest Post. -->
	<div class="visualmodo-advertising" style="background-color: #def; border: 1px solid #ddd; margin-top: 1em; padding: 1rem;">
		<h2><?php echo __( 'Write For Us', 'vslmd' ); ?></h2>
		<p class="visualmodo-advertising__description"><?php echo __( 'If you are a talented writer and have some valuable information, ideas or techniques to share, you are welcome to submit a guest post to us. &#9997;', 'vslmd' ); ?></p>
		<a href="https://visualmodo.com/write-for-us/" class="button button-primary button-hero" target="_blank"><?php echo __( 'Submit An Article', 'vslmd' ); ?></a>
	</div>

	<?php 
}

function visualmodo_dashboard_widget_config_defaults() {
	return array(
		'items' => 5,
	);
}

function visualmodo_dashboard_widget_config_handler() {
	$options = wp_parse_args( get_option( 'visualmodo_dashboard_widget_news' ), visualmodo_dashboard_widget_config_defaults() );

	if ( isset( $_POST['submit'] ) ) {
		if ( isset( $_POST['rss_items'] ) && intval( $_POST['rss_items'] ) > 0 ) {
			$options['items'] = intval( $_POST['rss_items'] );
		}

		update_option( 'visualmodo_dashboard_widget_news', $options );
	}

    ?>
	<p>
		<label><?php _e( 'Number of RSS articles:', 'vslmd' ); ?>
			<input type="text" name="rss_items" value="<?php echo esc_attr( $options['items'] ); ?>" />
		</label>
	</p>
	<?php
}