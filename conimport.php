<?php
include("action/server.php");
    $idc = $_GET['id'];
    $creid = $_GET['creid'];

    $query = "SELECT D.camount, p.amount, P.id
    FROM createdetail D
    INNER JOIN products P ON D.prod_id = P.id
    WHERE D.idc = $idc
    ";

    $result = mysqli_query($connect, $query);
    $row = mysqli_fetch_array($result);

    $newamount = $row['camount']+$row['amount'];
    $prodid = $row['id'];

    $query = "UPDATE products
    SET amount = '$newamount'
    WHERE id = $prodid
    ";
    $result = mysqli_query($connect, $query);

    $query = "UPDATE createdetail
    SET sta = 0
    WHERE idc = $idc
    ";
    $result = mysqli_query($connect, $query);

    header("Location: importdb.php?id=$creid");
?>