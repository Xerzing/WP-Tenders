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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wpuser');

/** MySQL database password */
define('DB_PASSWORD', 'win256');

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
define('AUTH_KEY',         'g!/8avFM-@jW;X| OOz!`nH,FEv;1L#Nm`1]*j*R S*fH`OI1]Iki-}5rbv!@6#-');
define('SECURE_AUTH_KEY',  'TqjVR=hDxRKpI`!7W4t_*a<{;|B<YI%u!8`4tm~M~xkp_JP-bdjVO(qd8aG6e/TM');
define('LOGGED_IN_KEY',    'CV=qRWj`fN0{Ir<l$|<fFM{%;jBj!)?Q%hnW9EV:cD#|-q{x7l7Qc)91(^lZ=!OG');
define('NONCE_KEY',        '+8yTBD,Fs0(qhJgZ+&_P6xBvU~0dEvefqppILa~wU:@4*E%0eLe(rz8JuA9g[2)W');
define('AUTH_SALT',        'pWgt>0t0-_Oh$4=)Vn$%,3xp_ S2(n>tXQHeCw*`o~@wJc-Z71ULK<=.RKh94/JV');
define('SECURE_AUTH_SALT', '^lo6r2&WX4b|V<JC9+pN%(l> P!&|0L ]tL+bp)wY!,g|x;[6i?*!mQ(2]]ZK lM');
define('LOGGED_IN_SALT',   '2nzw0ek+nA?Og#RKnsbiYi{`Isa!@.@[_C+uXsvYZBwG[ek2}R#xl`wW3 ;P8F1=');
define('NONCE_SALT',       '8KE]:3}}mMwk1pb0l/wrmXO?;(,/mW]})f`wCxtz5q ts XBS>EpOJ5b5#)-4{I/');

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
define('DISABLE_WP_CRON', true);
define('ALTERNATE_WP_CRON', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
