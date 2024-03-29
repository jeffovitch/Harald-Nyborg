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
define( 'DB_NAME', 'haraldnyborg' );

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
define( 'AUTH_KEY',         '_ {b%jm+s6xZ-d^M^J8NT*1T{uJ232vFTV*B.kr$k?79>RkOSFs^h(p>_<(> eR)' );
define( 'SECURE_AUTH_KEY',  'Ywp-;iki<BGH&^eZk;B.r8Alh!z[)?#@*Z7v6v5^w|,Sm~_oMPL;m!=;[$?v]2b$' );
define( 'LOGGED_IN_KEY',    '5_<;L-%3stvm{#MXsW?+bkyXl@V/]LHnqIb,hq=[k>?#,#pOY`-wE2Q^y}${$P>J' );
define( 'NONCE_KEY',        'u?8Ao%u=<F]n:V~dw(.H^yHY9N$wFK=ecFu:y5=iWmGRdgG^f[M7moT-L&6. /uf' );
define( 'AUTH_SALT',        'w1fz.nAi9tn^/bd9pqq[JW|=_#T:khzQ9*# ~TgY,T/4i2n7IF2|Bxc(%%=pWbk]' );
define( 'SECURE_AUTH_SALT', ',fPetxK70=_TFUp?t@?k>W:&c]x}^hq>l,I<AOFEwRRi*`w%D@u=kl5u]k.j -,b' );
define( 'LOGGED_IN_SALT',   ' t~<<3D%+}DRo!GpU}Ay<c^ Tw)z4wWUG4ffZa <T}gHMvuWP,D_cGjjgwxi _:s' );
define( 'NONCE_SALT',       ' @wMlU&IeuVV{8SYW+s%-M;PqR02(6}8 %;&(kXlqD|3U(Y C4clFpQE=Fx7F>v*' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpHN_';

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
