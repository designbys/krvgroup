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
define( 'AUTH_KEY',          '657^ad,FbmMC`U/f)R!1UwrEIq0}fSFFC|/r!OE<v](V+/(.h{1*e|ZIo^v +qCc' );
define( 'SECURE_AUTH_KEY',   'iw:3<_)~;UjoK{7Wmk<p8/p ^[39craLIL.^@_!d3c;)ho!qMQ]8H8GkA/1%iNh)' );
define( 'LOGGED_IN_KEY',     '-xFf,;h-pI/!2hAj8uQvjUUa>0~WVn_D88X7WK>/6lLU4n .rK6juzyo|}q}NNUh' );
define( 'NONCE_KEY',         '*9RrT@4z%RIe~=e7uJ#z?=4e!AFMCVXel<Puj>|QV,!t5-Q|QH3pV?k33=}1#]3!' );
define( 'AUTH_SALT',         '5nlz,D<I5U7L*NkQYk4%H:s*:.AiWbo)Tc9$Rg+Yc.x@g@=2g+ L1I#B][Qy,;j.' );
define( 'SECURE_AUTH_SALT',  'VL5TpOeJ|t)*b=N#B0vYYC@{rBtWRz,-mCt*#%U=_-X2Fm?x*]+.!K;`@@)(M1M&' );
define( 'LOGGED_IN_SALT',    '+:<g=t)EJH6sai!!&1pW)6 4UvjVP3zVvt7aKfYvVjQEdCaK(KZ`p`kUP,Xc8KXe' );
define( 'NONCE_SALT',        'ZX,k;4Wc>g8[I}%;e2F~iDms^ &e5bl2^;Eb4nIAf2zp0&8)Cf5V{m}JW<4D6_j3' );
define( 'WP_CACHE_KEY_SALT', 'RMXO{EEr0V`gJ`RmR]-_qqlp}_oS3Bgbd$frAHP]]%P@1JY$AkZjJSPA+)L||M!k' );


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
