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
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'F:> Uh~IrUPW[a%Z4moJTec~ Lo0t.%VPQa(i682U1?%CCe.USqRecN40P7{[ne ' );
define( 'SECURE_AUTH_KEY',  'ceGD>7:<$IDDWSZ?}T/X4U&Z}[KMdKxn{eBDzRD@-W*9B~}SNk:3T;X`j5R/uc{]' );
define( 'LOGGED_IN_KEY',    'LZADU3:<^`+{wcgvYysUW3=q}0mYCH?.**|,vA54RpD]& n:Q9*hzd]tu0,gNs{3' );
define( 'NONCE_KEY',        '2;(.>OSN3`E,N%E.f` h.1:5n)zn8A|c!ziXq3;/Yb,mIwgQ(RJ[CyO@rP`(<2 k' );
define( 'AUTH_SALT',        'Y2S=[3#]{XJ@4MmAnCwAn|Qk,r~T<Dz@C;@af9df,8.DZ/ew4Md&`5H[BuJChjt+' );
define( 'SECURE_AUTH_SALT', 'SJ-4gj$zo7&ntA4FaB5nJ:0Z>MZPte}3{r,^#hK|q+~QIx0h~n+qMk$:Ew(h,?$X' );
define( 'LOGGED_IN_SALT',   ' bj$md8`6|lfs]d#94-MUQl.,0.Ei9=q{v4iO)LuhpaSf($Ml0K>tiI,]^tRi<y,' );
define( 'NONCE_SALT',       '@c_ud.WFD5@uk[H%Jl!wX+6-OP.XJ.A5X$Y:UU5.y&F&@;(I[qm#;KF`%,tNapRF' );

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
