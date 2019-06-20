<?php

class UpdateAll_Command extends WP_CLI_Command {

	/**
	 * Updates all plugins, themes, and core in one command.
	 *
	 * @alias ua
	 *
	 * @when before_wp_load
	 */
	public function __invoke( $_, $assoc_args ) {
		WP_CLI::runcommand( 'plugin update --all --dry-run' );
		WP_CLI::runcommand( 'theme update --all --dry-run' );
		WP_CLI::runcommand( 'core update' );
	}
}
