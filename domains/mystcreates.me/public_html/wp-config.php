<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'mystcrea_wp648' );

/** Database username */
define( 'DB_USER', 'mystcrea_wp648' );

/** Database password */
define( 'DB_PASSWORD', 'p-6fS1S@6B' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'e1fd73qhjwj5joiltmlt3xpypqadz7utbohlpazi7vofrthw7rahrmgtoaia8h58' );
define( 'SECURE_AUTH_KEY',  '4tmo5sq3xakctdlhpthaklladtpwiwvymvanlqq0slajqn57labx0upcys0bfbwq' );
define( 'LOGGED_IN_KEY',    'hnpfepbx0zq7jukpht6tbxf16somkzza3i6vzagta7msthdacagdes1kx6iqemw6' );
define( 'NONCE_KEY',        'auyjugpvssafuu58uz8dqieml0xxljjgkgofgh6lwcvk2aomerkajxlsxozq5omi' );
define( 'AUTH_SALT',        'btno6qg1mbkikn87e2zcuidxa86813gycvxomvr7oioqmzwtqhdwpz8p29dbzcaj' );
define( 'SECURE_AUTH_SALT', 'kg7qabawxcc5qx7busoy8vdrsfrwhmmmz4a43ln9zxdfgz2xbmjasftvuth7xn32' );
define( 'LOGGED_IN_SALT',   'weukhsal0aojx6r8dezq3ljfquas5ia54irrrhcnsslaxjgaapxo6rgtyhunueoc' );
define( 'NONCE_SALT',       'dgnt1qqdlrvdvfabrpgr3pnt75sute89sjujrr1t1zinlilx5zxr8h0a4alvokre' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpjx_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
