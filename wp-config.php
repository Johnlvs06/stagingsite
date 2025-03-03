<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'yuai' );

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
define( 'AUTH_KEY',         '$k=zLbfAI)#z(gW.20[[VX}`,_WhuYR5erZ!6t]ke8DSt~zNdl[JCI,kKvsH7|>k' );
define( 'SECURE_AUTH_KEY',  'vr=(G4PR!bffavsnBGpNKXaEb!x2#{v6I%Hc>b}})i0ZQm~Qp?++-Oq`Qct5>x!?' );
define( 'LOGGED_IN_KEY',    'e1plF_p5|FuQT:iQ2WMB1Dh 4/BbG,>&Zd*rp,!QlznpycT@-yr<9oA$aL=SFn=H' );
define( 'NONCE_KEY',        'zCy~gA8!k.=|d77Zn|+kWmS[5?7Y)=1mg/YJ=Hb@KA+ON01:zu$Ku)YE2>t?l;^m' );
define( 'AUTH_SALT',        'qS=-*86$97J3>J!Ld_f4dbQ2IN~<(v?JO:um}W%Kg-la`Rm?kOL- |n$ YIQ5zy/' );
define( 'SECURE_AUTH_SALT', '+_ZDdC,./]N#@=2Zz?DC2bOez_*sRt^OjM>;uhyxph@ZRpPzLo>D9?G7?):VH7&_' );
define( 'LOGGED_IN_SALT',   'une4i4z6Lh$#!n$ndraz*.A80B%rG!=.l6fnf)LkCuz[S[imt XP}%JOMGGrx8(G' );
define( 'NONCE_SALT',       '`7]1e)YJ@#P(kje7yx`?-m[Ogw9[OrXx^_V[fj}M+B`KM7h8MY5$vQ3No F;ev/g' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
