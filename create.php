<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include_once $_SERVER["DOCUMENT_ROOT"]."/connection_database.php";
    $data = $_POST;
}
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
    <div class="container">
        <h1 class="text-center">Додати користувача</h1>
        <form class="col-md-6 offset-md-3" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="name" class="form-label">Name:</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Phone:</label>
                <input type="text" class="form-control" id="phone" name="phone" required>
            </div>
            <div class="mb-3">
                <div class="row d-flex align-items-center">
                    <div class="col-md-3">
                        <label for="image" class="form-label">
                            <img src="/images/no-photo.png" alt="фото" width="100%">
                        </label>
                    </div>
                    <div class="mb-3 col-md-9">
                        <input type="file" class="form-control" id="image" name="image" aria-describedby="emailHelp">
                    </div>
                </div>
            </div>

            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-success me-2">Створити</button>
                <a href="/" class="btn btn-primary">Скасувати</a>
            </div>
        </form>
    </div>
</main>


<script src="/js/bootstrap.bundle.min.js"></script>
</body>
</html>