<?php
/**
 * Created by PhpStorm.
 * User: Ino
 * Date: 14.04.15
 * Time: 19:32
 */

require_once 'lib/autoloader.php';

$request = new \lib\Request\Request($_SERVER);
$responseInformation = $request->handleRequest();

#$controller = $responseInformation['controller'];
/*
if (!class_exists($controller)) {
    //Exception
}

if (!method_exists($controller, $responseInformation['action'])) {
    //Exception
}
*/


echo call_user_func_array([$responseInformation['controller'], $responseInformation['action']], []);

