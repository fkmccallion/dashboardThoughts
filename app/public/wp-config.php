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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '7E7rC1R3PuUZfVUBbeFMx+feIZ5iQY6Rtpgg26fkDbVnpFyPRqyPnHCSy9fxUaB6ofBPVD537QR3v86CWWXoHw==');
define('SECURE_AUTH_KEY',  'GPkuiQYl7KBW0EYBi/QXhQWCVZTuuUn163646GSlW5DKPO/IvCx91UDBaAXpKd0DRLzuMrrF/q23FY9ivG7Ryg==');
define('LOGGED_IN_KEY',    'inFGpPqSy77AptIt5WB2CobeNV5mLRERPLSl5GhCm45bGAktt2LER6/SKiNV9xQi955EOdmiOFLLiqEL+9sFUg==');
define('NONCE_KEY',        'rZnfahrCAiLz1g3QBP/WM//5tiM8tvWzt5swIKmjtw8o7A7acdblfh5thYsIwqsVKTLwV9d7zdUcbz/G9Ai6TA==');
define('AUTH_SALT',        'o2pOCuZx38CTezIBzgGAPhTmTIhuI6+SKhTEM0RCe/3wEti39bbD3S3f3UVMM39C2yGCnRCrddb+PIK3UZByTg==');
define('SECURE_AUTH_SALT', 'TTDZt/8lK/WWJb9IaE6jE/qTsHB7qQ50POYiBEo11iSIqGlwSoXJ07kv2asYMuQiXUo1i8+JjTNcSNC2YT2aYw==');
define('LOGGED_IN_SALT',   'gnzlhPbODzt3JsH7z24J9lBW6Itx0a+5e/XY5+bMdtTZxPYG9aBoeQ59dLctrAUG+QoMl0RNaWYz8tk6Qz2H1A==');
define('NONCE_SALT',       'Beu8MqwsEbxweJ0okQmxduDeJohHIu7jdGoJbgjy7Z7rdmbyRsD4BVqGnOz6Wa4oZA8B08xlkGPLCVVmc+AAUQ==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
