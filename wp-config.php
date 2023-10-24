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
define( 'DB_NAME', 'landing' );

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
define( 'AUTH_KEY',         '2{+=!sjF0mOFTC;tA<}St:yu0<M_{=f#ZdPS,5r6J,MxzZSVxHn;^W4.,*r+OT_l' );
define( 'SECURE_AUTH_KEY',  'h|B2W,Qt|0]8BxU+DQR:pZuJj6%`=74kB(5x|}8)V;jhNYu)F2`!McYgoOJ`a)Eh' );
define( 'LOGGED_IN_KEY',    '2 tYhcN=4i4L@?6h[sP%-dU(.t=lHoB/$hENo9Ed(X+*+*OUO-(G&`x;2!gd.5c#' );
define( 'NONCE_KEY',        '[pLu6{#;2S;a|`(~gO*e|iVl,p7DXzl6SvTC0+izzsY<qY`b2AZM.v;0-[Po/rB%' );
define( 'AUTH_SALT',        '7CBr:/5pjb]O1]yv{y]$Lq7~!8h)_}yhgvrM}qOy;S.>i)mmEdJ:Uq/<#;YmrBd}' );
define( 'SECURE_AUTH_SALT', 'f6348`I3qgSY#21)guB46hdDi4d#WG.$$>A oI k)9>bENX@,#cC_=or~w>BF`*L' );
define( 'LOGGED_IN_SALT',   '%Ew_[5PkYlsnKLZ![oY$bK!.g3h}Y|ppm{QI_+;=a]C<YWMJOY==sb0(3;^pi&$H' );
define( 'NONCE_SALT',       '`aH&*T9w(=LpQ5}t.bx5,yekM8JmgQh2k;wO,yqUjH[1ltI[*X5-$LgwJ!8kU#~^' );

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
