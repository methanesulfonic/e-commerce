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
define( 'DB_NAME', 'sembako2' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',         'E Y1Jypm_>|e~hf42F`5E3ki:tiL@*r6lz?K}<<2/K(6,+v5|0 sEP@gpSB{yvBC' );
define( 'SECURE_AUTH_KEY',  'I3xlOKX4XMYado$8KV5iFjjccOC%1|2OY9BhBE4CvH#dL-J;[xyuKhb``<a:}3Y5' );
define( 'LOGGED_IN_KEY',    '!,EZ iqLe2!]k^%<$tV3)VD?trTu D*=$B(1eu_>m@hQSJ l(EVV{/pG}UZ1BJ+}' );
define( 'NONCE_KEY',        ' J6;zi%@}u!5+U2#4<2u{1`5@3/6&R&Vw:?;^hJp2QRQ^N(M2*680=CXRk|lnPV!' );
define( 'AUTH_SALT',        '3b]Aq(u,s=ciqX|PM;>h6[h=yO$dg.`74SMdA=O2uv3E{{0Ok2KTm4eUs^zpK[7G' );
define( 'SECURE_AUTH_SALT', 'B|:4lbG>Hmf|bHnml`}6R4tHdC[5zF,OzVQg.;uy9XnqKc*zi-/&W_ht>o3q{T d' );
define( 'LOGGED_IN_SALT',   'KpI3aJ&e^Z80_/B*N)PByspatCHm?g@i0|hLUfafdS;(lyS!RPe>bpC59^O_7;U8' );
define( 'NONCE_SALT',       'tRM;]%mtATcu>w>u5I_~bV.;|^rt+!i6h(LoDPAc)}E^ vex7K4j<fE2gU5e#fh:' );

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
