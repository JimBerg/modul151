<?php
/**
 * MODUL 151 | GÄSTEBUCH
 *
 * index.php
 * handles all incoming requests,
 * no direct script access will be allowed
 * autoload files
 *
 * @author: Janina Imberg
 * @date 27.05.2013
 *
 * ---------------------------------------------------------------- */

/**
 * environment
 * ( hahahaha I'm sooo professional :P )
 *
 * @var String
 */
switch ( $_SERVER['SERVER_NAME'] ) {
    case 'lokal.horst':
        define('ENVIRONMENT', 'development');
        break;
    default:
        define('ENVIRONMENT', 'production');
        break;
}

/**
 * display errors in dev environment
 */
if ( ENVIRONMENT == 'development' ) {
    error_reporting( E_ALL | E_STRICT );
    ini_set( 'display_errors', 1 );
} else {
    ini_set( 'display_errors', 0 );
}

/**
 * define constant that makes files accessible
 *
 * @var boolean
 */
define( 'RESTRICTED', 1 );

/**
 * define application base path
 *
 * @var String
 */
define( 'BASE_PATH', './protected/' );

/**
 * define view base path
 *
 * @var String
 */
define( 'VIEW_PATH', './protected/views/' );

/**
 * define template path
 *
 * @var String
 */
define( 'TEMPLATE_PATH', './public/' );


/**
 * autoload controller classes ( user and survey )
 *
 * @param String classname
 * @return void
 */
function __autoload( $classname ) {
    $file = BASE_PATH . 'controller/' . $classname . '.php';
    if ( file_exists( $file ) && is_file( $file ) ) {
        include_once( $file );
    }
}

/**
 * load start page of application
 */
include_once VIEW_PATH.'layout.php';
