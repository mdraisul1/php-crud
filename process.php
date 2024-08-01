<?php 
include 'connect.php';

if(isset($_POST['submit'])){

    //variable for data
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $author = mysqli_real_escape_string($conn, $_POST['author']);
    $type = mysqli_real_escape_string($conn, $_POST['type']);
    $description = mysqli_real_escape_string($conn, $_POST['description']);

    //sql query
    $sql = "INSERT INTO users(title, author, type, description) VALUES('$title', '$author', '$type', '$description')";
    //execute query
    $result = mysqli_query($conn, $sql);
    if($result){
        echo "Data inserted successfully";
    }else{
        echo "Failed to insert data";
    }
}

//edit data
if (isset($_POST['edit'])) {
    include 'connect.php';

    // Retrieve data from form
    $id = mysqli_real_escape_string($conn, $_POST['id']);
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $author = mysqli_real_escape_string($conn, $_POST['author']);
    $type = mysqli_real_escape_string($conn, $_POST['type']);
    $description = mysqli_real_escape_string($conn, $_POST['description']);

    // Update query
    $sql = "UPDATE users SET title='$title', author='$author', type='$type', description='$description' WHERE id=$id";

    // Execute query
    if (mysqli_query($conn, $sql)) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }

    // Close connection
    mysqli_close($conn);
}
