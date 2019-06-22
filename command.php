<?php

if ( ! class_exists( 'WP_CLI' ) ) {
	return;
}

$autoload = dirname( __FILE__ ) . '/vendor/autoload.php';
if ( file_exists( $autoload ) ) {
	require_once $autoload;
}

WP_CLI::add_command(
	'update-all',
	'UpdateAll_Command',
	array(
		'before_invoke' => function() {
			// Make sure we're in a WP installation
			if ( ! function_exists( 'get_bloginfo' ) ) {
				WP_CLI::error( 'This does not seem to be a WordPress installation.' );
			}
		},
	)
);
