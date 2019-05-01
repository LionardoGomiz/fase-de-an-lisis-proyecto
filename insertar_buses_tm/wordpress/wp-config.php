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
define('DB_NAME', 'buses_tm_repetidos');

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
define('AUTH_KEY',         'G>IKXm,+]j_]9#%b1+GXw5h7 )S3]*3DOAZ(v 4+/|>VE C`nYzj=1X,lgGMt*@H');
define('SECURE_AUTH_KEY',  'wqEZAD3eZm^`TK]a{17;OOQ</1!/]yOEGIHm_jkzmt3Yw5U+`_Gid^^fm7w.UK;=');
define('LOGGED_IN_KEY',    '{y`+f1o 2cYUG^H=K5S}sst#cOJZF8[97r-;CuQ-2LduxO=q[.LZ^jBp%61{gIf*');
define('NONCE_KEY',        'GW;_N`_gHv~8_-#,%8hV0t~&.tr;Oa1/=k~_;(ibA%*PT1RZ+}olRPyd+:FAR8aK');
define('AUTH_SALT',        'Oore3`N_`hA]hWX.:.17M.Q?>!FU1Fx,cW6X/m@n-Pj:i4-;.ry;G):&4S%A3TN/');
define('SECURE_AUTH_SALT', '`1bOj:x2]x~3*GwN6{[i{DCBl{ =OZc-JN5E1.%Awg20)a[rjSh+C5%@;K5Z;V87');
define('LOGGED_IN_SALT',   'WQ[~)p-N@wI$O=Q>EApjwO|SaM4;x`vML0 MM]L5!KArOQHE|w*j,&(t#a:a/y;R');
define('NONCE_SALT',       '.%YbmrlTgm?NfLF=[0QI+y D=1nh@jWU7=J|(44oODCt0$Wys!({d2*O5_ZQlzPP');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_vehiculos';

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
