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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'normal' );

/** MySQL database password */
define( 'DB_PASSWORD', '1234' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql-service' );

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
define( 'AUTH_KEY',         'N<qr$NY,Nnj?@?qFE;kb{m[XtF54[2xHtG}LQLJ0A3j_HGP^*1aK~ &*!g@@-iM+' );
define( 'SECURE_AUTH_KEY',  '05we*W4B{SKYgF(|vQ&+%8)BC/LsP3n5CH~4URh1U?~0V^heU&.PQcj/RO.zPLH)' );
define( 'LOGGED_IN_KEY',    'wOKOd0][!nB?xTtHC[;c.n8Qr52hCs[}#q#dp0E0%DBOPrY0 mw()Z9k[-]*_~1[' );
define( 'NONCE_KEY',        ':l:2N+zqYHT*`FCh-6aQ>?e7D0]WGJH=(4|^)OD9oI/qXX9c`xLap7qY{.v[|?DM' );
define( 'AUTH_SALT',        '};<g.AWY:xn]Y%z*0rQo]pWqSq@)<]7Y8UnWfGB~-eA>:cL)%iznc:%K!.NfkqkL' );
define( 'SECURE_AUTH_SALT', '$Og]V |w]aKyE=|K2(U]~p8o,WLP-gc+{8!};sO!4 9ZeSV3<NApucdCsnV=gz6q' );
define( 'LOGGED_IN_SALT',   '|j0V?K_)d0WcVMrF*I,Oy)Q7T))nWS]lk(Nd-Hjlgvx]:>67m0Y@Y5d<3r^*bKuo' );
define( 'NONCE_SALT',       '{2NXU{HeF1!KBkwUE[E0p}KZ7?Wia,~1*fE%88AL_fQ!G}bm,4+=Et2Ycwq5VIhR' );

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