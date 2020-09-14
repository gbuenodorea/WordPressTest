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
define( 'DB_NAME', 'wordpress_db' );

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
define( 'AUTH_KEY',         '(23WAsxH1-jr8SMbSYZ(7@0^-k:S?rVklF[O1tVYEqujry.DPK4VoW1qA#OEPSwe' );
define( 'SECURE_AUTH_KEY',  's<vZxe3Il9^e<!J16[@|^~IYNi6M2JbD~ZXLXLOn$k{1t9j_x5YRdUMe/LaQ4@$7' );
define( 'LOGGED_IN_KEY',    '1xT*dl-]NHr~kNg}m4BK8!2+ec0_j|X2*/wkaAR8wPrxPI&==]iA8CD6(,qvI4p@' );
define( 'NONCE_KEY',        ':Ux??6Usb&^Y57=0>};>:)o4[!@`B%Y0~XMe8w&6/WjXFWGXVhNznbF_Tpp0zFOw' );
define( 'AUTH_SALT',        '[]ul fst3i)U]~>ttQFNz&DkI{n[XaByszohEu/D-{/hm<l>_vgkR#Gj#-gz61*}' );
define( 'SECURE_AUTH_SALT', 'Un4k6AS36L1:jou6C@uv%-lL=GWxIfHub!0/uzt3Idjlw[](b7|1WGK75X=s/;Dy' );
define( 'LOGGED_IN_SALT',   'v-$R+&u|5L<qW)Z9<sjEPEEiDhfLksZu+~@!3O70g-}*&^MJ5?SS5.>NO*,7(Xd_' );
define( 'NONCE_SALT',       '_rh.#u=D]:>fAhM.:`Y?@u%Dq&E?g[;2>/0m%lIap==7z,o@7*`?&{Kh#w8tucnp' );

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
