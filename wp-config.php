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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'mysql' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '5{ZG6oV*amDJ !dGCQd`J{S.H4HG>|V%:8$pxI{@BNB!!tG|ijx[ZiKh}>;f$UU|' );
define( 'SECURE_AUTH_KEY',  'N<h^JBVS)a$Sl]&x[^?wjJ$b6~v<4 R6MbZ- }*r)B9y=s_f#{FEF35Nb&y{PgM,' );
define( 'LOGGED_IN_KEY',    '%)gT+Rx0PofovSO<PW!$^@_mEs>j*U.(c[W]k{cKo63sB{P(u05!;OS&,Mj-9KG@' );
define( 'NONCE_KEY',        '!tw45UP/!2~!2%&QBUSy5u(c)iq}7P[/!Et8Jb 3]`-0m-8hlu&4aGQnkHU:EMYw' );
define( 'AUTH_SALT',        '{ea/qxK4mBm{1`YLg{?0||DL|I#W~0vRg_C+^&H A&@5EXk:RX.W7{_N-#1A)P0&' );
define( 'SECURE_AUTH_SALT', 'K6o9GI%H`JR>72Yqg(czTQv!o>(|L}phSjO6HNBORjLbS9wsN4_=A$YfX3m+Hiq-' );
define( 'LOGGED_IN_SALT',   '1Q$gxjJT)OV7nMzu}#OQ.ssnuaXE!h/EdfqZGGd!!CCK{{T_:jpUekW~(n;W;uM2' );
define( 'NONCE_SALT',       'ykUi?;zgYsdNJr>g.ogP%Ffs<CC)J%4MaF3hQbir=v..U-{3l2x^9q6#QU:hOKus' );

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
