<?php
    include("action/server.php");
    
    $creid = $_GET['id'];
    
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Import Product</title>
    <?php
        include("component/head_script.php");
    ?>
</head>
<body>
    <div class="container">
        <div class="col-12 pt-5">
            <div class="row">
                <div class="col-12">
                    <div class="col-12 text-right">
                    </div>
                    <br><br>
                    <div class="text-center">
                        <strong><h3>ข้อมูล</h3></strong>
                    </div>
                    <br>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">รหัสสินค้า</th>
                                <th scope="col">ชื่อสินค้า</th>
                                <th scope="col">จำนวน</th>
                                <th scope="col">ยืนยันการนำเข้า</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $query = "SELECT D.idc, D.camount, p.id, P.name
                                        FROM createdetail D
                                        INNER JOIN products P ON D.prod_id = P.id
                                        WHERE D.cre_id = $creid AND D.sta = 1
                                        ";
                                
                                if ($result = mysqli_query($connect, $query)) {
                                    while ($row = mysqli_fetch_array($result)) {
                            ?>
                            <tr>
                                <td><?=$row['id']?></td>
                                <td><?=$row['name']?></td>
                                <td><?=$row['camount']?></td>
                                <td>
                                    <a class="btn btn-primary" href="conimport.php?id=<?=$row['idc']?>&creid=<?=$creid?>">ยืนยัน</a>
                                </td>
                            </tr>
                            <?php
                                    }
                                }
                            ?>
                        </tbody>
                    </table>
                    <div class="text-left">
                        <a href="bhome.php?id=<?=$creid?>">
                            <button type="button" class="btn btn-success">Done</button>
                        </a>
                    </div>
                </>
            </div>
        </div>
    </div>
</body>
</html>