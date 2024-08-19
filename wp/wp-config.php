<?php
//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL cookie settings

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
define( 'DB_NAME', 'wp' );

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
define( 'AUTH_KEY',         ']`@RT^PnHsq#Y}vM3$`pq*r-wOO]$*zj-#az6&4S-Giep.Zl iE:=H9~pOgJW$Xj' );
define( 'SECURE_AUTH_KEY',  'mh9mEu~fMB/MRR*.oXyT$Ko~A[#|iwbh99:j&&;*y11ox+!Q{v!)x},Q?823k.)8' );
define( 'LOGGED_IN_KEY',    'QRfhFTaHcXNrpUYf+S]lx_f5i< !^s0JhJAn1+M<uPm]8_*(R^Sh1?4iacpkwWz6' );
define( 'NONCE_KEY',        'a[BP{jHl{(SR~^P`U=l!gx:NRVvI>vq/ +dTyG2?yKtBrxv74g5E0.z*&2o]jniq' );
define( 'AUTH_SALT',        '~~JwU2T8<mwV_wUIK^fCFN}V*d?MO#*$oikBz&#4FHDD>Iv->95<TwMt0^j)%nw&' );
define( 'SECURE_AUTH_SALT', 'aX<HS-q8!_PkH,I9mJ}|e:/)TzmgcH%y^C7mm93+De|:];Y$QtT0DImZiBxU%n#`' );
define( 'LOGGED_IN_SALT',   '3@Nc$/wc^.CWE87em;*$$sFaN$_ah(6FU|%n2A`1~G.u>zO0nI>l*_gwVQQaA~*{' );
define( 'NONCE_SALT',       'd%-Z18_l<cF_2bJC(}VP-KEF%Xg=K(!v|S5zV.`rdz1*u+`sRmEh.,=M 4BB),d~' );

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
define('FS_METHOD','direct');