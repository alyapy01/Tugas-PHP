<?php

$id = $_GET['id'];

    include('connect.php');

    $result = mysqli_query($conn, "DELETE FROM pelanggan  WHERE id = '$id' ");

    header("Location: index.php");
?>
