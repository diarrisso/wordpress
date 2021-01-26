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
define( 'DB_NAME', 'dietlind_db' );

/** MySQL database username */
define( 'DB_USER', 'dietlind_Grow' );

/** MySQL database password */
define( 'DB_PASSWORD', 'q{j?p;Lg$F(1' );

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',         '+ SBEj>:nAB:/L>2BViPHlde}6ja*~Z!^v(i&)602_y+[1&GuQ.DkFh}LoUp8E_D' );
define( 'SECURE_AUTH_KEY',  'qiIu*gh4w$Zo1K][tsBFh77a~bec.y{jfamGBB6(0s`KOsVwlk{a|S>B8%*dPrYR' );
define( 'LOGGED_IN_KEY',    'CE:HOBDlBd+/jDF7/2d%H-nwgfj]!a.Z.Cbbl!Pq <F@TYmefpp(li%cw!SGz5qs' );
define( 'NONCE_KEY',        '.p;b}-nAJ~L>vO,#d2h`fppN}! A3-ntxN/^gO|oiOm*Y*q1H}R<)p1PBvIlMlBp' );
define( 'AUTH_SALT',        '5OZG0s4,m,PL?Q.1l}aRXdix<cfK7Dp`[lY:2xS3obJm4P1&L]!*O;a>lfo*vEMv' );
define( 'SECURE_AUTH_SALT', 'YO[V3m%8&hHH$K(9T1CF?J;J*JRSG.&^M$f=6xQgC1s2f,CjJ)@yyg;ClsUme+z_' );
define( 'LOGGED_IN_SALT',   ';GvI{<f-2Q]=]Hk}>va)?T5]K]$&.)HFB[K@=TO=2n3eJ=fOh4hsbqT{E3sq`_l?' );
define( 'NONCE_SALT',       '43l8q)Oi:!{D[0o4V6}z nFJ2}Ss%^X<(:gbpuBAD2L)Xcbf=i*G)-.KLtV~}$Fq' );

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
