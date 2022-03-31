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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'bmtrucking' );

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
define( 'AUTH_KEY',         'v$dq9@[/r0=aMf4Hex8I@14OsEX$ly+/ozM2O$zWw%9fAsbG|]It#S,LX8LXooGp' );
define( 'SECURE_AUTH_KEY',  'ZokI^eb|U0yO9W.Lfx[hcy*YaU3jtanQ#p1C+r<*FYiG@=zLWPNBcm4*FK$m [7$' );
define( 'LOGGED_IN_KEY',    '8`ysgQ`;~jCH~nBbbk2#:q$];S.n{GeH(Y^?-)M 5}ND9FeU2dB-<-J-fK*93gU}' );
define( 'NONCE_KEY',        '+SB,JinX/Q}HV-Dv{uh{U/Vq8{~2iN=Px%YYwe%Mjd+JP~:B~hQGb.>eDdBdzfH;' );
define( 'AUTH_SALT',        'GM~8w<>GQ{4F}5_Gln9?ptM^8/)Ri6V*(}te;DHz$E9g%DI{&szx7IY}Tf_o-QfV' );
define( 'SECURE_AUTH_SALT', '1ev=/fG!Y]s;0v%t>}ih[P$@7%9;urk>@k$_+_Qi%M.:4lBHcznbn9;]_rq>VJ:X' );
define( 'LOGGED_IN_SALT',   'gpz!08q^OPr9MkUfE`6Vi~K!^#?:8Ju~N|lv[@iRz`ulhlqvh0>lHu&D%77ymbr{' );
define( 'NONCE_SALT',       'D714a)G51!mvrl;SeUbO( >;pN: iX~a&_8qY57p>Omhz0fc2@+w.(_=v2<7NTea' );

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
