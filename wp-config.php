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
define('DB_NAME', 'cthulhu_bestoftimes');


/** MySQL database username */
define('DB_USER', 'cthulhu_bot');


/** MySQL database password */
define('DB_PASSWORD', '595escape');


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
define('AUTH_KEY',         'Fs9n5534-}{eB.(U*4|s:Q(|x-px BcR8W*#6+D!G.}FMR}&u }RH}>J#_WY@2cd');

define('SECURE_AUTH_KEY',  '&p-KxTQctyX<E&>$;Z=h8K`I;jmI<;^I#!+o:+LeB74HW-@luE@ O&to/6y.=908');

define('LOGGED_IN_KEY',    '+,9~b|3[c&)ZxB^Wid$Phia-N+xIFPAkLxNbsE29. `{hOAh&(|g$-rBZ_5YmiO9');

define('NONCE_KEY',        'w*KCa>w5St/M]Y=8isZa#EijN9cF0pYMrUla-cyp|.4Eya+A$7$)mhpZMu}PvrU6');

define('AUTH_SALT',        'F~$a{46%lq!@cVpceE.$&|bSi?wR -7oPh}ZA<s#9B rxJUXemzd<x@a,St!LqLC');

define('SECURE_AUTH_SALT', 'E,&=*)|0Rp^%+L#SG9^Ze+o<zx)yTrj_A.ui8vR/D(A}#;ulcV,@:/W*YXV3 >zK');

define('LOGGED_IN_SALT',   'a/s<gm}Hnq*Pf/wFKi#`7V}J2*e7B>Lw.V-=PyW7x&.g4w9?Axv&E|Sl`X:|;Xkd');

define('NONCE_SALT',       'iVeRvg$6htn-LaGa5OP7DuOA`ZI(>M%F5S6yDVkx,*VL@^iz,[9nK#^I<*-[%3Q9');


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

update_option('siteurl', 'http://client.marksleblanc.com/bestoftimes/' );
update_option('home', 'http://client.marksleblanc.com/bestoftimes/' );