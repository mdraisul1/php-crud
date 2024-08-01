<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- Page Title -->
    <title>Book Details</title>
</head>

<body>
    <div class="container">
        <header class="d-flex justify-content-between my-4">
            <h1>Book Details</h1>
            <a href="index.php" class="btn btn-primary">Back</a>
        </header>

        <div class="book-details">
            <?php
                if(isset($_GET['id'])) {
                    $id = $_GET['id'];
                    include 'connect.php';

                    $sql = "SELECT * FROM users WHERE id = $id";
                    $result = mysqli_query($conn, $sql);
                    $row = mysqli_fetch_array($result);

                    ?>
                        <h2>Title</h2>
                        <p><?= $row['title'] ?></p>
                        <h2>Author</h2>
                        <p><?= $row['author'] ?></p>
                        <h2>Type</h2>
                        <p><?= $row['type'] ?></p>
                        <h2>Description</h2>
                        <p><?= $row['description'] ?></p>
                    <?php
                }
            ?>
        </div>
    </div>
</body>

</html>