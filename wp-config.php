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
define( 'DB_NAME', 'wp' );

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
define( 'AUTH_KEY',         'uL9*t^Rd;zL(KrItYNfYGnvr:r*O2csNc0+$k_H~{.`JI]Q5p[![;a{J,?u-);k4' );
define( 'SECURE_AUTH_KEY',  '6xb@zx%otrnQ.x6T;KD_(RT&5Nc8|^`51PHsZt6n(S&c=lPm~V8r))F*bMpxi3[:' );
define( 'LOGGED_IN_KEY',    ':9;azU3~R^{}f?h2*U_z:&|}v_e7JG*EO@NG=uvqL3u0.D2_3$UDuvfk&lY0[U>B' );
define( 'NONCE_KEY',        'gD3=ssV>v}8&Zn{Lsm!ktkexhG{F,2,p<v;H91Jk/d@=3F3<*V^}#@vbo1mPHQRx' );
define( 'AUTH_SALT',        'QE$aHfi=[*=0L_k. ^Y1/`v,5f?nm)b/`YS=nR06&Bd*Z06bFU=}ujzG,@^x<k1Z' );
define( 'SECURE_AUTH_SALT', '$nl)%D*t#^SZppBJ`^$rGHLnL`u~rED4-MX8e5Po8wDrQ[*INa8LZF-+u:DlQZJv' );
define( 'LOGGED_IN_SALT',   'CFkMeD1@[vR+p BtqMG]8|)+zgn[ttMh:$*[a+Rp%@@Yn/9b }PXLC>2BBs}~&__' );
define( 'NONCE_SALT',       'iIcn|6BQ,TU,&$Gyd[7vS YZ&S5r`c~3`BYr%{lrsbq|o1H&&3H:42ZGz)!nNR)D' );

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
