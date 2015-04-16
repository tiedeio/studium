<?php
/**
 * Created by PhpStorm.
 * User: Ino
 * Date: 14.04.15
 * Time: 21:00
 */

namespace Controller;


use lib\Controller\Controller;
use Model\Employee\Employee;


class IndexController extends Controller
{

    public function indexAction()
    {
        return "Hallo Welt";
    }


    public function showEmployeeNameAction()
    {
        $employee = new Employee();
        $employee->setCity("Borkum");
        echo $employee->getCity();
    }

}