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
define( 'DB_NAME', 'rtl-theme' );

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
define( 'AUTH_KEY',         '8zHO/8~]A[^wKVp0uM8MLsU]mZLg;h0*mM/9{PjX@7hd+DRHDQC?`oj|O6i) I-;' );
define( 'SECURE_AUTH_KEY',  ';YunBl6S_%|;#7E2En?BM``]g_#Uot(:>w9Ls6;mTAgMB5okb/e4dhMN(U1qq`wM' );
define( 'LOGGED_IN_KEY',    '(v;/W8iLydZZ@O^RF{$>eN< >]t-X =Btq9PdJ+fw}0Whg<m_]gVcVN7r1u3naCc' );
define( 'NONCE_KEY',        'mHt[.UNm%O&W+T&JE6NZM9UQYn}.)VI4vOXSfuC;vwcyl2[S&r.L3.,.|7v;z9{}' );
define( 'AUTH_SALT',        'D-*#d<^?A-zk:Gau9u*v=|Y0.P@YIn[8%;&YhHY@?%&j8n`0]m`,vXcqW^4wcPb%' );
define( 'SECURE_AUTH_SALT', '66TrCMm:CEYD.slO#bpco]IdmUp?}R2*,+2w^saYCX9EgKXVJpe:gHS/<[A~O39n' );
define( 'LOGGED_IN_SALT',   '{N@&jDN.Eq%6{>0q_,/9 S;-OKQb=Gn3szI FLfz)orC9i=L%U@8[SF~_E(Prxdr' );
define( 'NONCE_SALT',       '8_(:)}b0vVk[wT/+FExr,:4wA^#mKBq6:EjWy(L/ }>K$qq3r=;e%?@%73f6doR1' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'rtl_';

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
