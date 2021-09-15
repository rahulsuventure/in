<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'shycocan_in' );

/** MySQL database username */
define( 'DB_USER', 'shycocanin' );

/** MySQL database password */
define( 'DB_PASSWORD', '?^NGp9Uj$;{5' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'HcER8evAuS4heFnqfMqEkdq5iajtzpC1Rk7sINn4LtZlJhy3OvWirxLM3/0e2EyxJ2tvqDG4/4wgNKpnuorxLw==');
define('SECURE_AUTH_KEY',  'd91zMEoSsFOuENu+vji7plM9j2ehFLnr/Sn4erXhNKuc6KqmKjJzJAFESH/qCAOtdbu3FT3DxRtPNJuG4vObKQ==');
define('LOGGED_IN_KEY',    'LKDSublYAu1tikSBUkPvEWLlH0L19OQqfS5xyNsL8fjZInOx8XZG3gnzOy+w8Flo8SKIh+tgQB0/hSPL9rtgDA==');
define('NONCE_KEY',        '1HZwxgjKgfOrYNX8uxvLU0ufBXjU/w320YL8QtTEg/+j3V1gfwTFqwiVjkaOWHDny21uEASt2F8q5QIOeUfK/A==');
define('AUTH_SALT',        '36hnKjtLLEh9orEGIHzXzQeY0iCU+N8lv+usDwvNdSt2bPGGwtOyJ5UlliXCN+z5WbUuB9Xv1WHvgbNuEw7zPw==');
define('SECURE_AUTH_SALT', 'rUr33goxVbwjqK61gkkwr108bOLdZPCz2VeILx/fCNt1RGPH7uve0VpJmkpKxYKCDs4jLWHpFg/tehCbUkmoXA==');
define('LOGGED_IN_SALT',   '1KNrFRoiWIpi7OU1dnDiJdt0A9LW6Ppqy6bFZ0Ontv+SsL/pcI00tXZvDGQeskZyFtTPbeBYPQ4RSYtNoryD4Q==');
define('NONCE_SALT',       'qHRiUMT4Yyo0TXPbMXSVf/h1n8HQzjm/me99gTKSKPDICST3PlaRsLy493VNf7b+eWMIRWaBPJvT5mYtjX4uPg==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




define( 'AUTOSAVE_INTERVAL', 300 );
define( 'WP_POST_REVISIONS', 5 );
define( 'EMPTY_TRASH_DAYS', 7 );
define( 'WP_CRON_LOCK_TIMEOUT', 120 );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
