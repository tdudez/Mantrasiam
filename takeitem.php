<?php
    include("action/server.php");
    $takid = $_GET['id'];
    if(isset($_POST['submit'])){
        
        $prodid = $_POST['element_4'];
        $amount = $_POST['amount'];

        $query = "INSERT INTO takedetail (take_id, prod_id, amount) VALUE ('$takid', '$prodid', '$amount')";
        $result = mysqli_query($connect, $query);
        if($result){
            $_SESSION['success'] = "successfully";
            header("Location: takeitem.php?id=$takid");
        }
        else{
            $_SESSION['error'] = "Something went wrong";
            header("Location: takeitem.php?id=$takid");
        }
        
    }

?>

<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>OrderEmp</title>
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


        <form id="form_7683" class="appnitro" method="post" action="">
            <div class="form_description">
                <h2>เลือกวัตถุมงคล</h2>

            </div>
            <ul>
                <li id="li_4">
                    <label class="description" for="element_4">ชื่อวัตถุมงคล </label>
                    <div>
                        <select class="element select small" id="element_4" name="element_4">
                            <option value="" selected="selected">เลือกวัตถุมงคล</option>
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
                <li id="li_3">
                    <label class="description" for="amount">จำนวน </label>
                    <div>
                        <input id="amount" name="amount"  type="number"  />
                    </div>
                
                </li>
                

               


                <li class="buttons">
                    <input id="saveForm" class="button_text" type="submit" name="submit" value="Submit" />
                </li>
            </ul>
        </form>
        <div id="footer">
            <div class="row">
                <div class="col-12">
                    
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                
                                <th>รหัสวัตถุมงคล</th>
                                <th>ชื่อวัตถุมงคล</th>
                                <th>จำนวน</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                            
                                $query = "SELECT T.amount, P.id, P.name FROM takedetail T INNER JOIN products P ON T.prod_id = P.id " ;
                                
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
                                    <?=$row['amount']?>
                                </td>
                            </tr>
                        
                        <?php
                                }
                            }    
                        ?>
                        
                    </tbody>
                    
                </table>
                <a href="menu.php">
                    <input class="button_text" type="button" name="confirm" value="Confirm" />
                </a>
            </div>
            
        </div>
    </div>
</div>
<img id="bottom" src="bottom.png" alt="">

</body>

</html>