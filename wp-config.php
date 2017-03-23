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
define('DB_NAME', 'localwp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'plass');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'B%u/fmk-FQrG{ut-.DMX:RkJ~{*/b.8dzz/K{CssN&&W4;Mzm/l#&O1zxC97*bN1');
define('SECURE_AUTH_KEY',  'H)q>0bk{;7i%#%L<~9KX/y,66i|LN a+r+;qAWz~Pgyb)cRZpWJj}wACD6M;M?]J');
define('LOGGED_IN_KEY',    ';.0GDguE3w<fxuhcS u2y[yU>0Ys_GoBFD&8VP7M]:!=;gA}qf3]zfH+DOQ,el:I');
define('NONCE_KEY',        '4jWp;3$54>~NnE>l}?0Gpopv7LRf_pmF+a$+^j;p(L[|4ni#us7(2,ICv>CPO]r.');
define('AUTH_SALT',        'j7/pw8AlM9EGt}[CP#^00/0~X&H%[uC}><w8%hrMe4@oB%[ReE$_#s?2){c~bY(M');
define('SECURE_AUTH_SALT', 'OCZ(dq/A`l.fD*Ol~]f9d|oOl|_ L-vQL,~p@n`>+DjS-Ec@_yszs8-^H#o}*z8a');
define('LOGGED_IN_SALT',   'N*R]30LYr(^:D)6y*4LKIjA|Q{.,_tT ti,7U=nkb;@ :Y3]y$I8K=C-Z>Dk<FE=');
define('NONCE_SALT',       '{;4Z/ER<3jA@t(_K!2*gOJXY?Xe{`-l,Lu}6m{1R/O/#o&1c:OP93BmOaiL!Z4 >');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wptest_';

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
