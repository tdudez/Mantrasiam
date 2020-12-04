<?php
    include("action/server.php");

    if(isset($_POST['submit'])){
        $creid = $_POST['creid'];
    }
    else{
        $creid = 0;
    }


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
                        <a href="menu.php">
                            <button type="button" class="btn btn-primary">เมนู</button>
                        </a>
                    </div>
                    <div class="card mt-2">
                        <div class="card-header text-center">
                                <strong> เลือกรหัสสั่งผลิต </strong> 
                        </div>
                        <div class="card-body">
                            <form action="import.php" method="post">
                                <div class="input-group">
                                    <select class="custom-select" id="creid" name="creid" aria-label="Example select with button addon">
                                        <option value="0" selected>เลือกรหัสสั่งผลิต</option>
                                        <?php 
                                            $query = "SELECT * FROM creates WHERE stat = 0";
                                            
                                            if ($result = mysqli_query($connect, $query)) {
                                                while ($row = mysqli_fetch_array($result)) {
                                        ?>
                                            <option value="<?=$row['id']?>" ><?=$row['id']?></option>
                                        <?php
                                                }
                                            }
                                        ?>
                                    </select>
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-secondary" type="submit" name="submit">ดูรายการ</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <br><br>
                    <div class="text-center">
                        <strong><h3>ข้อมูล</h3></strong>
                    </div>
                    <br>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">รหัสสินค้า</th>
                                <th scope="col">ชื่อสินค้า</th>
                                <th scope="col">จำนวน</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $query = "SELECT D.camount, P.id, P.name
                                FROM createdetail D 
                                INNER JOIN products P ON D.prod_id = P.id
                                WHERE D.cre_id = $creid
                                ";
                                
                                if ($result = mysqli_query($connect, $query)) {
                                    while ($row = mysqli_fetch_array($result)) {
                            ?>
                            <tr>
                                <th scope="row"><?=$row['id']?></th>
                                <td><?=$row['name']?></td>
                                <td><?=$row['camount']?></td>
                            </tr>
                            <?php
                                    }
                                }
                            ?>
                        </tbody>
                    </table>
                    <div class="text-center">
                        <a href="importdb.php?id=<?=$creid?>">
                            <button type="button" class="btn btn-primary">นำเข้า</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>