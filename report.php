<?php
    include("action/server.php");
    $rtype = '1';
    if(isset($_POST['submit'])){
        $rtype = $_POST['type'];
        
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<body>
    <div id="fullscreen_bg" class="fullscreen_bg">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-md-offset-2">
                    <div class="panel panel-default">
                        <div class="panel panel-primary">
                                <div class="col text-right">
                                    <a href="menu.php">
                                        <button type="button" class="btn btn-primary">Menu</button>
                                    </a>
                                </div>
                                <div class="text-center">
                                    <h3 style="color:#2C3E50" >Financial Reports</h3>
                                </div>
                            <div class="text-center">
                                <form action="report.php" method="post">
                                    <h4><label for="Choose Report"  style="color:#E74C3C">Choose Report</label></h4>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-tasks"></span>
                                        </span>
                                        <select class="form-control" id="type" name="type">
                                            <option value="1" selected>ลูกค้า</option>
                                            <option value="2">พนักงาน</option>
                                            <option value="3">สั่งผลิต</option>
                                        </select>
                                    </div>                        
                                    </br>
                                    <button type="submit" class="btn btn-primary btn-lg btn3d" name="submit"><span class="glyphicon glyphicon-search"></span> View</button> 
                                </form>
                            </div>
                            <?php 
                                if($rtype=='1'){
                            ?>
                                <div class="panel-body">    
                                    <table class="table table-striped table-condensed">
                                        <thead>
                                            <tr>
                                                <th class="text-center" width="115px">Customer ID</th>
                                                <th class="text-center" width="115px">Customer Name</th>
                                                <th class="text-center" width="115px">Total Money</th>
                                                <th class="text-center" width="115px">Date</th>
                                            </tr>
                                        </thead>
                                        <?php
                                            $query = "SELECT D.amount, C.id, C.name, P.price, O.orderdate
                                            FROM orderdetail D
                                            INNER JOIN orders O ON D.ord_id = O.id
                                            INNER JOIN customers C ON O.cus_id = C.id
                                            INNER JOIN products P ON D.prod_id = P.id";
                            
                                            if ($result = mysqli_query($connect, $query)) {
                                                while ($row = mysqli_fetch_array($result)) {
                                        ?>   
                                        <tbody>
                                            <tr>
                                                <td class="text-center" width="150px"><?=$row['id']?></td>
                                                <td class="text-center" width="150px"><?=$row['name']?></td>
                                                <td class="text-center" width="150px"><?=$row['amount']*$row['price']?></span></td>
                                                <td class="text-center" width="150px"><?=$row['orderdate']?></span></td>
                                            </tr>
                                        </tbody>
                                        <?php
                                                }
                                            }
                                        ?>
                                    </table>
                                </div>
                            <?php
                                }
                            
                                elseif($rtype=='2'){
                            ?>
                            <div class="panel-body">    
                                    <table class="table table-striped table-condensed">
                                        <thead>
                                            <tr>
                                                <th class="text-center" width="115px">Employee Name</th>
                                                <th class="text-center" width="115px">Product Name</th>
                                                <th class="text-center" width="115px">Amount</th>
                                                <th class="text-center" width="115px">Date</th>
                                            </tr>
                                        </thead>   
                                        <?php
                                            $query = "SELECT D.amount, T.takedate, E.firstname, P.name
                                            FROM takedetail D
                                            INNER JOIN takes T ON D.take_id = T.id
                                            INNER JOIN employees E ON T.emp_id = E.id
                                            INNER JOIN products P ON D.prod_id = P.id";
                            
                                            if ($result = mysqli_query($connect, $query)) {
                                                while ($row = mysqli_fetch_array($result)) {
                                        ?>   
                                        <tbody>
                                            <tr>
                                                <td class="text-center" width="150px"><?=$row['firstname']?></td>
                                                <td class="text-center" width="150px"><?=$row['name']?></td>
                                                <td class="text-center" width="150px"><?=$row['amount']?></span></td>
                                                <td class="text-center" width="150px"><?=$row['takedate']?></span></td>
                                            </tr>
                                        </tbody>
                                        <?php
                                                }
                                            }
                                        ?>
                                    </table>
                                </div>
                                
                            <?php
                                }
                            
                                elseif($rtype=='3'){
                            ?>
                            <div class="panel-body">    
                                    <table class="table table-striped table-condensed">
                                        <thead>
                                            <tr>
                                                <th class="text-center" width="115px">Product Name</th>
                                                <th class="text-center" width="115px">Amount</th>
                                                <th class="text-center" width="115px">Factory Name</th>
                                                <th class="text-center" width="115px">Date</th>
                                            </tr>
                                        </thead>   
                                        <?php
                                            $query = "SELECT D.amount, C.date, F.fname, P.name
                                            FROM createdetail D
                                            INNER JOIN creates C ON D.cre_id = C.id
                                            INNER JOIN factories F ON C.fac_id = F.id
                                            INNER JOIN products P ON D.prod_id = P.id";
                            
                                            if ($result = mysqli_query($connect, $query)) {
                                                while ($row = mysqli_fetch_array($result)) {
                                        ?>   
                                        <tbody>
                                            <tr>
                                                <td class="text-center" width="150px"><?=$row['name']?></td>
                                                <td class="text-center" width="150px"><?=$row['amount'] ?></span></td>
                                                <td class="text-center" width="150px"><?=$row['fname']?></td>
                                                <td class="text-center" width="150px"><?=$row['date']?></span></td>
                                            </tr>
                                        </tbody>
                                        <?php
                                                }
                                            }
                                        ?>
                                    </table>
                                </div>
                            <?php
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
       