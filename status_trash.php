<?php 
    require 'functions/koneksi.php';

    $id = $_GET['id'];
    $Status = $_GET['Status'];

    $sql = "UPDATE posts SET Status='$Status' WHERE id='$id'";
    mysqli_query($conn, $sql);

    header("location:/Article/index.php");
?>