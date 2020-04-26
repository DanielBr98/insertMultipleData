<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="form.js"></script>

<?php
session_start();
require 'connection.php';

if (isset($_SESSION['msg'])) {
    echo $_SESSION['msg'] . '<br>';
    unset($_SESSION['msg']);
}
?>

<form method="POST" action="insert.php">
    <button type="button" id="btnAdd">+</button>
    <br><br>
    <div id="append">
        <label>Name:</label><br>
        <input type="text" name="name[]" maxlength="30" placeholder="Name" required>
        <br>
        <label>Email:</label><br>
        <input type="email" name="email[]" maxlength="30" placeholder="Email" required>
        <br>
        <label>Phone Number:</label><br>
        <input type="text" name="phoneNumber[]" maxlength="15" pattern="[0-9]+" title="Only Numbers" placeholder="Phone Number" required>
    </div>
    <br><br>
    <input type="submit" value="submit" name="submit">
</form>