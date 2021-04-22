<?php

class Repository
{
    protected $tableName;
    protected $bd;

    public function __construct($tableName)
    {
        $this->tableName = $tableName;
        $this->bd = BDConnect::getInstance();
    }

    public function getAll()
    {
        $query = "select * from ".$this->tableName;
        $reponse = $this->bd->prepare($query);
        $reponse->execute([]);
        return($reponse->fetchAll(PDO::FETCH_OBJ));
    }

    public function get($condition)
    {
        $query = "select * from ".$this->tableName." where ".$condition;
        $response = $this->bd->prepare($query);
        $response->execute([]);
        return($response->fetchAll(PDO::FETCH_OBJ));
    }
}


