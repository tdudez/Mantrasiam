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
                            <div class="col-6 text-right">
                                <a href="menu.php">
                                    <button type="button" class="btn btn-primary">Menu</button>
                                </a>
                            </div>
                        </div>
                            
                            <br>
                            
                            <div class="row">
                                <div class="col-12">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>รหัสประจำตัว</th>
                                                <th>รูป</th>
                                                <th>ชื่อ</th>
                                                <th>นามสกุล</th>
                                                <th>ที่อยู่</th>
                                                <?php if($_SESSION['userlevel']=='m'){ ?>
                                                    <th>Edit</th>
                                                <?php } ?>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                                        <?php 
                                            include("action/server.php");
                                            
                                            $query = "SELECT * FROM employees ORDER BY id ASC " ;
                                            
                                            
                                            if ($result = mysqli_query($connect, $query)) {
                                                while ($row = mysqli_fetch_array($result)) {
                                        ?>
                                        <tr>
                                            <td>
                                                <?=$row['id']?>
                                            </td>
                                            <td>
                                                <img class="rounded-circle " src="profilepic/<?=$row['pic']?>" width="90" height="90">
                                            </td>
                                            <td>
                                                <?=$row['firstname']?>
                                            </td>
                                            <td>
                                                <?=$row['lastname']?>
                                            </td>
                                            <td>
                                                <?=$row['address']?>
                                            </td>
                                            <?php if($_SESSION['userlevel']=='m'){ ?>
                                            <td>
                                                <!-- <a class="btn btn-warning" href="edittype.php?id=<//?=$row['id']?>">
                                                    <i class="far fa-edit"></i></a>

                                                </button> -->
                                                
                                                <a class="btn btn-warning" href="profileEmp.php?id=<?=$row['id']?>" role="button">Edit</a>
                                                <!-- <button class="btn btn-primary" type="submit">Button</button>
                                                <input class="btn btn-primary" type="button" value="Input"> -->
                                               
                                            </td>
                                            <?php } ?>
                                        </tr>

                                        <?php     
                                                }
                                            } 
                                        ?>

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
<?php } ?>