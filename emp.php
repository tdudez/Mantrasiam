<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Emplyees</title>
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
                            <div class="col-6">
                                <h3>ข้อมูลประธานและตัวแทน</h3>
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
                                            <th>นามสกุล</th>
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
                                                
                                                <a class="btn btn-warning" href="profileEmp.php" role="button">Edit</a>
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