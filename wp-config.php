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

define( 'DB_NAME', '' );


/** MySQL database username */

define( 'DB_USER', '' );


/** MySQL database password */

define( 'DB_PASSWORD', '' );


/** MySQL hostname */

define( 'DB_HOST', '' );


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

define( 'AUTH_KEY',         '$a=X0Fdqee@D}vnNI]$Cwcm,Vq%^)?S}6>{nzg.0%627/cc>kZlH@@sKu^WYPQn~' );

define( 'SECURE_AUTH_KEY',  '}e;.kMM)|j_X%vPH*UVw9p[Gq=/zK6.0UMAcpFnuE9ucW]U/=^N+T|]{;!/FaU.L' );

define( 'LOGGED_IN_KEY',    'j&IP] D3Y@,T9 xYp&Cd~b}gYR43$DD#(AKA&%Z~Kh`[S;<1piG1F-Xm[ra2F0iw' );

define( 'NONCE_KEY',        'cR;-VEST_t75`?Ss*Ua-c2QeFxzQaYN~Ct2}%`?C|yemH#Io`tiP`B!,!. &NbkE' );

define( 'AUTH_SALT',        'i$4L.STdP zmh<Z=kr*,%Y,,p_U)X&$0iapSr7Za8fkgQNxG)m+xq!Kr{-G*oQrW' );

define( 'SECURE_AUTH_SALT', 'KwDn&p0Z[}aqZrf{ggJizeju#wLh-%z&Rv3[7RxPq7;%N(#Zn(WYFZbaKFA(%a4t' );

define( 'LOGGED_IN_SALT',   'mO1T>a~{.shX2jAv+e;!6oZeQ_Xe)uNGT>wTmr6E!LZb;$Sm5O_7(vq]6 #D5Tvq' );

define( 'NONCE_SALT',       'H&.-&2uAL4jfx/wk?pyq@4PfoH@`.Y4O.DRDRehO@P&%IWEImqgR 4R%EsH<*~P:' );


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

