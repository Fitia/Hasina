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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'hsna' );

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
define( 'AUTH_KEY',         ':~DrtbCuWmDhjk^pVC%QaDBIpHU ZY9N*]JsKa;-(&Va*PY`j}(ba|V4>pF[_[?}' );
define( 'SECURE_AUTH_KEY',  '6?leO9W7U`qbI0p%>c[UlZU#K:._?N8p?+KlWJIJw0E(~owF1%cugsV9c^*Kac__' );
define( 'LOGGED_IN_KEY',    '3dNAd~]t*Q@:KgC?Q +nDzdWk=a-.!Gr&Rx%ic>O_j-UXtH#K@`p1|m1DQ!&JZi}' );
define( 'NONCE_KEY',        'JTm>L,GdAq^`MQZaa^0,DvrxCZVXUF[K4PSt6:UfBUh/5._L-@Y.HH~C4E)p)3Qs' );
define( 'AUTH_SALT',        '{&te5nSOovU-V %-%lGEmDc?^yL,V}n/li:Kzb{PW&X:|U_gj)5:s(?YKF1jf{j.' );
define( 'SECURE_AUTH_SALT', 'H[,d(=@OC]edb>bQ)==p=_#FXqNMh#5|]%dh8;iovb2,!Dmt .-p>n*)wl|:d0mR' );
define( 'LOGGED_IN_SALT',   '!3$xVrzZ[X`nCx4`[K~k71G@i=YCt&>u8oJU}G^~/de@sH`?/zde/w3N<CX#ddnH' );
define( 'NONCE_SALT',       ',0L|b2bWxKf+Vd,zh|4$#UrFTU1=.7-gq52LVVa/X*5ZH3+g`G3^Q*3k~)0LetdG' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
