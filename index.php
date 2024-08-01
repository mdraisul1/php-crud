<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- Page Title -->
    <title>Book List</title>
</head>

<body>
    <div class="container">
        <header class="d-flex justify-content-between my-4">
            <h1>Book List</h1>
            <a href="create.php" class="btn btn-primary">Add New Book</a>
        </header>

        <!-- Book List table-->
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Type</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Connect to the database
                include 'connect.php';

                // Query the database
                $sql = "SELECT * FROM users";
                $result = mysqli_query($conn, $sql);
                // $row = mysqli_fetch_array($result);

                //print the data
                // echo "<pre>";
                // print_r($row);
                // echo "</pre>";

                // Check if there are any results
                // if ($result && mysqli_num_rows($result) > 0) {

                // Loop through the results
                while ($row = mysqli_fetch_array($result)) {
                ?>
                    <tr>
                        <td><?= $row['id'] ?></td>
                        <td><?= $row['title'] ?></td>
                        <td><?= $row['author'] ?></td>
                        <td><?= $row['type'] ?></td>

                        <td>
                            <a href="view.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">Read More</a>
                            <a href="edit.php?id=<?php echo $row['id']; ?>" class="btn btn-success">Edit</a>
                            <a href="deleted.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>