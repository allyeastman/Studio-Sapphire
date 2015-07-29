<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'stud2680687471');

/** MySQL database username */
define('DB_USER', 'stud2680687471');

/** MySQL database password */
define('DB_PASSWORD', 'CXz6=w_ou+');

/** MySQL hostname */
define('DB_HOST', 'stud2680687471.db.2680687.hostedresource.com:3312');

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
define('AUTH_KEY',         'IZhY9U)@ZhdyyJHCkG v');
define('SECURE_AUTH_KEY',  '4PJpga/K0gNxK(5*M-_%');
define('LOGGED_IN_KEY',    '!swUV8nm99O&@1z#EUj0');
define('NONCE_KEY',        ')79rk/TC2C0-@xG%EEgE');
define('AUTH_SALT',        '%D/mH7D9w@_zFHX+*b*U');
define('SECURE_AUTH_SALT', 'tc$SgptSryQ)3p c9cRB');
define('LOGGED_IN_SALT',   'I#8*6-5*#/cpVn0QbX!1');
define('NONCE_SALT',       'VRJp!*R+gjK_DHv+O&1G');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_8jv5ysfx4n_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);
//define( 'WP_CACHE', true );
require_once( dirname( __FILE__ ) . '/gd-config.php' );
define( 'FS_METHOD', 'direct');
define('FS_CHMOD_DIR', (0705 & ~ umask()));
define('FS_CHMOD_FILE', (0604 & ~ umask()));


/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');