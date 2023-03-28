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
define( 'DB_NAME', 'wpdb' );

/** Database username */
define( 'DB_USER', 'wpuser' );

/** Database password */
define( 'DB_PASSWORD', '123456789' );

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
define( 'AUTH_KEY',         '3~5=zFq.O$dYz$*~q,G,W<ttHf5QSR;^1KWN<<Fiv0or~9G`&R}Isiw-DbyDd]Q+' );
define( 'SECURE_AUTH_KEY',  'p^(E8EoJzzE:c`f!xT=|bGWK)d2Kf`Jok63Iw4J)?7oI60WUI4 >;$$!S{E3qupy' );
define( 'LOGGED_IN_KEY',    'RWVdN[rSA%rrHLfnezzTef#JK$_*bt-p5TP5:|:6uCzh.-U%M;ELp7ZFRSnqO3u7' );
define( 'NONCE_KEY',        'w9;fo?.E[*N`$VdM;lpFY+CO?qQ])t6hEzoW>($bHu@kv/DivX)^Qd=2r^BX?NLL' );
define( 'AUTH_SALT',        'q2&0u } -MNI!q=r;TFb]%IY;,lUDY}Pe-:1$_nuVS@]Zeu<tN03@59( %QILg}?' );
define( 'SECURE_AUTH_SALT', 'mwlX&@FjJsq6Msu~_os[{<Uvx. yXh&9d}Q^;v[ar!gPeZjzdnh{[,MUi!=K%z/3' );
define( 'LOGGED_IN_SALT',   '5KGvESqdGHb}4x)-.EaWibNFWTfKdO~AU,$]w3CHL}+0scMJdLS?QjWK2Iw*N T`' );
define( 'NONCE_SALT',       'H!b6C$ono`(_y!)&GksmRBrAMD3JlzWDl26QM4#u9ZO:;$alctLG2?@guAaj8^=m' );

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

