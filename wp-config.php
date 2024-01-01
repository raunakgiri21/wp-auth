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
define( 'DB_NAME', 'users-php' );

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
define( 'AUTH_KEY',         'uzG$tjwT|_2m5_!K6AV%B%(}:S8W=]p`oIL:4j4*D=gY67=Z G^t}*m6RmWmh|*|' );
define( 'SECURE_AUTH_KEY',  'EQ]v[$%ZrTN4+g-FVl#maAKi)mn_I,BPxHJC@WTPl12O4/zQ fr@@&Rs:LykiJ*D' );
define( 'LOGGED_IN_KEY',    'IZW-~(J=U%bc0n^>9x6#Hc*15R%8>NMC6Nw/ !{8O|4M|=a#@qY=;5WREdA&#;Q[' );
define( 'NONCE_KEY',        'Q^OAf^CczW[~jY2 2gen>/4B,IKoibuhSE^T72Fgb/5`4c>P.+ACi*oP:>I9=KH4' );
define( 'AUTH_SALT',        'Bv~:<1#A6O[u1Y{=yaJ4E~hppHPN>2IcmK|M4(esa~WW{(rNC%gO>Zv%+*MZjuk-' );
define( 'SECURE_AUTH_SALT', '6!>,)n(+f|*AFyRe?lX-v0-P+~>4ekUVbcd<7VH]|(@Vv|^7W0l w[Q*J4m}gHD.' );
define( 'LOGGED_IN_SALT',   '{{2!KNTMUL+wv]>17ef1|^k+^l$O,Mz]&E!:vsi[8I]236Sx{%/}1Hl}{S+/Ei{6' );
define( 'NONCE_SALT',       '!m]CP%!8<)c9IpBs<4w-BH_SUEs3}zHqcKeNN]`s|V6 s.fw%,FkoLs?TYw`t>Cy' );

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
