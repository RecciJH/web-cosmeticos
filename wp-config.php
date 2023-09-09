<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'rechiweb_wp274' );

/** Database username */
define( 'DB_USER', 'rechiweb_wp274' );

/** Database password */
define( 'DB_PASSWORD', 'Sv]x9(7J6p' );

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
define( 'AUTH_KEY',         'apdcezrfcj3hfbtfk64ahsesjsq3fxhadb8rrio2ba4dfb6zevdlr4waculet9ka' );
define( 'SECURE_AUTH_KEY',  'nga6offahqhbiruq2pqbnnhdacvecvwlvykobx0beclhekayabtc22cz07ifazhq' );
define( 'LOGGED_IN_KEY',    'ttyqtvdjhzbc03hpnbovvo7lbbwrv2edvorqyfeggqdvqkpk5stjbwnttwoydrxs' );
define( 'NONCE_KEY',        'kl8julcw9rif1zjqj5sv2tl6c1m4wmyr3om3trgvtrqrz9rjk8cigeegmzzozcxi' );
define( 'AUTH_SALT',        '7uvsq8ab4gdjkpwto6eqf7nhr3aew4axcqhchwdfc8vcpwaa0ipp6qtzhhnnhu0q' );
define( 'SECURE_AUTH_SALT', 'wzilftzdghp6hcocr3qczgqv1ps7ixpuo1okfaouo22yncoqo2rju0zj5pcqymtu' );
define( 'LOGGED_IN_SALT',   '6cdvletkabxinqkuqewrhisuio6wbq04ltnehv6lhjvmu3eomhar0opsmmdnw9uf' );
define( 'NONCE_SALT',       'oxechd6aajkgpjr0meryb2ohkpnpr51kgb2ffja4oxfqw7yw4smegr6khtj17n4y' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpne_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
