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
define( 'DB_NAME', 'ocmd_vsl' );

/** MySQL database username */
define( 'DB_USER', 'mysql' );

/** MySQL database password */
define( 'DB_PASSWORD', 'mysql' );

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
define( 'AUTH_KEY',         '_$B&<<FCGPb1v0etHAk7BjA0]4_kr!P* ^Sa^55|;.@:!:d8W.(SGg|uXHv|Reea' );
define( 'SECURE_AUTH_KEY',  'aFSmv}PZ9,BZ>_cf-G[&Oh%n,F>8qp7B=.$>) 9GQtc+8tn6Nr?v19mreD>c_zC+' );
define( 'LOGGED_IN_KEY',    'tG7 ]VuNKT6Kvt=ztEOUg~s`ec~N_9E`y?@;k]z*45jUOy2#k|CMbdiZayYFV9fg' );
define( 'NONCE_KEY',        ';X{rdWCm-6]wvu5LiNf9cdw]eH06AEI2P.yvY:7^Y~_jViNw,}}<p1[&:iAn4@qg' );
define( 'AUTH_SALT',        '&+g;.7([ZxXwoF>l:dt6q{mUwx=?tb5UB&Nn.Tt-](M(`{Zr{+SJj$ LPO!dBQaD' );
define( 'SECURE_AUTH_SALT', 'O:&W!sM!WpF)&:ec}$&1060zk#cE+K;!dpQ-h_v{(O>l[ia7Q{ G{,iTqH_YV|<n' );
define( 'LOGGED_IN_SALT',   'oafxCXwAXDPE9UN(%VmWVjvM8Ajnii6T9/>y3OYV;+9 ={LfhtWNLmX=0X@faAlf' );
define( 'NONCE_SALT',       'ox;IgQo qm#:,ajug/sHJh]=uuL)@<6Oy0%(V#rF;HOlp78~t*vN>|o2c :8`H.n' );

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
