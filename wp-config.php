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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',          'aC@ 1NtO&`FU{LhI!%4p[FU?1l9R<Z4o`OB],&^r&v&<1w#$^D^ln@3IQ088?rZ$' );
define( 'SECURE_AUTH_KEY',   '|4C|/V>B^ufEw?A]%z6U9)0dJ!2zCkt0,#kT)>OqnT5:]@CxLzFJH%H~dP:0p0 U' );
define( 'LOGGED_IN_KEY',     'NL?U.2gQfyp/!nt8DBXsqL`A]yfzjpkg.8T@^CKON_NW>4QFQywR~i!IYt$^qDQ1' );
define( 'NONCE_KEY',         'slOD`gfB5bX?ulE~[rPw[PZ!gQ[L;DSem>Pu|cej]TP!LILo5,Xx;XDQ4>mmNl},' );
define( 'AUTH_SALT',         ':R_!@JMzUR3@+I5W7S}:9~nScY$AiK.;#TAiyG&]~xlksQlR#f|]y_FF88<9W0v ' );
define( 'SECURE_AUTH_SALT',  'v_[rJ5#y`pkm99DqjwW^.8.~tY+wqx-nLYEz:1p F T9!.&ou@z:^Ckskc-]GtOM' );
define( 'LOGGED_IN_SALT',    'h%_}DmR-HofML|g?U;~VO4zthO|QcmwbFn;YYx$s2Xdh)w&y[3f2L&D<AeAJRa~[' );
define( 'NONCE_SALT',        '_+(ocn3O0JtDdE`>x#6o& WS].<Yq)J?RG$emNpT>f`?L2(J%!5jsN:2Ni_aeF9<' );
define( 'WP_CACHE_KEY_SALT', '#-u9J((D,- JaYcqrlP0ngVuVye.|+p/zcv~>19JTHS4!4TGh0h|THH(P$RT8_yi' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
