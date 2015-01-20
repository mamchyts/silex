<?php
/**
 * Main site gate
 */

/**
 * Get config params
 */
$config = require_once __DIR__.'/../config/config.php';

/**
 * Auloload
 */
require_once __DIR__.'/../vendor/autoload.php';

/**
 * Init
 * @var Silex
 */
$app = new Silex\Application();


/**
 * Configure $app
 */
$app['debug'] = true;


/**
 * Register additions
 */
$app->register(new Silex\Provider\DoctrineServiceProvider(), $config['db']);
$app->register(new Silex\Provider\MonologServiceProvider(), $config['monolog']);
$app->register(new Silex\Provider\TwigServiceProvider(), $config['twig']);


/**
 * Routes
 */
$app->match('/', 'App\Controllers\HomepageController::indexAction');


/**
 * Run application
 */
$app->run();