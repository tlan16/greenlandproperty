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
define('DB_NAME', 'gpgproperty');

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
define('AUTH_KEY',         'AY;iVr=fC}zwm{!YoU<SjHF+CLOFEQM&Hhd0)|>^@tsdpVpn&Ma+3VC1:;du7U0c');
define('SECURE_AUTH_KEY',  '8WbXK7+>O-sQRNR<EvAoXiO8=;J4F,E<LC#]]}FML6$<[?%Mr;TDU=}w~-n:5m]:');
define('LOGGED_IN_KEY',    '5qiyHib/5g^{CVmrsA<!~)N%J mEc<e;e@r<k0UsyNJJ&Ke.3m!USdXyu](c>>~N');
define('NONCE_KEY',        '6S##CojF[(|K*[TYc,v>5O)^4X|gQ&=4u!{z**}hRYT%yYI;d^idSWQ-:*>Gp(1j');
define('AUTH_SALT',        'e=>$SV&w6]3M>W3o$8_YuXmbjH8}r+#;e`RUf.(=-rQY1EI[DKmLNLu/]X&pBq%q');
define('SECURE_AUTH_SALT', 'i0r(raO-]~%ve;.!EE85B[&b&rGD_d9a;JyO3+2# #QBx`o-H/Uy@`rfls8KCe8;');
define('LOGGED_IN_SALT',   'Id1Lxz(]E5Wy8g@v-VE:JF^bY&r^/x^JVR2jpVuHM:yryn5[e,r`CtAE!OCf!<`V');
define('NONCE_SALT',       'tN9K)e?Vr.s&[u7oAvnnAG<JN>m_%)-kg)ITND1D*SM1q)Y!XJeu?@1@3W4l&Kfu');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'gpg_';

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
