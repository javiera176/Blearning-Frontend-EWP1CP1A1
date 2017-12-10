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
define('DB_NAME', 'Act021');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '}m&Pf=(R}QI$ qC#,u(<`CmhXG<YurH]3=Tdxuqy/]G/(~AD3gqPSY5@t_wA0I+X');
define('SECURE_AUTH_KEY',  'K#mjhf&0v}Tj@^3w:bPM=g7bR3[dL%vP 7a-$+y3lJdvp`_a#EZbPz+yo-q/*(!a');
define('LOGGED_IN_KEY',    'INCS7UBHOeLM+s=>A|Wk8ig?}g_2F(ql2rWa-^c*(rvvJ$ !Ijz2=zs<OYVKFe@u');
define('NONCE_KEY',        'cXOJ3ks[&_fug&J5T;2f{!}l`&-;?Fu!4D]i11$TMfLgfYx+8ijt^+|P[4p!C+a.');
define('AUTH_SALT',        'v<&Id,gQ_bk!Zy8LP:=f<MY;Xw,v|K!@WsBGQ )lE]r/E9T*O}1Xam6E Vu(k gm');
define('SECURE_AUTH_SALT', '2fuhy3y)dTY6Tp@$wZJX#t,Pou?X.wUBX6^G@i=<gQFbVZM-35UY!,M&g|7@jWgr');
define('LOGGED_IN_SALT',   '31URsFdcMua5f@|pVuV ta(}-yO7)JZ!y+LEva&E$5=5x{Kkk1JU:P$SpqK;={?F');
define('NONCE_SALT',       '`!B61<F)Wp BuFP|a*V5z`i|jd{o]b5q2V-s2;4-6i,Hl+r,d{& *jA&}3 pJ%_m');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'dl_';

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
