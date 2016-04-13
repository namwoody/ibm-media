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
define('DB_NAME', 'ibmmedia');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         'JYXQQmTJ=3JfcMN@C;fx-$yvc}WN-@QoM0Rf8Lsfix_v-a&uv;_0 aW2^g8QS-<I');
define('SECURE_AUTH_KEY',  's;lPMqZ;HFJDGDV<o`6q5[EwKD%Lde%KBL!%gIg]fq)da$F=pxi4-jqB/!CR^TnP');
define('LOGGED_IN_KEY',    '_]y:^YnJKh~8Sz=*d5$0#cETCtS:c&c&||+u-3$_#{ 5Tl:~pxX7YNUpSNyic@oZ');
define('NONCE_KEY',        'a*jpt6>W1-,6u#OQS}0qdGG)?o(PCF8[`mv>>d?ef1XZFZUv/HcbIm7,VpX?|{|v');
define('AUTH_SALT',        '&]OyEm XC3a|,u-iaDK-3W~Z>R>]b(PF;s((0}QP2Qb`]=aUAm}6T`}|;SK3Celw');
define('SECURE_AUTH_SALT', '8eENlQY/gcKTm5 Q*W99z-[/FjX=R>$uZ/Ov1f[uBy.jJ)Dg^^SPMh`>h8iI1vDD');
define('LOGGED_IN_SALT',   '|9h+i_hwM-rs&1ZKx:~jW6}Vm[#G!qbk3!&P6S/b<jz {Y[+;I-|AA`AXE AF;k4');
define('NONCE_SALT',       'Yv$+y0BZ#{i-NoL#`#u8HyY!ZXs1M$AiMP4ocv|3H!-@@nobMN9w=VABiFT4nK|>');

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
