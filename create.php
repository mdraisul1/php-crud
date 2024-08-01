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
    <title>Add New Book</title>
</head>
<body>
    <div class="container">
        <header class="d-flex justify-content-between my-4">
            <h1>Add New Book</h1>
            <div>
                <a href="" class="btn btn-info">Back</a>
            </div>
        </header>
        <form action="" method="post">
            <div class="form-element">
                <input type="text" class="form-control my-4" name="title" placeholder="Book Title">
            </div>
            <div class="form-element">
                <input type="text" class="form-control my-4" name="Author" placeholder="Author Name">
            </div>
            <div class="form-element my-4">
                <select name="type" id="type">
                    <option value="">Select Book Type</option>
                    <option value="fiction">Fiction</option>
                    <option value="programming">Programming</option>
                    <option value="cooking">Cooking</option>
                    <option value="history">History</option>
                </select>
            </div>
            <div class="form-element my-4">
                <input type="text" class="form-control" name="description" placeholder="Book Description">
            </div>
            <div class="form-element">
                <input type="submit" class="btn btn-success" name="submit" value="Add Book">
            </div>
        </form>
    </div>
</body>
</html>