<?php
    session_start();

    if(isset($_POST['txtuser'])){
        include('server.php');

        $username = $_POST['txtuser'];
        $password = $_POST['txtpass'];
        $passwordenc = md5($password);

        $query = "SELECT * FROM employees WHERE username = '$username' AND password = '$passwordenc'";

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
        }
    }
    else{
        header("Location: login.php");
    }
?>