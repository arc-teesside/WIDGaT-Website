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
define('DB_NAME', 'widgat');

/** MySQL database username */
define('DB_USER', 'widgat');

/** MySQL database password */
define('DB_PASSWORD', 'arcWidgat2011');

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
define('AUTH_KEY',         'I!k[fh6)F8ipM|;h51XDB`zYciYb0f-eA&hbyotDn@[KdX|+Ifzhx<RN|mhZ;}Ou');
define('SECURE_AUTH_KEY',  'f6~7>Q!<}~7=oRW?v]lTW+du;m1r.X1|S=Z~wYS>JgRc-(a?n8CG:6PO<MqfV;GG');
define('LOGGED_IN_KEY',    'hf5Mb*0`l<8rg!$|W~b !@a~axubgqjvcGcbQ05d|_SB`jV>zAYq40$Px-FQ{@-m');
define('NONCE_KEY',        '5jZ[(!Bi{XIu#$|T9j:UYgO3$g<;p$m^*4{&mY^3Dt]j02FhC& 3vomU++fmpC.|');
define('AUTH_SALT',        '&eSN(5Wr.1vI-*vJB0YyT?xaKbp:7mk5AO01&Q-s_KC)kQy=@!9~|MPVw|k3h]zL');
define('SECURE_AUTH_SALT', 'M(!F8yn5aah>mZ^D-!WTW6CdQQidIa:mJ4w|xaftQm+Hx.V>piNV]AIO:G$13b?:');
define('LOGGED_IN_SALT',   'Je?eLc<C@Udi}wjCZ[5zL+,D+@e=qI^$dOf&oqHV#]:*y$}7rL7#>E{P#iHrLA0:');
define('NONCE_SALT',       'i=Q^pBLA,HEh-NddFq=qK2l~g&.-X-0+0UN|7B`(mXRSfbQ0a]5$+HXz1}}qpbg%');

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
