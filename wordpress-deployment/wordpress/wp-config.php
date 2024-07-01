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
define( 'DB_NAME', '{DB_NAME}' );

/** Database username */
define( 'DB_USER', '{DB_USER}' );

/** Database password */
define( 'DB_PASSWORD', '{DB_PASSWORD}' );

/** Database hostname */
define( 'DB_HOST', '{DB_HOST}' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'L]:.~[>}%FF]ED kbByV4ll#ARGZCX&V!xb2Dw7,%Z4S- iF%_tHn7<9*T3|$ES+');
define('SECURE_AUTH_KEY',  ':2K}sp`xWc$@57/f(C8d5X`[:0Q%;3~D-KZJDU&MVt@-|BOk&4YVDi>3R_E$)8-Z');
define('LOGGED_IN_KEY',    '4)Biv-)?vwGF<.*=B8}+y`.MnWX(+PC83.W,Z[+2NMsp+%{qD&s~<wc,bj2=$}~-');
define('NONCE_KEY',        '4H;k}:X;&l=9Jzz{!WI^wn{$EiMdq,Dp#Peka>02;#5%1r=No++>^#Y0hO#^RrdW');
define('AUTH_SALT',        'F4ZRt6Wv~6K}%vJf)3}l!VU ^-XUr:TG2@zf<nH(~R6p-XrsP#/K65Z$UPH`]>}V');
define('SECURE_AUTH_SALT', 'tVOna4H<|l`8c+(x.ok3i}t#5<xtOf+Pi~a%*cM|sH7bo+*s2l!UA@a@YH-|{s|T');
define('LOGGED_IN_SALT',   'z;^z?xkOG3PZy-X-.P`4Vf0Y5|># 8*KlBD m)/%+rOuc)Q<nY+D92-vu^L^ :.>');
define('NONCE_SALT',       'dOD^^`%Q>S:!#+Pdg.aI~ Gm)F_VA~K)DJF =lu!5x`AWSM]L5R3g)G` !{!-!y>');

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
