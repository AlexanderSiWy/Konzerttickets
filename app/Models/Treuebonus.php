<?php

class Treuebonus extends Entity
{
    private $id;
    private $rabatt;
    private $zahlungsfrist;

    public function __construct($rabatt = null, $zahlungsfrist = null)
    {
        $this->rabatt = $rabatt ?? $this->rabatt;
        $this->zahlungsfrist = $zahlungsfrist ?? $this->zahlungsfrist;
    }

    public static function getTableName()
    {
        return 'treuebonus';
    }

    public static function getModel()
    {
        return 'Treuebonus';
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getRabatt()
    {
        return $this->rabatt;
    }

    public function setRabatt($rabatt)
    {
        $this->rabatt = $rabatt;
    }

    public function getZahlungsfrist()
    {
        return $this->zahlungsfrist;
    }

    public function setZahlungsfrist($zahlungsfrist)
    {
        $this->zahlungsfrist = $zahlungsfrist;
    }
}