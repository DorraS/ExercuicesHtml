<?php
/**
 * Created by PhpStorm.
 * User: ydomenjoud
 * Date: 13/04/18
 * Time: 11:07
 */

class Logger
{
    public function log($message) {
        error_log($message);
    }
}