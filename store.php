<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Store</title>
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
                            <div class="col-9 text-right">
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
                                            <th>รูป</th>
                                            <th>รหัสสินค้า</th>
                                            <th>ชื่อสินค้า</th>
                                            <th>ราคาขาย</th>
                                            <th>จำนวน</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>

                         <!-- แท็ก php เชื่อม DB ตรงนี้ -->
                                        <!-- <tr>
                                            <td><?=$row['id']?></td>
                                            <td><?=$row['name']?></td>
                                        
                                            <td>
                                                <a class="btn btn-warning" href="edittype.php?id=<?=$row['id']?>">
                                                    <i class="far fa-edit"></i></a>
                                                <button type="button" class="btn btn-danger"
                                                    onclick="comfirmDelete(<?=$row['id']?>)">
                                                    <i class="far fa-trash-alt"></i>
                                                </button>
                                            </td>
                                        </tr>

                                 -->

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