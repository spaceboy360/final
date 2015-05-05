<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'chily');

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
define('AUTH_KEY',         'E4!+3]y$~6025J8Ij;B~yJ>V>m19KmwXA7qh|dz{HL~)|:Gb^;+<.Aqj(V>pN+tW');
define('SECURE_AUTH_KEY',  'A$Dghp]%x`-y@{5h2R|$]RV{WjXHq=/P`4X1Rn.g9&B+`c)e!q^H~MhWW1NakZ@T');
define('LOGGED_IN_KEY',    '$*E O9.qDwC|uywLcBr@rAJ*A!rr7-tW/yim,CM4sNP`74|<_er8{7-pvr|{;0hu');
define('NONCE_KEY',        '| 2f|BzAC/d MyRKf^M7><K&o3c/~0&be:MBns.U2gigF|$`T<)4<sf/iEZ9$^5)');
define('AUTH_SALT',        'OL&nA3eMxoVa6r|qD+.Ixd+=L]>7zKQ=ppm!wrAFt$I8UNb5-Q*t^HSs%Mp5&jU4');
define('SECURE_AUTH_SALT', '5{o()sBxOyY&3v1S{7y~xiuN23G| dirI&_BTXS4lytI Lz;4SOv59v82^>3E5mz');
define('LOGGED_IN_SALT',   ')F+;c9+YXVfz073N/0zN!U~8yPUF&-8AAH|rp;sX64$pJWh!67WG2:u-hr.<CT;;');
define('NONCE_SALT',       'hIH0;Y>MQaN;Cr||UjowS&Qb3$]FjzxVnU6rh9gGmqHC*x;.XN^{!iEd2$r@!2+,');

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
 */
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
