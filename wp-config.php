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
define( 'DB_NAME', 'wp6' );

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
define( 'AUTH_KEY',         'GE <~fXBfTPGtcfl&(x2-2XUAn(7q%e@;FJiBQmCmHJ+Xs@&q1q_TS?Ejj|rDYa>' );
define( 'SECURE_AUTH_KEY',  'L`(4:kOrT_T;ZQ>WN-{0;vg]HJa3yXwMHOY@sw<yIXG(QK.blsCo[PpVwJW7Ay3q' );
define( 'LOGGED_IN_KEY',    'u%{kfhvcSCe`.q%gdL[<NiGE6u:-Jn>[.e:6uS.>7SF.&yw68kL)PK8)FW}{oU}h' );
define( 'NONCE_KEY',        'zQv:,x37,`q=X_gDl}*4`~vAb?s]OBk<)x7%-PrVkqSgKirg?15hD,AiVu@*6r}U' );
define( 'AUTH_SALT',        ';?p&>PFg-V[X ;=N>A@NHWmR`L+I(N?w@>U,Th+zma/`y-2d>Vh}#}iYD,Jmtx6U' );
define( 'SECURE_AUTH_SALT', 'ZP,I7hE8*@+p8hYN=-sKkpAJ;b8|O$o^M3DF^IWr<b1xi?Szp*e`,1(aFca&i_K ' );
define( 'LOGGED_IN_SALT',   'L%Oe-:@p=+?{z/1XifKz+}^*s)JdH2/qSV>;8 L$3[1||mrfg @D@1/!&aA/ 49:' );
define( 'NONCE_SALT',       '|ljo*36qFYkd_][60qI7Qn2*cZ(zYA$y3*1_hv#soQ5,nC[LeCkCOkz0o*bBz/vv' );

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
