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
define('DB_NAME', 'pwd_wordpress');

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
define('AUTH_KEY',         'q_@@9>&@bWkf5IHIw@?HV1*Xp{{RemY2E!U+[5DZ^RhZC1!D]yqPvE+A2D 2u}C&');
define('SECURE_AUTH_KEY',  'Uq+^4N:wxd(7j&QZPIjeW5DRBXv2-@Q;0rY$;>Iu<reK^CS+u|QdHpNaS;>ej}l0');
define('LOGGED_IN_KEY',    'jW#A JUqEIlT-|G=?a8+d8|Y>Us=q&V,hQjgJx:(<;I@ Ie~-M^nE$[pNfdJ8tTX');
define('NONCE_KEY',        'Z-x;>lESFA$.3Wty;N~[fxW;Ni/e{@,_J0(@Pjgo/A$$;hkuEH7GB)FN0D|gidC&');
define('AUTH_SALT',        'd~CU?i<Zkk|}FbT(agwpz!K8NT5GB)kn}|mPcqE/Fdxsg?D;q}eu+|{_KK{-W*z>');
define('SECURE_AUTH_SALT', 'qHqZ9l>`XZ4P]EG+Nc@qjOf^(U{<QNHXme{YFaN.%zRlURUryo&%#+lIW[KAW1A)');
define('LOGGED_IN_SALT',   'L-^DQX>LZ+H`a.[}(beoo~DM2ay;>TAQn.OyjjB1a1S{-di)rU?]HBNK-Tq#~9o2');
define('NONCE_SALT',       'P>r BYbpw^ioRG64xWsoeK=;96|#AoyZi|J/1<^b pM_gqv#a:,;>{4]@EpRb#)-');

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
