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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', getenv('WP_DB'));

/** MySQL database username */
define('DB_USER', getenv('WP_USERNAME'));

/** MySQL database password */
define('DB_PASSWORD', getenv('WP_PASSWORD'));

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
define('AUTH_KEY',         '9*l{o(5+z/Kmbma)/1 >RbCc?`_HqWf?<jqG!6L;z8~!/}7`uD_Si3x+JWivV(%K');
define('SECURE_AUTH_KEY',  'afyU4#Qr%&GbgHKx)ThGx@S0MQ:w5]KbY/|9xK~st`XR[A%|$Qt8`#HJ4/h,4_+Y');
define('LOGGED_IN_KEY',    '=Xctx~oyk9F6/g5<0eNdwN{*X,SyZduv2-d.Ry]Mf&!` ^l[j:-P9`Yk/[EH]E.C');
define('NONCE_KEY',        'gO*^#aW10tHGzv|&,#R6x+khAf5OG7-+@(&o-s5xM]zBb`)Ci=]y^-^Er}<y%dw;');
define('AUTH_SALT',        '|o&J;}zqfQN,*DUCT@(-|>QU_m#T|C^da9+hs|8#i{}Y2%}_R&Q2GE@hf3/c85+f');
define('SECURE_AUTH_SALT', '{:rq#U!vM+[>CG:[bDu$G~~QIU+MYnR<+kn?4x)2Ua%!j{2H!`2MT+~.JD]mG5`Q');
define('LOGGED_IN_SALT',   ']yqW|uwn`+.I;P-8PTx%{w:;11?f*gc-Pi.[{mpX|P*lSm8%Wz].)Tr/roU0-F7s');
define('NONCE_SALT',       'x_lPP:bf<`,3Bvvt9+8jU%~:+NMdDE8N(DL}-M&e~j[([NUMW6SX: 7]PT@TKgx5');

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
define('WPLANG', 'pt_PT');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

