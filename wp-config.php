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
define( 'DB_NAME', 'massglobal' );

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
define( 'AUTH_KEY',         '|Y2Tuia@?q3KxHO_{0T{0`ZG>MovhBIK2P@TrYy6P^np0@C~pe$[?;IP~3Jt5WVP' );
define( 'SECURE_AUTH_KEY',  '#ek,g%B_V{5;^i($2M ?D}C!n=]c98;#]R9t!8?N.Iw&=J{ eB8V7<ypH*}5(z_%' );
define( 'LOGGED_IN_KEY',    'L:,}7BdW](QN)7XU<;Zpm],Of/0j;uAMPOsh>{cg{wWdM<2~zd;A7p5R?EO!wM|M' );
define( 'NONCE_KEY',        ' p/28r}mL,eueocS29#H$NBv.{#ma6kgScb3.4%^~z<K>%<zM*M`K)xE*4{7G@8:' );
define( 'AUTH_SALT',        'PoX2d@[$w}+Qh<2.jK*SsL4LN@V}8Zg9Hk?kX^%OOGT3bk_-c`UNm^FlEkwP=QS8' );
define( 'SECURE_AUTH_SALT', '`VV9_mh~[//`~m6Dc!>#]yyTzYtk7;*Xv+i,}0yW_W9S%CLGc/ E?+BvUCtT5:x}' );
define( 'LOGGED_IN_SALT',   'R;9QmZiagKuw`?+&4X@ZEC$&8JUQ0?J4D+!H@Gq`QA=,cl!Mf,4}t^[6n7jaZLFr' );
define( 'NONCE_SALT',       '$rhmH-O x!tjX5H2UW2V;=-G+E=~;Y6eUNHPisdr;H^wFZva/4h-D^,W#}x_$3|R' );

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
