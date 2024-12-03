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
define( 'DB_NAME', 'damar' );

/** Database username */
define( 'DB_USER', 'damar_04' );

/** Database password */
define( 'DB_PASSWORD', 'damar4423' );

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
define( 'AUTH_KEY',         'Pot>P4_.{ KU@ ;R= +:/Y7afNaygc)Um~U{c{-r %q1WF|.*x<QZd[zfNIHOd6:' );
define( 'SECURE_AUTH_KEY',  'Wh^X;f$}un^*zWEa+RMk]8vYXt~*;}Y[W$5O7>BYV7J0rmU3kv`canM#V/;UE68*' );
define( 'LOGGED_IN_KEY',    ')>B$%}i?t-8v]6{Da8lA+P<wXe=@VEvaT<5ip;I#CjUILc?KDL5v,}^BoYsN+Pg6' );
define( 'NONCE_KEY',        'n515^W6kiq`2w#hUF[=mb1[B3yg^VKEm WD*u7{pLy7Mqkt%&jBAK:FNPch@$uj,' );
define( 'AUTH_SALT',        '`>w;:.l2)Rl! t>WyYlW,8$H*!)8d@vz?7RZ7o^/8(M@]6Hr(*o6/OBxYy5)#83q' );
define( 'SECURE_AUTH_SALT', '):a9racfbS~rZ/(K.;H0S-/.wp?.59K/(8x@/99r~z-4YAZCDElSzc%QIzo)[u_,' );
define( 'LOGGED_IN_SALT',   '54@.f`p>guLdp<(7Jt-2!3?oISd<E>^ H-VkA*=7`@(Bj=NXJCiDZ#=kxnd[}>O,' );
define( 'NONCE_SALT',       'aQmbh<WYm<$m;fwdVv:K7f=g=B4z8{k1Y(iu}P@ dBE0`h.u1nhYx^M]aq3.^B!f' );

/**#@-*/

/**
 * WordPress database table prefix.
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
