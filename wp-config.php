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
define( 'DB_NAME', 'jewellery-store_db' );

/** Database username */
define( 'DB_USER', 'jewellery-store' );

/** Database password */
define( 'DB_PASSWORD', 'Ns59yMPfDNsQcVZo' );

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
define( 'AUTH_KEY',         'g%x7pde2cb*N+]Pn829jG J#D#R0=fdFxTd! Ra3<,ksw|*!da/<.+:Y$Z=WdFQ.' );
define( 'SECURE_AUTH_KEY',  '+b]xSL#i4TAJXIM.7A~g`iIEIo>}bd~;W~WDqY-N+J.Sv*`CM-<)P~im#$]ESx_2' );
define( 'LOGGED_IN_KEY',    'cUem5zu}xR~t[,A27+>w(7g5WUp|KU-_Rv0YN1DDH-H4;a]!m*f 8-VY2tnCYKk_' );
define( 'NONCE_KEY',        'aAJ5lGi{rELrurOY3h^;-cNh>Tl,NztGZ5>;<CXQnlk1CwP?}%iPV7CeSnp?7rm#' );
define( 'AUTH_SALT',        ']/hE/;P(#z7I|hK}fDRN,4lHJB$hWPFTs3Klhn+5kfj+H6!,eCw83;5_RD{abh]*' );
define( 'SECURE_AUTH_SALT', 'pxx`n#Gj?`Ja8zARnJMk#42F$M^ |~WFdU3t0hw<RK.}C(65@AU7X9$0(F9(2fuo' );
define( 'LOGGED_IN_SALT',   'bqG{3c(G8E? <tuw9]X@(Y!_sx x)PPfNfE!kma%V!;ADL<;LnKn6(l_(xq-UiC^' );
define( 'NONCE_SALT',       '*CRc9L9[oS;7>aSm$2v^!,2@o{7(g`rW.bA*}f;aD:B9?y1M_o[>Epbr;W.]VoK}' );

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
