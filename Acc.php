<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile_Info</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container my-5">
        <h2>Customers Account Details</h2>
        <a class="btn btn-primary" href="pro_form.php" role="button">New User</a>
        <br>
        <table class="table">
            <thead>
                <tr>
                    <th>Id </th>
                    <th>Name </th>
                    <th>Phone Number </th>
                    <th>Email </th>
                    <th>DOB </th>
                    <th>Address </th>
                    
                <tr>
            </thead>
            <tbody>
                <?php
                $host = "localhost";
                $user = "root";
                $password = "";
                $db = "bank";

                $connection = new mysqli($host, $user, $password, $db);

                $mysqli = "select * from profile";
                $result = $connection->query($mysqli);

                while ($row = $result->fetch_assoc()) {
                    echo " <tr>
                        <td>$row[Id]</td>
                        <td>$row[Name]</td>
                        <td>$row[Phone_no]</td>
                        <td>$row[Email]</td>
                        <td>$row[DOB]</td>
                        <td>$row[Address]</td>
                        
                        <td> 
                            <a class='btn btn-primary btn-sm' href='?Id=$row[Id]'>Edit</a> 
                            <a class='btn btn-danger btn-sm' href='pro_del.php?Id=$row[Id]'>Delete</a>
                        </td>
                    </tr>
                        ";
                }

                ?>


            </tbody>
        </table>
    </div>
</body>

</html>