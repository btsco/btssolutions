<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'btsso' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'BTS.DB_#$%313986' );

/** MySQL hostname */
define( 'DB_HOST', 'db-hk-instance-1.cf16buazmb60.ap-east-1.rds.amazonaws.com' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ',O!zWEb*=ZCA)TWGfv$$PJE@Dk#/mDO9]orN}<,Bt019WX5CS2SCec?S23ID4xBw' );
define( 'SECURE_AUTH_KEY',  '-02;pdQL 0,d;mR;7;L5Q/[11d4/F(M_xgd)bE,s^aQ;q^& OpNVzGRmks3zvaMa' );
define( 'LOGGED_IN_KEY',    'tF-#u[Xc>9Jcu,wf`4D?syqu:L&<kY*$4_OP@Jlr+jw,Y #w&5%8<<A~2+mcf`vo' );
define( 'NONCE_KEY',        '*<zO**-/~G_i{XEw`0&W[5O<W8sdHwgS{{k_;^Nn|Xc(c4jQM7_Vb>F{Y|DF:d{#' );
define( 'AUTH_SALT',        '&q6J-0/LWdl>hj=cz=wp7ztw4S;y0<s.H{Dr?[df1$O (8W7L=dT5YMY6Z5R0a}D' );
define( 'SECURE_AUTH_SALT', 't|`fZCOY@vn+`.>T7{nd>X;*6w#Wa?^QxHfjA;c [ZKR]t=!S; 4Kz^B5Zp2x)|d' );
define( 'LOGGED_IN_SALT',   ',jI5zvtz8 #;.yy<c[[$-XEFC(7`O5.WX@C2${.T+8/mwa-#|<vX[WrC7(.i)p-[' );
define( 'NONCE_SALT',       '87TR}b cjM/`SAw0ttD[93HbLfkNL]{$wyzj7Ck81ETJbwOOmX2?i;D=b_uc%Sku' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */

define('FS_METHOD','direct');

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
