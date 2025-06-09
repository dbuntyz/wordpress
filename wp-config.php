<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'jbugduzc_wordpress' );

/** Database username */
define( 'DB_USER', 'jbugduzc_admin' );

/** Database password */
define( 'DB_PASSWORD', 'Mg1KCd%K7t1#q@L%' );

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
define( 'AUTH_KEY',         '.ofT*&EyxQLku]`^O<TKNV%s.{@D}gs=.^*O,?B~:WWlfL,}MxM%KgH!XqN]d]H!' );
define( 'SECURE_AUTH_KEY',  'U#)2t1+]=NK/5?XodES68G[d}ba,(e!cqbK&SMU_NqKG$A!=>OuWDYx[:{A=@VLO' );
define( 'LOGGED_IN_KEY',    'O.{/z=Z`kL)nenKs,s0op3F@l6_%)Hz_BYsnc)pxPml}^!f|{otl1E5<T(Sz>Y|k' );
define( 'NONCE_KEY',        'z:0D)ail*=W*y/Zf[?^wRXV,J[;Fqwe``E7P$(|IWr0PTaLE:I C{;YFf)pE+II5' );
define( 'AUTH_SALT',        '&&yEsg[l5mP(]3`b{r>KKSFwe}]LfH<{39U5]+[3NJ=7tx02y[Nwwa:gkV/ d4J2' );
define( 'SECURE_AUTH_SALT', '1@K$a5v>uCAKtm3E<$bY)SZ4||qy}WJ.iZ^z(c4q/LnlL+YLs$x[+QIww+348d-,' );
define( 'LOGGED_IN_SALT',   'K+N6r4zt]WWkD`v6I6ku8;d~zj@,k:SWnJl=-$*Eho4X[(DP1o8ER7X%.GPMuT>B' );
define( 'NONCE_SALT',       '(vX=xHmqF[@g}E+$PLuJ>1KYb@B,v0?s6c<:^.qea%k,KFC%(5j>Q#^AFb+MqrRJ' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
