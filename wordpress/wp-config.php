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
define( 'DB_NAME', 'ch09project_rhudson856' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'mysql' );

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
define( 'AUTH_KEY',         'd%4e),] /,1P-Gx11p`1^Z+plR.N9B#){U>-Kb|dsR{@dwN#*v}>R} G>-5j>@K%' );
define( 'SECURE_AUTH_KEY',  'I(NyIfA>a $uIHP|EP1`#+XQ)zA}wmqrR8a$czN)@P?2gu)Y}Wj+%Sk^lmT4K.Bt' );
define( 'LOGGED_IN_KEY',    'VqH@%7cj3)MB:/{q>b!A3d/P*BD+DtKLiQ*c^CWN_%m<Owz(#|/5L4w~5~z$l;.D' );
define( 'NONCE_KEY',        '`|l>tIc2~C?gb._mK:H(*vs.~q+V<k[)LAXCLGZ4&KxfYGf)ESVfRwP,5HXA>VDk' );
define( 'AUTH_SALT',        'A3~G=nbs&-;5LN/Xec#+/:Wm+ hk4~?}y^bEP]%<XopIzUB.*Z JUlFgfQ`h)qhs' );
define( 'SECURE_AUTH_SALT', '4gDw?N<(T!l*e~T^Gq5Yb}%!9P~:pgl25KnqJ,t`k]45hk>??{^(Ot~%Hm(p%GSl' );
define( 'LOGGED_IN_SALT',   'sZ BPI=mAM=]l8FhV%oOKo-.oHzE=8C:9GKI|m$em#_deF&;(AN)aECYHyu~VW^K' );
define( 'NONCE_SALT',       'E|OUNwSg/E>oZrhLRQ&Yt{OO+k]<!OIH;aS3Y56-0d8wn[-Ik:MAKGn<n9>L#isW' );

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
