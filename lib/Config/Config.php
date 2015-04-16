<?php
/**
 * Created by PhpStorm.
 * User: Ino
 * Date: 14.04.15
 * Time: 21:43
 */

namespace lib\Config;


class Config
{

    /**
     * @var Config
     */
    private static $instance = null;

    /**
     * @var array
     */
    private $config = array();

    /**
     * Singleton-Pattern - objects with private __construct-method
     * could not be instantiated with new
     */
    private function __construct()
    {

    }

    /**
     * @return Config
     */
    public function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new self;
        }

        return self::$instance;
    }


    public function setConfig(array $config)
    {
        $this->config = $config;
    }

    /**
     * @param $key
     * @return mixed
     * @throws \Exception
     */
    public function get($key)
    {
        if (!array_key_exists($key, $this->config)) {
            throw new \Exception();
        }

        return $this->config[$key];
    }

    /**
     * @param $key
     * @return bool
     */
    public function has($key)
    {
        try {
            $this->get($key);
            return true;
        } catch (\Exception $e) {
            return false;
        }
    }
}
