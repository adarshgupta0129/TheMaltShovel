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
define('DB_NAME', 'TheMaltShovel_db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'Yahoo@444');

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
define('AUTH_KEY',         'I|4L}<|:Ux1(e{MWXZ3`c!$8T(C~x,turD)=DmkY#e#^ A~YC7b8hfZ>+3*XvYq$');
define('SECURE_AUTH_KEY',  '=7dAD/DX&1]M}}U62fnj3[V)$*@Wu5IYP/YWz9C8DC]?yF7+c]X;%{M%Un-WW,1a');
define('LOGGED_IN_KEY',    'VNa$KAH[>`@S+G-RC&f}9q@LS6s*]~]IeNw!?UZ)5q.D+;qqY@en`bk(s{fZ|.T0');
define('NONCE_KEY',        'M!y9G.w2%s@|Cf&8VjN?/-0i_yB1`X7{]]nk~?Oj3DS!$`Pp<5ZVipC3w:d)a(|B');
define('AUTH_SALT',        'P4>kV$Z(lWAE b]]cyxAwiLUWb:oQXZEuXpF #2mNmj>,jizs=#&5s@8Gs*`gaJK');
define('SECURE_AUTH_SALT', 'Sb9f;NG&3MF33cWA?L7_AV:rkW_&M[r~gBep=$01`cu6thYF00Ype:E|GXig<27V');
define('LOGGED_IN_SALT',   '=JQg0$rmwA=L%~.$vvE7~Nwg(a=h9QO^zgI ?L/y8~M} >qh]V(Y%j3]Ce*!H-w)');
define('NONCE_SALT',       'WlEqZu%eAs@C P%l#hS6<RkNr]$S D=JiBQu{Rc||G8bd.eTX~.A&4wieu^nPAJc');

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

define('FS_METHOD','direct');