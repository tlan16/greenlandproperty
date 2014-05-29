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
define('DB_NAME', 'gpgproperty_cn');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '2W!Qy3iG;^HFJON3je)(=>z}`9Go3LD=>yQ-3Wh.FhndoPKNj3;.*&NH(U#CoY(2');
define('SECURE_AUTH_KEY',  'UpA?kqA9M9Mzo07HfwJNdihv*OSb`Lbt-krKKsyNIh!(iiS.X{Q~4Ly)F!X9OXAU');
define('LOGGED_IN_KEY',    'OcX^Pl;v7Wp+d>QKL>4C1/$4FkVD/.`0@0AP}:)~w#s< yyE=<V_R v hT+O3Xa0');
define('NONCE_KEY',        'D_@Zb/o)IAs-%v7`U-v1-iHDzQJ=IXX]Dls~)DS:(mDp+DZO8O2|M#s6s2?S{1DV');
define('AUTH_SALT',        'E$/-c1U=NNS];jzKAk$oj<^=SF6/u7|GRj=w|hMKyVXZrW@3TV,u[J?]1Ljh7[Mj');
define('SECURE_AUTH_SALT', '+VPdz&F:8YYQ4JjU#2hc7]}My7a*slgcm/H{0])U_y^jA04ZNW:^]d29HB%tlJgq');
define('LOGGED_IN_SALT',   'jN*.`xe;[qiB$)qb0gSqY2B&@-$WHB?#A{wa83F63w!$x-:g=vgq[JiFBJRJACVD');
define('NONCE_SALT',       '2rfnnJdQ|7r9RnqFa5Do1Ms4[CJXL_0p![cH>_0NJ0LH3Kpe~|r>:,&pX`s[Y8<C');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'gpg_cn_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', 'zh_CN');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* Multisite */


/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
