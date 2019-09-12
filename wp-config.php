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

// ** MySQL settings ** //
/** The name of the database for WordPress */
//define( 'DB_NAME', 'local' );

/** MySQL database username */
//define( 'DB_USER', 'root' );

/** MySQL database password */
//define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
//define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

// add following variables secret variables
define('DB_NAME', $_ENV['DB_NAME']);
define('DB_USER', $_ENV['DB_USER']);
define('DB_PASSWORD', $_ENV['DB_PASSWORD']);
define('DB_HOST', $_ENV['DB_HOST']);


/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'ZymDi87QAqYgiE97053qIbGRenl7c8m4gnHjKuZjQuYnsSjm5sDsMXpcSra1fzpE1YRv7yq3bkogDhpKnR3M2A==');
define('SECURE_AUTH_KEY',  'VbynoprFtcGRol2v7aO/5gx5ZVEsve30OA2Kglwd7P1N60inE/3zohmZPrFjdnMxWafEWcvkZzzNsapeScbOVA==');
define('LOGGED_IN_KEY',    'NZFGqoN5AiGvlSUc2nSmDSxSdYUeQg435t2gbxV2G6CS5FPQbdxN/oJmkify6CgOKXPeJSdDYTfd1EKClX9W+Q==');
define('NONCE_KEY',        '7G4gFciR5gH8Fwiw62GwNewveY7NnqBKMYQeNGP/WKe03rc6KuN0AJkwUjitLpKN1z1dYZNMJqH9YbJw4jF71Q==');
define('AUTH_SALT',        'IDaFppFA4ycvbghQOAjmeRmlpTpFXkRCmQcLZ4gjjAiqrffQ1gLNkfZ+gWuqPdpsqRBmDJmRDSzLkQX021meKw==');
define('SECURE_AUTH_SALT', 'OYV+5D2g3e2aCuePFJoihG6pGOzVVeOq2aOqcROj+z+ZbQHjXToy0SSXXPa/xLQSYmKNlb+RuVNHtNUIwpD5hw==');
define('LOGGED_IN_SALT',   '/WxKoKR/R5AZ4yycswBf9xGoe1jyuQUD+CT6KtOJHBKvCMwJC/hfEMiwkhHS/wIomonvq1tnmE1UgL8gMrYjtw==');
define('NONCE_SALT',       'aJe4MmEGqpSwj9/AlkdMzyTig9s0O1pEVLR2NC6jzU1QarUek1VnygXqfG7paCPD4PaM/S3dlZ2A+nRahfD8xQ==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
