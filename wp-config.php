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
define('DB_NAME', 'i328961_wp3');

/** MySQL database username */
define('DB_USER', 'i328961_wp3');

/** MySQL database password */
define('DB_PASSWORD', 'P(vJezb57b7Uda^MWW(12*^1');

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
define('AUTH_KEY',         '5xVUS5g5zUpHAX7eLEHcGIRoIvPBi2hiX7uPe390qXIKUjwwUH46TWeFYwuR2Lck');
define('SECURE_AUTH_KEY',  'nbbAmty4vCDB1VTaYrLnr5PxKk21Wg2UjctWbo4AP6RgZw30fovkkqZCg6fCYBtm');
define('LOGGED_IN_KEY',    'Sf9SVXIDeULSPAtXdFRNvlQsdvZ8YZ2wOwnMGokU38dRY1lFfm2sAh0dxDjVlXyt');
define('NONCE_KEY',        'gtnfkiPJ7HCTJGzOn0ls9MIdlkdZQRPLqCvSAUa8ZI7weM9hQxPuPHKXyheqKVEc');
define('AUTH_SALT',        '1Vw1Ve8chpdnG4BciQnqL0HRL6qjpJVJ1wAWjSMTPYqC1ptbbf803AEy3yFpXOLt');
define('SECURE_AUTH_SALT', '7eQC9HQdwzh7RZTyj58CDFoLJVZVK72af2OCSCl6vUdGz6NtllYmalGMkudLe4ET');
define('LOGGED_IN_SALT',   '4Exioz1saonNGEvKApVK50NF36FOWjBtyLYzNKiA0fpsQNBbXoIFhSeo2oxddyX8');
define('NONCE_SALT',       'AlszQIsQUOCyEkgXPEKRUKOcS6BQsmsDkbrisyImM0M1xNO292kdatYwZ3nrKbn4');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');define('FS_CHMOD_DIR',0755);define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed upstream.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


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
