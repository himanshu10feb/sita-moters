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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '4CIs8]f[SPC2Pe}&N$S9@`@?(FUvu!tx<!b<L)`4BR:68lRzdm?;_kw?DRP@nu.3' );
define( 'SECURE_AUTH_KEY',  '!gX@#(x=Zna:^~zDsc?@aD:?LkPk/K)n*,F=vrty@q4Qp0@N<e4TFI?1j:qs>?B~' );
define( 'LOGGED_IN_KEY',    'YK1QM(_c;t>}f7`@Jltg_?@H5.XQ5=#u^Q#7eC>}q$eKkPUk1/m>iU.@:_q%}kf&' );
define( 'NONCE_KEY',        'AFZZV:^zK@Y#1P7a3B0.3U{qXv >;Vps2B9Ns=--~qa)-ISzs,>G&FJ).i.a3j|Q' );
define( 'AUTH_SALT',        'MW`@xQG,H-]*d+Pw)7aheQ75r2MZH2[ R*K{m@t:$wJUB/gD!7OkO4_8#c@_s*tV' );
define( 'SECURE_AUTH_SALT', '9=kG,UrgF#D&0aw%g2e5#<T6BzN[!m7[5tn1Hi{#<TV}#&QEf8ibeVCS`,|J06?#' );
define( 'LOGGED_IN_SALT',   '?rJfI0_-8~lBwS_g)ym/Xh?O&2#vQgp9GvnrZ0P(:?litZ`;rUQanzh.x5C$x-BX' );
define( 'NONCE_SALT',       'XWiYg&j8C|;B2fYijf*m26D]$@EXm</.*`vKeZB!9E~OE#/+kI,~7Dg1>|Oyg1b8' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
