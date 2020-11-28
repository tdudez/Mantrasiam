<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Emplyees</title>
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
                            <div class="col-6 text-right">
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
                                            <th>รูป</th>
                                            <th>รหัสประจำตัว</th>
                                            <th>ชื่อ</th>
                                            <th>เบอร์โทร</th>
                                            <th>ที่อยู่</th>
                                            <th>Edit</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <!-- แท็ก php เชื่อม DB ตรงนี้ -->


                                        <!-- ตัวอย่าง เชื่อม Base -->
                                        <tr>
                                            <td>
                                                <?//=$row['id']?>
                                            </td>
                                            <td>
                                                <?//=$row['name']?>
                                            </td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                           

                                            <td>
                                                <!-- <a class="btn btn-warning" href="edittype.php?id=<//?=$row['id']?>">
                                                    <i class="far fa-edit"></i></a>

                                                </button> -->
                                                
                                                <a class="btn btn-warning" href="cusEdit.php" role="button">Edit</a>
                                                <!-- <button class="btn btn-primary" type="submit">Button</button>
                                                <input class="btn btn-primary" type="button" value="Input"> -->
                                               
                                            </td>
                                        </tr>



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