<?php
/**
 * Default class
 */

namespace App\Controllers;

use Silex\Application;
use Symfony\Component\HttpFoundation\Request;
use App\Models as db;
use App\Utils\Dnm;
use Symfony\Component\Validator\Constraints as Assert;

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

        $app['monolog']->addDebug('Testing the Monolog logging.');


        $errors = $app['validator']->validateValue('asdasd@asdasd', new Assert\Email());


Dnm::_d($_SESSION);

//$app['session']->set('time', time());

Dnm::_d($app['session']->get('time'));

Dnm::_d($app['session'],1);


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
