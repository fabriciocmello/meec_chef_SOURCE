<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

define('WP_REDIS_HOST', 'meec.jpsdi1.0001.sae1.cache.amazonaws.com');
 
define('WP_HOME','http://MEEC-57971342.sa-east-1.elb.amazonaws.com');
define('WP_SITEURL','http://MEEC-57971342.sa-east-1.elb.amazonaws.com');

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'cupomzera');

/** MySQL database username */
define('DB_USER', 'meec_db');

/** MySQL database password */
define('DB_PASSWORD', '9k6n5c0216');

/** MySQL hostname */
define('DB_HOST', 'meec.c7q4n3inuoam.sa-east-1.rds.amazonaws.com');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '`McDo+5]!.F/#3[W/9]OfQz!(XS-aXuIPv<B ejY=VfW9Gax t*5SeknA$K8<|[i');
define('SECURE_AUTH_KEY',  'v==V(Vy^^zn:pq5!d gKJ|ttkHX5cI_7oUgjI{@,*C4O|2ui<Y|T-mnQo__+$*-H');
define('LOGGED_IN_KEY',    'e8mogLS<@sIm=}Cf`ex@?eOi,G<SSdRz+2c9d;WHl^ N_FPd6VFr0C@o:Sxs0`^7');
define('NONCE_KEY',        '6U0X^(;OsW^<9VFg503.@(K-9r>`C<|ZXv$m>](ri/f-*IgnPv38pJmrUz1MudhY');
define('AUTH_SALT',        'OQ~3VEo-2<$]S25IlL<MA}H{a<.pLD`TwXC?cCQEOFbmhuLF}-e`8RDqckRRYhRT');
define('SECURE_AUTH_SALT', 'd|u*P4.YT5(X{9`9!;vlnxNF6;8Z3f@F+(`rv Ye8+|$/%X!60+MT[?g|@47wx p');
define('LOGGED_IN_SALT',   'rB=J6O6&H8a9[,{kb_8=73-z&+~.~1|TBaHA+IUkAD`W1| ,L2zmt=YaR,KX6=Q8');
define('NONCE_SALT',       'a1`ryA;G|0WUl[a)7cUyK@E_OV&+PdJl-4S-M?+;Nju!x#Ta^o-mf|Pm!ELn+,2g');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
