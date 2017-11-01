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
define('DB_NAME', 'GursimranMidterm');

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
define('AUTH_KEY',         'jmX5e=F-ml:n%m~e8-COi:YV{0H-ep$5m=0>NUo],xwF~r1H~j1&b<)Mf)sS0|y$');
define('SECURE_AUTH_KEY',  'jnpZQRzNFJVOB<Fd5n;sQChP[8JzhjP((`cm7%AcxD}/0#NI(M`q,/BL%[$6M>6)');
define('LOGGED_IN_KEY',    'A<i[58nc=IP0 r4Tfr.[+J2zSI* &0%GCesMn1`@Qb.N{.rrfju$y>kx^:KK?v|5');
define('NONCE_KEY',        'PC]NY+7r8w4=Yj*.0U>A/c731 uqkjUEDMh?_8@7g`TY&aS!/ss1/M~&*Osy(bya');
define('AUTH_SALT',        '&*Q n5-r)B1KG_Y>mFmBu,7:#P0j_WSNjxZg2f5&+vo<Q.4u9{hL4~*e=ZJt~M~?');
define('SECURE_AUTH_SALT', '>b80}9s}^{w:%q545r5/wbK<%SY`K_Gq=-E+=]1[?@(0Qh0)~WLrr?Eq_E[@`QX:');
define('LOGGED_IN_SALT',   'T.]]RJ9_)GHG 7(bfVKlqdJE9ef5ehOW=E7MtU.BY}LZ`17F>{aY! ccM$CA#3~Q');
define('NONCE_SALT',       'hu9W5<-lU?TW@z3ff)qfP%5w^ >6om@{*DDC9Xu?h=I;jlH,{0DE.&#s)/EE52r&');

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
