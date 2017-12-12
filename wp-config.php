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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'tennenbaum_tiffanysevare');

/** MySQL database username */
define('DB_USER', 'tennenbaumtiffan');

/** MySQL database password */
define('DB_PASSWORD', 'rPvQP^da');

/** MySQL hostname */
define('DB_HOST', 'mysql.tennenbaum.tiffanysevareid.com');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '9gvB/Iju3rd*wsZW+0"qS9YOB2"Ygxg4~OuF%lZI*~:3T`E%peVd;EfV`bu+9Z4:');
define('SECURE_AUTH_KEY',  'cN3OE$eyT3?wGF(!%Hf+Q)VTdDxUHXS!Q7hhU:TiC7$_bKA$DS;V1_FveEcWBe?V');
define('LOGGED_IN_KEY',    '"jY5HRYzv"3ilm?!M6d#L~p!MMlf?zL6ytCii(tqFYfu!jt3(0e8?BY5;~Zk@8L%');
define('NONCE_KEY',        '7NWp9Ob2C`Z+pH905X;Oo`:tezwfZ:bXU?(W)NCXI!c)J4qTa8+x2zdwR;)HVdj`');
define('AUTH_SALT',        'V@YjWB7Ecbv#i24@Z|Lds+rHv81gZ&xEKJteyqiV!DTtc&o2WT5nKTIHQQkiJIcI');
define('SECURE_AUTH_SALT', 'V6~a|Rn%+IW"+~"z%%n%f_Eu(H&6((X`^:$sHYxPSAi6C;i|pPH02$Ys%JD!P(XY');
define('LOGGED_IN_SALT',   'a67r/ygO7Q5_xz76+P3?w6`RwXdn5;IyaWn1+#qeSy/Cn75:/2n#j^xr6am:U):_');
define('NONCE_SALT',       'c$eg3T%HcY(o:/88*#HWL+9pNFapvz):hjrIb/p^ij@Q~R^d(ET#*Njxdg1Me8ec');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_kwyh3u_';

/**
 * Limits total Post Revisions saved per Post/Page.
 * Change or comment this line out if you would like to increase or remove the limit.
 */
define('WP_POST_REVISIONS',  10);

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

