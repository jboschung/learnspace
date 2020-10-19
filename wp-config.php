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
define( 'DB_NAME', 'learnspace_db' );

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
define( 'AUTH_KEY',         ':KrQcUySU5UzV2|>!-=>Gr1Qb_#&<xQMlvDGLZ|=fm-[0Kl~(+qsl%yASAo2sAN>' );
define( 'SECURE_AUTH_KEY',  '9Z%>)rx`&U-Lb<yR6j58TznQ3}=i=Q1E@LFx$akZTkA)d_.lK|>8Bw%`q,yO%vf=' );
define( 'LOGGED_IN_KEY',    'nP2KjO8*8CJ>[^+5EsTam[/5}B95bKa{xpY,jT<3;V u``{}t=0v^O^%4Oyak <i' );
define( 'NONCE_KEY',        '/pGhw?[e=TTlWc,e_Q}qY[3@RBvt:~eQ~PofD@[Oa_(N)yi:W@g-exyg.?bA=U(#' );
define( 'AUTH_SALT',        'lDe0|{{C[C8PN)*6Yjqf)Z2U&Z^)tYPJYsSM85i@fF~BA_xpJNic-VfX`9qbsE&p' );
define( 'SECURE_AUTH_SALT', '_Bi~2`yO`C:3&A=naLn}VT8aQV-b*Om2x$b-SS=v(Tl2a?9sID^f9YWz$V!dwjm:' );
define( 'LOGGED_IN_SALT',   'O`rn2!9a:[__Ab }lfc]C0*ng&P},}0<.h|FsOW-KAFy$4*mPXs&i+CY>qdL]1Ph' );
define( 'NONCE_SALT',       '<zNnriBSN+P7Ewd3I~nrv)Ix;n=X/RS3~uc9&`G4f3s`p=*M*&$C{E@q<hQ?--Rx' );

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
