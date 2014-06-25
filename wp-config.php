<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress_dylan');

/** MySQL database username */
define('DB_USER', 'drberst');

/** MySQL database password */
define('DB_PASSWORD', '#Dancers1111');

/** MySQL hostname */
define('DB_HOST', 'kellyfor.startlogicmysql.com');

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
define('AUTH_KEY',         'd*sE.d0xX-k,QDi,[bz~j^zcY&_*p#kIIT~>v#5(+CHDnq=C[|2i||%@Ux4Xr,oB');
define('SECURE_AUTH_KEY',  '{GO7^xb~!dE[sK`bbj9HPqK{D3;`De_ ?q*B,qSV6g%v}+CzW!~qmv-J1&3s7@bx');
define('LOGGED_IN_KEY',    ']EvH@)7W*I/$]U#uQL-I*L?*2KfHf7gXq9h,Vp3C@e)}e++B!<qI}o=#oaC!:|4[');
define('NONCE_KEY',        '3(q|,b~qjDCh3OqEL<`ZcbaYC_CETgN(a_Wdk;rjS^nq`iCx8p{@FK$L[aE*mIht');
define('AUTH_SALT',        '5c_g_x7,:Kg-_4wg-O2LXH%A`NH~*2w!oaSu}q,j<B:=6Da4u?UQl:#I@-FA4BZ8');
define('SECURE_AUTH_SALT', '{?1U*G;B)dO23}y20,FML(qSBOakuIAf7-)#X!0_PCt.7/#h]I`(pOM>Jzv$(6bd');
define('LOGGED_IN_SALT',   '&fT>0Et=0>-7J,xD[!wZZO.#d8=fYCFI|yBg9e8@pv?d---?Lx16]6+G6Bdl&p}Q');
define('NONCE_SALT',       'gm[Du&O>y*f!(&;&:0uAu3dlQzX!VqpR5oV+ACU+LIuG]#?}Rr&ePY@ 12`DzeBB');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
