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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'coursemanagement' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD',  'mind@1234' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );



define( 'FS_METHOD', 'direct' );
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
define( 'AUTH_KEY',         '|y0wXEaF[,WaHKGN`UySL=set)*H1SJyt4tEiRQ@6@)+M@jb`DvU$dJYlPL.,&n;' );
define( 'SECURE_AUTH_KEY',  '%>|7iO*^|x^2@(JRMw27jZv %U0Eedg)_F)>)|si<62SXc_z~jYmzP49%atnb9s%' );
define( 'LOGGED_IN_KEY',    'JG#pO@iWI?8(.Hg8t3jLv0l+R5EcZ[2Eo+wmBo}FDpB|kUm^#NycK_r^.YtZt:4Y' );
define( 'NONCE_KEY',        'e=n9X^rF5?fE3{L1w5$Tn*OXubw|!?6;.wenF:?>YYh5{+Qp&w0*gHy~:kb;q`a&' );
define( 'AUTH_SALT',        '1PgO2PP0>7Rb6ni> v>cX[ Tlp`&|AvlHCY3@qV7aU#eUP#% NyN{9|/4QA*u&cZ' );
define( 'SECURE_AUTH_SALT', 'zzVTbLvx1T*Pu0TwAr}sm~6Rg$ {gV`Fa o~7bv0n3X{?m`yih@V&r%L=&iK3&Xz' );
define( 'LOGGED_IN_SALT',   'sRgIbTq{GW,$hTvS?0}UP|U;}R{/2U,0tq`j/fa+WUW-_h rQ:%ZlRdC?@#Tw.N|' );
define( 'NONCE_SALT',       'SRHY2 ZLQ[;`{R^T;E/]V|WYGQqv0_S)_zyn<l=wE1^aQ8R}^4@x4A4[NNmg7g)Z' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
