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

/** Host name for easier config if needed **/
$protocol = 'http://'; 
$siteurl = $protocol . $_SERVER['SERVER_NAME'];

/** Handle diffrent environments **/
define( 'DB_CREDENTIALS_PATH', dirname( ABSPATH ) ); // cache it for multiple use
define( 'WP_LOCAL_SERVER', file_exists( DB_CREDENTIALS_PATH . '/local-config.php' ) );
define( 'WP_PREVIEW_SERVER', file_exists( DB_CREDENTIALS_PATH . '/preview-config.php' ) );
define( 'WP_STAGING_SERVER', file_exists( DB_CREDENTIALS_PATH . '/staging-config.php' ) );

if ( WP_LOCAL_SERVER ) {	
	require DB_CREDENTIALS_PATH . '/local-config.php';
} else if ( WP_PREVIEW_SERVER ) {
	require DB_CREDENTIALS_PATH . '/preview-config.php';
} else {
	define( 'WP_PRODUCTION_SERVER', true );
	define( 'DB_NAME', '%%DB_NAME%%' );
	define( 'DB_USER', '%%DB_USER%%' );
	define( 'DB_PASSWORD', '%%DB_PASSWORD%%' );
	define( 'DB_HOST', '%%DB_HOST%%' );
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

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Setup memcache if availbale **/
if ( file_exists( dirname( __FILE__ ) . '/memcached.php' ) )
	$memcached_servers = include( dirname( __FILE__ ) . '/memcached.php' );

/** Custom settings needed since we moved files outside of the wordpress folder. **/
DEFINE('WP_CONTENT_DIR', dirname(ABSPATH) . '/wp-content');
DEFINE('WP_CONTENT_URL', $siteurl . '/wpbase/wp-content');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
