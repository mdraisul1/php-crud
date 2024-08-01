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

}

