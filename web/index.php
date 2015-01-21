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
$app['debug'] = $config['debug'];


/**
 * Set some provider's
 */
$app->register(new Silex\Provider\DoctrineServiceProvider(), $config['db']);
$app->register(new Silex\Provider\MonologServiceProvider(), $config['monolog']);
$app->register(new Silex\Provider\TwigServiceProvider(), $config['twig']);
$app->register(new Silex\Provider\UrlGeneratorServiceProvider());
$app->register(new Silex\Provider\ValidatorServiceProvider());
$app->register(new Silex\Provider\SessionServiceProvider());


/**
 * Routes
 */
$app->match('/', 'App\Controllers\HomepageController::indexAction');


/**
 * Run application
 */
$app->run();