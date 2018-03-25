<?php

class Verkauf extends Entity
{
    private $id;
    private $personId;
    private $konzertId;
    private $treuebonusId;
    private $zahlungsstatus;
    private $datum;

    public function __construct($personId = null, $konzertId = null, $treuebonusId = null, $zahlungsstatus = null, $datum = null)
    {
        $this->personId = $personId ?? $this->personId;
        $this->konzertId = $konzertId ?? $this->konzertId;
        $this->treuebonusId = $treuebonusId ?? $this->treuebonusId;
        $this->zahlungsstatus = $zahlungsstatus ?? $this->zahlungsstatus;
        $this->datum = $datum ?? $this->datum;
    }

    public static function getTableName()
    {
        return 'verkauf';
    }

    public static function getModel()
    {
        return 'Verkauf';
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id): void
    {
        $this->id = $id;
    }

    public function getPersonId()
    {
        return $this->personId;
    }

    public function getPerson() {
        return Person::findById($this->getPersonId());
    }

    public function setPersonId($personId): void
    {
        $this->personId = $personId;
    }


    public function getKonzertId()
    {
        return $this->konzertId;
    }

    public function getKonzert() {
        return Konzert::findById($this->getKonzertId());
    }

    public function setKonzertId($konzertId): void
    {
        $this->konzertId = $konzertId;
    }

    public function getTreuebonusId()
    {
        return $this->treuebonusId;
    }

    public function getTreuebonus() {
        return Treuebonus::findById($this->getTreuebonusId());
    }

    public function setTreuebonusId($treuebonusId): void
    {
        $this->treuebonusId = $treuebonusId;
    }

    public function getZahlungsstatus()
    {
        return $this->zahlungsstatus;
    }

    public function setZahlungsstatus($zahlungsstatus): void
    {
        $this->zahlungsstatus = $zahlungsstatus;
    }

    public function getDatum()
    {
        return $this->datum;
    }

    public function setDatum($datum): void
    {
        $this->datum = $datum;
    }
}