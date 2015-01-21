<?php
/**
 * File contain developer functions
 * Created by DNM in 2014
 */

namespace App\Utils;

/**
* Developer class 
*
* @copyright 2014 DNM
*/
class Dnm
{
    /**
     * Start xhprof profiling
     * 
     * @return void
     */
    public static function xhprof_start($xhprof_level = false)
    {
        if(!$xhprof_level)
            $xhprof_level = XHPROF_FLAGS_NO_BUILTINS | XHPROF_FLAGS_CPU | XHPROF_FLAGS_MEMORY;

        // start profiling
        xhprof_enable($xhprof_level);
    }


    /**
     * Stop xhprof profiling
     * 
     * @return void
     */
    public static function xhprof_stop()
    {
        // stop profiler
        $xhprof_data = xhprof_disable();

        // save raw data for this profiler run using default
        // implementation of iXHProfRuns.
        $XHPROF_ROOT = '/mnt/hgfs/xhprof/';
        include_once $XHPROF_ROOT . '/xhprof_lib/utils/xhprof_lib.php';
        include_once $XHPROF_ROOT . '/xhprof_lib/utils/xhprof_runs.php';
        $xhprof_runs = new XHProfRuns_Default();
        $run_id = $xhprof_runs->save_run($xhprof_data, 'xhprof');
    }


    /**
     * Debug function
     * 
     * @param  mixed   $var
     * @param  boolean $die
     * @return string
     */
    public static function _d($var, $die = false)
    {
        echo '<hr><pre>';
        print_r($var);
        echo '</pre><hr>';

        if($die)
            die();
    }
}

