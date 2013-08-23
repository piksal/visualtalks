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
if ( file_exists( dirname( __FILE__ ) . '/local-config.php' ) ) {
	include( dirname( __FILE__ ) . '/local-config.php' );
}
else {
	define('DB_NAME', 'visualtalks');
	define('DB_USER', 'visualtalks');
	define('DB_PASSWORD', 'hoang@ph');
	define('DB_HOST', 'localhost');
}

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
define('AUTH_KEY',         '=N&jKTCt_:jcL>&u=?Va@xSckr)]fN?v/ske^%UR/`<`-|+L8GA zLG%Uj+,:9iS');
define('SECURE_AUTH_KEY',  'g=3u=$}DJ4G5S,O|P;F25Wu}6@cXzrPc,cMn0m#jo8#c*bHix0:!YT4jvd7+SO5o');
define('LOGGED_IN_KEY',    '2`?m[TfgD7QR8HCT>yd|?&N*)i4SY]@lZO|pwcpU?_2V*jG+63o+fv-}6kb7js~/');
define('NONCE_KEY',        '9W<MBh(Qc[b:`](.}u ]]ZgP#xf3N:uW2sr2g-QK5@P{DP|Uv2BPzeEU2UPn>r5#');
define('AUTH_SALT',        'apnm!@4*<4#AU`_$c~[R.Z1M>e9Z{7R0{x)iA6VbG-ZU J*6x!*;tD8dcfXwzli5');
define('SECURE_AUTH_SALT', ';4l.1mv>6jQ8!4Xm.7uJ]vo^5HQGPvSHYmc_B4DU}8|E3stvW&6AW(U#(fa-.Q[D');
define('LOGGED_IN_SALT',   'SZU2@J99  0C6r_67o#&NxmcY_+0a,KY?t!P`]i@sFmd?;9mcqdc&plm})I[=J2j');
define('NONCE_SALT',       'PDRz@}@,of#wg7]>@~7@E%uJCb~EG*,CSX~5ZD hl`wSo_e6q=sA?,T-a!7bV=gQ');

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
