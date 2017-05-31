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
define('AUTH_KEY',         'LxZ|J|#lihr-1cTtY%O_-L5AWc2vpi_OV!2 Rz|fc:`X6zBKIQ6_A~mJqsxn%nq!');
define('SECURE_AUTH_KEY',  'hoMXubqz/k>fb5iNe]&*ObP*(WFw,/uG/e^y7:I)rDaXVj1$ON%tQz^Y;` EI@(}');
define('LOGGED_IN_KEY',    'HF>yUpNOQ5Rjb9C;hxx[8wv]P(?qeJ-sK.WkBvLO9r,BtPg0F1A=xN<`HtJ[U|^q');
define('NONCE_KEY',        'G$-aoH+_b3p`=]CPdE;L5Q! &N V{.iPv W$tAsj({*PDM_f]AK^ R|q3Iey~A i');
define('AUTH_SALT',        'LjJ?n4=E7nn:|3MSov **1>7lz}ppi(aF?psS<wG/Dq`{+@gV*Rbx1E(qz:n.MY9');
define('SECURE_AUTH_SALT', '(l!;H%jM(d{2A&ud(zcw{D$X}kHXqJz0ryiIMusK#?8qZ>U:ZTZ=.7+Yk6)kGRBq');
define('LOGGED_IN_SALT',   'r PO+QF $Uow1;g6Kdi>U]Abc0jGAmuGk*!&j;5rmP%31K<47[LY434U|[):0-M/');
define('NONCE_SALT',       'e`b*U<PV<pC%#B~FMgqi4l7b!DlKX~Sz71ZtEeC|)]USG^!m.R3v2r*JUM{xJ<;D');

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
