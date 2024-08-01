<?php 

if(isset($_GET['id'])) {
    include "connect.php";
    $id = $_GET['id'];
    $sql = "DELETE FROM users WHERE id = $id";
    $result = mysqli_query($conn, $sql);

    if($result) {
        echo "deleted successfully";
        header("Location: index.php");
    }
}