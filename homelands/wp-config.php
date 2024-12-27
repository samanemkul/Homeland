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
define('DB_NAME', 'homeland');

/** Database username */
define('DB_USER', 'root');

/** Database password */
define('DB_PASSWORD', '');

/** Database hostname */
define('DB_HOST', 'localhost');

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

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
define('AUTH_KEY',         '9-HlUOc2+xOt 8fwV0Sn`n6lHW@D.W@$o20X sk=<uSU$Y^X.]nd1o CE>Tia<H=');
define('SECURE_AUTH_KEY',  'YuBr]$XYfyziJ|X@/M_=dLOzV`Dv^NQGx_p.L?F&Mj#RD]{w%k-sB^lYs;BC.^EB');
define('LOGGED_IN_KEY',    '(z3$5zWg3U53FD/fjoa:F5Xmr?E3J&0Ek,mX1}ZqJ?Y:!c:7mm4lPZ6f1ABu7yBY');
define('NONCE_KEY',        '$x*m~V8Z45(_0!CFp{_p8?9u)pwcm5xL>`(mDJ:i@7J(DyZZI1r]).h1^xD+Hz??');
define('AUTH_SALT',        'y}M^)3?PK }`h}[2O*:qO<k3l[Xvm`~LN,U0wFVpx>6xc+Xyp`/B|%@OrFp82??c');
define('SECURE_AUTH_SALT', 'w0&r[@#)3ZNMb?l!cQJrGK>$QMe3{>8Yqp{00Hj,}dy;:ANJ*Hs~K+R0yRVA0Beu');
define('LOGGED_IN_SALT',   'BI@ylC43|$0QX=mpJv,/2Ipc]vg.?a05Hk|/1x 3YS}^(0`q2I=~UD{aj#54@e0I');
define('NONCE_SALT',       'Zls*c8g{f?qZ[Z*ZBeS7]gH5peXirYq?XOqV9PTJL0V.&~(WM1]kj!p6D7zZqK|Z');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (! defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
