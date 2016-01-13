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
define('DB_NAME', 'bdcongtacsinhvien');

/** MySQL database username */
define('DB_USER', 'userctsv');

/** MySQL database password */
define('DB_PASSWORD', '3fWUJR');

/** MySQL hostname */
define('DB_HOST', '192.168.1.22');

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
define('AUTH_KEY',         'tJPE mgEUGlJZ4Q0!I<aV;:}fMeI<SJ3n4+$l,C44<LQ|LstG>mt6(G#auO$@QL.');
define('SECURE_AUTH_KEY',  'Zd[vT|_ln:H(1_@u^OmU4P05])J(*u24a[9tNK[mGq+0|d/P%~CC+~.TQQPho|EI');
define('LOGGED_IN_KEY',    'V`Jr|},1y,u,w{#)`mZ0}4)E0P;PE]NKcbBa?u0M0<+&Z=nVIZHsullxufOGa78j');
define('NONCE_KEY',        '4e+c&w1F a@]omnk0:>7@(??5I.C9$eF~3{19_XnpG>8Q}v(H>h)ZbozAU-oS#Qv');
define('AUTH_SALT',        'RFhV!ub4C|[-!LF/$(!=kb#O/@C|!B[=2!K2KA{1<U8|0&a5zs?a7BBFH`K:mkD$');
define('SECURE_AUTH_SALT', 'kY_#.3QC8 ~,[}?xmu1E5$+fY;YHTD5ktFmm?X&.|)?o6fS}D^>OWCF]!c|nK;!}');
define('LOGGED_IN_SALT',   '1+HM]gHyvs]s8pHE{uMYY)Be,[,g)^;{c|^-7|3%>or;G*o;b/GuJUcd|Qy0-?7t');
define('NONCE_SALT',       '0=6tFsnYDv^dL9F!zC8WmX[<au-pn_+<]h;]jyLM!0CEnP?dM .?f:*(X_qXatT2');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'ctsv_';

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
