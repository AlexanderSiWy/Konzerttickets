<?php

class Konzert extends Entity
{
    private $id;
    private $artist;

    public function __construct($artist = null)
    {
        $this->artist = $artist ?? $this->artist;
    }

    public function insert() {
        $pdo = connectToDatabase();
        $statement = $pdo->prepare('INSERT INTO '.self::getTableName().' (artist) VALUES (:artist)');
        $statement->bindParam(':artist', $this->artist);
        $statement->execute();
    }

    public function update() {
        $pdo = connectToDatabase();
        $statement = $pdo->prepare('UPDATE '.self::getTableName().' SET artist = :artist WHERE id = :id');
        $statement->bindParam(':artist', $this->artist);
        $statement->bindParam(':id', $this->id);
        $statement->execute();
    }

    public static function getTableName()
    {
        return 'konzert';
    }

    public static function getModel()
    {
        return 'Konzert';
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getArtist()
    {
        return $this->artist;
    }

    public function setArtist($artist)
    {
        $this->artist = $artist;
    }
}