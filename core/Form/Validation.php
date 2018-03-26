<?php
/**
 * Created by PhpStorm.
 * User: alexs
 * Date: 20.03.2018
 * Time: 13:20
 */

class Validation
{
private $regex;
private $message;

    /**
     * Validation constructor.
     * @param $regex
     * @param $message
     */
    public function __construct($regex, $message)
    {
        $this->regex = $regex;
        $this->message = $message;
    }

    /**
     * @return mixed
     */
    public function getRegex()
    {
        return $this->regex;
    }

    /**
     * @param mixed $regex
     */
    public function setRegex($regex): void
    {
        $this->regex = $regex;
    }

    /**
     * @return mixed
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param mixed $message
     */
    public function setMessage($message): void
    {
        $this->message = $message;
    }
}