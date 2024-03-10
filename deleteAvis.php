<?php
    include('./config/config.php');
    $id = $_GET['id'];
    mysqli_query($con, "DELETE FROM avis WHERE id=$id");
    header('location:avis.php');
?>