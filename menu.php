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
    <title>Menu</title>

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
                        <a href="emp.php"
                            class="list-group-item list-group-item-action list-group-item-success">ข้อมูลตัวแทน</a><br>
                        <a href="customer.php"
                        class="list-group-item list-group-item-action list-group-item-success">ลูกค้า</a><br>
                        <?php if($_SESSION['userlevel']=='m'){ ?>
                            <a href="create.php" class="list-group-item list-group-item-action list-group-item-success">การสั่งผลิต</a>
                            <br>
                            <a href="store.php" class="list-group-item list-group-item-action list-group-item-success">คลังวัตุมงคล</a>
                            <br>
                            <a href="report.php" class="list-group-item list-group-item-action list-group-item-success">รายงาน</a>
                            <br>
                        <?php } 
                        else{?>
                            <a href="order.php" class="list-group-item list-group-item-action list-group-item-success">การสั่งซื้อสินค้า</a>
                            <br>
                            <a href="take.php" class="list-group-item list-group-item-action list-group-item-success">การเบิกของตัวแทน</a>
                            <br>
                            <a href="store.php" class="list-group-item list-group-item-action list-group-item-success">คลังวัตุมงคล</a>
                            <br>
                        <?php } ?>
                        <a href="logout.php" class="list-group-item list-group-item-action list-group-item-danger">Logout</a>
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
<?php } ?>