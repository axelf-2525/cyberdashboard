<?php
    $conn = new mysqli("localhost", "root", "", "zh");
    $id = $_GET['id'];
    $sql = "DELETE FROM dolgozo WHERE id = $id";

    $conn->query($sql);
    header("Location: index.php");
    exit;
?>