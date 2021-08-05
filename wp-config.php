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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'jetklenbautista' );
/** MySQL database username */
define( 'DB_USER', 'root' );
/** MySQL database password */
define( 'DB_PASSWORD', '' );
/** MySQL hostname */
define( 'DB_HOST', 'localhost' );
/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );
/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'eq1TLWzh]N:vg tqXUiA2O<Un4Rwu}X(o*Zrm-][WYm#G&[[mD9Z(7Y7kY<BXF|W' );
define( 'SECURE_AUTH_KEY',  'L.D(>9 RS%Sso;zp0F#WK5n06S@flswoV]-s%x~D-v5e1t90<]Dp -,TXt{ZDHTV' );
define( 'LOGGED_IN_KEY',    '_2/Wxc7@x?sV4b]:*ScXcy+tf<a}=qJ)=X^P$dm{xf%Z/$P:A[W9ELw>%^bVrlMT' );
define( 'NONCE_KEY',        '*rL@kEQEM}M4y<LOsDcXorSz7NP:L-Y@-A*xwK]%vG_t:{LjQ&nJ=_WRMLK!gP|C' );
define( 'AUTH_SALT',        '?w44x)wqGzXp9GansPo|7</W+(b fR[}Eq)q?.BZ;]vhqE1m+@En}.7%:v98=6r:' );
define( 'SECURE_AUTH_SALT', 'MR/ #f*xLk|iB_U9e5*ogjW?e@OK3*7hP>3:EBG$E_Vdh%@xzfQf%CBNvm:M%NP?' );
define( 'LOGGED_IN_SALT',   'pBdZw9-`n^Nrad}h?~{)oNSdM<En5xUqau+|pao=>_)6AkjA&?M]*6p0dxvH]50a' );
define( 'NONCE_SALT',       'o},Y!Szk&lpD&>AmlR9^TuP1#g`~uY<l#(W}-r)<}<Np@h8^q^Z:#GRz~w4Iot-Q' );
/**#@-*/
/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpgc_';
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
define( 'WP_DEBUG_DISPLAY', false );
/* That's all, stop editing! Happy publishing. */
/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}
/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';