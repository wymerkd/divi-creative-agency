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
define( 'DB_NAME', 'diviness' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '+1>iLz[QNW42:bahJM2`a;$AFEczQl6zu[=U.%.uj()4!b!AElG*-r !Y9~AyIKU' );
define( 'SECURE_AUTH_KEY',  'T=TAzlZ5;z%x!pDf>P1nt3o-xM$$}N?c8x9|,|~B%ZUi)8j.ZIxf-riED|N3f]pB' );
define( 'LOGGED_IN_KEY',    '?#-Z*5EW;$4*?,lnR=~o`lTkx.6387rz50ZVzi!B$B@)os+PjT!d{hg&%a,)Umvp' );
define( 'NONCE_KEY',        'vObAF|`IgK9J;Y[#r#?s38TTx#<d,8AS]w[;a,;hQtN!-EWa|/aSN3t1r5U,P:0g' );
define( 'AUTH_SALT',        'qceMboHXu.%8pQ:SMp#/eN]jWjO2XHl[Ro6wS=$<IUA}UE_//W<xPO?^tp7g!rO:' );
define( 'SECURE_AUTH_SALT', '7.-sFuMt)Io4_CG=T&SnH~O_`*v]NxRQ)r-i-743*%p:0m9mXp7ZE@]j.;/e<|$`' );
define( 'LOGGED_IN_SALT',   'R8b$(80Up_/Bg`)K$fYUo /NJS;XX@Y*bh3Ak{J^_Nx*Ll/-xbo1ffvPVc ? +QZ' );
define( 'NONCE_SALT',       '39X@Hq:~$rQpD`jUi)!2d2qR O2k)~5Bmo@e+.5r>GH+GH)ZOe4uZGc)_/{e70!I' );

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
