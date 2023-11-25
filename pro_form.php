<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "bank";

$connection = new mysqli($host, $user, $password, $db);

$Id = "";
$Name = "";
$Phone_no = "";
$Email = "";
$DOB = "";
$Address = "";


$errormessage = "";
$successmessage = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $Id = $_POST["Id"];
    $Name = $_POST["Name"];
    $Phone_no = $_POST["Phone_no"];
    $Email = $_POST["Email"];
    $DOB = $_POST["DOB"];
    $Address = $_POST["Address"];
}

do {
    if (empty($Id) || empty($Name) || empty($Phone_no) || empty($Email) || empty($DOB) || empty($Address)) {
        $errormessage = "ALL FIELDS ARE REQUIRED";
        break;
    }

    $mysqli = "Insert into profile(Id,Name ,Phone_no ,Email ,DOB ,Address )" .
        "values('$Id','$Name', '$Phone_no','$Email','$DOB','$Address')";

    $result = $connection->query($mysqli);

    if (!$result) {
        $errormessage = "INVALID QUERY : " . $connection->error;
        break;
    }

    $Id = "";
    $Name = "";
    $Phone_no = "";
    $Gender = "";
    $DOB = "";
    $Address = "";
    
    $successmessage = "NEW Customer ADDED";

    header("profile.php");
    exit;
} while (false);
?>



<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"> --><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Student_form</title>
    <link rel="stylesheet" href="/dist/tailwind.css" />
    <!-- <script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</head>

<body>
    <div class="container my - 5">
        <h2>New Customer</h2>

        <?php
        if (!empty($errormessage)) {
            echo "
        <div class='alert alert-waring alert-dismissible fade show' role='alert'>
          <strong>$errormessage</strong>
          <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='close'></button>
          </div>
          ";
        }
        ?>

        <form method="post">
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Id</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="Id" value="<?php echo $Id; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Name</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="Name" value=" <?php echo $Name; ?>">
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Phone_no</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="Phone_no" value="<?php echo $Phone_no; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Email</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="Email" value="<?php echo $Email; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">DOB</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="DOB" value="<?php echo $DOB; ?>" placeholder="YY-MM-DD">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Address</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="Address" value="<?php echo $Address; ?>">
                </div>
            </div>
    </div>
    <?php
    if (!empty($successmessage)) {
        echo "
          <div class='alert alert-waring alert-dismissible fade show' role='alert'>
            <strong>$successmessage</strong>
            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='close'></button>
            </div>
            ";
    }
    ?>
    <div class="row-mb-3">
        <div class="col-sm-3 d-grid">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>

        <div class="col-sm-3 d-grid">
            <a class="btn btn-outline-primary" href=" profile.php" role="button">Cancel</a>
        </div>

    </div>
    </form>
    </div>
</body>

</html>