<?php
abstract class Connect
{
    static function conn()
    {
        $servername = "localhost";
        $username = "root";
        $password = "password";

        try {
            $conn = new PDO("mysql:host=$servername;dbname=database", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
        return $conn;
    }
}