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
define('DB_NAME', 'pure_db');

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
define('AUTH_KEY',         ':x&G%Wu:J*G+Ni^G6EL}eUq.w 0]bk059WlQ,_TSM[Ymii3ozKq/ A]3}|ueFb`*');
define('SECURE_AUTH_KEY',  'k#bDRr$N:.}#laPXwax(RXA8&Fv4lUI!8WjeZ+gxdH3NqhxS3 5{!;#o$0<yP*(:');
define('LOGGED_IN_KEY',    're-03!Te6qKziMe}yA]*c-joA/;9g]MV0Z@=l/f;s;!36eLMa@B?Yi{y[60*/Kx ');
define('NONCE_KEY',        'gdAbB4WZz&P<IK9MDdW-}^5IvsKx.o5@RR&2wt)gO_!eZHbgIc/BL&  ,>jG]Y%z');
define('AUTH_SALT',        'cN/]Xri5E<T}S2kz?|??=W^A,EtM{bHqF<C1HnxGv~gFakp7}IwsNHbc%w)8^reV');
define('SECURE_AUTH_SALT', '[:n@%|PAzK0?Bc SuQ_=+1OFjeBp*nGOLLtqpOVXer!@2E-qV*18GI}cZbg^F?Vg');
define('LOGGED_IN_SALT',   'ssG)r.%rMq&IX.hQckD98G5B]vXGO6pn%-{G)B^<clOUiUp;jQ-Mu$U_>m@vn2#{');
define('NONCE_SALT',       'g.zVOH|Cs&yfLo|])8<3Sa:1/3jLPS z8!}{Tp<@aeY[-Q/TU.(P<^k_EImgD~Jw');

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

