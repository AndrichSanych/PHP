<?php
include_once "connection_database.php";
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
</head>
<body>
<main>
    <div class="conteiner">
        <h1>Коростувачі</h1>
        <a class="btn btn-success" href="/create.php">Додати користувача</a>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Image</th>
                <th scope="col">Name</th>
                <th scope="col">Phone</th>
                <th scope="col">Email</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $sql = 'SELECT * FROM tbl_users';
            foreach ($pdo->query($sql) as $row) {
                $id = $row['id'];
                $name = $row['name'];
                $image = "/".MEDIA."/".$row['image'];
                $email = $row['email'];
                $phone = $row['phone'];
                echo "
            <tr>
                <th scope='row'>$id</th>
                <td>
                    <img src='$image'
                         width='150'
                         alt='$name'>
                </td>
                <td>$name</td>
                <td>$phone</td>
                <td>$email</td>
            </tr>
                ";
            }
            ?>

            </tbody>
        </table>

    </div>

</main>


<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>