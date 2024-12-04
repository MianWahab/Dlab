<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'landing' );

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
define( 'AUTH_KEY',         'yY%OD^Jc<~TbZ{e[S~gfLnBIy :^pPJ/>o#7=h4PrG,[v9K9D)V!`N<CJ;~}.-!_' );
define( 'SECURE_AUTH_KEY',  '%Zi_QMG7%O55pk&,}`&Ea90uEz9nM/{jh%c{v.5+;wr@0T~)[%%y<p(9rTPqbEJ4' );
define( 'LOGGED_IN_KEY',    'I9y1Bvl!EL 0@zGnL|>,pR`x64}=/FO!025ls2c!s++@`znG&IWB)6.jMqwkBJK%' );
define( 'NONCE_KEY',        '?M?U$&|?J+|>LT&zT=#W!auqMuyG.T7/v=qnb)#0`]77U}_L=B;xVtt-f2P_V4A&' );
define( 'AUTH_SALT',        'W1.@um.W7c:qwUF5:gY$#T<@r=x5xHlMJ?NY_$^m=2HsqNWz=5{Jy`:1$(_8%UQH' );
define( 'SECURE_AUTH_SALT', 'AzYb0IC,HTD>3P~0V@zQD+*P^_oJ:dfMq18rj{xrO2KLybO2&)$qC^A_rrtx#~Tc' );
define( 'LOGGED_IN_SALT',   '|hb6aXA#_tt*qApc{mF5mMTki.Sn7F>@cg)hT#WHbF74srQ->oQ$M[Vybu)IRD^$' );
define( 'NONCE_SALT',       'G,z~C5 NCAi][rHQ~)`UU5.;41ya(7%On&q[[W<ngh~:](NB)fC9_,gWf6Hggqiz' );

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
