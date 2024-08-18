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
define( 'DB_NAME', 'widnyana_arc' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '$Nm+{Sg:,hm#,?T5`6y|;Er*3z!2fJ[_,B.t|:1T4X7.b@i%n5;L7HlMC?Ap1y1x' );
define( 'SECURE_AUTH_KEY',  'P5,dt6!3QG.r.E60MgJ`u+`BsP{q0twi_/g4Mkt@?qMT$y,5>`$!n[m-`:.h(4us' );
define( 'LOGGED_IN_KEY',    't8PxqsXkBJLy=JaFoL{FPMZ{ ~f)(f,C7qNO#B#@#t:G157$K8QJ7%p)SrY(px?T' );
define( 'NONCE_KEY',        'tqP*SP6C_]o&d1,1lqx R%/FoRnmXi T</jnD]pDG.$--LIDu7FIU2bPwgt2eRAW' );
define( 'AUTH_SALT',        '7hb_NIKo%)hi+4[X4~[PrRM<wn$`^fd6N:#F%x4PRa=xziv{:%148:Dzn&<NAK7s' );
define( 'SECURE_AUTH_SALT', 'B4 5dnuIXG7BhkQR|Zpv4z(cNzb,rVEGHiSJukKF=FD+|Oeqx-CvU :!NZdD*F7+' );
define( 'LOGGED_IN_SALT',   'Hul2)usEC9wPl?.@9(DT^2(r;._e(U!luscp}/Yn#zB#;Dw)E;o*yRo-C7wT<>KU' );
define( 'NONCE_SALT',       ')1Cz>pRcA=qJ,EGj8KoqJ;%:wOSv}h9C_~t_>8W&(u^Q7nN>_u$|PLr=@])XmI!E' );

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
