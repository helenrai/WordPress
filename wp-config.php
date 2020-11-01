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
define('DB_PASSWORD', '1Lumbini@2');

/** MySQL hostname */
define('DB_HOST', 'zerone-addon-2463-72-mysql.zerone-1336-2463.svc.cluster.local');

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
define('AUTH_KEY',         '51-7Be&_#M8$_%jsH|Y~Y!,~7z(qz4vb8KwnKZl;X@67hr;^8*<`U<J(oA?<_X-E');
define('SECURE_AUTH_KEY',  'c0hFN)ZFC$aoDi-SFpe$F@w7LaMv :_%X(<^2V{yqBf$DB:1z+oRzYh[U27h/u86');
define('LOGGED_IN_KEY',    'K3CT=@LuF%S(V?FlTq4`GPRN*_w,E^/1:P5IDzD NBg|SS9Z)4?r!<*`%)73vV, ');
define('NONCE_KEY',        '%[>&s5EH8oE_2fJ >S9:XtAg#F?a?6NxP[N6|4qwN9@DgBd-9u_2JMn7.tGeCa+@');
define('AUTH_SALT',        ':,xIp!^eS#8N-L5M3x2mk-!yA7-aU.P9@AGg#kOCU[xD6;`*0-Yx]7>&IH7$ n$3');
define('SECURE_AUTH_SALT', 'tl=]xt:,<R}2} E3mcoD8QT[h5bnD/3bG(0e^,nYYW7Qku`9/EMuLLNq i+:Oje?');
define('LOGGED_IN_SALT',   '1opfKK7N,H_8>?5=fCaz^>C%a:4X4<msN_qX#%h:&[GWt:^=OSqJ?#8~w4.zk1Wt');
define('NONCE_SALT',       'GQjZX}/l*%</o%9|b%wb N{eI`c!G6OP<7y!{!;{t4&A<Q~N+m+{JQ%]sNn7Olop');

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
