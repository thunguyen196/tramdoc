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
define('DB_NAME', 'tramdoc');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '68W}XN!%BWyX!14jXxHG8AdVA&XHDk=N[Gt{}{@ziA`5X~EynnaGf>1wH8Tb`-ev');
define('SECURE_AUTH_KEY',  '- _KD|0?C8/pBJ$lSbrBbID-9/3K$+Z?v$j^BYJlD1xUtQ@DW=*/Z}!*thgOX*UV');
define('LOGGED_IN_KEY',    'v~hSB*4pNmS#WoVl_vZd.K/;(|N _vx=`Zw-s6}{,b2O:c#]y`o=b[L:j}$vzzL*');
define('NONCE_KEY',        's+v%p,e:93+J>nc~n] #{.jxv9pU(nx%EL`/K^4NI+> PzO}}A;d-}(naHZXh_kq');
define('AUTH_SALT',        '9*OZ7W|:Ug)HDd*hu7 GfTo*?>9<!N|$z!YxR.BANk,d_muj+-FDmcra9Z-B1MOJ');
define('SECURE_AUTH_SALT', '!6:shIMzaJu5kiE.L$nm;UU)CP0vulSJ&5H@4VwQfIxA+1T8(P~zm,VzuAREo-Ph');
define('LOGGED_IN_SALT',   'L//weI!A6{3rNm]B#X=CEU1!<Qf:Jq9}rGMoo7cs9i~IsZC`{J3K.fJgMj.7S8%l');
define('NONCE_SALT',       'AFmG?23B][fh_aC?-Jg;TKYV9/kN*tV@cL,j1}/:YmP*ko4mb+DU98DDk?IE=RlB');

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
