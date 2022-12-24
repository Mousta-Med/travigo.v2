<?php

class Db
{
    private $hostName;
    private $userName;
    private $password;
    private $dbName;

    public function connection()
    {
        $this->hostName = "localhost";
        $this->userName = "root";
        $this->password = "";
        $this->dbName = "travigio_2.0";

        $conn = new mysqli(
            $this->hostName,
            $this->userName,
            $this->password,
            $this->dbName
        );

        return $conn;
    }
}
