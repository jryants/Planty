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
define( 'AUTH_KEY',          'h$0~HM!2X}>#~SF.,9Zjs*}B3$Yu*D2;%CE_ojijH~$6`tl}q*rQAgQ1FPHJLINz' );
define( 'SECURE_AUTH_KEY',   'IsSd2)P4V/PcE}#hvWcrX[rV~vbQ]F}QTI, T ,b>?<H*RM3n|-h*^dpPRkOkiFe' );
define( 'LOGGED_IN_KEY',     'Av ug]GbwQs<[?-)5vof4hM>_G%C4d:&hsd%GFd:ov`q.}#a6Q$*b[~N@,;I6^`b' );
define( 'NONCE_KEY',         '8!S+HSYf-Lspc-B;XCb1,V;TB,[>MV891?eNiqfSh6;lc`?{{{QpXosjWvCe9zAV' );
define( 'AUTH_SALT',         '-/D:FHbQIMZGCi!BIPQw0&l~,Ik9|T.+q>Y(3rLD~>.;>R|nUcuDMdJkJ9r;|f;@' );
define( 'SECURE_AUTH_SALT',  'vl5p|h.4zMu!b$v&vz:/c&$nXCqIbT^N6^S!f{g.Lhw8,>6VOIg#4g=dWW`@]1=t' );
define( 'LOGGED_IN_SALT',    '>|o>{Y*i|WuA?a_{of,ijK+WU|8m*26M^ojz4(i6$iy>s{#wNTOWv^Q.>j# ~X0!' );
define( 'NONCE_SALT',        'xHTY@[+[!+4LuSFCv{tqezX~Ma$qQTVEX~x_Z0j;uOQQn:F[BW@wif/8F+3KW(T*' );
define( 'WP_CACHE_KEY_SALT', 'G.P6brgM%,?drh7}8w_){6C=K+igxpH$H8>hr%7NS <{(c~`ZfUi=cS 4z8(=q~9' );


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
