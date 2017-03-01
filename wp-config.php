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
define('DB_NAME', 'test-frontend');

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
define('AUTH_KEY',         'sO&Jy76h-Z~~OZs6b{}hxQ]^)IKZq!L5gf5% ;SH57T*guZTc,C$6 95WoU{/|/:');
define('SECURE_AUTH_KEY',  'B=,$kaibD@;lwCjpT9M!Y~:YMB>!>},m}HT.&n;+l}#/oX3^aM;i1j$%fS)8}q]t');
define('LOGGED_IN_KEY',    'qs8[32!X}~Nn(Www`C3=i|*T-79<h))kD<8tA5FA*:+~J_k!n%X:toVUplv Wg%K');
define('NONCE_KEY',        '*J>*7S(+#Q,*]]X[ kYs=d&uY=_YR3f[:X#K15dN|lf)U*iKy.fKrlnR$}gU!zFx');
define('AUTH_SALT',        '+P@<HEJq~S=<og`.[Y]Eg$>nrD)3Hd6U-eaEtn6WWD#v92]BnQT304+0NoM4a=+Z');
define('SECURE_AUTH_SALT', 'u4gu]X$VO+jQENY~:~>UF?+~#t.2Jsh98hEiQ>L!^$dB,rR(,Z1+57M0{<-Rn?e!');
define('LOGGED_IN_SALT',   'Ho=,x&QoIhSyp=&mfLpill7r@e2g27jTa#~$Lq,V=@oMLY6~zx+L5zNDI-1B[e C');
define('NONCE_SALT',       'Okf-V]C9?PLG+rr(C,2QCqdAwsm @qYK|j]8sp%X$nuX&Q8r+fj#}dH{W4X*;oj[');

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
