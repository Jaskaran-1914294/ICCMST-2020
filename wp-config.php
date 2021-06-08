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
define( 'DB_NAME', 'ICCMST-2020' );

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
define( 'AUTH_KEY',         'f .b@u0HLi`-cGb}&6^zO=~@BFcl$C`h/36Y [mF.w|;BV=0@`|@/g-N3^NGrY0]' );
define( 'SECURE_AUTH_KEY',  'lakbj>dodZGjOC7zw/b=RdY8e.]xTNJ/@%9J*f5){!4S:_[P$N%6dVcUsRl~fq3@' );
define( 'LOGGED_IN_KEY',    ' }@?pV&|hzj]Hij5U=M~rY{RjC}[B%e:4F9$  U~r{J7Ug&M2xjp)cD9bw)Kb<Y%' );
define( 'NONCE_KEY',        '6)($x3*-bZmV{4pi.W2Q+Oql0mB,8~k`/xj0Sf%#*VmR=Mxw}8,;&RPje{E/oXg;' );
define( 'AUTH_SALT',        'Me)c`<5gkG{c9>+m>P[;Hox@0M,3Sk<Ft~}h?K}LSC,]$F5&T*.&s$~]*Jzs1!dq' );
define( 'SECURE_AUTH_SALT', '}ZHTTjf%>f;:_Sq Zl=Q,:se vF=q+LA|n0=#TSTWAt+Fe**XH.3lcCW:$.3Q)Qc' );
define( 'LOGGED_IN_SALT',   'j7C+,+GEANGz ,?d},Rt23&;-S252$)~o9LTO_o5C}1-l;ab{?@*Pc|@^ggqSc-b' );
define( 'NONCE_SALT',       '1Eq*Y(OD>6M!GP#zHizUjz-wU>h=XmtnyXiM70M@j,=a5aGE5i[5lJ/_kr(/xmw8' );

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
