<?php defined('SYSPATH') or die('No direct access allowed.');

/**
 * notice, this is the sample file, please cp this to databse.php as a normal configure file
 */
return array
(
    'default' => array
    (
        'type'       => 'MySQLi',
        'connection' => array(
            'hostname'   => '47.93.36.139',
            'database'   => 'acm',
            'username'   => 'root',
            'password'   => '19950305',
            'persistent' => false,
        ),
        'table_prefix' => '',
        'charset'      => 'utf8',
        'caching'      => false,
        'profiling'    => true,
    ),
    'alternate' => array(
        'type'       => 'pdo',
        'connection' => array(
            /**
             * The following options are available for PDO:
             *
             * string   dsn         Data Source Name
             * string   username    database username
             * string   password    database password
             * boolean  persistent  use persistent connections?
             */
            'dsn'        => 'mysql:host=localhost;dbname=judge',
            'username'   => 'root',
            'password'   => 'r00tdb',
            'persistent' => false,
        ),
        /**
         * The following extra options are available for PDO:
         *
         * string   identifier  set the escaping identifier
         */
        'table_prefix' => '',
        'charset'      => 'utf8',
        'caching'      => false,
        'profiling'    => true,
    ),
);
