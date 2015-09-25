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

    public function addMoto($marka, $model, $pojemnosc, $rok)
    {
        $sql = "INSERT INTO motocykle (marka, model, pojemnosc, rok) VALUES ('$marka', '$model', $pojemnosc, '$rok')";

        $this->conn->query($sql);
    }


}
