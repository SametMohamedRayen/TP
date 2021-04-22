<?php

class PersonneRepository extends Repository
{
    public function __construct()
    {
        parent::__construct("personne");
    }

    public function ajoutPersonne($nom,$prenom,$section,$age,$cin,$path)
    {
        try {
            $query = "insert into " . $this->tableName . " values (?,?,?,?,?,?)";
            $response = $this->bd->prepare($query);
            $response->execute([$nom, $prenom, $section, $age, $cin, $path]);
        }
        catch(PDOException $e)
        {
            die('CIN Redondant !! : '.$e->getMessage());
        }
    }

    public function modifPersonne($nom,$prenom,$section,$age,$cin,$path,$old_cin)
    {
        try {
            $query = "update " .$this->tableName. " set nom = ? , prenom = ?,section = ?,age = ?,cin=?,photo = ?  where cin = ".$old_cin;
            $response = $this->bd->prepare($query);
            $response->execute([$nom, $prenom, $section, $age, $cin, $path]);
        }
        catch(PDOException $e)
        {
            die('CIN Redondant !! : '.$e->getMessage());
        }

    }

    public function suppPersonne($cin)
    {
        try {
            $query = "delete from " . $this->tableName . " where cin = ?";
            $response = $this->bd->prepare($query);
            $response->execute([$cin]);
        }
        catch(PDOException $e)
        {
            die('CIN Redondant !! : '.$e->getMessage());
        }
    }
}
