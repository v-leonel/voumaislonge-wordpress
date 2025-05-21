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
define( 'DB_NAME', 'voumaislonge' );

/** Database username */
define( 'DB_USER', 'voumaislonge' );

/** Database password */
define( 'DB_PASSWORD', 'qvGU@3!bugy!!2Dj' );

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
define( 'AUTH_KEY',         'X)pLDr/#FA91J<O6ZyyDWCEd|Y)QMn>rm2L?Aenf/>)Mg+^2as^]KYk}by{$,Cy7' );
define( 'SECURE_AUTH_KEY',  'z3 OA,qd9Qhf#]$k*`9$z[w!M.WRmv%GH]0(^:H]F1yE+mIO<0}4^H[ |]GAo/;L' );
define( 'LOGGED_IN_KEY',    '23}N(:7}#m5ich8Agkq2MF{bfWhb*8p9VlIM`BC?>mJ5DD-+3M_*W(T^0pcZf=a6' );
define( 'NONCE_KEY',        '}6`k2&WP.xcG4TuCTA%Mbe=B=;<.3Q/h1)RI<~ez~g?|c+unk(@:z5t6&F5G`u9q' );
define( 'AUTH_SALT',        'K?O`CFP}Rgq_b&U`5tI#.UI?BV_ ;x30Xoh!wyq-9.jImd8>%4O!Y@XSbH804P#R' );
define( 'SECURE_AUTH_SALT', 'R;5%5Mr:L~Tob]FnS`4E+:JqhU/Nopc:3o4%p:DA$JprZ!3Xsl}NM]jh?J; AavE' );
define( 'LOGGED_IN_SALT',   'Or,XHxo~**MY9RgI,@!%o]<lT6eH.O5&G2A9KhP}15-e$Bz0,P5%Qy4owtdW7hR(' );
define( 'NONCE_SALT',       'q6[.M,p>)<E!J?b4X SWlqQ=iW?;Q0<!``N{3GIJbPaXflvx<PHWFmfhXb^+o+v&' );

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
