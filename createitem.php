<?php
    include("action/server.php");
    $creid = $_GET['id'];
    if(isset($_POST['submit'])){
        
        $prodid = $_POST['element_3'];
        $amount = $_POST['amount'];

        $query = "INSERT INTO createdetail (cre_id, prod_id, camount) VALUE ('$creid', '$prodid', '$amount')";
        $result = mysqli_query($connect, $query);
        if($result){
            $_SESSION['success'] = "Add customer successfully";
            header("Location: createitem.php?id=$creid");
        }
        else{
            $_SESSION['error'] = "Something went wrong";
            header("Location: createitem.php?id=$creid");
        }
        
    }

?>

<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Order</title>
    <link rel="stylesheet" type="text/css" href="view.css" media="all">
    <script type="text/javascript" src="view.js"></script>
    <script type="text/javascript" src="calendar.js"></script>
    <?php
        include("component/head_script.php");
    ?>

</head>

<body id="main_body">

    <img id="top" src="top.png" alt="">
    <div id="form_container">


        <form id="form_7683" class="appnitro" method="post" action="createitem.php?id=<?=$creid?>">
            <div class="form_description">
                <h2>การสั่งผลิต</h2>

            </div>
            <ul>

                <li id="li_3">
                    <label class="description" for="element_3">ชื่อสินค้า </label>
                    <div>
                        <select class="element select small" id="element_3" name="element_3">
                            <option value="" selected="selected">เลือกสินค้า</option>
                            <?php 
                                $query = "SELECT * FROM products ";
                                
                                if ($result = mysqli_query($connect, $query)) {
                                    while ($row = mysqli_fetch_array($result)) {
                            ?>
                                <option value="<?=$row['id']?>" ><?=$row['name']?></option>
                            <?php
                                    }
                                }
                            ?>
                        </select>
                    </div>
                </li>
                
                

                <li>
                    <label for="amount">จำนวนสินค้า</label>
                    <input type="number" name="amount"></input>
                </li>
                <li>
                    <button type = "submit" name="submit">เพิ่ม</button>
                </li>
            </ul>
        </form>

        <div id="footer">
            <div class="row">
                <div class="col-12">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                
                                <th>รหัสสินค้า</th>
                                <th>ชื่อสินค้า</th>
                                <th>จำนวน</th>
                                <th>ราคาต่อชิ้น</th>
                                <th>ราคารวม</th>
                                
                                
                            </tr>
                        </thead>
                        <tbody>
                            
                            <?php 
                                $query = "SELECT C.camount, P.id, P.name, P.price 
                                FROM createdetail C 
                                INNER JOIN products P ON C.prod_id = P.id 
                                WHERE cre_id = $creid 
                                ";
                                $total=0;
                                
                                if ($result = mysqli_query($connect, $query)) {
                                    while ($row = mysqli_fetch_array($result)) {
                            ?>
                            <tr>
                                <td>
                                    <?=$row['id']?>
                                </td>
                                <td>
                                    <?=$row['name']?>
                                </td>
                                <td>
                                    <?=$row['camount']?>
                                </td>
                                <td>
                                    <?=$row['price']?>
                                </td>
                                <td>
                                    <?=$row['camount']*$row['price']?>
                                </td>
                                
                            </tr>
                            <?php
                                $total += $row['camount']*$row['price'];
                                    }
                                }    
                            ?>
                        
                    </tbody>
                    <div class="col-12">
                        <tbody>
                            <tr>
                                <th>ยอดรวม</th>
                                <th><?=$total?></th>
                                
                            </tr>
                            
                        </tbody>
                    </div>
                    </table>
                    <a href="menu.php">
                        <input id="saveForm" class="button_text" type="submit" name="menu" value="ยืนยัน" />
                    </a>
                </div>
            </div>
        </div>
    </div>
    <img id="bottom" src="bottom.png" alt="">
    
</body>

</html>