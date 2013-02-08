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
define('DB_NAME', 'wordpress_blank');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         'aBHj!6VQstXopu `FM9 {#Z]&jS(A&J66%#~gXv[ap.0_):aFRDd!^(OU(-za)?C');
define('SECURE_AUTH_KEY',  'F%$S+0eQgTgru,#L)B7C&YGN3HQo;_v;Ymq,gy9L!.6ZsN!Y~7pSiVqc+Aj6~zRb');
define('LOGGED_IN_KEY',    '+j:fmbmy-&O*}9z6{8HJP*YrBg,rh>%g8uaB)ObGHO#{WI5NJZ*t31?V;#9Q/Xwl');
define('NONCE_KEY',        '{C9#1)^z[>E}RG}~i3,K+Oh]}W)>@p4PI]>X9<8. %nq6LL](iTHU1|$B,f~d<y}');
define('AUTH_SALT',        '=5x;IiY;;_[bWV}]!5}nK%QKX~jL;T=K#aq+L+8O!nil@v(^PoAFV`7kd$i3*]Wh');
define('SECURE_AUTH_SALT', 'SYY U1Ly79%Y}c!gHJ};j8?nbs7c<bZX-wt0hb(!H^[jh;pJ{)VO0d-k)7yz)^#v');
define('LOGGED_IN_SALT',   '$I/%tBx9rN9-@<T.f{<~]!CF #3?1BWTblCw|B_QXX^X.Bk5oywCa}-~A[`M!I>N');
define('NONCE_SALT',       'j$?Shy`8C60=pk<_5AkAa:v4cTi%@L.=)^!-m7VvaI4]nlpLb +7779<ExPPm1c#');

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
