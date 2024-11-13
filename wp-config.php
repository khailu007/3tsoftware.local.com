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
define( 'DB_NAME', 'khachhang_wp_3tsoftware' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'd@t@base' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3316' );

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
define( 'AUTH_KEY',         '$>Q |[=$r>=? S6bHgwr1iE{5q=1`}m:JXU^Yv;hJEDu+L=>6<#aVI9(.8hT{V}4' );
define( 'SECURE_AUTH_KEY',  'N9G:a2}y)$:HO8;#f{V[5%jVB{XV_(N`pe;7bjfFt={+ FN]mZl%Xv:3D(+sy<tc' );
define( 'LOGGED_IN_KEY',    '[2Nrz5R+&c4!a?4Z= /:<}F<(M, vj1P?Gr?V @&$n,Z{-OJ=p2XsJRiPo0.-ANH' );
define( 'NONCE_KEY',        '`Z/c&b$&bZ!oFBw+p8a^/j*QfB{W@36UMak5]Rb$:%cYYqnq`Gh^Q[d)bBEnCR.r' );
define( 'AUTH_SALT',        'H 9/#t0<JGKU9gIV_?$<N+so;&3qy6/YIfsW4K-k]s=ub?k*v:6WnZ3To,+u@s1y' );
define( 'SECURE_AUTH_SALT', ',$W8`=0]}<Ad(p_f1[$g543sv-(clU|>Mc2@ 1f^NS&yslJC/5R)gHV(aBr4QD&*' );
define( 'LOGGED_IN_SALT',   '}^371xg;Y@][O~}](gt5hgYL$o=0InWKiEGEU[ymL~!A(w&Y&} 3z~7&%obWth$u' );
define( 'NONCE_SALT',       'R`QEusN*Q?>*+C)n7AlhRML(^5<XF{+h{H1[d0`vlj5cger??_=%xN5S^L>E>M28' );

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



define( 'DUPLICATOR_AUTH_KEY', 'pWxd4S.z&`8+CC#$o0TzcV.l|,j.z[,Bjf[,EzM[B&~1=32D?d&6B,x1S5in@~Uu' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
