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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_d2c0fbddea14' );

/** MySQL database username */
define( 'DB_USER', '3fb35725199f' );

/** MySQL database password */
define( 'DB_PASSWORD', '32b4f3b98714' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'Aanzh|`&XzaYKK9ksDN45TJIFKxVTH0H,R{x$2#^}<tE6L3dL<1=OWtMwQ~^io;X' );
define( 'SECURE_AUTH_KEY',   '&X+~-Iyv9&i6{n^E! :!vp1vv[Ap;~+/i?SdeLwx#e+$+FQaJ2`<yxeM{K_>)f%3' );
define( 'LOGGED_IN_KEY',     'bh~A!BrCCER|5NIIuY)+/m2vqkas,=BLiP,1^!49eZ8]36BYsGX8/K8FeW&GU&Ww' );
define( 'NONCE_KEY',         'd&Z&5QfKFnoC//Lkc(O`B`e1DjORdIV9VN=BJ>=wXS3R5xaKIGj/l9:uu;juEd=^' );
define( 'AUTH_SALT',         '`V{n= . z`{Tp(kKa56ng)|j<&7&EUc@?7>3Ti4j&7#45XQZQy2nMAu/]x?*xt=4' );
define( 'SECURE_AUTH_SALT',  'dbN:`VhDjc}#|nj>N4j@}a9>PPzOURx0Ot;x4BU5S-}7<%o+OFeK`y?kU%(4NRVJ' );
define( 'LOGGED_IN_SALT',    'BZc,7zLM%/>;5b5>cMylD`NPj>lbI{z[TQFt%q!Ty@@wt_7B%K3thbJ{.-gr$`=1' );
define( 'NONCE_SALT',        'd4GLbL+gn(5T^|v:|Iw_aBoYDdkjz#PclBOK&G<{G_9 J8`Cu+CW|[m,|dtuv!wg' );
define( 'WP_CACHE_KEY_SALT', 'EhS~CKKb?ws7Sv{zlC@8[ClnaXJkD2<-J?-QEKn0Ql=#(wR+P,@*=,?!ARj&:)zI' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
