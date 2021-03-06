<?php
    session_start();

    require_once "action/server.php";

    
    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $idcard = $_POST['idcard'];
        $address = $_POST['address'];
        $tel = $_POST['tel'];
        $email = $_POST['email'];
        
        $filetmp = $_FILES['filepic']['tmp_name'];
        $filename = $_FILES['filepic']['name'];
        $filepath = "profilepic/" . $filename;

        move_uploaded_file($filetmp, $filepath);

        $user_check = "SELECT * FROM employees WHERE username = '$username' AND idcard = '$idcard' LIMIT 1";
        $result = mysqli_query($connect, $user_check);
        $user = mysqli_fetch_assoc($result);

        if($user['username'] == $username){
            echo"<script>alert('Username already exists');</script>";
        }
        else if($user['idcard'] == $idcard){
            echo"<script>alert('ID card already exists');</script>";
        }
        else{

            $query = "INSERT INTO employees (username, password, idcard, firstname, lastname, address, tel, email, userlevel, pic)
                        VALUE ('$username', '$password', '$idcard', '$firstname', '$lastname', '$address', '$tel', '$email', 'e', '$filename')";
            $result = mysqli_query($connect, $query);

            if($result){
                $_SESSION['success'] = "Add employee successfully";
                header("Location: login.php");
            }
            else{
                $_SESSION['error'] = "Something went wrong";
                header("Location: login.php");
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add admin</title>
    <?php include("component/head_script.php"); ?>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
    
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" required>
            </div>
            <div class="form-group">
                <label for="firstname">First name</label>
                <input type="text" name="firstname" required>
            </div>
            <div class="form-group">
                <label for="lastname">Last name</label>
                <input type="text" name="lastname" required>
            </div>
            <div class="form-group">
                <label for="idcard">ID card</label>
                <input type="text" name="idcard" required>
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" name="address">
            </div>
            <div class="form-group">
                <label for="tel">tel</label>
                <input type="text" name="tel">
            </div>
            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="email" name="email">
            </div>
            <div class="form-group">
                <label for="filepic">Profile pic</label>
                <input type="file" class="form-control-file" name="filepic" >
            </div>
            <button type="submit" name="submit" class="btn btn-secondary btn-lg btn-block">ADD</button>
            <a href="login.php"> <button type="button" class="btn btn-secondary btn-lg btn-block my-2" >back</button> </a>
        </form>
    </div>
    </body>
</html>