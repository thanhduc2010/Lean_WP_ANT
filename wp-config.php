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
define( 'DB_NAME', 'lean_wp' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'ducduc2017' );

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
define( 'AUTH_KEY',         '8JrET.HG50P<#Icw6),jj#z=w%yHGlv}02&RV,?6:[Q_ltqz/M$s&g3>!sW2MxXh' );
define( 'SECURE_AUTH_KEY',  'uH1l%&1o>J-k^`cv]`v},tHbI_qFd%H31eXNVK*3/Ap`x`4F3.F*xn-c-|A`#>RB' );
define( 'LOGGED_IN_KEY',    '2|f!2n+fk.BZ81o~IB`!u!EqWcnJN6l_g(.dA>HYN]ywcCI6bCr+Va;El/vZ}]Xq' );
define( 'NONCE_KEY',        'q1$P>^Hb)u~a{_B;|=l(_UK(or;2G%4~jU!TXUJy%hRceC/~&%/KBF7aj&JO[DO5' );
define( 'AUTH_SALT',        '`Y=^/Ykc0$5K*t$EBgPNI;LQR~H&FhS$@(yfXRZs,{[{W>]sw:0]HB`_HPGsB#,v' );
define( 'SECURE_AUTH_SALT', 'rVoCaGXUl?tFj8OfhBWEQ}9cQ.Uv0xE]kBN7xrLiEG&uj>g8*p9|qiWa4OG>9adi' );
define( 'LOGGED_IN_SALT',   'e^m5:s:up36^n7NQm H,e<vw=[]JS;2RO,3D[L9>HBTAAGtZ<X>u@$~.vrA%JQI:' );
define( 'NONCE_SALT',       '(Tjo[7JY]BYdS,Zs[=cYNqa_jQs,@p&%hy3I|lp496&iDM_D:]KU2n*K_MaT=7Tl' );

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
