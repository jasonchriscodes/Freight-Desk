<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache


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
define( 'DB_NAME', 'freightdeskco_db_1-12-2022' );
/** Database username */
define( 'DB_USER', 'freightdeskco_user' );
/** Database password */
define( 'DB_PASSWORD', 'watashi1234135!' );
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
define( 'AUTH_KEY',         '`_o1xE-B6X=9)S9{TfGBN;W;^f`}OjHm+bqvvrJFp;HlJb=S4Cf*OL:^sn]up]OQ' );
define( 'SECURE_AUTH_KEY',  'H68tI]bdf<+Q<yWOXHYyZ#}-70KZ?S;%&r]S0S 0y-rEMUSl`xNUAA+~:^2FFmsp' );
define( 'LOGGED_IN_KEY',    '`5seU>l_WBw4bNCnaHZz@N*_7 DU#m3Jef]x!=hM(@WAnRBfz~7JgVgeRm+&(Rcr' );
define( 'NONCE_KEY',        '?>0h.55~9PZ5<dx^y~:xEmZ) {l7O6KVY{[mE08six0SjSlpsC)N1dse*<E2dQMW' );
define( 'AUTH_SALT',        'FHCH3;Hi=8p+YHebqw9BZ!;S(|KXq#*oHF!:2$%lqp!r^,~g/^d~<p{L9B^%;V(t' );
define( 'SECURE_AUTH_SALT', 'K6SmC!TCIv7#{tsGM?_3eXj7>Y;@c(VFp=ez[2,>K(erqUJXdtPs78Y&_w&zOhZ<' );
define( 'LOGGED_IN_SALT',   '&,H|VTU[:)eu6O|4a,6-963lkL#UY#57}qLG)3a^Ez}IU@8j]UH[Ul.P+fdP<M1/' );
define( 'NONCE_SALT',       ')6ETgUO:YPFR=&P is!gtY$c]xU<TU^utx-1ut>]kvc%e~iK8D>2O<(iV]Fn(g$6' );
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