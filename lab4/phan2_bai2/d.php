<?php
    $id = $_GET['id'];
    $query = "delete from products where id = $id";
    $result = $conn->query($query);
    if ($result === false) {
        echo "<script> alert('something went wrong') </script>";
    }
    else {
        echo "<script> alert('success delete id $id') </script>";
        header("Location: index.php");
    }
?>