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
define('DB_NAME', 'houtin');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'admin');

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
define('AUTH_KEY',         '(gl+@s]Ekc6/ WD1Hp[k=GswW*usOZfG)8(8yUa[=:-^sOR#Enn9SKI!sX/kLAY0');
define('SECURE_AUTH_KEY',  '/p<Wn3zlMgPm3w~^b]/K59@g=jnwE)1 cS2ams6bwBSDo2s:JDB<K 4.; H0/?#:');
define('LOGGED_IN_KEY',    'g_`xc?7wv1-Ur$1V3pybQ2*,7)&hoG!xtT)>83EqO}hTQm>g^/-;AG!0YF8am51J');
define('NONCE_KEY',        'zCgS0vYmaW?{Cr++fpMU(PAB_=p ujXY4/YE.HeXMIq5up#1GGe665Yf_;3IC%Hb');
define('AUTH_SALT',        'f*qvA6aDLeQwaW&.]{zizeS^~:VW!ARhY`Gr89QVbbAKhh5(o{gv={B!.(u2b_}/');
define('SECURE_AUTH_SALT', 'ML2YL&nQ4f|Aa|{-_c)}/`21:>`9J3m,0c*B=Zyk$/sn-:<?[}U3?^L$@,=.Lpr.');
define('LOGGED_IN_SALT',   ']JyjnNP43DmKY(5ayyn^AeS11qL1g1^Fq{K{((27+HF3wl9)m=<U*fTlkJojEM&{');
define('NONCE_SALT',       ')Xh?gp#M2|y= `(;0,3SB^j>)SS.:>1[$0{Tr&/R_#cK0sO!X2pTwr*(<g&ddJru');

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
