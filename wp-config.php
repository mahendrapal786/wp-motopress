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
define( 'DB_NAME', 'agondawp_duplicate' );

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
define( 'AUTH_KEY',         'S(Y|c?[{+F~a!xF8OT><8:]6NdA-TiN;hP7=6xZ6qhhjh]=]hO20v%GV#$U=:ifl' );
define( 'SECURE_AUTH_KEY',  'H+Ia&M2*?]Y&l|^&_Z`#ODBw;+kTqb=M8-yp5)}EHa#$QAOjb)mj9)4ZMwftl[a8' );
define( 'LOGGED_IN_KEY',    'Iw?Vdm~IS;#3$o?O;Y>@!`j#]XO=x5`d}z[M.MV3vDnNR?J[U$dx%U=Ua-Z>G3PY' );
define( 'NONCE_KEY',        'S!yG?!f7t;Fx[Kfqy.`X{<=@p39W3]3dcxK.=D;9@,*DEmDb_eZ;?c+[A,aB]u@)' );
define( 'AUTH_SALT',        '[=N:2}ggqcM4<D4 t7!iYPH2.DADj!.tF;@TF>!*/T0G5ttib+]a98~2$N:~~$Ss' );
define( 'SECURE_AUTH_SALT', '<TEs?`eWSTAE8K}l@uHG5/RH`~B)>fyi~xdroPq)qwkphI+g{A4~41)H;pCy`Nr8' );
define( 'LOGGED_IN_SALT',   'az%UNW*?fo&pL/^VSxNRN~N #Vbs^0NNs7!#-fe~B-RG#.yg17+uHE6Y@Kc_KjR)' );
define( 'NONCE_SALT',       '(.+e$lPZ-GULA{~JQOk3@x`>s$:]m]>?OskEx6mkYH 3S{#@)[uvRwJd~o#^>P{0' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

define ( 'WPCF7_AUTOP', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
