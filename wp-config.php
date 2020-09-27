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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'emes' );

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
define( 'AUTH_KEY',         '{jDLFVh%nTk8;G!hpnkO]<~6vLc|<;{VW;F/ZFG6:2a`k._$SoMk =v+?-$D^Gqn' );
define( 'SECURE_AUTH_KEY',  'a%ypJR;_v:~)eQYb?R(v.#}wx)Z1).n3&0j$6hR-.^?Eo}hXS0xi#I&(4{? c}9*' );
define( 'LOGGED_IN_KEY',    'P1o63,q~%K,{: ;d__A(9ll{Uw)p!W}NTpz^,052- -Q.3*TT/+]A$hPJJ#5z?_&' );
define( 'NONCE_KEY',        '}#DdPuqhunKL!V|{:rPjks=Yv(oz[xUun?QT=~O+EC!A0y(#zv7WeOe-9*u`6kwd' );
define( 'AUTH_SALT',        ',.(U}^x]f)0*-0(EgUt!^1e$L6H+;M)h=h+K^G@MW/T)q,:}%hz`dosvCo?B</<u' );
define( 'SECURE_AUTH_SALT', 'P!<0v<3k9qr%$(_vBHk)lt$vjYwcvd#f2=7Z`p<  kC(Mfi3$L(v]gAJ$y=Vb~J%' );
define( 'LOGGED_IN_SALT',   'pRVC*)Z3[Xyw6l*#re#q|z`d[%TC.LyVxs%)J<T#DT=D}9S/ qfAA9IYmvIa]H{P' );
define( 'NONCE_SALT',       'H8[v>d.Lua- yHbz?$ZS$SB:6x61l/P~9|*7`<:tduc}KsA%fq@[`(/)w}`YW<_Z' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
