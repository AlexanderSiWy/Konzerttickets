<?php

class Route
{
    private $controller;
    private $name;
    private $standalone;

    public function __construct( $controller, $name = '', $standalone = false)
    {
        $this->controller = $controller;
        $this->name = $name;
        $this->standalone = $standalone;
    }

    public function getUri()
    {
        return $this->uri;
    }

    public function setUri($uri)
    {
        $this->uri = $uri;
    }

    public function getController()
    {
        return $this->controller;
    }

    public function setController($controller)
    {
        $this->controller = $controller;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return bool
     */
    public function isStandalone(): bool
    {
        return $this->standalone;
    }

    /**
     * @param bool $standalone
     */
    public function setStandalone(bool $standalone): void
    {
        $this->standalone = $standalone;
    }
}