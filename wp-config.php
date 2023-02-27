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
define( 'DB_NAME', 'firstproject' );

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
define( 'AUTH_KEY',         'I#|Ki~C=0-b&r,8mh73v4JxV)W1~%=$[N3CwrM6A3/i9c)n)k`RX*)`l,* q1)(!' );
define( 'SECURE_AUTH_KEY',  '-{TKt3p~R];F0Z2=,CUS5Z&b#gVsE+3nB6ZP+f6Rrr,;)A%A_ZcIf=83<Hob.(zg' );
define( 'LOGGED_IN_KEY',    '6~;86+R[R#u^oK@?y%OiSs}S|AJqqhD!ke8!`!0=~[d7xYpvSdlf])x3tm``E[5a' );
define( 'NONCE_KEY',        '1V?:eRPA7Ht=0E?&`n_Z/YI)b0)Y#I3D).X+8!G;J{K}^nhmemA;arkOH%]{rl]e' );
define( 'AUTH_SALT',        '1:T@%kFMYmoM`T}WwwmoC^}Y}PQ484=-;|w!K0Eu^ZAqxE3Bxl3Gm;BkXnD&8ZfF' );
define( 'SECURE_AUTH_SALT', 'xwMDy7UgpeO3 QIU%>#0y7aS-$E*ZJ3@~t/*+73q&8Cc($*,yVrc*Xsr^0$~$)/J' );
define( 'LOGGED_IN_SALT',   'Ye?]}45rVno`M${4|z%X:&D-3$JN2}t)(Kaq37u0,TIDB%4~w;&3ZDsqX_m-!ZhB' );
define( 'NONCE_SALT',       'hTQt&n~fB)5^@^^y#c@M9&9z}%vN*S*$#ZwEhB$CX@~k@ey_Xn>1-zZjok&oC1B.' );

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
