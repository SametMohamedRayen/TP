<?php

class UserRepository extends Repository
{
    public function __construct()
    {
        parent::__construct("user");
    }

public function verifAdmin($log,$pwd)
{
    foreach($this->getAll() as $value)
    {
        if(($value->login == $log) && ($value->password == $pwd))
        {
            return true;
        }
    }
    return false;
}

}
