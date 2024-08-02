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
define( 'DB_NAME', 'wp_wordpress' );

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
define( 'AUTH_KEY',         'oXVNeCQhfLQ&8x$HB5u;Q<zUr{L_0|3nz3r%Z+|@*eQCki1w=~,v]LgNxF#{B^2w' );
define( 'SECURE_AUTH_KEY',  '{}IBxn&AVBzAY#[s7p`KQ7hZ9#)C?Wo;wUMGUg8(.4R=RvV8# l+3mxW)2IB:=N4' );
define( 'LOGGED_IN_KEY',    'L_ A;k339/&Y][]`+jwkL[}an.A:w}D|CtfpvYLMSMd%S~Pub}4tXR@QY91qaJo%' );
define( 'NONCE_KEY',        'VlbA5HI7T).%m5^yQqL0-[wBQ~C[oaK7yq`35%=Z$f{=?Qtw,?%<r0FlqL9(+?}C' );
define( 'AUTH_SALT',        'D`ui@z~o<OcnNkm-F|ffaq}+*P,`fA0fT`JWVC3#guCx3Pv^*r~(F}bV7H0}5y%+' );
define( 'SECURE_AUTH_SALT', '?W7J`pXB AuOz>o,YuacUyBfEWDEnmq1cJzIU0MGv_8MSFL(R6bD7+,L}@Fg_YkM' );
define( 'LOGGED_IN_SALT',   'K?r^u%c8j$|~,ufh>kVsC][%xPmo3*NZY(5@wr_P0c^g?(%[=>4:-H_ou*hLH<:A' );
define( 'NONCE_SALT',       ']_k7GNJ/OdDQe (DY,$qH97!(e~3W1OWg=%icMg@F5p@=l%nnlD*E|CY<{!/^E1f' );

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
