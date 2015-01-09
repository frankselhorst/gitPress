<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */
 
// Include local configuration
if (file_exists(dirname(__FILE__) . '/local-config.php')) {
	include(dirname(__FILE__) . '/local-config.php');
}

// Global DB config
if (!defined('DB_NAME')) {
	define('DB_NAME', 'guldb');
}
if (!defined('DB_USER')) {
	define('DB_USER', 'root');
}
if (!defined('DB_PASSWORD')) {
	define('DB_PASSWORD', 'Abc023');
}
if (!defined('DB_HOST')) {
	define('DB_HOST', 'localhost');
}

/** Database Charset to use in creating database tables. */
if (!defined('DB_CHARSET')) {
	define('DB_CHARSET', 'utf8');
}

/** The Database Collate type. Don't change this if in doubt. */
if (!defined('DB_COLLATE')) {
	define('DB_COLLATE', '');
}

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'TF2i)sqcK-Zsww^*%}.hKs|0Z:3O8P!|*26k*o<+dPdBM~jMApssW;vlg?,1dH+0');
define('SECURE_AUTH_KEY',  'lX>SGIq@uouQ+s-g%Y%Z)XKsug#?^~K|@th_][7i(Jme@sM;2[~+8QV{Dew?9^|;');
define('LOGGED_IN_KEY',    'Y]tep+Zf8OP`ldj1`3sQ%-ULG,+-P:{CeGM@xCIJ}b&tPe{./Fq Q._:j].t1|mI');
define('NONCE_KEY',        'T[H)|b(|5L-qk%EErxg|Qv~Fl1>?7qN*LYi${jwM=<yA`Kgkf00V-A^N<D3d`UL;');
define('AUTH_SALT',        '3xba,p>9^`x(0(G@3TF]K_k+5@:Y@m/(uJ]`zo/wo68=|sO,hI,Op/VfzW#9ag[P');
define('SECURE_AUTH_SALT', '{ClPY=>FJj}zE)?9g[)(Y*<@<N{oA :FnBw*lHA*79no09|=ZxNFnl[mph8R2kB*');
define('LOGGED_IN_SALT',   '_%id-o_q6bFP~(]k^SWpB0-nYWJAqZ-(E<Y++R+DyVb([P9H.a1u%=-hZU83Ul_/');
define('NONCE_SALT',       'dqd+~+(svIKJn6Y$KJa^)$E$Z@}x;num#biC$ FyzB-@^0t}LUM/<45G/I6MfLLo');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');



/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
if (!defined('WP_DEBUG')) {
	define('WP_DEBUG', false);
}

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
