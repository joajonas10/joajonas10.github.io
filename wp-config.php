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
define( 'DB_NAME', 'gitwp' );

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
define( 'AUTH_KEY',         'F~X*%`f#>1IM3T%V/o(7:q,7}3L?@hNHGm:C}ve;:#e}Iqw+2=7b7|,-jjiN2`Q1' );
define( 'SECURE_AUTH_KEY',  'epG96,DXAke5Cp=M,XqJvey)Vc}}-G^B!$F!nCK|Ky5C~.YI4MH[~VdUrcf)JOzU' );
define( 'LOGGED_IN_KEY',    '0uu-t+XLSZ^iMKHU-t_Y$-NQl?%{drbLQZ=#uG9R?pV?G20vo2s~6kwve 2GUB;V' );
define( 'NONCE_KEY',        'nwe-<.u~sHe6yvA&n6TteMy6&i>5O|Q@~;1oiWrtxSpOzWtby+,EQIco,dQ]Bj?N' );
define( 'AUTH_SALT',        '#tAtns3E*KC`U=0BJL%xy(O[$?*]DhExneDNZ/U}1EvQ];E3%c%e]s*A,e$#IOZ=' );
define( 'SECURE_AUTH_SALT', '{-P,+-K7PR*kfC,Ir`w+.LU4<witAv*@ee%I{~g4f#A6/&Ql{_Qs[KfeX-2Jy(a&' );
define( 'LOGGED_IN_SALT',   '%&#lQhM,{6TCva3`kd|l/7dpi7(K}dO]Yk<6lzgi6hWBg9g]AI~pJrO-P#sz()4~' );
define( 'NONCE_SALT',       ']<|>zr}F@uCP{Fs4Eb1sO3oXd&h1eu8 Fox*OMdd;:SY.a7@i4V5z?:Imv]_6-c+' );

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
