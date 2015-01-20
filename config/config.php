<?php

/**
 * All server config
 */
return array(
    'db' => array(
        'db.options' => array(
            'driver'   => 'pdo_mysql',
            'host'     => 'localhost',
            'port'     => '3306',
            'dbname'   => 'trash',
            'charset'  => 'utf8',
            'user'     => 'root',
            'password' => '111111',
        ),
    ),
    'monolog' => array(
        'monolog.logfile' => __DIR__.'/../logs/syslog_'.date('Y-m-d').'.log',
        'monolog.level' => 100,  // see https://github.com/Seldaek/monolog for more details
    ),
    'twig' => array(
        'twig.path' => __DIR__.'/../src/App/Views/',
    ),
);



