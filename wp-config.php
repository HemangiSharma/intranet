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
define('DB_NAME', 'test_db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '=!B&//{?BSuoPnAQX}:YvRBEkKFUugSH*^xk+le!|y*ewUWfc]Ny$/=csKk*#%5i');
define('SECURE_AUTH_KEY',  'Yz(_$aD%QK_Y:Qe{#ht(PBBbwP6DKi87No{/JEdkKL|GAh6T!yVrX^zDHf9|FYFC');
define('LOGGED_IN_KEY',    'ELE{!%PoXop&hbhe)YxlQK5lf~=gJ>yjT7KRKbxL*zsp_4X~@aKr5d>/fCSZMJ~5');
define('NONCE_KEY',        'f7z#(~fR9)&nR$I[7Q* {qt53VQ9C&Cnm:o1Y[n62-n6c@$WTRQ;0s(2Z2R:,>=^');
define('AUTH_SALT',        'nem=eY6l3o_21~)mRV?B#:|9HXhz~9y($`&hVHbE<7rLQ0K08mpO7,9AUY-*~|(&');
define('SECURE_AUTH_SALT', ')@nO||?7Uz#4Iu;KU_;yS)@#>{hg7luF[*TOTu%u{A3/all%nh;PvW_YX*[3^SG(');
define('LOGGED_IN_SALT',   'TH$6AkD[+_> F${~r[~#~.UBNGAZ(Oi;}KZ`v`}=3/=,`?D*v(7ScMr31,Ws&kr%');
define('NONCE_SALT',       'V$g n9#*[:[CN{I3~B/S4{M%uX4T |ui)9i|srw5GAPiQrml:uO6UD?0:WwoofZt');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'pro';

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
