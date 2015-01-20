<?php
/**
 * Default class
 */

namespace App\Controllers;

use Silex\Application;
use Symfony\Component\HttpFoundation\Request;
use App\Models as db;


/**
 * Controller
 */
class HomepageController
{
    /**
     * Index Action
     * 
     * @param  Request     $request
     * @param  Application $app
     * @return html
     */
    public function indexAction(Request $request, Application $app)
    {
        $dbAccounts = new db\AccountModel($app);

//        $app['monolog']->addDebug('Testing the Monolog logging.');

// print_r($dbAccounts->getAll());
// die;


        return $app['twig']->render(
            'hello.twig.html',
            array(
               'rows' => $dbAccounts->getAll(),
            )
        );
    }
}
