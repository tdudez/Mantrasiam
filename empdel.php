<?php
    include('action/server.php');

    $empid = $_GET['id'];
    $query = "UPDATE employees
    SET sta = 0
    where id = $empid
    ";
    $result = mysqli_query($connect, $query);
        
    if($result){
        $_SESSION['success'] = "Edit employee profile successfully";
        header("Location: emp.php");
    }
    else{
        $_SESSION['error'] = "Something went wrong";
        header("Location: emp.php");
    }

?>