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
define('DB_NAME', 'wp_ma');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'Papakwame1');

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
define('AUTH_KEY',         'r&@7 G)?F%s-7YW=gqmLPvHh7*zj{=I@,t!Cflgz/tKYLWYAZus7Q:A9lR&)T=T+');
define('SECURE_AUTH_KEY',  'B6?FDbQ=Gg11wRwh}At 231N)H:6Vha~2d*F,n|I@Hq0TK}QS_uWMhK0 ,. CT6H');
define('LOGGED_IN_KEY',    'rhgoRM$*@H$T]}exgJ0.L-]VTpw jc6no%x}Q^WGR%`H:C,t|j0k*6k}<A>+<lH~');
define('NONCE_KEY',        'TBOV]bo@[tD858zMK3{@|o$H>(z|,K7e~5>iASmb*/!b;AJ~h0l=T:=U~;BRRdXe');
define('AUTH_SALT',        'V>($H?S_u{WU0D@Rp7Jm+hWTz]wjMBln)X>!}n2[=<6jxyOfjq T(K:qDaJ0Np/3');
define('SECURE_AUTH_SALT', '>`FX16Z4q<]T{+r@hgmRf vvorqenPs.DASoy^@m* GD#pE**T]Zs_LE%A+GIlE^');
define('LOGGED_IN_SALT',   'bL4j3Z >tt3a^*]iv8+_Is[^3,~5H6kJ[vTqefc*;~}ot(w9DM()|nq})qeIKVn[');
define('NONCE_SALT',       '0*U7?)3ST`%U*t LG9d3!6MSD<[K k5l1xs*j@ay$c1YdSLN9]*bw_N>|@L)W!lY');

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
