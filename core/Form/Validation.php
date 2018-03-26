<?php
/**
 * Created by PhpStorm.
 * User: alexs
 * Date: 26.03.2018
 * Time: 10:39
 */

abstract class Validation
{
    private $message;

    public function __construct($message)
    {
        $this->message = $message;
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
    public abstract function validate($value);
}