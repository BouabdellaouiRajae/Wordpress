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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'basededonnees' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'v_~Zp{p029Y_n7iZ]zMSd]2;eRX=e0!.c[jik)Vmem0EdeZK7Ci.ZD{T}[s>lah4' );
define( 'SECURE_AUTH_KEY',  'TVD$kgT37OpQCowNMr|b3UT Cd*H,Z:w}W.Fd3GC%E%%DXK8xw,G8o)yP~%N&`qg' );
define( 'LOGGED_IN_KEY',    'C!zA&;Akz+yyL87t23x^XY/y<k%n(ZmaBxC5M(!A.k+8|A_Q`VJhUsWRSNwM]F$g' );
define( 'NONCE_KEY',        '#3.dpTM{qr*-^H/65Ry}R8b7g=&a|)SVXVM(jx$w.-p}EqC2.[#NRN8(N`i2Q%oP' );
define( 'AUTH_SALT',        '+?<*@a8%0G,BC{Ow<,U[KX1kn^[`}sX5_Qw>Og*[74WVxoj8a;b6o!u!_SRU07GI' );
define( 'SECURE_AUTH_SALT', '],k`UeQvL.-m+2uW.P+4p{3[]{5bW6A^^QoV&Q*Q3%c,W9w,qVW[Y0zZ]#dgI`st' );
define( 'LOGGED_IN_SALT',   '[0WK/cA%$eEj0=%5oc:~<b[uD;ckXpFY]|sDY7h/5xs~3}F[ )6_Q)iN qB<nS!S' );
define( 'NONCE_SALT',       'dA|EOzV}ku=@wFy~%|}4f|}TM+Rn>LW<m^_(cCP[eePG`j!J%dw+wQ&X%P!fkG|D' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
