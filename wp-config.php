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
define( 'DB_NAME', 'bugabula_db' );

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
define( 'AUTH_KEY',         'C6-nB_@ih>89yXWSo*gSJq_w=(]&lG##m6{,p9qvi!mC9}I=|+g;@oz.nr41I!q/' );
define( 'SECURE_AUTH_KEY',  '5~{qrr0;q#v1idg1,xnz.=P?O|))(tdF[LSs$r=?T g|Q(*|.!O 8K;ri|-kP?bn' );
define( 'LOGGED_IN_KEY',    'C _{,P#t;-|DFu?1KFl0FKFtncy0^$azF]8l@=o0b)=Ta?8DdxgOj&}aVA]tZR;i' );
define( 'NONCE_KEY',        '.or]>Pbsy2yYY_jcHMIHro)KG;%foNutzlEKn?bek#8t !dzc/*I~[0~n3D78#I.' );
define( 'AUTH_SALT',        'w1yJkuW{w]vf&Zz{Q(gvl.>Rj0p1,l0I?gE!FTSf:w?%m#BT sU`[|dGP)7ct_;Q' );
define( 'SECURE_AUTH_SALT', '|:%,RI:eH+6hhBBc*#V/w6_ )d(ndb3t/j!wp@%oLinXg$]A*H8G$]WT) 3!2Rl ' );
define( 'LOGGED_IN_SALT',   'BP^,!+<5(8Rfcty?Zp$NAm.m$/sGE<GQ6)I`S-Ys`vd8by5qM]THP,U`_tC1dQ0*' );
define( 'NONCE_SALT',       'g*v?w l,&enR08ynhAjWpBB])9qSfu|;E()U_)DK{=}%gMap&.Nc(vgEUPQZrLl.' );

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
