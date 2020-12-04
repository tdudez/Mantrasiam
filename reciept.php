<?php
    include("action/server.php");
    $ordid = $_GET['id'];
    $query = "SELECT O.orderdate, C.address ,C.cname, C.tel
    FROM orders O
    INNER JOIN customers C ON O.cus_id = C.id
    WHERE O.id = $ordid";
    $result = mysqli_query($connect, $query);
    $row = mysqli_fetch_array($result);
    $orderdate = $row['orderdate'];
    $cusaddress = $row['address'];
    $cusname = $row['cname'];
    $custel = $row['tel'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <style>
        body {
            margin-top: 20px;
        }
    </style>
</head>
<body>
<div id="printableArea">
    <div class="container">
        <div class="row">
            <div class="well col-xs-10 col-sm-10 col-md-6 col-xs-offset-1 col-sm-offset-1 col-md-offset-3">
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <address>
                            <strong>
                                <?=$cusname ?>
                            </strong>
                            <br>
                            <?=$cusaddress?>
                            <br>
                            <?=$custel?>
                        </address>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 text-right">
                        <p>
                            <em><?=$orderdate?></em>
                        </p>
                        
                    </div>
                </div>
                <div class="row">
                    <div class="text-center">
                        <h1>Receipt</h1>
                    </div>
                    </span>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Product</th>
                                <th>#</th>
                                <th class="text-center">Price</th>
                                <th class="text-center">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $query = "SELECT D.amount, C.id, C.cname, P.price, P.name, O.orderdate
                                FROM orderdetail D
                                INNER JOIN orders O ON D.ord_id = O.id
                                INNER JOIN customers C ON O.cus_id = C.id
                                INNER JOIN products P ON D.prod_id = P.id
                                WHERE D.ord_id = $ordid";
                                $total=0;
                                if ($result = mysqli_query($connect, $query)) {
                                    while ($row = mysqli_fetch_array($result)) {
                            ?>
                            <tr>
                                <td class="col-md-9"><em><?=$row['name']?></em></h4></td>
                                <td class="col-md-1" style="text-align: center"><?=$row['amount']?></td>
                                <td class="col-md-1 text-center"><?=$row['price']?></td>
                                <td class="col-md-1 text-center"><?=$row['price'] * $row['amount']?></td>
                            </tr>
                            <?php
                                $total += $row['price'] * $row['amount'];
                                    }
                                }
                            ?>
                            <tr>
                                <td>   </td>
                                <td>   </td>
                                <td class="text-right"><h4><strong>Total: </strong></h4></td>
                                <td class="text-center text-danger"><h4><strong><?=$total?></strong></h4></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <div class="text-center">
        
            <button type="button" class="btn btn-success btn-lg" onclick="printDiv('printableArea')">
                Print   <span class="glyphicon glyphicon-chevron-right"></span>
            </button>
            <script>
                function printDiv(divName) {
                    var printContents = document.getElementById(divName).innerHTML;
                    var originalContents = document.body.innerHTML;
                    
                    document.body.innerHTML = printContents;
                    
                    window.print();
                    
                    document.body.innerHTML = originalContents;
                }
            </script>
            <a href="menu.php">
                <button class="btn btn-secondary btn-lg">menu</button>
            </a>
        </div>
    </div>
</div>

</body>
</html>
