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
define( 'DB_NAME', 'ecommerce' );

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
define( 'AUTH_KEY',         'oIRM^m3MOn]PyW8<^2G4q`&)]`aQ.:b/ S!sR8PX6@TYP2bvm!]Z$6w0>o^pl~-Z' );
define( 'SECURE_AUTH_KEY',  'pft%|d8#<Y3uPE#H1_$aWSM<vTkS8F%}}c(%QevALGAo.m;7({k^AfGy=;t5MJhG' );
define( 'LOGGED_IN_KEY',    '$ANP^9C@cJv?niXDxk!lp^>U#Pdd aD(LGNnEY;Gq2MYThG<3C%/@dkb55E1K74(' );
define( 'NONCE_KEY',        'X#~JWZ^82]cY[*2#Q9 O0RkHQEm^?3j0V% ~dY7 r:wL33E%eD)}gm6%-N Pk/t?' );
define( 'AUTH_SALT',        'Qym$Dc9&?/:Gy1r(nZ.<Z7Bm:S$095:GglX*WMy>}%)E6T?DTvIp+Z&4>aD:<0p>' );
define( 'SECURE_AUTH_SALT', 'mT8Dz&7GZkS5e%G<h:<Gypr?VO1RA34 i~:PrR}x610SywQ_T.4ky-h1E7s|FZu8' );
define( 'LOGGED_IN_SALT',   '_*9^HOPjZo01@D`-MY<yrqB~  {OZo*?KKrdasf{XDnys4=jLGe#i$NV.UDVPS0A' );
define( 'NONCE_SALT',       'B&h GZwr)/.Q!Ri;pb}8OV*S3|&K-P%9QKhj=S|aN>6q>ZtC-Xg;F&d<(iGL64y@' );

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
