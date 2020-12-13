<?php
@isset($target) ? require '../mysql/Connect.php' : require 'mysql/Connect.php';

class Model extends Connect
{

    static function register($a, $b, $c)
    {
        try {
            for ($i = 0; $i < count($a); $i++) {
                $insert = self::conn()->prepare("INSERT INTO contacts (name, email, phoneNumber) VALUES (:a, :b, :c)");
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
