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
define( 'DB_NAME', 'webejemplo' );

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
define( 'AUTH_KEY',         '688)+gZxBBkE}Zi@$W-srL;%=gh#2tbpiX?,@m,zTr2c|Fu<V)f72QZ9>eossf|5' );
define( 'SECURE_AUTH_KEY',  'IJMHE=o$KyzpiH//TXL:t;3H8[n *|fWipGf9}dY(+59Y77LJ9N;[2 8mg*$,)?$' );
define( 'LOGGED_IN_KEY',    '8qF:h{y1Q2BFSI:$]1Gyt@Q9>j@8[)B2f[`3=!}9[Hu OM<`n/- [@- `aSDxyR*' );
define( 'NONCE_KEY',        '$SrQuvQz#74T9ziS$Xt)@czB8Z1&OjKmX@S>mE]r>..w:c8Y9=.i^d_UF5WLZ>Q?' );
define( 'AUTH_SALT',        'eUwL5S1lpP;rD:$q$$_^!/P:(vyXWptS:A8Hgtt-58_X`d|6CBOt8|$$e^$,W&J*' );
define( 'SECURE_AUTH_SALT', 'r81VzJ_[Cnhl+xJ!5+!oV_(Pmv4`|g0V?{z.Zclma9HG0^D]BrT~Wjd8Glp Ng;V' );
define( 'LOGGED_IN_SALT',   '#n0W19z`OJ#GcaZWgczvwuGV>`ZFiT dW7;>W3%kKXJwyz6f/!fLB%]xC@<P5BIa' );
define( 'NONCE_SALT',       'Q*(S(qr! M{kwwdBb$oO12}&AfL7PAZ[C(Zu%s{jA@a |~H$y5va87BiU,_fYHz,' );

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
