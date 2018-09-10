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
define('DB_NAME', 'humescores.dev');

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
define('AUTH_KEY',         'rQlkn&32<<OQWXl)rbN`1B^Zk+2Qk!luB;25<6hh}+i]Z?>-vq`+&ls30!`^p(06');
define('SECURE_AUTH_KEY',  'h8kwWmJUcc& 6^=+[QhajzuN(uqLu|sx9ReH=#+eB_%;+.-FNd?0?AiCm|VVc2>@');
define('LOGGED_IN_KEY',    'q|h j3}zY0;ett(Yf].iw2<Zd9ty@n`t*I?U~MorN4oF;-&kOghG8>_aO6q=7DC(');
define('NONCE_KEY',        'qHIgP4KluV6l.(#*uk5&E>r_.)uH)JI:V=h(3:E6V-hN4]E:01cKAT_^Mknl3t*e');
define('AUTH_SALT',        'm(j~^7}/6yX{2p~UB0&ygyO-APJHJx:=|j{Qo2EfG2AKjM@9a&XcL(w/>wz[$v{=');
define('SECURE_AUTH_SALT', ';ph06%EOg&A2:tilD5pj gmwnv%4hxWL@4qyzULScQHg8-Fbb~/NY}Y@9kGkAN8p');
define('LOGGED_IN_SALT',   'hi{+b>Neq>wVJO@E$Ur[]zujQ}Il#b4peRjnb8i_Yq*O( VEtmP@f&nU+L>oYM9g');
define('NONCE_SALT',       'kUC>B_c6{1O.wkmTro9:zi.!KN7|F^2z2D2@H~rC}2Hm-a}/h6..kRwQzB/gQs$@');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
