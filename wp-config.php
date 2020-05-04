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
define( 'DB_NAME', 't-002' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '1QAZ2wsx' );

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
define( 'AUTH_KEY',         'LU{ai@|_NVxhDoUIer,+!vy{x2&~Bx/j`XVr{b`g{v8r+zfASrY>Yu|jX.}@WT2Y' );
define( 'SECURE_AUTH_KEY',  '6C?YaK6?>;oGBY;I#yZ 2E20a2FX^9#(MVS?{c>A1QPZH yA]M0(roqp]y5i1ZB|' );
define( 'LOGGED_IN_KEY',    '(`4p)q(JcOSl;9Vcl}tlol` *v@lvU:~<S8PuFeP*YoxdS?bo5`5a~W4-H.*L0O-' );
define( 'NONCE_KEY',        'HCF.<!^Zjuf;lD|Q>;N0hnb/rev~pB QR,kN=0hSqy|1=hRm{]7Z6/GMiCtGO@T>' );
define( 'AUTH_SALT',        'RDMlo9nabXzMMr9I:S`R@)m0(lHEnj*(qNE8PE[68I0dl5s(k|9%KtQtpzN4|.MO' );
define( 'SECURE_AUTH_SALT', 'b.jBZDex,H>nKvXvsf,7{s=7:]`*NB>E,gG/*1^+4;8yV:iJUxNi%nFZspHohwpV' );
define( 'LOGGED_IN_SALT',   'W+6 Imx6 #o#gDLR !<<(TBMz|ciemTA!X%pCEbmbYJ`*+/vHXyfBIz U%tN/RC}' );
define( 'NONCE_SALT',       'u]H0{8g)+FcF[*82;7L?tq]}VJrJn:]|Lj*F4M;Jd/+7FQ^!OhUC!deq:m0HWgg<' );

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
