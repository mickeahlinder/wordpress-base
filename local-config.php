<?php

/** The name of the database for WordPress */
define('DB_NAME', 'wp_activelife');

/** MySQL database username */
define('DB_USER', 'wp_user');

/** MySQL database password */
define('DB_PASSWORD', 'wp_4ct1vel1fe');

/** MySQL hostname */
define('DB_HOST', 'localhost');


/** Custom siteurl **/
DEFINE('WP_SITEURL', $siteurl . '/wpbase/wp' );
DEFINE('WP_HOME', $siteurl . '/wpbase/' );

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', true);
define( 'WP_CACHE', false);

/** Local FTP **/
define('FS_METHOD', 'direct');
