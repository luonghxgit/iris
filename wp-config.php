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
define('DB_NAME', 'db_iris');

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
define('AUTH_KEY',         '%6h2LGH@7K39Xf@TY-$`yvr^+G>Bie$K=+yiy.M1hK[_,d_0Wq#dP?F1xXt6Tk6h');
define('SECURE_AUTH_KEY',  'ZrTS^V4Er%X82q{$%xzX,%J4%(1S0YwH`[T`9fZCp?[Z^9/?-mnXaq{U__SqbXl|');
define('LOGGED_IN_KEY',    'dM>Nr/5_6+B!<0mhL&HmFdz[&=K0eHb9tir-OsNm%Vh(]ecq-YilF7S#*9lY*kF#');
define('NONCE_KEY',        'pReMp:^%M=!Vm2p|S8]giqVy2G(|4dQ=*TnN;RS<yqtTCDuzCg>t(9(sADQU5xA|');
define('AUTH_SALT',        'Qv;oyzu@Bu>=$4#dBMd5;dmP[E1x,2fXbyuw`wBBOxzaT=ns3*]{.F^OXi+R#xyu');
define('SECURE_AUTH_SALT', '{eI7I9|M}K?{={^0u+Q@^OL1}VmfzXc8~l9oFm[xIwCB.F%WO_(j{O[F|Cm~h$jY');
define('LOGGED_IN_SALT',   '?Bv`YKeaQ}9+hE>y-a9XtqBo2u^S(?j~#6^[*n*GOjW+v/6h.z3GC$1^!5E5ci w');
define('NONCE_SALT',       '9)ql7tkPXzKq p[oL]@]@k|a~A65@DOi%$idW9):(>N}$ W$ZvRj.Z! n:}J#63*');

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
