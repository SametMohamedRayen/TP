<?php


class HistoriqueRepository extends Repository
{
    public function __construct()
    {
        parent::__construct("historique");
    }

    public function ajout($action,$date,$who)
    {
        $query = "insert into ".$this->tableName." values(?,?,?)";
        $response = $this->bd->prepare($query);
        $response->execute([$action,$date,$who]);
    }
}