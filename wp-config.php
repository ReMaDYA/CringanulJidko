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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'bdknopka' );

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
define( 'AUTH_KEY',         'xTBQ %UA}8EI8ZsN17tg%0N&D#.1?@s$srSuDGm>#OJ8 V1&Qo6,r$B}Uy0HJ47B' );
define( 'SECURE_AUTH_KEY',  '8-/[mF_[On8oN?RZtF-77^^FpISN)SDSMi&zW`x*JA?ye|INi7ED<-Jq0j7&!(hf' );
define( 'LOGGED_IN_KEY',    'M#cwVNej~j&N*I^w_-2q7d4@NQ9s$Z9u~f<Ys bYHRSQhfMraEuGRm5~8#pB,D:i' );
define( 'NONCE_KEY',        'If*sB%&M5[AFML+QaA1P3K<%lK/}KqqL2TYf~G8qd?@K%:J/t=zm98Ri0GD&!O]t' );
define( 'AUTH_SALT',        '8W?bJ*h3Qmla?x[B,gfX[>$t1HQ.a{Y^zHSjW*_Kn>~aq$~D?}Zu.2.|oB.E v#b' );
define( 'SECURE_AUTH_SALT', 'q*9&D?yLP1b>.%n(f<%Ys dQ@[g23*!mFo,fSE]iDXoUc#!MAe#9 j+zF{?|AFHP' );
define( 'LOGGED_IN_SALT',   '07kXocD;k.MQZV5D<liz=iK$`a)_R%$W6d= uro;v+3L]%$(7I+D?[l]?MT9F+aw' );
define( 'NONCE_SALT',       '{ttGs[Z2^jqmzq>o :~o w19g(e3Wia4pcEWZdsew]lWP5!v|Y4k]Yc[ZhOynAYX' );

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
