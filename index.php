<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Insert Multiple Data</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
</head>

<body>
    <div class="container">
        <?php
        session_start();

        if (isset($_SESSION['msg'])) {
            echo $_SESSION['msg'] . '<br>';
            unset($_SESSION['msg']);
        }
        ?>

        <form method="POST" action="restrict/controller.php">
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
</body>

</html>