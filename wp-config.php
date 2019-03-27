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

define('DB_NAME', 'revobanga');


/** MySQL database username */

define('DB_USER', 'root');


/** MySQL database password */

define('DB_PASSWORD', "");


/** MySQL hostname */

define('DB_HOST', 'localhost');


/** Database Charset to use in creating database tables. */

define('DB_CHARSET', 'utf8mb4');


/** The Database Collate type. Don't change this if in doubt. */

define('DB_COLLATE', '');


/**#@+

 * Authentication Unique Keys and Salts.

 *

 * Change these to different unique phrases!

 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}

 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.

 *

 * @since 2.6.0

 */

define('AUTH_KEY',         '7SJB6Z4k53rQ[~Llj4iAo:$U;I+%cmgpwArj.U%*CnuMsX{Kq2::>xjjo#4WO.so');

define('SECURE_AUTH_KEY',  'nre:Pj[4W~hgr(93LBoyMn$0W2<{BS&C! [pC(VGIp_:j8Zze:M3hnFPmvF5`tSp');

define('LOGGED_IN_KEY',    'c}h=tFy;b`=oy5eQbr}F^i`ai@M`zk(*P5`mIS;wurnY?i5Stnj@6d&).QY_j)/o');

define('NONCE_KEY',        'B/)xcBoB;I$->Aa[*r$ KiLf%;%_XmWYBH/:/7A_{U#aKQTWBA_n9>BS%S1SOp1e');

define('AUTH_SALT',        'u=33iA#Jz`_^{55_Mg?tJR{B5!zm}c~Y|sc=-i$@enL0}4XhMNtB%38!<[`cDq`r');

define('SECURE_AUTH_SALT', 'S}}U}4V}j.JB^AI>:>em|@UUeQ1$5253Jpn;.=*!.HT:):G_B6,?ohr|W9phlCnX');

define('LOGGED_IN_SALT',   'K6T<f+jn9VOu*^XSqcjNGLZ?5C0=~*pn{Ao_;%DYMF ~B#wy[hc*EyRJjLyE9i<Y');

define('NONCE_SALT',       'jp%A`YP7nLIz5w)qXBZ}y].3S;(_=]Vi>F2!S^,1 AX{6d~Y4Z).~<mDfI@elgj<');


/**#@-*/


/**

 * WordPress Database Table prefix.

 *

 * You can have multiple installations in one database if you give each

 * a unique prefix. Only numbers, letters, and underscores please!

 */

$table_prefix  = 'wp_';


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

define('WP_DEBUG', false);


/* That's all, stop editing! Happy blogging. */


/** Absolute path to the WordPress directory. */

if ( !defined('ABSPATH') )

	define('ABSPATH', dirname(__FILE__) . '/');


/** Sets up WordPress vars and included files. */

require_once(ABSPATH . 'wp-settings.php');

