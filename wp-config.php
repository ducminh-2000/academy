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

define('DB_NAME', "main");

define('WP_MEMORY_LIMIT','1024M');

/** MySQL database username */

define('DB_USER', "main");


/** MySQL database password */

define('DB_PASSWORD', "main");


/** MySQL hostname */

define('DB_HOST', "localhost");


/** Database Charset to use in creating database tables. */

define( 'DB_CHARSET', 'utf8' );


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

define('AUTH_KEY', '0657b4366feb8e805ac9216c2fc76baa98de146f52a3145d8c96f8b1e6c13078');

define('SECURE_AUTH_KEY', 'e979f767c05989d7fb1a9debeb433d58c3a1a216922a43a4bccd400dc58331cb');

define('LOGGED_IN_KEY', '7b7fd2c6baa7b298b98ae610f7ed0a925c052a65d9098de9aac59710f387b1c1');

define('NONCE_KEY', '2193178441358b175183fb1c35e7163935cc52703db987b62b1ae5a000ffe8d5');

define('AUTH_SALT', '4b5dad78183adf21bd3b5a43ab9b2fce8ca747aa1f2ca314fba49cb05b7efcef');

define('SECURE_AUTH_SALT', '3b5b944e57bbe521f738f886a23eb2c12964d70355d24ae38901c883609a35b6');

define('LOGGED_IN_SALT', 'c2ee4cb9c9d8570fd19eddac3b381ed2533d529d819db1c5f6ea526ccf901c7e');

define('NONCE_SALT', '7b0f22eca514546200162de347cd94858ac1d8ba4722041055e57abd7c058f77');


/**#@-*/


/**

 * WordPress Database Table prefix.

 *

 * You can have multiple installations in one database if you give each

 * a unique prefix. Only numbers, letters, and underscores please!

 */

$table_prefix = 'Ymo_';

define('WP_CRON_LOCK_TIMEOUT', 120);

define('AUTOSAVE_INTERVAL', 300);

define('WP_POST_REVISIONS', 5);

define('EMPTY_TRASH_DAYS', 7);

define('WP_AUTO_UPDATE_CORE', true);

define( 'WP_MEMORY_LIMIT', '268M' );

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

define( 'WP_DEBUG', true );


/* That's all, stop editing! Happy publishing. */


/** Absolute path to the WordPress directory. */

if ( ! defined( 'ABSPATH' ) ) {

	define( 'ABSPATH', __DIR__ . '/' );

}


/** Sets up WordPress vars and included files. */

require_once ABSPATH . 'wp-settings.php';

