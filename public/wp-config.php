<?php
// Stolen shamelessly with some modifications from Mark Jaquith's WordPress
// Skeleton project: https://github.com/markjaquith/WordPress-Skeleton

// Load composer autoloader if it's available
if (file_exists(__DIR__ . '/../vendor/autoload.php')) {
    include(__DIR__ . '/../vendor/autoload.php');
    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
    $dotenv->load();
} else if (file_exists(dirname(__DIR__) . '/vendor/autoload.php')) {
    require_once dirname(__DIR__) . '/vendor/autoload.php';
    $dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__));
    $dotenv->load();
}

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', $_SERVER['DB_DATABASE']);

/** MySQL database username */
define('DB_USER', $_SERVER['DB_USERNAME']);

/** MySQL database password */
define('DB_PASSWORD', $_SERVER['DB_PASSWORD']);

/** MySQL hostname */
define('DB_HOST', $_SERVER['DB_HOST']);

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */

define('AUTH_KEY', 'put your unique phrase here');
define('SECURE_AUTH_KEY', 'put your unique phrase here');
define('LOGGED_IN_KEY', 'put your unique phrase here');
define('NONCE_KEY', 'put your unique phrase here');
define('AUTH_SALT', 'put your unique phrase here');
define('SECURE_AUTH_SALT', 'put your unique phrase here');
define('LOGGED_IN_SALT', 'put your unique phrase here');
define('NONCE_SALT', 'put your unique phrase here');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';


/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', $_SERVER['APP_DEBUG'] == 'true' ? true : false);

if ($_SERVER['APP_ENV'] != 'local') {
    define('AUTOMATIC_UPDATER_DISABLED', true);
    define('DISALLOW_FILE_EDIT', true);
    define('DISALLOW_FILE_MODS', true);
}

// ===========================================================================================
// This can be used to programatically set the stage when deploying (e.g. production, staging)
// ===========================================================================================
//define( 'WP_STAGE', '%%WP_STAGE%%' );
//define( 'STAGING_DOMAIN', '%%WP_STAGING_DOMAIN%%' ); // Does magic in WP Stack to handle staging domain rewriting

/** Automatically set paths */
define('WP_HOME', ($_SERVER['APP_SSL'] == 'true' ? 'https://' : 'http://') . ($_SERVER['APP_WWW'] == 'true' ? 'www.' : '') . str_replace('www.', '', $_SERVER['HTTP_HOST']));
define('WP_SITEURL', ($_SERVER['APP_SSL'] == 'true' ? 'https://' : 'http://') . ($_SERVER['APP_WWW'] == 'true' ? 'www.' : '') . str_replace('www.', '', $_SERVER['HTTP_HOST']) . $_SERVER['APP_CORE']);


define('WP_CONTENT_DIR', __DIR__ . '/content');
define('WP_CONTENT_URL', 'http://' . $_SERVER['HTTP_HOST'] . '/content');

// ===================
// Bootstrap WordPress
// ===================
if (!defined('ABSPATH')) {
    define('ABSPATH', __DIR__ . '/wp/');
}
require_once(ABSPATH . 'wp-settings.php');
