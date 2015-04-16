<?php
/**
 * Created by PhpStorm.
 * User: Ino
 * Date: 14.04.15
 * Time: 19:34
 */


/**
 * @param $className - format: lib\Controller\Controller
 */
function autoLoader($className)
{
    $tmp = dirname(__FILE__) . '/../' . str_replace('\\', '/', $className).'.php';

    if(!file_exists($tmp) || !is_readable($tmp)) {
        throw new \Exception('The given class could not be loaded as the file does not exist or is not readable');
    }

    require_once $tmp;
}
// Autoloader bekannt machen
spl_autoload_register('autoLoader');