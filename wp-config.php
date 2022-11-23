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
define( 'DB_NAME', 'site-1' );

/** Database username */
define( 'DB_USER', 'site-1-user' );

/** Database password */
define( 'DB_PASSWORD', 'admin@1234' );

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
define( 'AUTH_KEY',         ',3B/qy,S_.H7(UyW+30PI*S.SP}q|tw6QLm5~2<AHo+p W(h=W$50! ]Lx`}USYl' );
define( 'SECURE_AUTH_KEY',  '.T5JQH$4|,pDNC&:P~?rt:NSn=9@Y.VULSZq=x VE9<S4@!/nPt}tpr2IfUEp]TS' );
define( 'LOGGED_IN_KEY',    '+[Avy$yy?v;2u9?O4=|uMDu-6%.p:g41r(2PAG}U/M|tzi&L(z0._FfVzY:{+Ef]' );
define( 'NONCE_KEY',        '.|i{tZKcU5{Z|e`|ra^O9|b2w@{tPjb5}p{TA*u09^=AsZ=eb;!CV{O_2FTkI80Y' );
define( 'AUTH_SALT',        '*Shap+FAF P1iY.PU35^;`|qh%oCB)>GO/Av73m6XkZ5<0ny+cM[zd9v.gj%x17s' );
define( 'SECURE_AUTH_SALT', '8&M&vOm@Fz$=blE:SZ%1:$6DX{!/.a>+fp%()`&H&m9c?Z#jDXh[/QP[13[]Me}`' );
define( 'LOGGED_IN_SALT',   'Orw~#PQ-4/z(8>%=/dSJJ%7aCNvf_X+`^3:j9?9ImbZi:ter[N=DiTmiK%JH/DM@' );
define( 'NONCE_SALT',       'Ee] ry ,/[H&}dUN&hsN>d!}XeiurVvVd(+[oyVXn!G[l`LFbf(YXi|F=P<BjB^5' );

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
