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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'password' );

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
define( 'AUTH_KEY',         '#/RDw,tje*^kE8|^q|gV&_CiL!XO[T:op#c6`DA1/2[S@_^lDKqk!3>8tdX8=2l-' );
define( 'SECURE_AUTH_KEY',  '.p#l%-s_/MOxobpo_Jc<y26ycPI=@#amRORlq>/9C0U%X@6G?Z?eScOj$fHSFz*p' );
define( 'LOGGED_IN_KEY',    's<=pnB#H%=,ve=y-1TwMKVPF ?Z]nROEW]xWt.X^E5jZd~4>#/%SzBi8]P_UJ{Q{' );
define( 'NONCE_KEY',        'Zoqy6t(=5EZSdNwOtX%hykC~I8no^2WJ<]06qwZq37myQ9hc}Bf[h<Ar5eE76eES' );
define( 'AUTH_SALT',        'Q2MUX,|V13rI,a.R5;sFH6]GI=6KBvw2{Wdt>8PR=WMq}1Rq|Se8Vy$P9:C%(wgP' );
define( 'SECURE_AUTH_SALT', 'q;ev5*E$d63?</_ EAJ379#boMG ja[&|K(1-<:5AK8&0HcVOV=cjy|3]a70~ZRa' );
define( 'LOGGED_IN_SALT',   '~Rs^0q#FWNmL^ bzeV>pffSyJRS=R/:b<:x15r0lQPBxH-^S< >ixoh=X4^}@cpy' );
define( 'NONCE_SALT',       'n./Bl~Hs$9M7.$Sh8M<)s^TVM1A~Hblp;-h,]cc}vO89y3 a}gn TlRa:l9TzVNm' );

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
