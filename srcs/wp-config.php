<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'ft_server_db');

/** MySQL database username */
define('DB_USER', 'nscarab');

/** MySQL database password */
define('DB_PASSWORD', 'nscarab42');

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
define('AUTH_KEY',         'wu^ <^e]`tj7c([uM5[V+5tI:oHdf/f*-+q!jrG9lp-4~3sYO9Au^-UV;G!-U,{9');
define('SECURE_AUTH_KEY',  'V+pL,e+FUkeR:+r2SD=D@!&3aYr`@f`BUu>.y&X1^RZ:u.Atzx)Hxyp0H<2MOqo[');
define('LOGGED_IN_KEY',    '<j?(H)mwMm1r1t+7FUBnqJ/mQ5Wwlv.:q1O)7k!euBOxvbTtTEI05s-i(M^Php(8');
define('NONCE_KEY',        '|t%p@Q]PwYOIQ++t)?Q%s+iX4|OF>Z-hq|077Trkl&/-{s4AF^!*b/k!)mgF5P^t');
define('AUTH_SALT',        'WopezEk0{9<J1ba-`y%NE!>Y-YTyL~j>kzE!kuR%,Gvp`/B&SGGryHS`|yQh$0C%');
define('SECURE_AUTH_SALT', '|@^SVP&.?8])d;YxAhWt9.+&/UPxc*c+x=_U|IUhHnP/Tu5:uc|<f[Y,cL>H B&0');
define('LOGGED_IN_SALT',   '$!$sY,VWo$N>)>Pso_HH6PEhCe8H&g5^8JRkI=`JfHdNijSHRZ* 6hh0-/djS-cv');
define('NONCE_SALT',       '[rA-)<nI)A~;VpI1p]*+[narj7ANkx*vW#JeQUTU(2prCAd5?2]=])iJ$AQ Jr%`');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
        define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
