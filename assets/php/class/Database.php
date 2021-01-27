<?php

class Database
{
    private $hostname = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "firstphp";

    public function __construct()
    {
        try {
            $con = new PDO('mysql:host=' . $this->hostname . ';dbname=' . $this->database . '', $this->username, $this->password);
        } catch (PDOException $exception) {
            print "Erreur !: " . $exception->getMessage() . "<br/>";
            die();
        }
        return $con;
    }
}