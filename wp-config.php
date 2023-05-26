<?php
define( 'WP_SITEURL', 'http://127.0.0.1:8000/' );
define( 'WP_HOME', 'http://127.0.0.1:8000/' );


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
define( 'DB_NAME', 'nomad_bau' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'Xk5M6,~N-|WV`n+9G-m0A3sc}9&6<3cn~t0+b$-|mADMd~m_&:lnMy/Z [Yq_y+@');
define('SECURE_AUTH_KEY',  '=pM<Ktr,mDSN/~qBwt=EbS&kK7Ve/&3`<:!x(Lj$`$T3_G<O}7L0)0A><m*) Oku');
define('LOGGED_IN_KEY',    ':P>h9a?2OEV-BIR<@u[W6Fs%s?q[NtEWWI4_#=)zwobCWDv3m|b;/NextSHV:?(!');
define('NONCE_KEY',        'WnD~zS6(,7K*DU<IyFwGzs)_8F>>-<<TNmw?!eNi>W>1wCM#rE?,nIE2<$]kx3xo');
define('AUTH_SALT',        'ePU|MncRB#(@xzyvm?pCiwsGOg-S8uQ(8L[{,9;;1NZ-Dd-wx0.Csn=ZBLi!]7VU');
define('SECURE_AUTH_SALT', '|w/qb|{Ov{QT^QE<?dw5D!X1~X1WPd)=+l0cSnj1B!L|6R|vwSP0VX-j@K-T|z?n');
define('LOGGED_IN_SALT',   '`-ff?wBR@c)[$#Z+~igw6K:S}PgNT4Um4psB)Onf#l~ 7gEWWzlzk:E%2`lDD:ua');
define('NONCE_SALT',       'kX;aC:8|q`E->Bq^uW[{@lECidHFT/h:}Y@h.k`Tjo*7%6T-?dN v~0I1ub^U3*}');

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
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_DISPLAY', false );
define( 'WP_DEBUG_LOG', true );

/* Add any custom values between this line and the "stop editing" line. */
define( 'WP_MEMORY_LIMIT', '2048M' );

	
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
