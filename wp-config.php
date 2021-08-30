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
define( 'DB_NAME', 'wp_divi' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '1;)-*0#,uf{AvGGelHFJ!NnCNU)cE@XHrI)Dg}IeLeyefP<=AQEEL^4lxx;+0P3T' );
define( 'SECURE_AUTH_KEY',  '|IdtF2w,E=m`-CvU/,e8^1*OOx+4O,&-0V<fF){SJGYsM-ww4g?klS=mi/9~-u;J' );
define( 'LOGGED_IN_KEY',    'QGGdV?j[dRd`6^[[l`>JJNJ/0M(ZQw~]@`D-y-84[$Z7wGY}|].X[)b/9Mcc]@ya' );
define( 'NONCE_KEY',        'N0+A8aHq.j6L~G7<$8>Yae/|AF,069i~*rR)JbR :EP{xg{=U.ooZ!(j>8cVJX#|' );
define( 'AUTH_SALT',        ';{+mE_*bFIq4ww8cU;j3BHv0<3uuN>gGg*X)iOiT%v`!;AT#*kJG/[EXJH}CYL: ' );
define( 'SECURE_AUTH_SALT', 'LWiyg!(xY^L-%/c5jU7CWWeML&-&bL:Wo!AH*>D-5W#jG1UPm*kYu0bh:^BN6B,S' );
define( 'LOGGED_IN_SALT',   ':TU$m5kLAuTG}SBMiVZIneZti:ZL`w_D,7z4/qLlAG77cu@t1T{3,HuCYGD@hQXc' );
define( 'NONCE_SALT',       '~6v)W.l_yNcu[=l50P5##Bkiu: F3i0)ebU+lTn&(TGx;btbY>/[$!aYF#{e;cPF' );

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
