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
define( 'DB_NAME', 'nhom_g_cms' );

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
define( 'AUTH_KEY',         'bO8(xyl-pXN8vX0iLcDvDsxKq]l+nR,O4uyOj&uIxD{UVJeOqb[46T,=&VF>[gpc' );
define( 'SECURE_AUTH_KEY',  '~jSi0b08;8{3fu&Syl7jwUm99*l.1!IO`%I~HucN Z>E<@1#Y5qj+XH%]VcX=Q#P' );
define( 'LOGGED_IN_KEY',    'RGk~IrF:8Ef&_?hW@9E ew*{ jl}4ig5X#^r0s/y<jr.X/TP~eLbe5olq`9!|S@~' );
define( 'NONCE_KEY',        'jfxi<0tx,$#zeW,6FeIk/=hXE(Nkm7PWtz*JMg0,%P@:kBCTQR9fS728~PXY#u$[' );
define( 'AUTH_SALT',        'e;j@EP4wM@i)*r~s:jy>Ag/nL61I!3PwvJ)C/{:5R.!]krOYvl6lNm2wqz}NAE*T' );
define( 'SECURE_AUTH_SALT', 'b3v:$^-`7C/U40n/xT|wdH~g!6uQ?YPi5tyjZE$|2hcELOrmgMK5yC;tu?zbV`~n' );
define( 'LOGGED_IN_SALT',   '{*`xyP~EacA^{U(|oP,P]EFj|bG.5$1:,UXz#Hk,pU_=@ Xn74) KG$h`dMl&b$|' );
define( 'NONCE_SALT',       '<;E4D8{R&:p[Y</B+Fc.(UUGuI]i=?1A;0asdrvvoDtZGfAPjcXxzQ0{qL}[?tVR' );

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
