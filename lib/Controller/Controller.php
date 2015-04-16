<?php
/**
 * Created by PhpStorm.
 * User: Ino
 * Date: 14.04.15
 * Time: 19:42
 */

namespace lib\Controller;


class Controller
{
    /**
     * @var array
     */
    private $headers = [];

    /**
     * @var string
     */
    private $content;

    /**
     * @param array $headers
     * @return $this
     */
    public function setHeaders(array $headers)
    {
        $this->headers = $headers;

        return $this;
    }

    public function addHeader($header)
    {
        $this->headers[] = $header;

        return $this;
    }

    /**
     *
     */
    public function getHeaders()
    {
        foreach ($this->headers as $header) {
            header($header);
        }
    }

    /**
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param string $content
     */
    public function setContent($content)
    {
        $this->content = $content;
    }
}