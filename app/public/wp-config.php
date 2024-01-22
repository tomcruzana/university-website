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
define( 'AUTH_KEY',          'zM@D<4Gn&~3n-NM/F /o{P84hFDG6Teh0<=73?&Gr;6 M~kK<8N-I9NEU-gNo5#u' );
define( 'SECURE_AUTH_KEY',   '6JVXig__.`MDwN3E6BM<CxdfQf^hJp.QK8]jCrfk.I&A]EXm4/kU-vv&O -@u.,<' );
define( 'LOGGED_IN_KEY',     'v^?]lvE{`Y_S@nllimvo#RVnET%E*FA:a*PAyWM[n0!Yw{!=`!fD)3i.Dt>NLX72' );
define( 'NONCE_KEY',         'p*1qb$foF)@_CGUSS6E1*Gk5/=/+[])]iA*Xc*kz:<>3<qag*6#Z<FT,<gxk!}<%' );
define( 'AUTH_SALT',         'MnREy Du`z.k<>){uFprPl#wX(N5Ra7bIk>0[BhU#dp$RzmYn|%W]l0]wC6Whu<<' );
define( 'SECURE_AUTH_SALT',  'Zlijs46Hm3b4H19O{|_Zlf[XxOx}eb/f$NRf{_3(+WjA.gDG{Kta#4HN3?B9@DMH' );
define( 'LOGGED_IN_SALT',    '`GVq}[~gP{cePK;ZtP3[l?^&8qS2|`x9J)hp=/+#Mcc2ItD_.y_w<|iA;mEzp@&?' );
define( 'NONCE_SALT',        'V_ftUrzAUtms]JvF9R^{KXF<wj6F3nC$~i$BKPUtauL[?{0j~AB7F4_~s:up4q_]' );
define( 'WP_CACHE_KEY_SALT', '7zQo$(<Y7)AHje{aWX6j6zb~u()A6N/>M!/0<6!,llHt6vYqsfIc[$>kiiiiPQvi' );


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
