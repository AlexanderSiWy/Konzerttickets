<?php
/**
 * Created by PhpStorm.
 * User: alexs
 * Date: 20.03.2018
 * Time: 13:20
 */

class RegexValidation extends Validation
{
private $regex;

    /**
     * RegexValidation constructor.
     * @param $regex
     * @param $message
     */
    public function __construct($regex, $message)
    {
        parent::__construct($message);
        $this->regex = $regex;
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
    public function setRegex($regex)
    {
        $this->regex = $regex;
    }

    public function validate($value)
    {
        return preg_match('/' . $this->getRegex() . '/', $value);
    }
}