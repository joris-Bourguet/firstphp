<?php

include_once "Database.php";

class User
{

    public function __construct()
    {
    }

    /**
     * @param $pseudo
     * @param $email
     * @param $password
     * @param $firstname
     */
    public function addUser($pseudo, $email, $password, $firstname)
    {
        $dbh = new Database();
        $sql = $dbh->prepare("INSERT INTO user (pseudo, email, password, firstname) VALUES (:pseudo, :email, :password, :firstname)");
        $sql->bindParam(':pseudo', $pseudo);
        $sql->bindParam(':email', $email);
        $sql->bindParam(':password', $password);
        $sql->bindParam(':firstname', $firstname);

        $sql->execute();

    }
}
