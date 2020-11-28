<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php
    include "component\head_script.php"
    ?>
    <style>
    .list-group-item{
        margin : auto;
        width: 300px;
        border-radius: 10px;
         
    }

    </style>

</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card text-center">
                    <div class="card-header">
                        <h1>มันตระสยาม</h1>
                    </div>

                    <div class="card-body">
                        <h3 class="card-title">Menu</h3>
                        <br>
                        <a href="Emp.php"
                            class="list-group-item list-group-item-action list-group-item-success">ข้อมูลตัวแทน</a><br>
                        <a href="customer.php"
                        class="list-group-item list-group-item-action list-group-item-success">ลูกค้า</a><br>
                        <a href="Orderitem.php"
                            class="list-group-item list-group-item-action list-group-item-success">การสั่งผลิต</a><br>
                        <a href="store.php"
                            class="list-group-item list-group-item-action list-group-item-success">คลังวัตุมงคล</a><br>
                        <a href="report.php" class="list-group-item list-group-item-action list-group-item-success">รายงาน</a><br>
                        <a href="action/logout.php" class="list-group-item list-group-item-action list-group-item-danger">Logout</a>
                        <br>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>



    </div>
    </div>
    </div>
    </div>
</body>

</html>