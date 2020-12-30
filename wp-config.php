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
define( 'DB_NAME', 'wp_neuralmatrix_1' );

/** MySQL database username */
define( 'DB_USER', 'wp_neuralmatrix_1' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wp_neuralmatrix_1' );

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
define('AUTH_KEY',         'p%YA@UKyd RX<Uq§Q={V%&3s}CN2|-8b`5})in=)@?tGR+tmZvYQXi>_<Cd}f I6');
define('SECURE_AUTH_KEY',  'HNvY2]a)r[w_nJKelt_LHXVPEGtDTO)e`!4C+4NOV_IIVUn/nC.P$53V~]D<Tdt]');
define('LOGGED_IN_KEY',    'N^P1<O,U=)Mg0]LK$%H37u l!b<,5<~cI~VkSf5ownq~iF-JP@O>b;§>`%a^M`Sk');
define('NONCE_KEY',        '<Af|t.I`$9BV.qru9(f@R|Y7i$@^7y22Dcxj6TB./itPX%C%{Y97cc,(yRi&RhFB');
define('AUTH_SALT',        'cLh3W j+MC0/I<mZESTzeAPLZG?UwSQIrFPB&T>Pm6:?jh7l-z.W8vhXQYI!Lhr|');
define('SECURE_AUTH_SALT', 'H^R<w>MJEe!D%/m2!09xI~g[!M|a|:%W.Q}q@TR~5k&m76:`I@N@5P]E(6}PB{7o');
define('LOGGED_IN_SALT',   'O;{Emq+[CZOhl5a]m;r34K}RiX } 1Z~mjZ5Y@.fr(P7Wd§A!&C|!v{PN8{;|fHt');
define('NONCE_SALT',       'u?rMQ-G@riLqz§2O!iMc8e6)9DCxnYz >[T@m);L=8(wN-=V4h3I}AiAVi$UdfOd');

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
