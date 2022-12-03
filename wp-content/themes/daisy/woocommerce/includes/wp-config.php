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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u1136489_wp807' );

/** Database username */
define( 'DB_USER', 'u1136489_wp807' );

/** Database password */
define( 'DB_PASSWORD', 'N-J2(7S7pm' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'ui6bwasi0tfcuycruklzduhzy3msq9nohuxak4dlvpky9ybw2g35sisqj6npzxl0' );
define( 'SECURE_AUTH_KEY',  'juy1hyicfr36u6lrcvwpwmuqcossbxjgtqn802yjpg15p1cpg5nw00blqgqs4dmw' );
define( 'LOGGED_IN_KEY',    'ixcr48fu6fbyufscqy8efqf2a58qnr0ak6wtbefivflhebmxbv0zzb2m3lguhgtd' );
define( 'NONCE_KEY',        'cqaqyx95y18w3butaif2la192rgbkfwudf3e6lzhn1tsqzqh3tpnltrucj4vxxsk' );
define( 'AUTH_SALT',        '3dtcsgoslqosnyhv7kgqewrfeq6u5hrz58aogd7r1nwllc51qy4i5jdiuf03fdra' );
define( 'SECURE_AUTH_SALT', 'itxc8aoc9t1jgmkbydiy3qffgbxgvgxuchblpdlqxhhg8nrgxhdeamfnkmxjwmhg' );
define( 'LOGGED_IN_SALT',   'gb2r4qfbhlrqxp3fr4tzr4nmcspk7mk8kfeq3v85hptsujveofemdrfptpddtruf' );
define( 'NONCE_SALT',       'eznvmmfir4yifptvpzqs10pmm2hjseu7efo5t9honq4mnqsdwl0iwvllxa9er9uj' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpkh_';

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
