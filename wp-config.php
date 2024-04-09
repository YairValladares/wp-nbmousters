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
define( 'DB_NAME', 'wp-nbmousters' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '=:;KDE)ME=pzc+/6^unY-Zgh)&thc1AFs5[xEp*Kzqx{u_N9$2rQgBJtE!!)I#$t' );
define( 'SECURE_AUTH_KEY',  '`|%Q.lp(~mR[<v0` C`#lgyRsLh$,H_h+) z=*hKl&qA[q)?Qh89)J7x-e9d2r3!' );
define( 'LOGGED_IN_KEY',    '(R-IZua> ^HPu1cZ[F1aV[/w)IZ##i8~a ai2L<L:/hv7}x9/!LGD.p/`3;rr7IR' );
define( 'NONCE_KEY',        'm98B&qSnXw&lKTP?`&VH,wh^}9wrki>]0W56{m~5BZ>a8Q;CfuRlqYfj<VA/{,l8' );
define( 'AUTH_SALT',        'Z9[,ryr2<G{` K&WW1czCy3xZXA0oVr@]yPbjqX?yQg=U]4yU|1hc8@4m?|iw6R#' );
define( 'SECURE_AUTH_SALT', 'H;Th{[fKGB%O2tQCWAmMg5ZSQgh3D`*VRE%t)=S1vx*DzVK4V|Wu$~7(Jx%m10I{' );
define( 'LOGGED_IN_SALT',   '+r_oNX<et_F/$!ug?OUSBeGM2A)vSfJ3`u:V>j 7:?sjK%Q@x:Gsj$cpHV.(L~Ov' );
define( 'NONCE_SALT',       '!HUkoCVdsE5Y;HWXOs=1//6N:fai=@@5?2W]hwz<__dx&1XL-hB1]p]6~#Z2Wa&L' );

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
