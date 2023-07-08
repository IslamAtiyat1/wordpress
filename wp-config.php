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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress1' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '}bB;/KT0?r%uCI1P]]AU_TJ6.xYk)-iSlBDA!_TCigq|Y|n84enz]Y/>Lju.!mAw' );
define( 'SECURE_AUTH_KEY',  '8/ cH#PTpoHgoH6AX94eeER8nt1<3EJ`Uq{!*R;Eaj<#P!75UavI+5,F~pM^Qngf' );
define( 'LOGGED_IN_KEY',    'shqd`u<!_1SRA#}[}RJ;.{P4boYZV]M3B{c=(7b.K8v0K:2YPUNqv!#Sv~TdC7A&' );
define( 'NONCE_KEY',        'JC/veX!C;G2+vE,<x]V_j@hk5o^H0o$M[/yY,AC&?OqsWDuM /m1qAFDA( qqNXA' );
define( 'AUTH_SALT',        'x.$>c$AA8-SYw;;]Yr(W^BwC!~#l`>Xs4xNVD(qnc;m:l5Q$|Af^50G5565Jp!R=' );
define( 'SECURE_AUTH_SALT', 'yc T;ERMC^z~:};Bph}P.#=kGsR[WJ(uy62 O(|Ahf9Gkwdzv rY@xU)%J;ZmV+8' );
define( 'LOGGED_IN_SALT',   '%)dM+U{y@EpH)_QbX`T9l2/vqAN#8zpUfl(C`DTlL>){xSLUi}Yy5vZRAoMBqpuC' );
define( 'NONCE_SALT',       'Y0sX8IB`EJ>Yf ^!Y0b8W}hf=u+ haS}S10V15U<h$W1QJG|<T=Tqu~1?8MquVm_' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
