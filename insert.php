<?php
extract($_POST);

if (isset($submit)) {

    session_start();
    require 'connection.php';

    for ($i = 0; $i < count($name); $i++) {

        $insert = $pdo->query("INSERT INTO contacts (name, email, phoneNumber) VALUES ('$name[$i]', '$email[$i]', '$phoneNumber[$i]')");
    }

    if ($insert == true) {
        $_SESSION['msg'] = "<p style='color:green'>Data sent successfully!</p>";
        header("Location: form.php");
    }
}
?>