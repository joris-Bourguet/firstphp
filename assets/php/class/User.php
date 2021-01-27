<?php

include "Database.php";

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
    public function addUser($pseudo = "test", $email = "test@gmail.com", $password = "0123456", $firstname = "testfirstname")
    {
        $dbh = new Database();
        $stmt = $dbh->getConnect();
        $sql = $stmt->prepare("INSERT INTO user (pseudo, email, password, firstname) VALUES (:pseudo, :email, :password, :firstname)");
        $sql->bindParam(':pseudo', $pseudo);
        $sql->bindParam(':email', $email);
        $sql->bindParam(':password', $password);
        $sql->bindParam(':firstname', $firstname);

        $sql->execute();

    }
}
