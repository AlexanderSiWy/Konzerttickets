<?php

class Ticket extends Entity
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

    public function insert() {
        $pdo = connectToDatabase();
        $statement = $pdo->prepare('INSERT INTO '.self::getTableName().' (personId, konzertId, treuebonusId, zahlungsstatus, datum) VALUES (:personId, :konzertId, :treuebonusId, :zahlungsstatus, :datum)');
        $statement->bindParam(':personId', $this->personId);
        $statement->bindParam(':konzertId', $this->konzertId);
        $statement->bindParam(':treuebonusId', $this->treuebonusId);
        $statement->bindParam(':zahlungsstatus', $this->zahlungsstatus);
        $statement->bindParam(':datum', $this->datum);
        $statement->execute();
    }

    public function update() {
        $pdo = connectToDatabase();
        $statement = $pdo->prepare('UPDATE '.self::getTableName().' SET personId = :personId, konzertId = :konzertId, zahlungsstatus = :zahlungsstatus WHERE id = :id');
        $statement->bindParam(':personId', $this->personId);
        $statement->bindParam(':konzertId', $this->konzertId);
        $statement->bindParam(':zahlungsstatus', $this->zahlungsstatus);
        $statement->bindParam(':id', $this->id);
        $statement->execute();
    }

    public static function updateZahlungsstatus($id, $value) {
        $pdo = connectToDatabase();
        $statement = $pdo->prepare('UPDATE '.self::getTableName().' SET zahlungsstatus = :zahlungsstatus WHERE id = :id');
        $statement->bindParam(':zahlungsstatus', $value);
        $statement->bindParam(':id', $id);
        $statement->execute();
    }

    public function getZahlbarBis() {
        $zahlungsfrist = $this->getTreuebonus()->getZahlungsfrist();
        return $this->getDatumAsDateTime()->add(new DateInterval('P'.$zahlungsfrist.'D'));
    }

    public function isOverDue() {
        return $this->getZahlbarBis() > new DateTime();
    }

    public static function getTableName()
    {
        return 'ticket';
    }

    public static function getModel()
    {
        return 'Ticket';
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
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

    public function setPersonId($personId)
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

    public function setKonzertId($konzertId)
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

    public static function zahlungsStatusDescription($value) {
        return $value ? 'Bezahlt' : 'Offen';
    }

    public function setTreuebonusId($treuebonusId)
    {
        $this->treuebonusId = $treuebonusId;
    }

    public function getZahlungsstatus()
    {
        return $this->zahlungsstatus;
    }

    public function setZahlungsstatus($zahlungsstatus)
    {
        $this->zahlungsstatus = $zahlungsstatus;
    }

    public function getDatum()
    {
        return $this->datum;
    }

    public function getDatumAsDateTime()
    {
        return DateTime::createFromFormat('Y-m-d', $this->datum);
    }

    public function setDatum($datum)
    {
        $this->datum = $datum;
    }
}