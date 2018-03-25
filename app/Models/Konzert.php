<?php

class Konzert extends Entity
{
    private $id;
    private $artist;

    public function __construct($artist = null)
    {
        $this->artist = $artist ?? $this->artist;
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