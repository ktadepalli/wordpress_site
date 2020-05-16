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
define( 'DB_NAME', 'wordpressdb' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', '449Kenny.' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',         'L-NXWFfM%W1[`=<Pv}ySpTkG^}?*HsE9VdP)t=oUD!X[}3WjbFwXnT 6V=Dog#-h' );
define( 'SECURE_AUTH_KEY',  '!NtU-x`gKEX?&~v+U&*dO:.m.=Al2.aI$KUnBA^d6_`|}o,A|Jk/c5B%+p+!ZviN' );
define( 'LOGGED_IN_KEY',    'kEm2y- iiOk M6DI9^-K~%&3je&+|z# v_T`D~sL_2~-|vApg8L#4R7?}~l6:+j2' );
define( 'NONCE_KEY',        '<A 9oSZw}7r.!KmU~k SoTj+C:/YPY5qFQaeVCkiEmaz$A/{_&o .&I8Z`s{dY34' );
define( 'AUTH_SALT',        '6JbB::$-YT>Ok{:R:}vGu%Y[(^vwkZ2y4nqG-N^;)Cm5f{Z{-fh^9t+jyjCz.# r' );
define( 'SECURE_AUTH_SALT', 'pGGdZDw1m]_xLV)qc:n`g{%fhE`6<QbhBz;7eh*`r-rAlPZY(?(WQSsi-~aA8XzT' );
define( 'LOGGED_IN_SALT',   '#{I&jz;:3?LkU0)4Q+CZfCAqTl$Gpo,[v}+RJo!J|dbDEPLR@z%Q(p5KPV:p#@n{' );
define( 'NONCE_SALT',       'VQeEiQ}?%Q7f|O<U{DDa<9 .i1FRsON%Dqz,{_A_C,bk,M)q+6%*jFDB?P{lVnW ' );

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
