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
define( 'DB_NAME', 'bmpcollege' );

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
define( 'AUTH_KEY',         'WA1S@KQ[sXmy?.vj2y@lt{:4r|ypi]MXTIP0ma4+%el;x:tLdR#Hd/:!;Jks>N`?' );
define( 'SECURE_AUTH_KEY',  'W3ptQ1~8IpwN<?+e@QlEc-9&=%MJ_1h)N0]:-m<XJtFXG{nb0 5ae@=3SD:%k76L' );
define( 'LOGGED_IN_KEY',    '`{a?FAh+mv(EKzJ^A}rEzj+oTLVJqW1veYqVUkR9Pu)v6g-CC>Z<Yg-7![B|o@l3' );
define( 'NONCE_KEY',        'e<ep]R~7z^Ttg 8_ST&_}PT.-BzGmq+xTM0P-S6X&P#W,L#z=q4;^wId~2NJ9e%q' );
define( 'AUTH_SALT',        'NukG3f({eQiY&TWag:On%yBYf-gy7P~8U_)-P}&%eI,7<qfYL}8Me/Z!Y{`-V.s6' );
define( 'SECURE_AUTH_SALT', 'n`+>I~txPvuWR(Z!}EsXvgxX<*GruX<Rn`x346r@pYN(&:9zOg!wiPw)`jw| _!8' );
define( 'LOGGED_IN_SALT',   '35(b:,#YcnFacnzHghUg3Y)@{eNI6%8es5iZ_T_5k7$SwQytVcHYV(&; (@F7-xT' );
define( 'NONCE_SALT',       '+2n5JI^0Y0:_p0!7>HYMx44V $-%7!:$s=:1Ke>*&8gH~J=vAEYBk+G#pKrUL{K#' );

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
