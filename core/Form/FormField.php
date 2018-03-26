<?php
/**
 * Created by PhpStorm.
 * User: alexs
 * Date: 20.03.2018
 * Time: 10:38
 */

class FormField
{
    private $name;
    private $value = '';
    private $required;
    private $validations;
    private $valid = true;
    private $message = '';

    /**
     * FormField constructor.
     * @param $name
     * @param $value
     * @param $isRequired
     */
    public function __construct($name, $validations = [], $required = false)
    {
        $this->name = $name;
        $this->validations = $validations;
        $this->required = $required;
    }

    public function validate() {
        $notEmptyValidation = new Validation('\S', "Muss gefüllt sein");
        if(!$this->match($notEmptyValidation)) {
            if($this->isRequired()) {
                $this->valid = false;
                $this->message = $notEmptyValidation->getMessage();
                return false;
            } else {
                $this->valid = true;
                $this->message = '';
                return true;
            }
        }
        foreach ($this->validations as $validation) {
            if(!$this->match($validation)) {
                $this->valid = false;
                $this->message = $validation->getMessage();
                return false;
            }
        }
        $this->valid = true;
        $this->message = '';
        return true;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param mixed $value
     */
    public function setValue($value): void
    {
        $this->value = $value;
    }

    public function loadValue($usePost = true) {
        if($this->isSet($usePost)) {
        if($usePost) {
            $this->value = trim($_POST[$this->name]);
        } else {
            $this->value = trim($_GET[$this->name]);
        }
        } else {
            $this->value = '';
        }
    }

    public function isSet($usePost = true) : bool {
        if($usePost) {
            return isset($_POST[$this->name]);
        } else {
            return isset($_GET[$this->name]);
        }
    }

    /**
     * @return bool
     */
    public function isRequired(): bool
    {
        return $this->required;
    }

    /**
     * @param bool $required
     */
    public function setRequired(bool $required): void
    {
        $this->required = $required;
    }

    public function isValid(): bool
    {
        return $this->valid;
    }

    /**
     * @param bool $valid
     */
    public function setValid(bool $valid): void
    {
        $this->valid = $valid;
    }

    /**
     * @return array
     */
    public function getValidations(): array
    {
        return $this->validations;
    }

    /**
     * @param array $validations
     */
    public function setValidations(array $validations): void
    {
        $this->validations = $validations;
    }

    /**
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }

    /**
     * @param string $message
     */
    public function setMessage(string $message): void
    {
        $this->message = $message;
    }

    /**
     * @param $validation
     * @return false|int
     */
    public function match($validation)
    {
        return preg_match('/' . $validation->getRegex() . '/', $this->value);
    }
}