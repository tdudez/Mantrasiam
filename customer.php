<?php
    session_start();

    if (!$_SESSION['userid']) {
        $_SESSION['msg'] = "Please log in first";
        header('location: login.php');
    }
    else{

    
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customers</title>
    <?php
include "component/head_script.php"
?>

</head>

<body>

    <div class="container">

        <div class="col-12 pt-5">
            <div class="row">
                <div class="card" style="width:100%">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <h3>รายชื่อลูกค้า</h3>
                            </div>
                            <div class="col-4 text-right">
                                <a href="menu.php">
                                    <button type="button" class="btn btn-primary">Menu</button>
                                </a>
                            </div>
                            <div class="col-2 text-right">
                                <a class="btn btn-success" href="cusadd.php">
                                    <i class="fas fa-plus"> เพิ่มข้อมูล </i></a>
                            </div>
                        </div>

                        <br>

                        <div class="row">
                            <div class="col-12">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>รหัสประจำตัว</th>
                                            <th>ชื่อ</th>
                                            <th>เบอร์โทร</th>
                                            <th>ที่อยู่</th>
                                            <th>Edit</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php 
                                            include("action/server.php");
                                            
                                            $query = "SELECT * FROM customers WHERE sta = 1 ORDER BY id ASC " ;
                                            
                                            
                                            if ($result = mysqli_query($connect, $query)) {
                                                while ($row = mysqli_fetch_array($result)) {
                                        ?>
                                        <tr>
                                            <td>
                                                <?=$row['id']?>
                                            </td>
                                            <td>
                                                <?=$row['cname']?>
                                            </td>
                                            <td>
                                                <?=$row['tel']?>
                                            </td>
                                            <td>
                                                <?=$row['address']?>
                                            </td>
                                            <td>
                                                <a class="btn btn-warning" href="cusEdit.php?id=<?=$row['id']?>" role="button">Edit</a>
                                                <a class="btn btn-danger" href="cusdel.php?id=<?=$row['id']?>" role="button">delete</a>
                                            </td>
                                        </tr>
                                        <?php
                                                }
                                            }
                                        ?>


                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>

</html>
<?php } ?>