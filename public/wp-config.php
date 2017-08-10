<?php
// Stolen shamelessly with some modifications from Mark Jaquith's WordPress
// Skeleton project: https://github.com/markjaquith/WordPress-Skeleton

// Load composer autoloader if it's available
if ( file_exists( __DIR__ . '/../vendor/autoload.php' ) ) {
	include( __DIR__ . '/../vendor/autoload.php' );
	$dotenv = new Dotenv\Dotenv(__DIR__ . '/../');
	$dotenv->load();
}

if(file_exists(dirname(__DIR__) . '/vendor/autoload.php')) {
	require_once dirname(__DIR__) . '/vendor/autoload.php';
	$dotenv = new Dotenv\Dotenv(dirname(__DIR__));
	$dotenv->load();
}

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', getenv('DB_DATABASE'));

/** MySQL database username */
define('DB_USER', getenv('DB_USERNAME'));

/** MySQL database password */
define('DB_PASSWORD', getenv('DB_PASSWORD'));

/** MySQL hostname */
define('DB_HOST', getenv('DB_HOST'));

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

define('AUTH_KEY',         '>sNBi4j1pnL+|zZ!Ex:[oOGW 3|&CqA?Oq|^|f4&Z`beyO:EV]o-YeA)[b&,|@:V');
define('SECURE_AUTH_KEY',  'm~Rt,8?,d:S=PCpyaV&}Un`fvX+70#o]CcO-UG+t|NKveE*?rM*C6VeSa9fqi:-Q');
define('LOGGED_IN_KEY',    '~wv+k7)=C?$;x70@~)a :cy6T*B,fyhhZI+bdR_*#H)-[FSXTrx{|Y$|1Y&)U~Pi');
define('NONCE_KEY',        '08]G+|~G*S-KHUyaqcE[,kuA1yGMh_`{|a?<&R@EUw$l#0sz9O4.{;i%oL%yZeI(');
define('AUTH_SALT',        ')<8y$> )^A`h-ESm!(m1O.F)w$l0Q})#t+p+l{}$K[iOH<o>l VQ?F2XR?z,q5[Q');
define('SECURE_AUTH_SALT', 'ZQThhO!$n*9UK 5L,,,J=j1l2@}B37y&T;=RJ|u/<y`t;$LF}0gM^Ro+)*_FAj8=');
define('LOGGED_IN_SALT',   'V`a83=i+ws=h{bl-.1E+7[uAySHvTil&!><C<+G(&b]lq|G}G?R,Jn !l;bvvtgS');
define('NONCE_SALT',       ',6H*%Pg9Qkk<B4NYk=XrIvGxqn-B}:a920i!*|hM5+C]9u]t;aj|is$/:cR7W28n');
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
define('WP_DEBUG', getenv('APP_DEBUG') == 'true' ? true : false);

if(getenv('APP_ENV') != 'local') {
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
define('WP_HOME', (getenv('APP_SSL') == 'true' ? 'https://' : 'http://') . (getenv('APP_WWW') == 'true' ? 'www.' : '') . str_replace('www.', '', $_SERVER['HTTP_HOST']));
define('WP_SITEURL', (getenv('APP_SSL') == 'true' ? 'https://' : 'http://') . (getenv('APP_WWW') == 'true' ? 'www.' : '') . str_replace('www.', '', $_SERVER['HTTP_HOST']) . getenv('APP_CORE'));


define( 'WP_CONTENT_DIR', __DIR__ . '/content' );
define( 'WP_CONTENT_URL', 'http://' . $_SERVER['HTTP_HOST'] . '/content' );

// ===================
// Bootstrap WordPress
// ===================
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/wp/' );
}
require_once( ABSPATH . 'wp-settings.php' );
