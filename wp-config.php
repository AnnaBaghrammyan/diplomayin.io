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
define( 'DB_NAME', 'diplomayin' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '$_+&i.iH(KD2m^}7Il }%tcN[E4LS3gXcNX[l |=9wQkDsI<:E{}Y=(4h&2l4qtY' );
define( 'SECURE_AUTH_KEY',  'dBF?;8TYzu|jHM^`17bK73+AH KL2wCiZ*3C.+DJu_!{ZdjU0I 8~=CTef9=rF;=' );
define( 'LOGGED_IN_KEY',    'dAM5lRx0D9tSq)@zl3*ZU}?jLIiO[tbj![3DWmgUzmfy+kOY{^v=<:E!{hXl,~3z' );
define( 'NONCE_KEY',        'K9B<2>U47i!_]bYmam(_#a Q/;5S`7u?CdNE5sB%zihb&HHAtHs?G5)6!8y_s,~*' );
define( 'AUTH_SALT',        '1eS9C>Ibp=-OLg<s6Q)E;}-ZyJo@ srO_< Wv:a:SO[[v_CcW1sBchWec)(xONv>' );
define( 'SECURE_AUTH_SALT', 'E1cNyxa4*;AQro%y$_*3i:->3Y@bxie08N+sBy#}q#@BtqOeM>_:4tlB;_&A6mi`' );
define( 'LOGGED_IN_SALT',   'CNv~$^0*UCL<Bo=8awK;EZO C}u<3yooD8-+lA@K$Kz>D}Z-JP#Eplm/@s[Np6Jh' );
define( 'NONCE_SALT',       'LZkuz|ty[9Tm6XzV3O8QE_XN~T<Qd1D*9xoqVUL(j,jil,s/:2[hbPV b(<m^QT^' );

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
