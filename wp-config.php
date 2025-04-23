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
define( 'DB_NAME', 'Shop-Shop' );

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
define( 'AUTH_KEY',         'pB]ug#R*JzMO;7SRzDYMpUsPJ+9.0}h(mp~vUf 9dU+DQ!0%!~HtdB?3Rn]rv^?D' );
define( 'SECURE_AUTH_KEY',  'Hzn|+~PLwe!#HR;[e,$q70RjKm&r$Z`&BZ(/A5-Du~V?>Cn}x3-WXYaWIIZgCh*U' );
define( 'LOGGED_IN_KEY',    'SJy|FG=,bG+xJ= ZA]&}*8g7k7r?;+a%HcWjwU2i0-]x/h>8P]%ej=z4Be_t6=W.' );
define( 'NONCE_KEY',        'qdw!*c7y}&9Miy,|q0W1pUr,R#X5~+e^hYN0hDjy79TmcZq=U .^#S^zC0{1n6Z ' );
define( 'AUTH_SALT',        '&wtG{bK--}wt=)B3`U%C~`H~O1e9u)Odqs[YD@rab4xdUig>m,6MpCKp|$<><[YF' );
define( 'SECURE_AUTH_SALT', 'Cf_FpMTmQE}Y%H!7@m{IwFOgRz[`gZ)+mhKgVu]?;{:~z.pg6?pk@+$J/DadPIpl' );
define( 'LOGGED_IN_SALT',   'I8g)X5U3kGYFnS;S]pGrqejH>hon5EGoTFf02zz.gme3{o@?~9?iK>Pur2|-as0f' );
define( 'NONCE_SALT',       'Z@IZoG)S:Voxy`~@.81)wCReb|1R~f<Ax/{:5@gc8@g=TBa(Y;GO}56SV&nk|-8n' );

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
