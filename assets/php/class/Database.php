<?php

class Database
{
    public function __construct()
    {
    }

    public function getConnect($hostname = "localhost", $username = "root", $password = "", $database = "firstphp")
    {
        try {
            $con = new PDO("mysql:host=$hostname;dbname=$database", $username, $password);
        } catch (PDOException $exception) {
            print "Erreur !: " . $exception->getMessage() . "<br/>";
            die();
        }
        return $con;
    }

}
