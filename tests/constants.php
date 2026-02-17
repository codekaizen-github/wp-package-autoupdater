<?php
/**
 * Constants for testing.
 *
 * @package CodeKaizen\WPPackageAutoUpdaterTests
 */

declare(strict_types=1);
// There are no core functions to read these constants.
define( 'ABSPATH', '/' );
define( 'WP_CONTENT_DIR', sprintf( '%swp-content', ABSPATH ) );
define( 'WP_PLUGIN_DIR', sprintf( '%s/plugins', WP_CONTENT_DIR ) );
