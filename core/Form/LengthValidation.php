<?php

class LengthValidation extends Validation
{

    private $length;

    public function __construct($length)
    {
        parent::__construct("Zu Lang");
        $this->length = $length;
    }

    public function validate($value)
    {
        return strlen($value) <= $this->length;
    }
}