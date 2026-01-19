<?php
define( 'WP_CACHE', true );
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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'mohammed_zaman_blog' );

/** Database username */
define( 'DB_USER', 'Mohammedzaman' );

/** Database password */
define( 'DB_PASSWORD', '_d93BFBQ!mTa' );

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
define( 'AUTH_KEY',         ' .^I(A!IP27/W;Bblk;U@{W7CFGqer1I2#mmM%7WL,v7uCAqqLXx>!yz8VR.@BZ@' );
define( 'SECURE_AUTH_KEY',  'r@-@#UDF[5Gn1xt6v>eiC}imhax_$Zf M}=A!xZ+`J]^).O9xt@*()!64+n6:Zw8' );
define( 'LOGGED_IN_KEY',    'u`P;pk[W-t!vO.`<?=*2dFU3gMkuzC8TS-e(07m/^F|g(SNsH3(;%B#iu<^&p2*Y' );
define( 'NONCE_KEY',        'VQ5:h;nZn-h*3ugaIC@OV1$EHI]>r=Q9VNagI(eu}O8Q`4d8-ja[n9M|J%Q[c}o/' );
define( 'AUTH_SALT',        ']:p=+`bXt%;nTA0Y^{vqs~&$R/5je$tCbWdf:kZijq_OS0M6byRPIo2P7`UlvsWn' );
define( 'SECURE_AUTH_SALT', 'tNbxc!=(3{8SL4B+ep)V75ZVmf-L[XYY8ek]u~CJqH]3QL+uF:,SXe$zWN](}Ln1' );
define( 'LOGGED_IN_SALT',   'cj7.0)uqo$C;C_i,lpjNT{Ek4KkBz0prTk,8k4brU(E?1(f>LD_G-w8#R52-{BpN' );
define( 'NONCE_SALT',       ':2Ez^lPWu2k|>^_EkxpYDVbtmIm*9O$j$Pfss7Ga}&IoC4qLM_CpN/{<<D2=O+b]' );

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



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
