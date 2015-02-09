<?php
/**
 * Custom WordPress configurations on "wp-config.php" file.
 *
 * This file has the following configurations: MySQL settings, Table Prefix, Secret Keys, WordPress Language, ABSPATH and more.
 * For more information visit {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php} Codex page.
 * Created using {@link http://generatewp.com/wp-config/ wp-config.php File Generator} on GenerateWP.com.
 *
 * @package WordPress
 * @generator GenerateWP.com
 */


/* MySQL settings */
define( 'DB_NAME',     '{DB_NAME}' );
define( 'DB_USER',     '{DB_USER}' );
define( 'DB_PASSWORD', '{DB_PASSWORD}' );
define( 'DB_HOST',     'localhost' );
define( 'DB_CHARSET',  'utf8' );
define( 'DB_COLLATE',  'utf_general_ci' );


/* MySQL database table prefix. */
$table_prefix = 'cms_';


/* Authentication Unique Keys and Salts. */
define('AUTH_KEY',         ' Ucz0/WyW<{+QW~Fc95*Jd{|=;)w+k7$Lnq{v=,E&GgW6?f%9H|)#]]mwk0`jUC}');
define('SECURE_AUTH_KEY',  't!C#y!PpGi|Pt~Jcf#1xkh+');
define('LOGGED_IN_KEY',    '9X`YSjr9S>Mu^SJnmfm5bn|D%&e+[ Y-MhsE9^^QAp%|B1bMiKB}WZOi;7w.O~%|');
define('NONCE_KEY',        ')%=hY6h>6UQ');
define('SECURE_AUTH_SALT', 'jJ.O8g&4w#xYbS|>3s^ZhRD&&?RTjuyzEnBi}C<}5R4_zXx2$^^AhbgK2KgeJ0vx');
define('LOGGED_IN_SALT',   ' +h<71wUF!|5+u`iBV@lDt-9se&:WQ?:/(c|?4:X+Wlm-WH|o.w^F-UuHj>[fQ%V');
define('NONCE_SALT',       'DM|<2ua_Y w^oQ7??$>Ol~6#Q%MXx*OY%$2Jc_1^WT;,lPiHsXuv)GREy9[p8~A)');


/* WordPress Localized Language. */
define( 'WPLANG', 'de_DE' );


/* Custom WordPress URL. */
define( 'WP_SITEURL',     'http://{DOMAIN}' );
define( 'WP_HOME',        'http://{DOMAIN}' );
define( 'WP_CONTENT_URL', 'http://{DOMAIN}/assets' );
define( 'UPLOADS',        'http://{DOMAIN}/assets/uploads' );
define( 'WP_PLUGIN_URL',  'http://{DOMAIN}/assets/plugins' );


/* Multisite. */
define( 'WP_ALLOW_MULTISITE', false );


/* WordPress debug mode for developers. */
define( 'WP_DEBUG',         true );
define( 'WP_DEBUG_LOG',     true );
define( 'WP_DEBUG_DISPLAY', true );
define( 'SCRIPT_DEBUG',     true );
define( 'SAVEQUERIES',      true );


/* WordPress Cache */
define( 'WP_CACHE', false );


/* Compression */
define( 'COMPRESS_CSS',        true );
define( 'COMPRESS_SCRIPTS',    true );
define( 'CONCATENATE_SCRIPTS', true );
define( 'ENFORCE_GZIP',        true );


/* Updates */
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
define( 'DISALLOW_FILE_MODS', true );
define( 'DISALLOW_FILE_EDIT', true );


/* Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/* Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');