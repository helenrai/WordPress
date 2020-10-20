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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'databasename');

/** MySQL database username */
define('DB_USER', 'databaseuser');

/** MySQL database password */
define('DB_PASSWORD', '1lumbini2');

/** MySQL hostname */
define('DB_HOST', 'zerone-addon-2353-72-mysql.zerone-1313-2353.svc.cluster.local');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'e+^9(;EmCg*MpcqtQ$Yd;d0bB#Rb=ghDnfc ;+msz)Aa~X!BNy#kP&=,b^?$e/M+');
define('SECURE_AUTH_KEY',  'qj9IP<AucVjjO@-15|?>(=CuGyEs#PlRN0jp.~$8{<m:7p$lEB-FEMdoQ9rP.h(V');
define('LOGGED_IN_KEY',    '_sP?o{0^/&C-ofBn]o1sK@Q]Y>?Vl}U&Cwvh|{eN63oO<_A4!PNDQ+=p;z78ED#.');
define('NONCE_KEY',        'Hy!h{pk[{N}g>zsW &We3|XeOF`5jrA.{jLz$;JH)!WnZKQxXx+@[VbEs*9~Ml7T');
define('AUTH_SALT',        'V*E.p{Kn?m(D:jfw90W)lThq`T1hyThW+F{4n/mcqJ #>3LKFBYu879<./|o(r>R');
define('SECURE_AUTH_SALT', '3}PZo&SB@|1EP1yWdGfAM~,.}+t#$:f9FQ!h:,Mo%~A|V0&j&cCFLsj>B!o`}:pw');
define('LOGGED_IN_SALT',   'X[Zs6ga>:(n.QPVJS4JzTnH%N3pDz|{HQ7aE!ey!>4q!ZdJwY`g/ufd3n6Rs_!2#');
define('NONCE_SALT',       'G{-eihr)adRQ&@_ry,|$w/0`>+uFhU(Z#T% `<.%pcTta0A[L=q@vtS&`e)h1@l>');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
