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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'my' );

/** MySQL database password */
define( 'DB_PASSWORD', 'my2019' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql.default:3306' );

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
define( 'AUTH_KEY',         'S%SjzUQ4G(rxt|;> R!_``jJA48zGm5.JaO_ZW44y4_BObE7[OK#ik>;*aR+b+sP' );
define( 'SECURE_AUTH_KEY',  '8_9LHv7=o)h-SKR2~^pJ2/#ayCR+jKJ+G9O#&}4A* ]-w%nz0{^zspb=^Faw!Dq)' );
define( 'LOGGED_IN_KEY',    '&]CLoR<)I.`OB?<Mg#!)TjFEiZvCbx$Wdv2)]:8l,Q6mT[l*8gT?G!&|GNN0FrTP' );
define( 'NONCE_KEY',        ' hSt/kDUZ@/6t?%0y8)n:2lc&huT?4*TNhX5BZ,/[?iH@^ohTnU2m1$R*}DB>F[>' );
define( 'AUTH_SALT',        '~,U,d)l/b7k@gs]hB{}~28cKiaC=sV$K^Rv!di+p|d$-v}ylR~T`x/,[X{XzXfN;' );
define( 'SECURE_AUTH_SALT', 'pC?Q_w9] 5464f e9o.6Hql.dl?I|_ubf>1o+}8L5qsm:kXPmZX7Dv16+jUTXVrx' );
define( 'LOGGED_IN_SALT',   '0#[G~O?v9K9u99(t>LA9j>$#8lBwq~ }am=<B/?GC[yj{!3&}#q:`/?Ho^t6S~t[' );
define( 'NONCE_SALT',       '7U%f1_Et3=H$~Pq,9-:d`t=*+g]ddvi3gIlhBEo35u`w2wf [;@<o1)emTmkr-Ej' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
