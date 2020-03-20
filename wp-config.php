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
define( 'DB_NAME', 'wordpresstest' );

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
define( 'AUTH_KEY',         'Gc.igo2AH(8moP(pym/*/zmH=s2v[GuU5</N/fpXg([Y^ *43I_}]XJQ{:_k54Mi' );
define( 'SECURE_AUTH_KEY',  'wkA0bZp&MRVul-!iU<R?0ERW(KupHCyTfj9+e(K*,!KA2+d5LSH8/74p(d^c^tV#' );
define( 'LOGGED_IN_KEY',    'CUPDHITw:Ni&!bTY-be/EX>jixMC@?p4ZYZ<[6f0BQ(&oP~F}?9|M1ic>d;n3k=9' );
define( 'NONCE_KEY',        'S7Iv%ni1jg )3zx:k<Z3G,m$}6az0zc&iVd.hjnNCL1[rguiR3D[g),~q2d{`fx<' );
define( 'AUTH_SALT',        'Y4MhUq+a&{Y[MT>n04#vU=]dAXDH7,kwgun.k3xScy7ShPZL^cYja9M6H?=GveeV' );
define( 'SECURE_AUTH_SALT', 'h&$:Yk9x,AI+BOU^amT3a|7v<gC%53&s}mYb~**{YYhrI/b:!&|W3ttas~v:aH+{' );
define( 'LOGGED_IN_SALT',   'f1K3y+j;#55~o0#P1UTo!q &+zJ7~})D.K`yK6i$atm]v*eBIe?&4H=/:3L*&73M' );
define( 'NONCE_SALT',       '$5l9fI%PmT^|!]Kpgr)Z.MQwXGHk&Qc )k~k%?n0Iuk~bk&2FWcvVEGWG.JdEo;z' );

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
