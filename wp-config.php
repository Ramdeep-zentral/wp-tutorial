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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp-tutorial' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'gTJ|oAJ&_zI?LjMB>^bnj2PsH_Tv6NlggwwnL&%h<C4c@(?{pi#d0MsEOOmrjeRy' );
define( 'SECURE_AUTH_KEY',  '+*_V.I4yK*N0?kR,kI(rGHT/@&8hT+g3<^BfXV4E/|4nz<uJSRV>`@b,T36WT&~~' );
define( 'LOGGED_IN_KEY',    'B~eaYe ?l G2@-POC`Df0.UQ_C. KWQw;elB1L{g$?ta}@rb_QSuQLHRQM+_1SZE' );
define( 'NONCE_KEY',        'tP)[;vyTdn^VA;?HF,;XdB.Lt6L?dmz.282/]38Agk>zKXMci1=xsQN}K`{.C{z.' );
define( 'AUTH_SALT',        '!2#RjraKgSc[zpJ-Qv#Wwe ejRXe*6yTk(9LV7[($l%6$C_KL]p0,0|VQK<G{^R|' );
define( 'SECURE_AUTH_SALT', 'ShAC G`No[zfs,Zn08WoKm/B[d3THA#F;DM$+UR0G<wW%ce+)U2wV5#5@TEkKC#+' );
define( 'LOGGED_IN_SALT',   'l`Pnq.{[dVol,qTXX3F5L_gQb)w|5V@<9(pez0u,8#^Hp#!Fxt9D$;TIgZc<PHrO' );
define( 'NONCE_SALT',       'wSm2}b?$y?xhsgMa9Dbs|rGi}U-^E@8`b=Eo( R:4D/5`#3S{O!d@i)./oIr`uny' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
