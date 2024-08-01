<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- Page Title -->
    <title>Edit Book</title>
</head>

<body>
    <div class="container">
        <header class="d-flex justify-content-between my-4">
            <h1>Edit Book</h1>
            <div>
                <a href="index.php" class="btn btn-info">Back</a>
            </div>
        </header>

        <?php

        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            include 'connect.php';
            $sql = "SELECT * FROM users WHERE id = $id";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_array($result);

            //Form for editing book
        ?>
            <form action="process.php" method="post">
                <div class="form-element">
                    <input type="text" class="form-control my-4" name="title" value="<?php $row['title'] ?>" placeholder="Book Title">
                </div>
                <div class="form-element">
                    <input type="text" class="form-control my-4" name="author" value="<?php $row['author'] ?>" placeholder="Author Name">
                </div>
                <div class="form-element my-4">
                    <select name="type" id="type">
                        <option value="">Select Book Type</option>
                        <option value="fiction" <?php if ($row['type'] == 'fiction') {echo 'selected';} ?>>Fiction</option>
                        <option value="programming" <?php if ($row['type'] == 'programming') {echo 'selected';} ?>>Programming</option>
                        <option value="cooking" <?php if ($row['type'] == 'cooking') {echo 'selected';} ?>>Cooking</option>
                        <option value="history" <?php if ($row['type'] == 'history') {echo 'selected';} ?>>History</option>
                    </select>
                </div>
                <div class="form-element my-4">
                    <textarea name="description" class="form-control" id="description" cols="100" rows="" placeholder="Book Description"></textarea>
                </div>
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <div class="form-element">
                    <input type="submit" class="btn btn-success" name="edit" value="Update Book">
                </div>
            </form>
        <?php
        }else{
            echo "No ID Found";
        }

        ?>
    </div>
</body>

</html>