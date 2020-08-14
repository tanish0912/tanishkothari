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
define( 'DB_NAME', 'tanishkothari_db' );

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
define( 'AUTH_KEY',         '}Ss-v0K{7lIc@be-a4o4!HrKxpn>&X)[2}>NwHWlh6!dLHl*=0~f.kZgGL.f#}/J' );
define( 'SECURE_AUTH_KEY',  'qzRRa,Dt,9dhg*j1qykmU0|#O^R<W2!J|tE]+u*6s]@Zgc=wmm Z0Met~`W/D%<W' );
define( 'LOGGED_IN_KEY',    '%K!)Zs12~^. [{[Qyq)rcMh.9Ajc|]kW.L>olf7KkO=7H.o,X;h;(> QFCTMja|s' );
define( 'NONCE_KEY',        'ABJ2$}4H=Xq%dY;PQRCSmNkdKRYS$W3F;^!<_PJDMBs4=#ZIS2:45+}JyulvRFVK' );
define( 'AUTH_SALT',        'k6PIV$i:Zh`b/&&8n>xf@X0TO:~Uf1mAy_lCEO9az?up@i@K;tS/_<I,6I&V/|C0' );
define( 'SECURE_AUTH_SALT', '#XO:};Y@rh{qYdPT/fr)p4Q5ZAy/C}#B>|&!cyMRDINlzz-_).gwcnZLF~H(nVkM' );
define( 'LOGGED_IN_SALT',   'Z+8;Z8im2<QzNd: >DC1`eyh!R&aP5JtVA?EnxAr[::!HG){<QH/D U;=)T+5VwC' );
define( 'NONCE_SALT',       ']]4CQ/PofmwXlx=Rndk;L2c,x>)<},zm_(~,Cb{AV.fCG+fw7t:,5}E_]Vt[3L@q' );

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
