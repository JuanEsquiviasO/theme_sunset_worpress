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
define('DB_NAME', 'sunset');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         '3-m9y%F+e[oA9C:WX`|{pY`j[~BFq:SD1<}SU> UPit_g-kCS@XuLW=mkKNIt{vb');
define('SECURE_AUTH_KEY',  ',YHBxbeA+M`xgPU1R2V*@K=Q+/`Me3I0S62n5_rkkO/n0SEu|#cDY,`m|WvBTG3*');
define('LOGGED_IN_KEY',    '|;#u42ju19=:8zRu,~$x|HDi `eIi1jB0/buAr6rj<cm:~]2fc)R1OrFiV0HO]x1');
define('NONCE_KEY',        '*_~_q)KmJDt%m|(!E[1xea0>ElI:hsjWeUAWSIkRpi{m6sA:t]58-h1x{|!M~N@1');
define('AUTH_SALT',        'CJQP7e-E[{]xTu^Z[FY95h_-Ds b%y-w)U|vTdUiS98=clvPLf|g;C-Q>fzQ+><>');
define('SECURE_AUTH_SALT', ':a6u7(Q|b<yM:Z53z:_0!}4B>pJK;K,d6(^OnK//L<m<^^nMyj=gM4P;+wtOtEI%');
define('LOGGED_IN_SALT',   'Qo|.Z3{7wu*La$k+i$xeLC~8 _f ?-W3GgNWos|c@|kR,+!|=~( /Aa1 LCF~DX-');
define('NONCE_SALT',       'pz{--;a1nN HSfSdl!DM+8XH9a0fFaHm[0zszi,t=YT1xwiy-3{ok)?Af6K{BE@W');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'inti_';

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
