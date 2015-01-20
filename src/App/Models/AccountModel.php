<?php
/**
 * Account model
 */

namespace App\Models;

use Silex\Application;

/**
 * Model class
 */
class AccountModel
{
    /**
     * $db
     * @var obj
     */
    protected $db;


    /**
     * __construct
     * @param  Application $app
     */
    public function __construct(Application $app)
    {
        $this->db = $app['db'];
    }


    /**
     * Get all rows
     * @return array
     */
    public function getAll()
    {
        return $this->db->fetchAll('SELECT * FROM accounts');
    }

}