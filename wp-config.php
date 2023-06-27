<?php

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** Database username */
define('DB_USER', 'root');

/** Database password */
define('DB_PASSWORD', '');

/** Database hostname */
define('DB_HOST', 'localhost');

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '.1Pe#dE~#a iUq$h=ebi+Z4r -=+sv2}L%:;^(QjAZYbKsBB;Hmu!5@eG48w>DOl');
define('SECURE_AUTH_KEY',  '=RT_@P7#v~xL#6JsXhXh}E?<xo_3f<TL~_69**I|(Mztc2+yzT$6#R#ynAq`,K62');
define('LOGGED_IN_KEY',    '^bTl*K,GJ;</f,7I&it=0^%pbUwIkgoM[4mQ~PU>y UmRfV!^6^>S:s`/xAf*;I~');
define('NONCE_KEY',        'EZ]LV|+S5T&D538J$z=6FgI#p.AlE8vK^,CN+v5&C}3YtS,{:Il!]1<0?hxbdXsV');
define('AUTH_SALT',        '<Nt!.oX{gf99&$Y_z1]IS#=CBRwC>=gIwthz^TaEx<?g~Ba4|%hz.)*M8ck[S (M');
define('SECURE_AUTH_SALT', 'M1te<TC_0,/<Bh#tAk+`G*C<8Oc4^mmXJ?SAR.oEhAa@o[&`AIf(-jW7U)z~5~6A');
define('LOGGED_IN_SALT',   'pnl2x_Bhxn][+Vct.~e&&.XE2q2>/XZHiNVzRB1JD^fTA!4pF>L]<1K,:IS8LzF/');
define('NONCE_SALT',       'Hx>9{1Ls]#:??Nt@Tc[c)0l( _DE&[N53r<%uLM3@@qEFF.d*@>0F(o=$h: n;&c');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

ini_set('log_errors', 'on');

ini_set('display_errors', 'on');
/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
