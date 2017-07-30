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
define('DB_NAME', 'teste4rodas');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'K`|l 1U8hR<7%0@5RL=1ZqG:[F?WM]2~;tFNdGEvOf>,Q+ow #SCy&?mok-(<L^{');
define('SECURE_AUTH_KEY',  ';E3r;VWZ0)R9V@S%E:96:C[q.~PnE7&fu+,m8fLy<vw0MvLLWmWzp=|uK(7R`fw*');
define('LOGGED_IN_KEY',    ':|SqN6YF/m]Gg[r.x7YWbA-$.?X_kU4CV7(*lr!0=F<SrPbkKSKcsmP6CQY&CS6s');
define('NONCE_KEY',        ':llcqC0m%s?@=x(P!<E3ykC4RvL.Jqe@gxQ?YBZiyv`4+s[fw]z9z7Yt+8Us3dpP');
define('AUTH_SALT',        'ahE98F(n&3VzD.#PjT-[XMrQ, HEhQ*.Jjlc^,znb>N7qdqZ|Fb,Nx&`3G7/VsyW');
define('SECURE_AUTH_SALT', '!R6?xSQY? yYNVdU)gJfkC=PcTe8+jAJD1}d>DPX(/Z0v(mMr6e01+b.pfxj(]0O');
define('LOGGED_IN_SALT',   '+:g|Dz7t+}emHZIes9g}T]FO.OffK,upNv+3fu6)R{>*Yp)jn%va0b1]<!@d,{k<');
define('NONCE_SALT',       ';B=KWn1c<YW9sl#NI^f6B+JX[xch*3qf:@+/Kr+TD0wL7F6=7Z*WQjmyFubs53?<');

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
