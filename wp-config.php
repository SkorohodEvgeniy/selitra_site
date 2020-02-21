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
define( 'DB_NAME', 'selitra' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',         'Ej(S3l3Xo.7W.&.Cswk~{VmNPB[W*6yq;rE_ZN|=.USi*8<FjG|{817D|)Z4IWo)' );
define( 'SECURE_AUTH_KEY',  '8Ow({lGB[F9OEk&}aM^%0yVxfE~V8zV.gwufBIRn/O(+x#L5DnQqxHm)InPf#6wg' );
define( 'LOGGED_IN_KEY',    'a:#eAU?KkVTzj@C(F5UB<|vj?od+3F=|9( }ZFu-,|ZS2vJF1Nl*tlB3:e>8Rq~N' );
define( 'NONCE_KEY',        'QX*#!X_1[L/KF99S(-tz2q}-.C}[6JDjwowj$0A0rPzB>bZM9RlbA8j 3xyK5$2{' );
define( 'AUTH_SALT',        '1%7!$G?7rk/A0AB;waYYw<052aovnxB}7to;QYZXc4i+ClFGmwCgr3:U..9NUiy!' );
define( 'SECURE_AUTH_SALT', 'QZ_e81zZ,.cl^gG_qNToPR9OeSeXk12_uBcu4o>x2%STt*Yn >e-B8zPCF)GTUGn' );
define( 'LOGGED_IN_SALT',   'D;I39bwmCuy!S}B>BU`{ZBxv:#Q0DI*s^f9sNaDGh}zC:esqLS*E6TO4L|qqW[h;' );
define( 'NONCE_SALT',       '-+E!&z3Ek3X.Wd$plf8BH6qwfk/e]C2fayE(%kvLL:KF6jze_&mK#?+e#1r3vg${' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'asD_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
