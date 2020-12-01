<?php
    include('action/server.php');

    $cusid = $_GET['id'];
    $query = "UPDATE customers
    SET sta = 0
    where id = $cusid
    ";
    $result = mysqli_query($connect, $query);
        
    if($result){
        $_SESSION['success'] = "Edit employee profile successfully";
        header("Location: customer.php");
    }
    else{
        $_SESSION['error'] = "Something went wrong";
        header("Location: customer.php");
    }

?>