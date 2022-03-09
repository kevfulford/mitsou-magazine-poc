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
define('AUTH_KEY',         'IBGrTiNj+Wz2In81TIMisTv5WFp/8LG2Fj7obskTDaAgIS8W/jdykALgN0AaK91d+42CN9R3FJQAjnkR8mSbgQ==');
define('SECURE_AUTH_KEY',  'zdM5ekNCEwWgzC3bYDoG0agZrbh5vQMZMGSlk7D7rowdr2JeINo2ibEkgaa6kKD3PfwMYIfYl8fygcCD1WiN5Q==');
define('LOGGED_IN_KEY',    'KzYjj9VZM+IE9g0LyxMVgtu2MpqCQsUxekzoNDLT21tsn+yfOueGRqKXZ3MAD5Esv7sXa/q+VIvBgQnDgalL7A==');
define('NONCE_KEY',        'wsqSedt0p2cZO/4+Tm34Fphsll46LA1QNlqk84493ZsA0aCh2cn3nF1pOZqSRY/32D7G9QmkPJ137NpjR/jL/w==');
define('AUTH_SALT',        'Gvn4xwFGnnaUy5pv5YQ2Rx+KN/VuV56HvTJ5OnG7XMwk1dmusmJMQE8VC6A0OlG7O4GGAFXSxe8oIf55UgIk7w==');
define('SECURE_AUTH_SALT', '4fzvPJAx3WcgHaGos2mXEOQXqUkkG+Og5F+1tMs+uyIx2lwL+JkyYugLU2WF62gt3jrAXXYgGZaliuj5gX4i4w==');
define('LOGGED_IN_SALT',   'K7Hh8r06zUoqbBpr0KyuFzjGmzoCMOj8zqFuwPHN83A+bBb8cQuRnRX6G0voeR2XRGftBb/4ARbDrizWqVd0FA==');
define('NONCE_SALT',       'V0ZvD+cY4i2UX7SJz5NdsjKw8QfAH/7qQtTxtIrzVIsP9xKqDAE7fzNbstdjLXeNqg6k33O9B0yW+DSsJv2/GQ==');

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
