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
define('DB_NAME', 'jayesh');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'usbw');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'EA6tY:BlhjG/AJisn0Gk1sCF*Ny:;7!.:F&Bo3==#qU8![~7ec}Bnk]:<2s#)|QP');
define('SECURE_AUTH_KEY',  '()c1b{zYX]ma>P+Cz|cYSgeI9!c<|f|fAs!U*kUX:_+Pwq#4t[79=&bCt-&@L}9V');
define('LOGGED_IN_KEY',    '6V}V$V_kQaJK%cOR~69lV7wkLp&?v{dH7Ya#1w7r5|tQ{P$-dZDQ!`c,+.&23U?c');
define('NONCE_KEY',        'lk>_2>pR/GoFf7p9$6z>#Hvv%P5n_N1THtiV6+Sr8|)hUxH:s>0GpKa:8r~pbCRU');
define('AUTH_SALT',        '>6Ru>XkPfm)^+Gc!<Eh@[s2`aKB;]jb25%cmBF4]WmG.d^w95C>!`3=dKNXp7_R{');
define('SECURE_AUTH_SALT', 'dm*;2zi~+g:/h4dN=<&y9x9DH?`/ol.lZwPxUxVdncd)<$rw*8/CA7xV!N?JOs_:');
define('LOGGED_IN_SALT',   '=WhV}=om(50oSnj!46bHinc69&]gVF<FKtP7A(@HVY>t;2Zkga<,B)3:^++lh:vl');
define('NONCE_SALT',       'GHrGZ|1|hf*9L#FK=oE!;#ZJmPW6~|b_tPy2?)kVXWrQ[Y8Nn#V(FNnz/*.Hx1Xy');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
