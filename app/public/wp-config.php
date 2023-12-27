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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'euU*i}rn<8!y=o`?=$@`y?lWqx2/=@26UDN>XszPvBBSivHkUR7wUuh 8tO%5[<_' );
define( 'SECURE_AUTH_KEY',   '.xipIMFs3EqmMB&SF4cwXE|nJ]>5CWw#1=tz+{kMl![GCw/tGvzp P+b7zncWOzW' );
define( 'LOGGED_IN_KEY',     'XbyF#!{;a,44h~2(N;g0}[NYfmq?lL`<.BzHs1YHKu`q#[(R)H~.XXAwOWE;v&F[' );
define( 'NONCE_KEY',         '+8wj0 !PB9@*GnG)AWS[s)oL~%y.$4f8y#at ;&nWl4iY<g yphL9)L%qvoiTB<E' );
define( 'AUTH_SALT',         'd=,UctcjU3jw%m/)ZSUa2vEYa]_ H*| ]v*6I29Jx8/A$A:xJT*:KYi<Z0=4Q3qs' );
define( 'SECURE_AUTH_SALT',  '$boVQps {x9P=e2>}<TdO{R2?cYzN?BW7g3ZD=f(Ft2>o$ETSahs:F.~JDZ5or^Z' );
define( 'LOGGED_IN_SALT',    '$ F=nfdf4pV}>X 9{%*eRxAW=9q0|vk*[k#De!pw#69TVW<iu}{ rR}&V>}i;GS+' );
define( 'NONCE_SALT',        '<6wSx}rOC`((Jn;=]0p[HtSY%!pjt_W%tIpdq<FTzzPU&+,ezde/[0t`F;Ey`&H$' );
define( 'WP_CACHE_KEY_SALT', 'HiRhITY2eG.(c-GW*%35a}ApQ=P#YoN{nL0,4<$h6$;WX!Y)Pwk=FOm)g%6MY!V.' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
