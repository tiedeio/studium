<?php
/**
 * Created by PhpStorm.
 * User: Ino
 * Date: 14.04.15
 * Time: 20:09
 */

namespace lib\Request;


class Request {

    //Inhalt von $_SERVER
    private $requestInformation;

    public function __construct(array $requestInformation)
    {
        $this->requestInformation = $requestInformation;

    }

    public function get($key)
    {
        // Gibt Wert aus dem Array $requestInformation zurück
        return (array_key_exists(strtoupper($key), $this->requestInformation)) ?
            $this->requestInformation[strtoupper($key)] :
            null;

    }

    public function handleRequest()
    {
        $url = trim(preg_replace('#' . $this->get('REDIRECT_BASE') . '#', '', $this->get('REDIRECT_URL'), 1), '/');
        $information = [];

        list($information['controller'], $information['action']) = explode('/', $url);

        $information['controller'] = '\\Controller\\' . $information['controller'] . 'Controller';
        $information['action'] = $information['action'] . 'Action';

        return $information;
    }
}