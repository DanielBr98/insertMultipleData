<?php
if (isset($_SESSION['msg'])) {
    echo $_SESSION['msg'] . '<br>';
    unset($_SESSION['msg']);
}
?>
<div class="col-md-12">
    <form method="POST" action="controller/controller.php">
        <input type="hidden" name="target" value="register">
        <button type="button" class="btn btn-success" id="btnAdd">+</button>
        <br><br>
        <div id="append">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Name:</label>
                    <input type="text" class='form-control' name="name[]" placeholder="Type the Name" required>
                </div>
                <div class="form-group col-md-6">
                    <label>Email:</label>
                    <input type="email" class='form-control' name="email[]" placeholder="Type the Email" required>
                </div>
                <div class="form-group col-md-6">
                    <label>Phone Number:</label>
                    <input type="text" class='form-control' name="phoneNumber[]" placeholder="Type the Phone Number" required>
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-12">
                <button class="btn btn-primary float-right" type="submit" name="form">Submit</button>
            </div>
        </div>
    </form>
</div>