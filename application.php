<?php

class Application
{
    private $conn;

    public function connect()
    {
        $this->conn = mysqli_connect('localhost', 'root', '', 'salon');
    }

    public function getMoto()
    {
        $sql = "SELECT * FROM motocykle";

        return $this->conn->query($sql);
    }
}
