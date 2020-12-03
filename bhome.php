<?php
    include("action/server.php");
    $creid = $_GET['id'];

    $query = "UPDATE creates
    SET stat = 1
    WHERE id = $creid
    ";
    $result = mysqli_query($connect, $query);

    header("Location: menu.php");

?>