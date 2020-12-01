<?php
    include("action/server.php");
    $creid = $_GET['id'];

    $query = "UPDATE creates
    SET sta = 1
    WHERE id = $creid
    ";
    $result = mysqli_query($connect, $query);

    header("Location: menu.php");

?>