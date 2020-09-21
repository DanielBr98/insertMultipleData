<?php
extract($_POST);

if (isset($form)) {
    require 'model.php';
    $dataBase = new DataBase($conn);
    session_start();

    $insert = $dataBase->register($name, $email, $phoneNumber);
    if ($insert == true) {
        $_SESSION['msg'] = "<p style='color:green;text-align:center'>Data sent successfully!</p>";
        header("Location: ../index.php");
    } else {
        $_SESSION['msg'] = "<p style='color:green;text-align:center'>Try again!</p>";
        header("Location: .../index.php");
    }
} else {
    header('Location: ../index.php');
}
