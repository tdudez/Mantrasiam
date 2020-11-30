<?php
    session_start();

    require_once "action/server.php";

    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $tel = $_POST['tel'];
        $email = $_POST['email'];
        $address = $_POST['address'];

        $query = "INSERT INTO customers (name, tel, email, address) VALUE ('$name', '$tel', '$email', '$address')";
        $result = mysqli_query($connect, $query);

        if($result){
            $_SESSION['success'] = "Add customer successfully";
            header("Location: customer.php");
        }
        else{
            $_SESSION['error'] = "Something went wrong";
            header("Location: customer.php");
        }
        
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Employee</title>
    <?php include "component/head_script.php";?>
    <!-- <link rel="stylesheet" href=""> -->
</head>
<body>
<div class="container rounded bg-white mt-5">
    <div class="row">
        <div class="col-md-4 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                <img class="rounded-circle mt-5" src="img/1.jpg" width="90">
            </div>
        </div>
        <div class="col-md-8">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <div class="d-flex flex-row align-items-center back"><i class="fa fa-long-arrow-left mr-1 mb-1"></i>
                        <a href="customer.php">
                            <h6>Back</h6>
                        </a>
                    </div>
                    <h6 class="text-right">เพิ่ม</h6>
                </div>
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                    <div class="row mt-2">
                        <div class="col-md-12">
                            <input type="text" class="form-control" placeholder="ชื่อ" name="name">
                        </div>
                        
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6">
                            <input type="text" class="form-control" placeholder="Email" name="email">
                        </div>

                        <div class="col-md-6">
                            <input type="text" class="form-control" placeholder="Phone number" name="tel">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12">
                            <input type="text" class="form-control" placeholder="ที่อยู่" name="address">
                        </div>
                    </div>
                    <div class="mt-4 text-right">
                        <button class="btn btn-primary profile-button" type="submit" name="submit">Add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>