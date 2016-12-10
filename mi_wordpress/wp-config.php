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
define('DB_NAME', 'mi_wordpress');

/** MySQL database username */
define('DB_USER', 'mi_wordpress_usr');

/** MySQL database password */
define('DB_PASSWORD', 'KdsSYcqdBHZ6ej7C');

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
define('AUTH_KEY',         '`iYLm5w>REp=ZA|m`Y]gR$+kMgXJmf+ m-=L2l$c%ml<PPA|q|~joO37.[3L=/dG');
define('SECURE_AUTH_KEY',  '!9k n:.ef5R4fstzx$7?b~pRm?z5I#<q1Oaa+r;y1%RWKQK-iJz|Y| yMAlIQY*A');
define('LOGGED_IN_KEY',    '%4~b`/EnTWCYrX_1j*zTJ?/!1!jy.uFo@T|)0c3[`c-|,>a6*K5V{uXiK1faUV )');
define('NONCE_KEY',        ',kP:fs]U3^[i?7euj%slDuJBMMifWT15?6;ImxKdt05RBnq>5;-fQbR2$#tx~jNO');
define('AUTH_SALT',        ']YKt&wZLMrl8oaC+g5:*29N+3SrPW0%vP6U->&%F6LNFy7pwt!!-t5G.{V=^JxDj');
define('SECURE_AUTH_SALT', 'K}_N/BvlBmzwx;$]+uHX8K$`uNf~=S[+Bv!k!|h2Z|cgEOwp#4_,7UzmpSNJs;AA');
define('LOGGED_IN_SALT',   'cb1,UjO/LB(& CJ.ks-:DP7Fnb@WjGFlGC2M5/-b(C>EuMDt_U,kDFoNR$*QTOch');
define('NONCE_SALT',       'XbbDu8N`D}xm wc,L[@z}RXSI&<y|yi]dtZh/A+QmejItQM{iAwbieB_shfZPAui');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'mi_wp_';

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

