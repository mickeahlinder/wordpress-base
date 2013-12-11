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
define('DB_NAME', 'wp_activelife');

/** MySQL database username */
define('DB_USER', 'wp_user');

/** MySQL database password */
define('DB_PASSWORD', 'wp_4ct1vel1fe');

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
define('AUTH_KEY',         'fTW;DR~mPCt]OdW8)6;*=tkp3[Gp3;Ery&&7krUBW7Ppt/6xY|U3&Beb|6TFzrM]');
define('SECURE_AUTH_KEY',  'B{aG!x]NKBkm3O41qe-xbej3Q21ZZlN9BycI0-9p_yC[F[Pn0d+BL;it`J7+kVOx');
define('LOGGED_IN_KEY',    'IRo<vYR!03g DK-6~)mW?s}iV7+Vy(PVbbjSu;j ME-~eCA>$CCsjl-/D$(kQa.u');
define('NONCE_KEY',        ';Wd~`L<+Q.P:f]<![z[zawH:DW(8B|I3]3*}q*K6_ W-]7Z+0OqK(=CtH<r4-B<D');
define('AUTH_SALT',        'lFLJtSB5YO/I}UQQO UY_ FN%*z5+s`eBba)&(AkR6Rio I`4Zqo[vv/t;zkrr|o');
define('SECURE_AUTH_SALT', '6i+Z7 A=&r-i%,8Pp|<q28lc2]mT;Ghv}JE^ue[qnw^/%;ALEP|3(QU6$a@(?7[3');
define('LOGGED_IN_SALT',   'lZM@|MKXYS-Ub2IRaDVV$!15jK*|q8;V[>%|L)m+F!BqcD~m$+Z&#+MRXJ*w?hJw');
define('NONCE_SALT',       'T-;1gt+FaaR@VRu69NU(,ogG{y:a5cW|Q?=of2GNp--9dRu%$<0r,!F_Rq00gF!p');

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
define('WPLANG', 'sv_SE');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

# Custom settings needed since we moved files outside of the wordpress folder.
$protocol = 'http://'; 
$siteurl = $protocol . $_SERVER['SERVER_NAME'];

DEFINE('WP_CONTENT_DIR', dirname(ABSPATH) . '/wp-content');
DEFINE('WP_CONTENT_URL', $siteurl . '/wpbase/wp-content');
DEFINE('WP_SITEURL', $siteurl . '/wpbase/wp' );
DEFINE('WP_HOME', $siteurl . '/wpbase/' );

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
