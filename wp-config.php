<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'destination' );

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
define( 'AUTH_KEY',         'O*2vB6?:8VvI;e:|.$ g<l%__sdsm24J1|XRn{h)X/l3p]x+.=t-1P..?YOa[5`j' );
define( 'SECURE_AUTH_KEY',  '0:DJ^=y9v(ns(m4.X5rD`<EVg2JUb7oOGOb)!nN|1)sz?;s:48)}eC%|dHlBZ`L>' );
define( 'LOGGED_IN_KEY',    '|<_1hU(;-T2Vh+Gr8!?Fnm[ N:GR]MmgD2_y/y6sg[1IXFLf20`{r2 )(h_B|.Uk' );
define( 'NONCE_KEY',        ':OFh<G2_if&c&{A=zQ~]ObZpj1+xZR2`^j+%`DLf2cs]w]q_3t9qmf,*PNVM%*U+' );
define( 'AUTH_SALT',        '# o:8Lp/tz}n=_dgrQME=tsg$vcSo1Sr|+u;-8`SIkTrn9:;Klv(a&a6S225ld=R' );
define( 'SECURE_AUTH_SALT', '@(ZPe]^i&]NJx{%A7i}y9WGh*K?mc[dBfsi|,+vknEkehc+EHsYJ1+N:L#BxM:Cr' );
define( 'LOGGED_IN_SALT',   'z+>wi+#,=mT0&Aau;=SLd[BoI9A5;s0^_5NDx#:z3Os=@Gm.Y~&toj<]@/4dX6CH' );
define( 'NONCE_SALT',       '>AdBiWO!@pMt]G_7(w><mB#.>LHr-.pN4Cy/;zmz =F_,!2P$}d;6 F~b>)Pd@?u' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );
define('FS_METHOD', 'direct');


/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
