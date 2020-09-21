<?php
require 'connection.php';

class DataBase
{

    private $db;

    function __construct($conn)
    {
        $this->db = $conn;
    }

    public function register($a, $b, $c)
    {
        try {
            for ($i = 0; $i < count($a); $i++) {
                $insert = $this->db->prepare("INSERT INTO contacts (name, email, phoneNumber) VALUES (:a, :b, :c)");
                $insert->bindParam(':a', $a[$i]);
                $insert->bindParam(':b', $b[$i]);
                $insert->bindParam(':c', $c[$i]);
                $insert->execute();
            }
            return $insert;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}