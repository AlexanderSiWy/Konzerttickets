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

    public function insert() {
        $pdo = connectToDatabase();
        $statement = $pdo->prepare('INSERT INTO '.self::getTableName().' (rabatt, zahlungsfrist) VALUES (:rabatt, :zahlungsfrist)');
        $statement->bindParam(':rabatt', $this->rabatt);
        $statement->bindParam(':zahlungsfrist', $this->zahlungsfrist);
        $statement->execute();
    }

    public function update() {
        $pdo = connectToDatabase();
        $statement = $pdo->prepare('UPDATE '.self::getTableName().' rabatt = :rabatt, zahlungsfrist = :zahlungsfrist WHERE id = :id');
        $statement->bindParam(':rabatt', $this->rabatt);
        $statement->bindParam(':zahlungsfrist', $this->zahlungsfrist);
        $statement->bindParam(':id', $this->id);
        $statement->execute();
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

    public function getDescription() {
        return $this->getRabatt().'% Rabatt';
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