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
define( 'DB_NAME', 'school' );

/** MySQL database username */
define( 'DB_USER', 'rajan' );

/** MySQL database password */
define( 'DB_PASSWORD', 'rajan' );

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
define( 'AUTH_KEY',         '=P^1^UR*OCuO~$NWxR//[cHWT78 (YdM4yyVm%&Bf~<7:&XfrXi(&p{U/xwL5=L;' );
define( 'SECURE_AUTH_KEY',  'gUPm0|L]R[D-R^oaESm{ 1sS^}ZackDp _{6qgbV4^(<RR)k{4k$!(wyY,JjOk?z' );
define( 'LOGGED_IN_KEY',    '2@r{ZcTW]W89-+0cgp_nI~6qLH7su>%rH}<B]}$I%;>1]r<A2Ai[(<wN Ob]{Qq7' );
define( 'NONCE_KEY',        '9pY>|,.<dXn]W.%^.4j4]0M8?jVd,]V( 2fx~Fxjnyx%G}/%/-6`=!i,PPrTY*cD' );
define( 'AUTH_SALT',        'Bc>xs`zElcgNEHw7Hjrj]{)4cpU5H]qR2b{X+@;qxjx|0$+j^MV1hDstHjg6syo3' );
define( 'SECURE_AUTH_SALT', '8.&3bOkL?hN:Nq> _>Y=?iN]Z-B;BmPHD4=JRZa2q6-n!5jCJ63wiQ`GO.cypuLn' );
define( 'LOGGED_IN_SALT',   '|hIx[c^I,Mw-ajf_rxN$s!oG(<b$z?8mby0~Lee.A7V0n)P^# +fC{8a=(>pZv!J' );
define( 'NONCE_SALT',       'dy$khw?:*pmNokvQ]O;oyJ^}Z&4iN,lAyb{XtG@C8fN4(UyKN^w-a9X/~ l8kOxa' );

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
define('FS_METHOD','direct');
