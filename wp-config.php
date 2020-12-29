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
define( 'DB_NAME', 'pgpi' );

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
define( 'AUTH_KEY',         'r=JHhd)ZHs^ww@g@uQpHfj6rgY2.IUQ)P4;2h9m.5jp$-48wE5()(*4D&|uI{$!o' );
define( 'SECURE_AUTH_KEY',  'N2:U`:>8RrN7:2`HM3Ra1[{r5a~Egb4J={KM3_88ZD}Y:k}hy@bGVS&Y0ncc8!B2' );
define( 'LOGGED_IN_KEY',    ')RdX#V]AX5~cg^GPl#BInj3dz::@~yv} KU!p~&#Gl_~+A1UAF3_V`$X 0:&v:1m' );
define( 'NONCE_KEY',        'TW>EJh5=v@)*=)K&vw)6),hENL2fD#TfCY2vLd3Yo2ZVObQNpdhvVM9s~>f9ZcuF' );
define( 'AUTH_SALT',        'p[h7#K7g:h%!CO3Jc2p}m Ou`J<Iz)F|i@>%+zWnWKw*w8icL<Mq;:J1Cn0kB2Nm' );
define( 'SECURE_AUTH_SALT', 'p3~EBeN[.v8#4~z7T~LQH!:3y>YjF9|4s%a#(7mIH](8!%*5sU}:q>?2J_#Nq_<&' );
define( 'LOGGED_IN_SALT',   '!6;2B1m6sA([_DJy[B2,lA/lGY#Z[dkL:9#ni5]63l^}`nbk<?fp.FD{47}/xkzt' );
define( 'NONCE_SALT',       'M$f.$=`A9I;V!-!+1j{fisCE:U^/$S/Ko{so-~kF*pb)-6?@&<h=xI2qKcbeX!ku' );

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
