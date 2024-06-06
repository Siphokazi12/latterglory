<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Upload Registration Proof of Payment</h1>

    <form method="post" enctype="multipart/form-data" action="upload.php">


        <label for="image">Image file</label>
        <input type="file" id="image" name="image">

        <button>Uploade File</button>
</body>
</html>

<?php

if ($_SERVER["REQUEST_METHOD"] != "POST") {
    exit("POST request method required");
}

print_r($_FILES);