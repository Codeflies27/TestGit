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
define( 'DB_NAME', 'vansun1' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '{r/P6;FVE*wwTzC}2)Se/;p]&lE9<p!sbGnoZDZ}~K)^7#hvI/wPF9vQ_jP<kO0g' );
define( 'SECURE_AUTH_KEY',  '!s^rjEXbHf:|Yk!h&){}TBuOi5&6g2{fBOxgq5n(A^L+a-q!Px0YZ,T!,mn{}lYP' );
define( 'LOGGED_IN_KEY',    '!j|.pbJG0[d,vx|m%PsZ]zVsRD8}dBf)iNV5Yh:QT`J6uK$0 ?;?R+<Ki~4lLat,' );
define( 'NONCE_KEY',        'T&B:Qt_*y> 3$mytV.<Ik)B$75?Qu94vSByxZeqy6Bu{N]c&2n|LiBCAVScvlfK;' );
define( 'AUTH_SALT',        '1zUr_iclvq:O.%V< qsvDKjY<gIB3nOqDR()7E$X5lvhqCEo70{%8JAMxY:}}s,h' );
define( 'SECURE_AUTH_SALT', '.Tu$nJr{0&rj0fw&( +==+ryRX9mnbUP5?>;<{vM~qz?p>-=h]@c.16~62p_1C5K' );
define( 'LOGGED_IN_SALT',   ',R(Va|6H?D-]`eg{ 2k2a@M8.;3/B>7~EAFr$@jQbC# A]/ceGiOY[/inbL0[Y54' );
define( 'NONCE_SALT',       '@XxNE{>rIb@i175[Fl6=]zs:[!~SH]K=j@GB=n4)?`~D;4Ez591`oK+c:53c2zEU' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', true );
define('FS_METHOD','direct');

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
