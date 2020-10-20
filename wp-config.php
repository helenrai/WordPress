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
define('AUTH_KEY',         'wjE8T_$.^[g?0Rrk88N<_++w=<O~~;E2m#;c2+(zd-rtJ2,R~!,@}7=--!s:W1``');
define('SECURE_AUTH_KEY',  'a1te%4f3B.)T<hJYBH)(76RL]>oec*$RKj/lQYd.h2jYkX}B$&4,<@vsXe#9itHN');
define('LOGGED_IN_KEY',    'A{eqcvqIT+D#-0q /~}#-[Gp8YPL#gx3yv%Yv[xpaM`X?J:0,f3/tTm(o#6j/| r');
define('NONCE_KEY',        'u{S#h}E{o9xHO!yi}Riw:,P9x/6:pVK8I2tE0CIYAj/(WP+bAlSiO&&V?y2fGeE0');
define('AUTH_SALT',        '}F6.||AD_Mq@}Xj]Z/Q2tNmAA1`Z+88Pylw6gPcX1^4DZr2kRQN-RqvD{)_`&@0K');
define('SECURE_AUTH_SALT', '.f3DV|7`y~*$$>ntV*>eF1dJsjK3S:d3b&{|=9:;0#sM_tWc%W;8 68u^>7_,sx]');
define('LOGGED_IN_SALT',   '{:>gQ]P[kVn|5dL9r3vO6SSo%; E)!U1xpzBem<Q5NX;Uc.29&k*,kPn!4Z1cR#0');
define('NONCE_SALT',       '58(eP:2?LMwimaR8bt4*11B$VaSUx6nlx;ZsN$8>S8e5=h/?a^@Yp}s{ZW)tkSv.');

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
