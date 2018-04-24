<?php
/**
 * Created by PhpStorm.
 * User: ydomenjoud
 * Date: 13/04/18
 * Time: 11:05
 */


// gestion du routing
$routes_config = [
    '/' => 'controller/home.php',
    '/auth/login' => 'controller/auth/login.php',
    '/auth/logout' => 'controller/auth/logout.php',
    '/dashboard' => 'controller/dashboard/index.php',
	'/addUser' => 'controller/dashboard/addUser.php'
];