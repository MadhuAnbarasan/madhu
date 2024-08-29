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
define( 'DB_NAME', 'madhu' );

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
define( 'AUTH_KEY',         ':-3|uGil2(nkQ(a-foE1P6gpKQi+T|nF~8j=044QrIY5XkfhTd.gEPubh4Ndwxw)' );
define( 'SECURE_AUTH_KEY',  '.xWtpz3O>R#z.rjWl;I<>ieN)f>](U9rDuM[r_!qs>$6:xk0 zCRU9z;t.0)&fGk' );
define( 'LOGGED_IN_KEY',    'PXw8X4d#[bH:*sK$%C}AeM8yo`Eyg|k:-yy}r>r,+=4;bHD%l7.]t)hR7dc}/QF%' );
define( 'NONCE_KEY',        '}hI9_W,3l]#G%f4vZynX z5P4rii!:Yh4_}Y,*k[]<_?G=?l>mi:Zb:DNyC{U26y' );
define( 'AUTH_SALT',        '#9~XcBV1^0p7pano3C)~Kh#D54/mb^ @C6_%YQTwRfxf@4clA6>^E&!BMfXC5k~4' );
define( 'SECURE_AUTH_SALT', 'E6*P+]@2tLN,k1`NU=^P#}9G?ch eoq]wtnR|k(&>0BV37rqx-9IZGkKt41&u]BD' );
define( 'LOGGED_IN_SALT',   '9#<2>;G^[=SR58)$o~a|W&0$g;:(j3?*l@cv7%$+M#CW?oWBJq]g[03{{5%Vn:sB' );
define( 'NONCE_SALT',       'lC&+?a-0gKP2:SJ5DAr.3|_VMMK8eRkST)UjYK8{<ClXXw&f=7d320K#uIkiWri*' );

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
