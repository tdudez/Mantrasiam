<?php
    session_start();

    if(isset($_POST['username'])){
        include('action/server.php');

        $username = $_POST['username'];
        $password = $_POST['password'];

        $query = "SELECT * FROM employees WHERE username = '$username' AND password = '$password'";

        $result = mysqli_query($connect, $query);

        if(mysqli_num_rows($result) == 1){
            $row = mysqli_fetch_array($result);

            $_SESSION['userid'] = $row['id'];
            $_SESSION['username'] = $row['firstname'] . " " . $row['lastname'];
            $_SESSION['userlevel'] = $row['userlevel'];

            header("Location: menu.php");
        }
        else{
            echo"<script>alert('Username หรือ Password ไม่ถูกต้อง');</script>";
            header("Location: login.php");
        }
    }
    else{
        header("Location: login.php");
    }
?>