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
define( 'DB_NAME', 'el_murodb' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         '=3wldA7JAP:7=CN1| l99U.u?ra#cc*YSW~}WW.1RMmum#Gh&5Y>PSVu(/Z**xLh' );
define( 'SECURE_AUTH_KEY',  'Q:(}^NxR,B+ DIKob --ppBFy~I!4@PD%gDSHc$P~2x7(!-}]F4S*&K~+jR^k(tu' );
define( 'LOGGED_IN_KEY',    'V*w5$w[q{]j*zvB0s%%`B`6e6FP7Gm4;^!&iuDCGGIL,}f4N{0{m@2$ETd`xe+2)' );
define( 'NONCE_KEY',        '0oW9R;bP4E@x7@m83[4@BIx) *c8~rBEx<RwM+cwDVd@C6nKN0$gb4 K+Q##s8_W' );
define( 'AUTH_SALT',        '|ejg. QW^OSmq.L,>(:1t/^i}BtTpbDGSI6l5F#k|$FxT:M3V PjkUBdie-)?U(+' );
define( 'SECURE_AUTH_SALT', ',CtF^*3 NNa~>Ppft|jfbHxeKFrd.ic$[0ouR}J+YA|b)3>]BY-&:LX~`{vYv{ye' );
define( 'LOGGED_IN_SALT',   '`]U8<QqjXQfh/t|p =U-5A(GU?by%LyyNOB-z4<)uc+.I#NrlD;.uj(#C3vb?EPx' );
define( 'NONCE_SALT',       'wVUeia5j1$!zo~K1^,uoR/LK|1W[%uz&@m#4`Wx`d(paypUe:IYN%e58g?{4}q-9' );

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
