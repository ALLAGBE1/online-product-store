<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}


define('AUTH_KEY',         '1Uj+QtEqybOKOdTl+mwWNvKZaAC25XGh7R17dtf+KPK1XvDoiMcAsEbWV2ExNm5Gph9UkFebXr9+mdmrSzP0IQ==');
define('SECURE_AUTH_KEY',  'OGj9LzAxKg7TgGLpkECdPIW0mNXboqd1qMs+yDHBLUrLI4jOe3+AzURKjDnXbcSiqBMtMkF8CHnBhiVVFcLH0w==');
define('LOGGED_IN_KEY',    '4oBK6bet4Tu9j2CAZFWpqL75d+dpb2AW4fGcsuV2sxvShrexDPALcM7hzPJpYXv5Nnu9jLwWPGKtok8/TZLRig==');
define('NONCE_KEY',        'M9wyf/deJdnYW+wF99TKY4WWqpoxkxVYFDvBtdhR/UakSmLN25vIn4/I9HSnDqemwlb3Jh1Erlgp5k2LMOYTmQ==');
define('AUTH_SALT',        'EC2OPbdrP3zIV5kM8fRb489UA0akp/TN4VVK9b31RE/BzQ7B2/6qtxdPxSMAsXEYvPHxaWu1r3bk8tc8dO1+VA==');
define('SECURE_AUTH_SALT', 'lKuQvjA7lOd8dVn+TYdN3RukktDHvMMvyvsObvjDcVoPbUeBNuZldiSpZPPywHkoC+yo+OOulPKj+edrtX+e0A==');
define('LOGGED_IN_SALT',   '3rz27Mp7XtOQ2VRklvKbK9pEh7jN37PZyhkYGqHbqaEQGGVO71exLPBQ9r3kz4OhCaCwPFPPg7cUXOYcQ8ZtYw==');
define('NONCE_SALT',       'WFZ5sChm6GY7GQyngFkJPecXzGnGyWKr6wWEO99BnLOnwgD/fCFz3rlnFXnEEXrTWEtiaT4rLVJw2t3nk3hayg==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
