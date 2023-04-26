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
define( 'DB_NAME', 'miweb' );

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
define( 'AUTH_KEY',         '-%&?D5oO6a-&Pt[e K e2/9nN18U<@dUY&HndS.z)@X,>;L/H.{/G}]HMFL2{6YK' );
define( 'SECURE_AUTH_KEY',  '*h-*@IwdFU>oAi-p/4=!k*@CQxoMC1FD]n~T=NuNo;nfP65m-OKh{e)=%]+m_]1i' );
define( 'LOGGED_IN_KEY',    ':7z>DN~IGPqO%G#q;t#T-PzNcK5l)Umsps;*sk7E%dCse$H:R<I)>+<(n0,)$=i%' );
define( 'NONCE_KEY',        'My{Yz^C}5$|-hQ3O_$P|f78[Xn)&SEb|]uzv}5Bo8yfJL+]EL|8xcR.XP/45R&>.' );
define( 'AUTH_SALT',        '6Xm$}X&9lc`M9_qEXWbZ2R8Lo7;jO!EPi; aLq?6HCjq94YS12|2rh^QJr0Vh (^' );
define( 'SECURE_AUTH_SALT', '&h:sxrhII6|Z(SS2C9fUUeFrL4VKpT5c?uw}K8R~VY-1QQ7^Sr|Bq}$XX/DX9U,A' );
define( 'LOGGED_IN_SALT',   'X^wv28R)VRtT76T~33y)S{nU?sy+B]cgxreb4yY>YX7m/exRLg;1SY3}C2k^W$M=' );
define( 'NONCE_SALT',       'zYWZQubB|tqh0;[cP}^,N+W .L2WSKieTO&>uW-H7xBZIQxWiQa&O?un#s= 1yc$' );

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
