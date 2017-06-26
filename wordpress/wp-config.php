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
define('DB_NAME', 'wordpressWebResearch');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'pass');

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
define('AUTH_KEY',         '<KLv(~BZQ.8&3jwoWZvg&P9KcKFf+bua+cv)-RJiil;Lx(Y-1_XH;z^]e$DEE/MS');
define('SECURE_AUTH_KEY',  'e08rx-OG!k~smk1FQ1z0Sv;^#1Z5h&nKWvQ}NKJt[1ws{B,}Z SKW0Wo3!2o4Z(W');
define('LOGGED_IN_KEY',    'naF196rm(j9xa(iN:L4#G4)g9qGZq-mte#gYPOg~JuZn@bni 3m5KcD%t5)~t&f8');
define('NONCE_KEY',        'b6S*C+_?+z?R8(Q<dU0$U~b={//#}C3CfJiQ<d!R!b>Pkwc[1/F}Sx%cba1Wa<u~');
define('AUTH_SALT',        'Mz7<c)<n@Fwgjd+`<.Alz_s 9W[l-R*2800[Mm?-t$5rBn^Y*dY9ywfxm+i,$eBA');
define('SECURE_AUTH_SALT', '_ PDP_7n_>gVbi:]=/:cgUjGpf(rBJWnFfxyn7yt_|}e_m!5Ld/#vXGHACr[n(6b');
define('LOGGED_IN_SALT',   ' k-!C#|(Wtfh},AgtWWQ .as<]6=K]}uJDI6`88F!H=f)AA#jC/8]1 |>;!;[4Ny');
define('NONCE_SALT',       'H|7jM7eAn7CGBf=}tWXn6l-G9PL,V/{5r:t?Z*iT]-K4ekd*aHe#_hC`={Y2Hmew');

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
