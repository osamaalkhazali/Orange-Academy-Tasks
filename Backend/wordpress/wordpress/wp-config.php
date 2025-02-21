<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'firstDatabase' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'A5!BT9lc$WiqN{EWrJT-M9p#4,%.m2 xN^.Yying34!0AfmFjl)XaAqVZ!M1X%YB' );
define( 'SECURE_AUTH_KEY',  '6`a{ =g{dFNKrf3<(|bOM(1^ZDGhih&p%,v=WZR@,{^!cE//J6m5*g{r%qiED0{^' );
define( 'LOGGED_IN_KEY',    'd0e7+97jGsM-sg=Z>akg@)Y)N2a4Qx*5/Hgb:N!JI3b,jD1F-FM$]8EMxKlUX;9O' );
define( 'NONCE_KEY',        '|[sK2~Yw+x:f+Xk/#|TK_D,ldq)5uJq%L&:7+!wd`;K%w:3.pKswZY9:{ WRaZ8>' );
define( 'AUTH_SALT',        'eU_YDh;2-$3.]ESmu7JGIz*}_YCY[is@ns.:-8aZT;$feA>~%? g%TG0s6Qtf7]h' );
define( 'SECURE_AUTH_SALT', '[6SLk%MbPb .;ZMjW1l s3:xmb]+|Zofk=vtx,{&&a/.jhL[mvQ]udm#SsA^Fj`?' );
define( 'LOGGED_IN_SALT',   '}R_ )|&hL43sj(%WO#^mv8}.$Z^C:7-grU=+&uYcfmi0]7>t]ff<w~=9 CV4fP$>' );
define( 'NONCE_SALT',       'V$$wY$eY~>?&AsN3ZEK^MqjEm{LhWi2<u34`5H$SocHOnr=hm%0GX1oDa!fCN|1~' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
