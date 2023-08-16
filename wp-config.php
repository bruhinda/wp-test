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
define( 'DB_NAME', 'iucea_safaridm_wp866' );

/** Database username */
define( 'DB_USER', 'support' );

/** Database password */
define( 'DB_PASSWORD', 'iuceam833**' );

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
define( 'AUTH_KEY',         '%qPf`#C6DYAn9it09X0yTZaoPE;R&~*:2f0%@qE1K.eq-UTN$H!~@o>ZZ6HKPDM8' );
define( 'SECURE_AUTH_KEY',  '$,C`g3<EqX2<.Fs(%X4xT4ZK3;A.gN%:buhazwv49rQWmR7I^5HQ)Ut5=qnYf1+!' );
define( 'LOGGED_IN_KEY',    '&1/],jv6HDf2)S-YB6,W#2hI1qS*`Ne0P_0Ol6=kg`*zo[Zr{>3aN4GlWe1vS~JR' );
define( 'NONCE_KEY',        '^v]yo{`_,iICu3)R4DnS37[k(($bI]p|j:a?zme9Y|$y]~sj{6gi7R:@dq-(g<N3' );
define( 'AUTH_SALT',        '#xK_`#>]&Dlfb-p0_Vc/cF2Ey bP#tn,{NWn`jx3wIG{z)_E0,jJg`qH}8KJqN)y' );
define( 'SECURE_AUTH_SALT', 'z?1lKYM-E6K 5$nkyY7F4Q.c+BfzR2JwHlo$=1g%)E88=@D:*?B~ed`~/<IAO&2;' );
define( 'LOGGED_IN_SALT',   'S8=w1whc!:oe$f:#AwP#.:b4C_ `$0)}5kl fSW7hwG#kZir#[HRV!72|ZZi}Hzf' );
define( 'NONCE_SALT',       '#FP*/I,ZcQ:ggcCZ.3=A!L<C9Dqpb(5`]T4oT]mCVD5M8K(GsmJ}A`:%7K=k w%Z' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'backupdb_wpyc_';

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
