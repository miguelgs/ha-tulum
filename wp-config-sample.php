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
define('DB_NAME', 'void_ha_tulum');

/** MySQL database username */
define('DB_USER', 'void_admin');

/** MySQL database password */
define('DB_PASSWORD', '$V01d_2018');

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
define('AUTH_KEY',         '=GN_K`F$<jAcQe<Q-+3f}J]_BMR93dce6nBBXU6[x#:JFzDE-PrFDy{rPk:vb|D,');
define('SECURE_AUTH_KEY',  'd)J:WLhlrhavd@,@$n1|^+y]/Yw~U{*iblQ_Lc%ApRHnrEQ,rU<43;r[g5Ju<{T,');
define('LOGGED_IN_KEY',    'Wrl-)/d/#iAb77>E 1mqQm~EEG-[tP75!P%t%*X* Bq(|HI~$%Px0J/bOT{W1J+]');
define('NONCE_KEY',        '<^|0&K.Z*H/p4I5my(7d#25b/fwFEp-:tPGy-i.4-hh|z,6%_csr$-R#qTgUS8(m');
define('AUTH_SALT',        '+k>>FL;Y;wYTuMM5}UZU&f!$cHJHT|(P&jj3;]?|M^M?#c sV!6.aUIbQ!6e+?gO');
define('SECURE_AUTH_SALT', 't.Uu QJS_sfF-V4Le29/PNJ<#M)]1XXpu*Vz;eH>[#:)YmAf2F1=hbXi5z%< dt_');
define('LOGGED_IN_SALT',   'ay;-(nX8+m|^pl]uaS:-E$|y}2>4f&PzPa0c=weUZhIqevK:m4n*um2OG4L_j~I>');
define('NONCE_SALT',       ' GurE%SbUgowa3uZF~cK0#]>jODN$R*zh}KC%d<%vr9n9:g$vBYL:(ABs^F3)0w@');

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
