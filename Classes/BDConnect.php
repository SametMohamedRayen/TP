<?php

 class BDConnect
 {
  private static $bdName ="tpweb";
  private static $host ="localhost";
  private static $user ="root";
  private static $pwd ="";
  private static $bdd = null;

  private function __construct()
  {
   try{
      self::$bdd = new PDO("mysql:host = ".self::$host.";dbname=".self::$bdName.";charset=utf8",self::$user,self::$pwd,array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8'));
   }
   catch(PDOException $e){
      die('Erreur : ' . $e->getMessage());
  }
  }

  public static function getInstance()
  {
   if(!isset(self::$bdd))
   {
        new BDConnect();
   }
   return(self::$bdd);
  }
 }

