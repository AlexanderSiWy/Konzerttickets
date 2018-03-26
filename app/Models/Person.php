<?php

class Person extends Entity
{
    private $id;
    private $name;
    private $mail;
    private $tel;

    public function __construct($name = null, $mail = null, $tel = null)
    {
        $this->name = $name ?? $this->name;
        $this->mail = $mail ?? $this->mail;
        $this->tel = $tel ?? $this->tel;
    }

    public function insert() {
        $pdo = connectToDatabase();
        $statement = $pdo->prepare('INSERT INTO '.self::getTableName().' (name, mail, tel) VALUES (:name, :mail, :tel)');
        $statement->bindParam(':name', $this->name);
        $statement->bindParam(':mail', $this->mail);
        $statement->bindParam(':tel', $this->tel);
        $statement->execute();
    }

    public function update() {
        $pdo = connectToDatabase();
        $statement = $pdo->prepare('UPDATE '.self::getTableName().' SET name = :name, mail = :mail, tel = :tel WHERE id = :id');
        $statement->bindParam(':name', $this->name);
        $statement->bindParam(':mail', $this->mail);
        $statement->bindParam(':tel', $this->tel);
        $statement->bindParam(':id', $this->id);
        $statement->execute();
    }

    public static function getTableName()
    {
        return 'person';
    }

    public static function getModel()
    {
        return 'Person';
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getMail()
    {
        return $this->mail;
    }

    public function setMail($mail)
    {
        $this->mail = $mail;
    }

    public function getTel()
    {
        return $this->tel;
    }

    public function setTel($tel)
    {
        $this->tel = $tel;
    }
}