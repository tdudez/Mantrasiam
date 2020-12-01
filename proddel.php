<?php
    include('action/server.php');

    $prodid = $_GET['id'];
    $query = "UPDATE products
    SET sta = 0
    where id = $prodid
    ";
    $result = mysqli_query($connect, $query);
        
    if($result){
        $_SESSION['success'] = "Edit employee profile successfully";
        header("Location: store.php");
    }
    else{
        $_SESSION['error'] = "Something went wrong";
        header("Location: store.php");
    }

?>