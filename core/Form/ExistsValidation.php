<?php

class ExistsValidation extends Validation
{

    private $model;

    public function __construct($model, $message)
    {
        parent::__construct($message);
        $this->model = $model;
    }

    public function validate($id)
    {
        $person = $this->model::findById($id);
        return $person !== false;
    }
}