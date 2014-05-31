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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         '$v0cA1wb9.Ls~n4:1u:+aHH# ETpa=_.w>-#UGj}^YK7!eu:D:}lL,yAO7`@+j9z');
define('SECURE_AUTH_KEY',  'u N*Bu]/0<A6Z{`WJW?_|iTLtBY9~VdSm3&[Fgw?rUJ_2=13lp5+ql.~#*bB.tb5');
define('LOGGED_IN_KEY',    '8aC8iI;L#+ta(>+hz|#mG3i5na]2P^V0b8as*yb=}H^LOm5VfX|.lqDK?&@1*bX,');
define('NONCE_KEY',        'A+ZjP|<L-<aE!XJ]+w{biZLU#^A#zXuBiC(.B@Oiu,dm>Cn}GHlA/ 8|T3m+XgdG');
define('AUTH_SALT',        'p#e,SG?OukoH$%DR[4Y,SD4v|.m7WgmtLDQI`j1;]OrF~`eZ}La[4RBIWT?`-Q^`');
define('SECURE_AUTH_SALT', '.x<NRE%##}b,{(uV^)/IoOFB>xOT_@GN|W.D^D` )X@:-wK]skO)-uvjAsrUna`|');
define('LOGGED_IN_SALT',   '@(egI?QE#+o~4C|tQvu=l53TgF>gr<hFRJp$^+GNflg;$pOMO4h|$B|:cJ){o]W4');
define('NONCE_SALT',       'EM`&CDBu>;HH;7C0:rTQ0zKN} ,b3nzxQ#n6UqOL4JDmZL7:uR;?VQ6-|u(MSQ},');

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
