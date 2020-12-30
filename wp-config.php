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
define( 'DB_NAME', 'GymVirtual' );

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
define( 'AUTH_KEY',         'qD2KP$Q:F766dI=x}^e)!?!fGosD7KMHSTW`v0L_-*Wpo$N1Q)[?Hq<w1>)b9aVW' );
define( 'SECURE_AUTH_KEY',  'TmC_nxa|,VJLJ.rta3BZSy_GUf84Av1:j%ui,4{5)nW?Bz,Hc$9gSz=5Q^o8Daw2' );
define( 'LOGGED_IN_KEY',    'i|upB9G%WIB<3jmOAxMyqroB6B yK1 r1x#Pff&&w;OtP,9U]x?td}9%_9^flhMI' );
define( 'NONCE_KEY',        '4p2Ox*,%:_&ekc?t}Z==G}5R*SlxjAr_h2gBV SX;<VX;nn=D#U&0V/hq{G#bC/)' );
define( 'AUTH_SALT',        ' oV]wG>)t^kcS4<O9s9zDG.1hl e}L xvS+]ZWGI;%>-nyf9Y>*a@jT*XPw+:?oa' );
define( 'SECURE_AUTH_SALT', 'AIlX;HEA$xK8i,)7rzMv327g `f9-BOD_93yyLDZ+yG?e5.l?C80/y0cp7=?<z{L' );
define( 'LOGGED_IN_SALT',   ']pRT5i<J3lZN8OH2`0dKwW+jj0MhwvhN 4hE@Ye&q[P2tg#o`JLkgm R;vFZ&#?#' );
define( 'NONCE_SALT',       'mj!eor2=(BhgPHPYsxpMgUX!K&>fcOgCr8aa|e2NB%06K:UP1n/B%W3{n`GIpa4x' );

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
