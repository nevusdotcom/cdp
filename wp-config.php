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
define('DB_NAME', 'cdp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '12345');

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
define('AUTH_KEY',         'T}i9kDuN01/jn_LNr/l;)OZ7R[Oiq2Zt+m$j;Yp8E]P&2]Wu_d5$FBz&cK`gF&yd');
define('SECURE_AUTH_KEY',  'Nm~StY,R?{cuOw!n(2hkRMQt/ilbpAWFo&l tJnoArs7``$kwa`J>C aS,{a3^S0');
define('LOGGED_IN_KEY',    '>Y9;`[gCG@.Uxnc`VHY|Ol7v(wg*?w2MM/SAMP=AO1nG{5C233^QE;?I~K0o%2mr');
define('NONCE_KEY',        'dt=swao4pBq3$f_Cy8T.Cr%HWQg[#:zvUt+-3_(_!n~-EW*xy7t`Ft:Y][#v<s9V');
define('AUTH_SALT',        'n*3v(gRumtHl(0]/9idxtvq=`lkkX=r[|Y)cz6[Do}sQ;6WNMxZP:nBNNCxhB!h{');
define('SECURE_AUTH_SALT', 'aEY7Wni5WA{,>?f^]y~}<l%a+cNd8oc|6%5hd0Ns{.%,M%Te{xqKy/:uN7$R8Q5W');
define('LOGGED_IN_SALT',   '#],n8(T~cxf jHY}_*P:3xjtZ(E)PRf#C)4g{nJ^sl/^A}F-Q@zb_Yp&Em{t[Bgm');
define('NONCE_SALT',       's K @B.P.dplcEK.X:$LRU@Hm0=t]ZwQ&^x<fT,`#,y.r?V]tbz[ulr375(Co;X$');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'cdp_';

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
