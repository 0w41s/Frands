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
define( 'DB_NAME', 'frands_db' );

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
define( 'AUTH_KEY',         'Gq8NYn7l|yncV<GMCx>Alh(?`@4[YCF~?Mb5td.G)(>{8siTolRVj>.o01zWS_.V' );
define( 'SECURE_AUTH_KEY',  'C`cu.Od?vJn3n+mfDurtPkMnKq==QV~Y=TIsK;(?Rt}=^wWv``)8HPy|;e;M#B9[' );
define( 'LOGGED_IN_KEY',    '2Lph(c55ua,IGb,$9;ATl,@vXn_aFP@&~QFSchiwJV1u-s&v)%IOXVCa_U8k6x8A' );
define( 'NONCE_KEY',        '(fN;k^*d3odlm8?7zY:-P=n>uNLk|YOezuEc6:e?.tywq+7?`yJBckGVx0_8wiCv' );
define( 'AUTH_SALT',        'Z->h?c`E&4`.9L*ic{x(i./jQ`zzwI$TJ|$S!+F-UF(v69{C*Xm}pu[Nw 8nXDyg' );
define( 'SECURE_AUTH_SALT', '}E?=_2s~!Ix%.a+3dg65Y[r<MT/QGXC(PF9?kTCoiZ)uubnx)8uRgefqy:DRWvg6' );
define( 'LOGGED_IN_SALT',   '&.p1-)T/1d_s-]60EBaLk..+3ac%P*!J|-lP_<YDr>[AD/(k8|}[luirWt=ve,l=' );
define( 'NONCE_SALT',       'J$]._rzRJklr[6?$rEV^ KxP>kAUiY;dtN,`MpiEXN s?n>*S0rJ6+dTiPQ(EkPd' );

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
