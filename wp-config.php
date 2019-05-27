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
define( 'DB_NAME', 'wunderpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'T9*=U/8+alPWDBap/L&|Z!#>GvJpW5FK-DZZ&#2s(eQ=BNpdNYa:Qe*2$xx4<p@Q' );
define( 'SECURE_AUTH_KEY',  'G]RH4/LnNyTP#lm9s|~zqp8ji0g2d/BI|/8L,J-&7#MttU80U`=zBkXCMWWZ2^s@' );
define( 'LOGGED_IN_KEY',    ';c74HoXI6$N:g#lP<.BCJ|r,qNrAsnZU^A_hZEv.MO|vk^^&f|-NP1eiqU[&V;!x' );
define( 'NONCE_KEY',        '7JH }jjsi/@5vDUA8La(y;r:5A~6U#=RD~okov,Fp>1J8Vk5_|`.^(Wp~R-a@?r5' );
define( 'AUTH_SALT',        '8UPcw/Qvn_L60Y3H(@%EHi-`]MY8DrVj #<R@,YwZW_L(^kQ>UmpV@FC<MinNDml' );
define( 'SECURE_AUTH_SALT', 'w^v)F0< l1%|jZ3.<(1Z!JuWks8;T!*TT@:9QJ&<2&]u/epBp{MPh#b0:rg<kMdL' );
define( 'LOGGED_IN_SALT',   '0{Rf1[4[`qiz+>IzK15pC)ZF7^6P-Q1LA_B{4PAO0o0AKE8307k%(JoG;sWe;T]y' );
define( 'NONCE_SALT',       '{^`r,+S7@+WC6ss:Q<DL/VQ(`4P4B<1E=-H65/+T:XDY$<A&a rZKiC5/,uAZ-PO' );

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
