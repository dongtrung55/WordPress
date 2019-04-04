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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'If@l}^YG<ib, s]53rtc)L+hJ9ZBg< a/u~JQTojudsx;lcg#W~V`a2/nYVJm${i' );
define( 'SECURE_AUTH_KEY',  'p yih{DcOYL&p^H5%NZ]M@Do!6Qs++.<#~,hVC(D;#wAnQ}Fh{m=~E#*p(o40>)4' );
define( 'LOGGED_IN_KEY',    'bvD}5#nXXm5FqzFI0FT%t,|7M-Yfm(iD9*F(1=G>zm;G8y$<C W,8=Ogmxa!jk/;' );
define( 'NONCE_KEY',        '[iPl9<-j}U`N3czJDb]pd*GHfN}@+Q+@=c*m[fR}B=@C|ehn;$RHmF:%x46U`UU,' );
define( 'AUTH_SALT',        '/og6O^gvgU]U89?)kl-6C@>U|.QPsSm^L)eth3.W+%**Ele/0mDXO4A X.j1;V#1' );
define( 'SECURE_AUTH_SALT', 'vQ MdkU=$YRi?=_vJfcS_Kl*,BrDvqaZ%w#Z}3O~7B at$sOXiD*~iC|BmWKO@6i' );
define( 'LOGGED_IN_SALT',   '%_+=*(wom3dsq8T#u2k`d-V0!ODUVvV9y-S}NYZ>g+]edO~g91a7BJj9.^~7Zbc>' );
define( 'NONCE_SALT',       'O{2}2.|b_`6qdD!tJoSXGYQ)C3%FDjR 3}c4_wj3Y4Mygge<4`;y/uj<,eS^}ZK#' );

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
/**/
define('WP_MEMORY_LIMIT', '128M');