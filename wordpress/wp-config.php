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
define( 'DB_NAME', 'fakenews' );

/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', 'admin' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',         'l#V`w:B~Hj_*^)~vNzy-Ptp{IbwPG;nEOPBO7z#5Wa7>m,@.c(k>=t&4HE.JSjU5' );
define( 'SECURE_AUTH_KEY',  'S4,*~M,~xuRai9Fq2Fo$g]-0d|*jtza,d.PQ-_A?o,_^m,tq1|}-Ra^UlO=I.XIy' );
define( 'LOGGED_IN_KEY',    'e>VqPvA]@[>f0-VY*Gq;{g?[C7X5xT<sL6QC^=?y-4OUIIJ{.so}=pgO >1,2MDc' );
define( 'NONCE_KEY',        '.X&K)nI;kH<,+bxq!)!(|H>v7AKb#G}y<PW&S&9/N[Slbp#tM8@NNNsb5`{8fh/5' );
define( 'AUTH_SALT',        'aVHf2wV-o8DvWv)PnCB7LV2_0c<2=pjDw)x>X>M[e {^WTr>2h() >gb%BaQZ9X1' );
define( 'SECURE_AUTH_SALT', '5S6@r:S%?Z6p8}+K~:kB1SP9sx?A16E_oIo}K8()`/@@#6r.sZ@`]qO=5da_UEzx' );
define( 'LOGGED_IN_SALT',   '0uRx-1:t(h|8L}u?15e@gVB`QZ.^*Z2k;0fhwQ=5`f7?,bAU&6F^?ioeeU*7NEw{' );
define( 'NONCE_SALT',       'fXMJ*=^ioj)Z;Rx7z5p<73[J,*5Q,#avKK_#EjY%mV,cAT)JhVDSrJZo]XYh#CZ@' );

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
