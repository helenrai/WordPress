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
define('AUTH_KEY',         '|-,IzYi8FJ4*CaPtW2oBV_-*?:(z_A` ^uPY_<6xmdG(.mWlWP0 ,g;AYv@qu7fW');
define('SECURE_AUTH_KEY',  '#B*KJY9r$S].d55;VmxS4m)(bbK`@9*mXJW%::G`}rqTT~`}g<+YfIq B_2[7ybX');
define('LOGGED_IN_KEY',    'YSzK>2x}`NYa&05MNbb7fZ`tf+5=~R.uvQ(`%b15j{c{TkL~{g8#asm.a$#?<4uy');
define('NONCE_KEY',        '|I9-rFR%4Bo<4<;Z9/ucx;0~`T]8>NCGhmXI=2uy]kc#fW}pWPe p<5p({?t0/|x');
define('AUTH_SALT',        'SLklU-|-=*LvYIF2-].;4|)^]Jmmz[Ta1Skz0FDDudK>eS#^x^$xw}nAz-&1] 0X');
define('SECURE_AUTH_SALT', ';gUqNF[|-E E^lyHePCK]?=L;|0!aU(qJD|.:c #U]t(V~[7Gh0tw]]_30dqh3(h');
define('LOGGED_IN_SALT',   'nvGownTy{Q oM`RRoIknHvL}2+</>{(C&(e@ZyT-}[Y?b0N3tk 2BRwGtC,#)S)D');
define('NONCE_SALT',       '5ZGQG 0Q4jRo_+|#s3D[Axxx43~Sq7+YrRy~Ut_R?ex&eC}GJ#2$=L{b%s+@dmr/');

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
