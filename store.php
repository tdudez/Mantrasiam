<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
<?php
include"component/head_script.php"
?>
      
</head>
<body>
    
    <div class="container">

        <div class="col-12 pt-5">
            <div class="row">
                <div class="card" style="width:100%">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-3">
                                <h3>ข้อมูลสินค้า</h3>
                            </div>
                            <div class="col-7 text-right">
                                <a href="menu.php">
                                    <button type="button" class="btn btn-primary">เมนู</button>
                                </a>
                            </div>
                            <div class="col-2 text-right">
                                <a class="btn btn-success" href="storeDetail.php">
                                    <i class="fas fa-plus"> เพิ่มข้อมูล</i></a>
                            </div>
                        </div>

                        <br>

                        <div class="row">
                            <div class="col-12">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>รหัสสินค้า</th>
                                            <th>รูป</th>
                                            <th>ชื่อสินค้า</th>
                                            <th>ราคาขาย</th>
                                            <th>จำนวน</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                            include("action/server.php");
                                            
                                            $query = "SELECT * FROM products WHERE sta = 1 ORDER BY id ASC " ;
                                            
                                            
                                            if ($result = mysqli_query($connect, $query)) {
                                                while ($row = mysqli_fetch_array($result)) {
                                        ?>
                                        <tr>
                                            <td><?=$row['id']?></td>
                                            <td><img class="rounded-circle " src="productpic/<?=$row['pic']?>" width="90" height="90"></td>
                                            <td><?=$row['name']?></td>
                                            <td><?=$row['price']?></td>
                                            <td><?=$row['amount']?></td>
                                        
                                            <td>
                                                <a class="btn btn-warning" href="editproduct.php?id=<?=$row['id']?>"><i class="far fa-edit"></i></a>
                                                <a class="btn btn-danger" href="proddel.php?id=<?=$row['id']?>" role="button">ลบ</a>
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