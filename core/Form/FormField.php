<?php
/**
 * Created by PhpStorm.
 * User: alexs
 * Date: 20.03.2018
 * Time: 10:38
 */

class FormField implements JsonSerializable
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
        $notEmptyValidation = new RegexValidation('\S', "Muss gefüllt sein");
        if(!$notEmptyValidation->validate($this->value)) {
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
            if(!$validation->validate($this->value)) {
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
    public function setName($name)
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
    public function setValue($value)
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
    public function isRequired()
    {
        return $this->required;
    }

    /**
     * @param bool $required
     */
    public function setRequired(bool $required)
    {
        $this->required = $required;
    }

    public function isValid()
    {
        return $this->valid;
    }

    /**
     * @param bool $valid
     */
    public function setValid(bool $valid)
    {
        $this->valid = $valid;
    }

    /**
     * @return array
     */
    public function getValidations()
    {
        return $this->validations;
    }

    /**
     * @param array $validations
     */
    public function setValidations(array $validations)
    {
        $this->validations = $validations;
    }

    /**
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param string $message
     */
    public function setMessage(string $message)
    {
        $this->message = $message;
    }

    /**
     * Specify data which should be serialized to JSON
     * @link http://php.net/manual/en/jsonserializable.jsonserialize.php
     * @return mixed data which can be serialized by <b>json_encode</b>,
     * which is a value of any type other than a resource.
     * @since 5.4.0
     */
    public function jsonSerialize()
    {
        return ["name" => $this->name, "valid"=>$this->valid, "message"=>$this->message];
    }
}