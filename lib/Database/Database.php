<?php
/**
 * Created by PhpStorm.
 * User: Ino
 * Date: 14.04.15
 * Time: 21:58
 */

namespace lib\Database\Database;


class Database {

    private $dbhost;
    private $dbname;
    private $dbuser;
    private $dbpassword;

    public function __construct()
    {
        //verbinde zur Datenbank
    }

    public function connect()
    {

    }

    public function selectFromDatabase($where)
    {
        $sql = 'SELECT';
    }

}