<?php 
    include("action/server.php");
    $userid = $_GET['id'];
    $query = "SELECT * FROM employees WHERE id ='$userid' " ;
    
    $result = mysqli_query($connect, $query);
    $row = mysqli_fetch_array($result);

    $filename = $row['pic'];

    if(isset($_POST['submit'])){
        
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $address = $_POST['address'];
        $tel = $_POST['tel'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $filetmp = $_FILES['filepic']['tmp_name'];
        $filename = $_FILES['filepic']['name'];
        if($filename==null){
            $filename = $row['pic'];
        }
        $filepath = "profilepic/" . $filename;

        move_uploaded_file($filetmp, $filepath);

        $query = "UPDATE employees 
                SET firstname = '$firstname', lastname = '$lastname', address = '$address', tel = '$tel', email = '$email', pic = '$filename', password = '$password'
                WHERE id = '$userid'";
        $result = mysqli_query($connect, $query);
        
        if($result){
            $_SESSION['success'] = "Edit employee profile successfully";
            header("Location: editprofile.php?id=$userid");
        }
        else{
            $_SESSION['error'] = "Something went wrong";
            header("Location: editprofile.php?id=$userid");
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit your Profile</title>
    <?php include "component/head_script.php";?>
    <!-- <link rel="stylesheet" href=""> -->
</head>
<body>
<div class="container rounded bg-white mt-5">
    <div class="row">
        <div class="col-md-4 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                <img class="rounded-circle mt-5" src="profilepic/<?=$filename?>" width="90" height="90">
            </div>
        </div>
        <div class="col-md-8">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <div class="d-flex flex-row align-items-center back"><i class="fa fa-long-arrow-left mr-1 mb-1"></i>
                        <a href="menu.php">
                            <h6>กลับ</h6>
                        </a>
                    </div>
                    <h6 class="text-right">แก้ไขข้อมูลส่วนตัว</h6>
                </div>
                <form action="editprofile.php?id=<?=$userid?>" method="post" enctype="multipart/form-data">
                    <div class="row mt-2">
                        <div class="col-md-3"><label for="password">เปลี่ยนรหัสผ่าน</label></div>
                        <div class="col-md-3"><input type="password" class="form-control" placeholder="password"value="<?=$row['password']?>" name="password"></div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6"><input type="text" class="form-control" placeholder="ชื่อ" value="<?=$row['firstname']?>" name="firstname"></div>
                        <div class="col-md-6"><input type="text" class="form-control" placeholder="นามสกุล"value="<?=$row['lastname']?>" name="lastname"></div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6"><input type="text" class="form-control" placeholder="Email" value="<?=$row['email']?>" name="email"></div>
                        <div class="col-md-6"><input type="text" class="form-control" placeholder="Phone number" value="<?=$row['tel']?>" name="tel"></div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12"><input type="text" class="form-control" placeholder="ที่อยู่" value="<?=$row['address']?>" name="address"></div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6">
                            <label for="filepic">Profile pic</label>
                            <input type="file" class="form-control-file" name="filepic" value="<?=$filename?>">
                        </div>
                    </div>
                    <div class="mt-4 text-right">
                        <button class="btn btn-primary profile-button" type="submit" name="submit">บันทึก</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>