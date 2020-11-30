<?php
    require_once "action/server.php";

    if(isset($_POST['submit'])){
        $facid = $_POST['element_4'];
        $date = $_POST['element_2_1'] . "/" . $_POST['element_2_2'] . "/" . $_POST['element_2_3'];
        
        $query = "INSERT INTO creates (fac_id, date) VALUE ('$facid', '$date')";
        $result = mysqli_query($connect, $query);

        if($result){
            $last_id = $connect->insert_id;
            $_SESSION['success'] = "successfully";
            header("Location: createitem.php?id=$last_id");
        }
        else{
            $_SESSION['error'] = "Something went wrong";
            header("Location: menu.php");
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


        <form id="form_7683" class="appnitro" method="post" action="create.php">
            <div class="row">
                <div class="col-6">
                    <h4>การสั่งผลิต</h4>
                </div>
                <div class="col-6 text-right">
                    <a href="menu.php">
                        <button type="button" class="btn btn-primary">Menu</button>
                    </a>
                </div>
            </div>

            <ul>

                <li id="li_4">
                    <label class="description" for="element_4">ชื่อโรงงานสั่งผลิต </label>
                    <div>
            
                        <select class="element select small" id="element_4" name="element_4">
                            <option value="" selected="selected">เลือกโรงงาน</option>
                            <?php 
                                $query = "SELECT * FROM factories ";
                                
                                if ($result = mysqli_query($connect, $query)) {
                                    while ($row = mysqli_fetch_array($result)) {
                            ?>
                                <option value="<?=$row['id']?>" ><?=$row['fname']?></option>
                            <?php
                                    }
                                }
                            ?>
                        </select>
                    </div>
                </li>
             
                <li id="li_2">
                    <label class="description" for="element_2">วันที่สั่งผลิต </label>
                    <span>
                        <input id="element_2_1" name="element_2_1" class="element text" size="2" maxlength="2" value=""
                            type="text"> /
                        <label for="element_2_1">MM</label>
                    </span>
                    <span>
                        <input id="element_2_2" name="element_2_2" class="element text" size="2" maxlength="2" value=""
                            type="text"> /
                        <label for="element_2_2">DD</label>
                    </span>
                    <span>
                        <input id="element_2_3" name="element_2_3" class="element text" size="4" maxlength="4" value=""
                            type="text">
                        <label for="element_2_3">YYYY</label>
                    </span>

                    <span id="calendar_2">
                        <img id="cal_img_2" class="datepicker" src="calendar.gif" alt="Pick a date.">
                    </span>
                    <script type="text/javascript">
                    Calendar.setup({
                        inputField: "element_2_3",
                        baseField: "element_2",
                        displayArea: "calendar_2",
                        button: "cal_img_2",
                        ifFormat: "%B %e, %Y",
                        onSelect: selectDate
                    });
                    </script>

                </li>
                                
                <input id="saveForm" class="button_text" type="submit" name="submit" value="Submit" />
                
            </div>
            
        </div>
        </div>
    </div>
    <img id="bottom" src="bottom.png" alt="">
    
</body>

</html>