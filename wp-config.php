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
define('AUTH_KEY',         '~;FpX@,[F[*.%.pZAPWdJjq@N?k{F)|O`L[*-6$jlspb?B!MA`*%pOP6TcD-&N f');
define('SECURE_AUTH_KEY',  '=B8=Cz{EqN&eLWavJR}uj_}`P;|,TPrFo(o~iG}m4h@4GNwCbA`nFn%EFgeuqN6S');
define('LOGGED_IN_KEY',    'yO u1Cinn]/c#*`3-X.?i31,dn`kcp4FR!(+7/aPKygMQy7(bNGhmE.yL={}7n(7');
define('NONCE_KEY',        'y5OG([LH:gyOsCGu]iHg{=y;C|JJ2mJ Vumo=zZ5g)M)E:H2XR`LH`wTC+}KDRH^');
define('AUTH_SALT',        '[DY& :KSw3~D:C-Dg_h95<A7BwrW_+NI%Sk|vjEWWH=L84>3sSr8~eM&~EV&k.$c');
define('SECURE_AUTH_SALT', '`T?m.l&`,C48v^)#v(ZD^:JWHRNv&RUz;D/#rSHN6yjzUxdXe~}SaTvFd~pTA@|x');
define('LOGGED_IN_SALT',   'yp95v}.&Ut3$Zz7OV3<d}2S,B?g2Y[/Kqr/_~<sr3FAmYEL<%>}Si}_6y{i2`Sm<');
define('NONCE_SALT',       'Mz?qjjB%:uxqSdpb,<P9j0QRC7( nX#E1%7$wG(Cb@y/`$/Lfqm~v#l|h#fSqM~]');

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
