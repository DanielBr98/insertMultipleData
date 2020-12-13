<?php
extract($_POST);

if (isset($form)) {
    require '../model/Model.php';
    session_start();

    switch ($target) {
        case 'register':

            $insert = Model::register($name, $email, $phoneNumber);
            if ($insert == true) {
                $_SESSION['msg'] = "<p style='color:green;text-align:center'>Data sent successfully!</p>";
                header("Location: $_SERVER[HTTP_REFERER]");
            } else {
                $_SESSION['msg'] = "<p style='color:green;text-align:center'>Try again!</p>";
                header("Location: $_SERVER[HTTP_REFERER]");
            }

            break;

        default:

            header("Location: ../index.php");
    }
} else {

    header('Location: ../index.php');
}
