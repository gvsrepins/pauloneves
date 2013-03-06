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

if((strpos($_SERVER["SERVER_NAME"], "pauloneves.dev") !== false) )
{
	/** The name of the database for WordPress */
	define('DB_NAME', 'pauloneves');

	/** MySQL database username */
	define('DB_USER', 'root');

	/** MySQL database password */
	define('DB_PASSWORD', 'localpass');

	/** MySQL hostname */
	define('DB_HOST', 'localhost');
}else{
	/** The name of the database for WordPress */
	define('DB_NAME', 'paulonves');

	/** MySQL database username */
	define('DB_USER', 'paulonves');

	/** MySQL database password */
	define('DB_PASSWORD', 'hW423Y6F77l49!');

	/** MySQL hostname */
	define('DB_HOST', 'paulonves.db.10311224.hostedresource.com');
}

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
define('AUTH_KEY',         '@@Hcp-FR**l$v:Wte~HloQvH*6;-UVNN0uVkM^hPu6-<Lybf|qCZ?p2ex!ps7~Ke');
define('SECURE_AUTH_KEY',  '1-|0n NPlX!o! B6o[}nKM=!Zb2#NZ2v_V6ZhiD(|kL}k|zZ[s9d(M7SeD~zj2N6');
	define('LOGGED_IN_KEY',    'P]HWHN$^>`&%G~,Fl0.^Y`r`|PRR-9)}0X~v~j9YtF$o7G2@-|46.:4q-{_)|GRf');
	define('NONCE_KEY',        'q?uh--5eCjNdYw+|d/<awPTF?%P`UrY8c$Xn@X+&N)XGGT( rIwIwTNqWsH{V,_*');
	define('AUTH_SALT',        '(t0:9)%(n-Ba_`_n&8mH~(Lw}gzyN`P%[|lFY;NWZGd1o~A%uGarEyMV:+}jxl3r');
		define('SECURE_AUTH_SALT', 'x* p30YsWR#cz,v6=yW+~fuPc_Rr/-.[71+e]b>T#3K^Biq%K^h:$WT7>mT+/n6F');
		define('LOGGED_IN_SALT',   '#<?+d2%K~th~8|DHSkrk[em)mu~K1?| T71hq+%[lw%=!r9ka&Oh0/vy`GqP-&bT');
		define('NONCE_SALT',       'w,S@36m`qmKMb:;p,cly7,1i&{ A|der&S@HRVY70~3sP(DeZn|  x5!1=.8v7yI');

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
define('WPLANG', 'pt_BR');



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
