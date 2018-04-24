<?php
/**
 * Created by PhpStorm.
 * User: ydomenjoud
 * Date: 13/04/18
 * Time: 09:23
 */
session_start();
$requested_url= isset($_SESSION['user'])
				? (isset($_SERVER['PATH_INFO']) ? $_SERVER['PATH_INFO'] : '/dashboard') 
					: '/auth/login';
	

# initialisation
require 'tools/Logger.php';
require 'config/routes.php';

$logger = new Logger();

// Est ce que l'url demandé( $requested_url) existe ?
if (array_key_exists($requested_url, $routes_config)) {
    $logger->log("route found : ${requested_url}");

    // récupératon du l'url de controller 
    $controller = $routes_config[$requested_url];

    // est ce que le fichier de controller existe ?
    if (file_exists($controller)) {
        $logger->log("controller found : ${requested_url}");

        // inclusion du top du site
        require 'view/top.php';

        // inclusion du controller
        require $controller;

        // inclusion du bot du site
        require 'view/bot.php';

    } else {
        $logger->log("controller not found : ${requested_url}");
        require 'controller/errors/404.php';
    }
} else {
    $logger->log("route not found : ${requested_url}");
    require 'controller/errors/404.php';
}

