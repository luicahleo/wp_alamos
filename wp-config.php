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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'admin_alamos' );

/** MySQL database username */
define( 'DB_USER', 'admin_solucian' );

/** MySQL database password */
define( 'DB_PASSWORD', '121212' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '|qLHajxFL>H&Gm9v/A!!iiWV2h**`|>x:k^Nw/02A)!Gs_.>>thrwITMmrTh2eYO' );
define( 'SECURE_AUTH_KEY',  '=haao?@>C~:/GA(R<F2Cr^+7F{#_nBYY8%$i 1(g`^+ne[+[8 P-ASEm``Fj0&ps' );
define( 'LOGGED_IN_KEY',    'kSNW[?t5DCwu|iCZ6SFv?nc{N4OU5[oNn4E0rZRv/]y&+I13S7j9gz/%=Er0IIZ`' );
define( 'NONCE_KEY',        'sx?MnNl+ZJ]kCc8QL4 2DAT)3[ySVNRq%l0f8cV}d{vLc5j?]Z$-J&?w7~-wY/l8' );
define( 'AUTH_SALT',        'pMs:8Ool,|MTvuN}omfS7wG-RqKr9@J8=0Kc@oM@I/d_u]MG :a4onU3e2sxq|rb' );
define( 'SECURE_AUTH_SALT', '`8^,}VQFfU2e$<!jnsW*<Ba(&.=u3Bo2^9bC>X?{^cLng[Au9qb~bEJQ;<WK]#U9' );
define( 'LOGGED_IN_SALT',   '[)^`@}F[W>duj{@kj5v=be4]<q2&c6T%|W2k1i-1[A:1>gU(R*>8$kT;e6Uqj&ub' );
define( 'NONCE_SALT',       'q9IOHkeR4)@}<-g<KI?2X;H150C2#V<GzrG1d6#(->Zy7ldE$$TA9mm(tn0xiarj' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
