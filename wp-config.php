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
define( 'DB_NAME', 'jetjourney' );

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
define( 'AUTH_KEY',         'w)CAZsSQD*IRceM4J^~!J40GQysI-JMv?{EwF=#LQAFg& .BS5.sf%dWI:l~~F]=' );
define( 'SECURE_AUTH_KEY',  'O:rpK(NJ?ljC!QnapwoK -}C0u6YBMm[~p2EmTx5zbIAz.Ui7w0qh=dpV&h91OW|' );
define( 'LOGGED_IN_KEY',    ')rJ,=6[f1uCB}tIQ#ZC;L~50g&1Bl0$3+Wnke)|x4lsWy9$Q v8_/RE)[+5Q^J@F' );
define( 'NONCE_KEY',        '&|RN#QB,`5PY1![q^?;{m7GNz~c[]wsBXg:4tjAs9H9zUAk&u@b)|l9Z1GZJ7(lr' );
define( 'AUTH_SALT',        '*E|EN}Y.Qk>:uO#|8~,5=6I[Ds+6`MI_;tqo+]Kx2i.80TNBJB_MyQb^%J6>W.04' );
define( 'SECURE_AUTH_SALT', '5H$z1L]k68WvR>6d$J FlkS<d>j^8zjMvCPWSiWIGCa_m!q)Cf}-5`gqrkBE1;~7' );
define( 'LOGGED_IN_SALT',   'w3VS~*MhFQCa=?xpHNTsgv0];X;=yootABs>F?B7p,829oZUc@W7oE{QYL|T^:$M' );
define( 'NONCE_SALT',       '^a3QeZ<VbV^8o/5Z?rqeU*xWiI_DdRGxNHtWy$bg]Ur:NhWV**m~08NZ&We:OQ4:' );

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
