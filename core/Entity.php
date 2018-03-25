<?php

abstract class Entity
{

    protected static function getSelect() {
        return "SELECT * FROM ".static::getTableName()." ";
    }

    protected static function fetchArray($statement) {
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_CLASS, static::getModel());
    }
    protected static function fetchSingle($statement) {
        $statement->execute();
        return $statement->fetchObject(static::getModel());
    }

    public static function findAll() {
        $pdo = connectToDatabase();
        $statement = $pdo->prepare(static::getSelect());
        return static::fetchArray($statement);
    }

    public static function findById($id) {
        $pdo = connectToDatabase();
        $statement = $pdo->prepare(static::getSelect()."WHERE id = :id");
        $statement->bindParam(":id", $id);
        return static::fetchSingle($statement);
    }

    public abstract function getId();

    public static abstract function getTableName();
    public static abstract function getModel();
}